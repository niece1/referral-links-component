<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display referrals listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('subscriptions.index');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->referral($request()->cookie('referral')));
        if ($referral = $request->referral($request()->cookie('referral'))) {
            $referral->complete();
        }

        return redirect()->route('home');
    }
}
