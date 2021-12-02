<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReferralAcceptedMail;

class ReferralController extends Controller
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    /**
     * Display referrals listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $referrals = $request->user()->referrals()->orderBy('completed', 'asc')->get();
        return view('referrals.index', compact('referrals'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        Request $request
    ) {
        $referral = $request->user()->referrals()->create($request->only('email'));
        Mail::to($referral->email)->send(new ReferralAcceptedMail($request->user(), $referral));

        return back();
    }
}
