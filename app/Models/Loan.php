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

    protected $dates = [
        'release_date',
        'payment_date'
    ];

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
        return $this->belongsTo(User::class,'user_id');
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
        if($this->getRepaymentCycleStartDate() === null) {
            return null;
        }
        if ($this->loancategory_id === 1) {
//            $ne
            $maturity = self::nextMeeting();
        }else {
            $maturity = Carbon::parse($this->getRepaymentCycleStartDate())->add('Year', 1 );
        }

        return Carbon::parse($this->maturity ?: $maturity)->format('d/m/Y');
    }

//    return the date the loan will start to run, it defaults to the date the loan was released but return the payment date if set by admin
    public function getRepaymentCycleStartDate()
    {
        return $this->release_date ?: $this->payment_date;
    }

    public function getLongTermNextPayment()
    {
        if ($this->payments()->count() <= 4) {
            $balance = $this->totalDue() - $this->payments()->sum('amount');

            $accumulated_depreciation = $balance * ($this->category->interest / 100);

            return $accumulated_depreciation;
        }
        return 2000;
    }

    public function getNextPayment()
    {
        $balance = $this->totalDue() - $this->payments()->sum('amount');

        $accumulated_depreciation = $balance * ($this->category->interest / 100);

        return $accumulated_depreciation;
    }


    public function guarantors()
    {
        return $this->hasMany(Guarantor::class);
    }

    public function approveLoan()
    {
        $this->status = 1;
        $this->release_date = Carbon::now();
        $this->makeUpFrontPayment();

        return $this->save();
    }

    public function makeUpFrontPayment()
    {
        return $this->addPayment([
            'amount' => $this->getInterestMaturity(),
            'user_id' => 1,
            'payment_method' => 'Interest Deduction',
            'payment_date' => null,
            'transaction_ref' => uniqid(),
        ]);
    }

    public function rejectLoan()
    {
        $this->status = 3;
        return $this->save();
    }

    static public function shortTermInterestTotal()
    {
        $principal_amount = self::where('loancategory_id', 1)->whereIn('status', [1,2])->sum('principal_amount');

        $interest = Loancategory::first()->interest;

        return ($interest / 100 ) * $principal_amount;
    }

    static public function longTermInterestTotal()
    {
        $principal_amount = self::where('loancategory_id', 2)->whereIn('status', [1,2])->sum('principal_amount');

        $interest = Loancategory::first()->interest;

        return ($interest / 100 ) * $principal_amount;
    }

    static public function totalInterestFromAllLoan()
    {
        return self::shortTermInterestTotal() + self::longTermInterestTotal();
    }

    static public function todayShortTermInterestTotal()
    {
        $principal_amount = self::where('loancategory_id', 1)
            ->whereIn('status', [1,2])
            ->whereDate('created_at', Carbon::today())
            ->sum('principal_amount');

        $interest = Loancategory::first()->interest;

        return ($interest / 100 ) * $principal_amount;
    }

    static public function todayLongTermInterestTotal()
    {
        $principal_amount = self::where('loancategory_id', 2)
            ->whereIn('status', [1,2])
            ->whereDate('created_at', Carbon::today())
            ->sum('principal_amount');

        $interest = Loancategory::first()->interest;

        return ($interest / 100 ) * $principal_amount;
    }

    static public function todayTotalInterestFromAllLoan(): float|int
    {
        return self::todayShortTermInterestTotal() + self::todayLongTermInterestTotal();
    }

    static function nextMeeting()
    {
        $today = today();
        $nextEvent = today();

        if ($today->day <= 6) {
            $nextEvent->day = 6;
        } elseif ($today->day <= 21) {
            $nextEvent->day = 21;
        } else {
            $nextEvent->day = 6;
            $nextEvent->month = $nextEvent->month + 1;
        }

        if (Carbon::parse($nextEvent)->format('l') === "Sunday") {
            $nextEvent->day = $nextEvent->day + 1;
        }

        return $nextEvent;
    }
}
