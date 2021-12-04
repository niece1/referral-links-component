<?php

namespace App\Events;

use App\Models\Referral;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReferralCompleted
{
    use Dispatchable, SerializesModels;
    
    /**
     * A referral where occurs current event.
     *
     */
    public $referral;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Referral  $referral
     * @return void
     */
    public function __construct(Referral $referral)
    {
        $this->referral = $referral;
    }
}
