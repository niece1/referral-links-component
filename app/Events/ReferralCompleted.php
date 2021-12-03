<?php

namespace App\Events;

use App\Models\Referral;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReferralCompleted
{
    use Dispatchable, SerializesModels;
    
    /**
     * A user .
     *
     */
    public $referral;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Referral $referral)
    {
        $this->referral = $referral;
    }
}
