<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $leads=Lead::with('status')->get();
        $statuses=Status::all();
        return view('home',['leads'=>$leads],['statuses'=>$statuses]);
    }
}
