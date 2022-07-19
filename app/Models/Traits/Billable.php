<?php

namespace App\Models\Traits;

use App\Models\Member;
use App\Models\Payment;

trait Billable
{
    public function payments ()
    {
        return $this->morphMany(Payment::class, 'billable')->latest();
    }

    public function addPayment($payment)
    {
        $bytes = random_bytes(8);

        return $this->payments()->save(
            new Payment([
                'amount'    => $payment['amount'],
                'user_id'   =>  $payment['user_id'],
                'payment_method'    => $payment['payment_method'],
                'payment_date'    => $payment['payment_date'],
                'transaction_ref'   => bin2hex($bytes),
            ])
        );
    }

    public function totolPayment() {
        return $this->payments()->sum('amount');
    }
}
