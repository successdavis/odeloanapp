<?php

namespace App\Models;

use App\Models\Traits\Billable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
        use Billable;


    protected $guarded = [];
    protected $with = ['member'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function totalInterest()
    {
        $totalPayment = $this->payments()->sum('amount');
        if ($totalPayment >= 5000) {
            return ($this->interest / 100) * $totalPayment;
        }

        return 0;
    }
}
