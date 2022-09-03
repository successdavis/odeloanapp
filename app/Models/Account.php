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
    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
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
