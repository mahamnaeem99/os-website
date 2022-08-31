<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunicationDetail;
use Illuminate\Support\Facades\Auth;

class CommunicationDetailController extends Controller
{
    public function add_comment(Request $request)
    {
        $userId=Auth::user()->id;
        $leadId=$request->lead_id;
        $details=$request->details;
        $addComment=CommunicationDetail::create(['lead_id'=>$leadId,'details'=>$details,'user_id'=>$userId]);
        $comments=CommunicationDetail::where('id',$addComment->id)->with('user')->first();
        return ($comments);

        // return ($addComment);
        // dd ($comments);
        // return view('lead_detail',['comments'=>$comments])
        // return 1;
        // dd($leadId);
    }
}
