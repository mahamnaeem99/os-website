<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function contact()
    {
        $interests=Service::all();
        // $s=$interests->service;
        return view('contact',['services'=>$interests]);
    }
}
