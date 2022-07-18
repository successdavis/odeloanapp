<?php

namespace App\Models;

use App\Models\Traits\Billable;
use Carbon\Carbon;
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

    public function getInterest()
    {
        return $percentage = $this->loan_interest ?: $this->category->interest;
    }

    public function getDuration()
    {

        return $duration = $this->duration ?:  $this->category->duration;
    }

    public function getDurationPeriod()
    {
        return $duration = $this->duration_period ?:  $this->category->duration_period;
    }

    public function totalDue()
    {
        return $this->getInterestMaturity() + $this->principal_amount;
    }

    public function getInterestMaturity()
    {
        $percentage = $this->loan_interest ?: $this->category->interest;
        $duration = $this->duration ?:  $this->category->duration;

        $totalInterest = ($percentage / 100) * $this->principal_amount * $duration;;

        return $totalInterest;
    }

    public function totalBalance()
    {
        return $this->totalDue() - $this->totolPayment();
    }

    public function getMaturity()
    {
        $maturity = Carbon::parse($this->release_date)->add($this->getDuration(), $this->getDurationPeriod() );

        return Carbon::parse($this->maturity ?: $maturity)->toDayDateTimeString(); ;
    }

    public function guarantors()
    {
        return $this->hasMany(Guarantor::class);
    }
}
