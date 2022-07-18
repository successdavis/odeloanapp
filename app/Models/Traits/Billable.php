<?php

namespace App\Models\Traits;

use App\Models\Member;
use App\Models\Payment;

trait Billable
{
    public function payments ()
    {
        return $this->morphMany(Payment::class, 'billable');
    }

    public function addPayment($payment)
    {
        return $this->payments()->save(
            new Payment([
                'amount'    => $payment['amount'],
                'user_id'   =>  1,
                'payment_method'    => $payment['payment_method'],
                'transaction_ref'   => $payment['transaction_ref'],
            ])
        );
    }

    public function totolPayment() {
        return $this->payments()->sum('amount');
    }
}
