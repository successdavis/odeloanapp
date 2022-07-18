<?php

namespace App\Models;

use App\Models\Traits\Billable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    use Billable;


    private $repayment_cycle = [
            'Daily' => 30,
            'Weekly'    => 4,
            'Biweekly'  => 2,
            'Monthly'   => 1,
        ];

    /** @test */
    public function category()
    {
        return $this->belongsTo(Loancategory::class, 'loancategory_id');
    }

    public function owner()
    {
        return $this->belongsTo(Member::class,'member_id');
    }

    public function getRepaymentCycle()
    {
        ;
    }

    public function getInterest($withPeriod = false)
    {
        return $percentage = $this->loan_interest ?: $this->category->interest;
    }

    public function getDuration($withPeriod = false)
    {

        return $duration = $this->duration ?:  $this->category->duration;
    }

    public function totalDue()
    {
        $percentage = $this->loan_interest ?: $this->category->interest;
        $duration = $this->duration ?:  $this->category->duration;

        $totalInterest = ($percentage / 100) * $this->principal_amount * $duration;

        return $totalInterest + $this->principal_amount;
    }

    public function totalBalance()
    {
        return $this->totalDue() - $this->totolPayment();
    }
}
