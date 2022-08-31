<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Lead;
use App\Http\Requests;
use App\Models\Status;
use App\Models\Service;
use App\Models\CommunicationDetail;
use App\Models\LeadService;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    public function create_lead(Request $request)
    { 
      
      $this->validate($request,[
        'customer_name'=>'required|min:3',
        'email'=>'required|email',
        'phone_number'=>'required|numeric',
        'project_details'=>'sometimes',
        'contact_time'=>'sometimes',
        'interests'=>'sometimes|array'
      ]);
       $customer_name=$request->customer_name;
       $email=$request->email;
       $phone_number=$request->phone_number;
       $project_details=$request->project_details;
       $contact_time=$request->contact_time;
       $interests=$request->interests;
       
       $area_of_interests=Service::whereIn('id',$interests)->get();
      // dd($area_of_interests)
      try{
        $status=Status::where('slug','=','pending')->first();
        $leadCreate=Lead::create(['customer_name'=>$customer_name,'email'=>$email,'phone_number'=>$phone_number,'project_details'=>$project_details,'contact_time'=>$contact_time,'status_id'=>$status->id]);
        $leadServices = collect([]);
        foreach($interests as $interest){
          $leadServices->push(['lead_id'=>$leadCreate->id,'service_id'=>$interest]);
          
        }
        LeadService::insert($leadServices->toArray());

        $details = [
          'title' => 'Your temporary login credentials are',
          'customer_name'=>$customer_name,
          'email'=>$email,
          'phone_number'=>$phone_number,
          'area_of_interests'=>$area_of_interests,
          'project_details'=>$project_details
      ];
    //  dd($details);
      \Mail::to('maham@outcastsolutions.us')->send(new \App\Mail\MyTestMail($details));
      $interestServices=Service::all();

      return view('contact',['success'=>'Our representative will contact you soon !','services'=>$interestServices]);
      }
      catch(Exception $e){
        return view('contact',['success'=>'Request not sent yet','services'=>$interestServices]);
      }
      return back();
  }

  public function update_status($lead_id,$status_id)
  {
    $lead=Lead::where('id',$lead_id)->update(['status_id'=>$status_id]);
    $data=Lead::where('id',$lead_id)->with('status')->first();
    return($data);
  }

  public function detail_view ($lead_id)
  {
    $leads=Lead::where('id',$lead_id)->with('service')->with('status')->first();
    $comments=CommunicationDetail::where('lead_id',$lead_id)->with('user')->get();
    return view('layouts.lead_detail',['leads'=>$leads,'comments'=>$comments]);
  }
}
