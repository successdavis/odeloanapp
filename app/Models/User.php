<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_path'
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
    ];

    //    ->account()->create(['interest' => 5]);
    protected static function boot()
    {
        parent::boot();

        static::created(function ($member) {
            $member->account()->create(['interest' => 5]);
        });
    }

    public function payments()
    {
        $this->hasMany(Payment::class);
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
}
