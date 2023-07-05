<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_path',
        'account_number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob'   => 'date:Y-m-d'
    ];

    //    ->account()->create(['interest' => 5]);
    protected static function boot()
    {
        parent::boot();

        static::created(function ($member) {
            $member->update(['account_number' => self::generateAccountNumber()]);

            $member->account()->create(['interest' => 0]);
        });
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function nextofkin()
    {
        return $this->hasOne(Nextofkin::class);
    }

    public function fine()
    {
        return $this->hasMany(Fine::class);
    }

    public function addNextOfKin($nextofkin)
    {
        $nextofkin =  $this->nextofkin()->create($nextofkin);

        return $nextofkin;
    }

    public function guarantor()
    {
        $this->hasMany(Guarantor::class);
    }

        public function getAvatarPathAttribute($avatar)
    {
        if ($avatar) {
            return asset('storage/' . $avatar);
        }else {
            return asset('storage/passport/default.jpg');
        }
    }

    public function account(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Account::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

        public function isAdmin()
    {
        // return in_array($this->f_name, ['JohnDoe', 'JaneDoe']);
//        return $this->roles->isNotEmpty();
        return $this->admin;
    }

    static function generateAccountNumber()
    {
        $lastaccount = self::orderBy('account_number','desc')->pluck('account_number')->first();
        $newAccountNumber = $lastaccount + 1;

        while(self::where('account_number', $newAccountNumber)->exists()){
            $newAccountNumber = $newAccountNumber ++;
        }

        return $newAccountNumber;
    }

    public function todaySavingsCollection($date)
    {
        $today = $date ? $date : Carbon::today();

        return $this->payments()
            ->whereDate('created_at', $today)
            ->where('billable_type', Account::class)
            ->sum('amount');
    }

    public function todayLongTermLoanCollection($date)
    {
        $today = $date ? $date : Carbon::today();

         $lCategoryId = 2;
        return $this->payments()->whereDate('created_at', $today)
            ->where('billable_type', Loan::class)
            ->whereHasMorph('billable', Loan::class, function ($query) use ($lCategoryId) {
                $query->where('loancategory_id', $lCategoryId);
            })
            ->sum('amount');
    }

    public function todayShortTermLoanCollection($date)
    {
        $today = $date ? $date : Carbon::today();

        $lCategoryId = 1;
        return $this->payments()->whereDate('created_at', $today)
            ->where('billable_type', Loan::class)
            ->whereHasMorph('billable', Loan::class, function ($query) use ($lCategoryId) {
                $query->where('loancategory_id', $lCategoryId);
            })
            ->sum('amount');
    }

    public function todayTotalFinesCollection($date)
    {
        $today = $date ? $date : Carbon::today();

        return $this->payments()->whereDate('created_at', $today)
            ->where('billable_type', Fine::class)
            ->sum('amount');
    }

    public function todayGrandTotalCollection($date)
    {
        $today = $date ? $date : Carbon::today();

        return $this->payments()->whereDate('created_at', $today)
            ->sum('amount');
    }


}
