<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $data= $request->validate([
            'email'=>'required|email|unique:subscribers,email'
        ]) ;
        Subscriber::create($data);
        
        return back()->with('status','Subscribed Successfully');

    }

    public function store2(Request $request)
    {
        $data= $request->validate([
            'mail'=>'required|email|unique:subscribers,email'
        ]) ;
        Subscriber::create([
            'email'=>$request->mail,
        ]);
        
        return back()->with('status2','Subscribed Successfully');

    }
}
