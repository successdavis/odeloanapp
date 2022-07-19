<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['avatar_path'];


//    ->account()->create(['interest' => 5]);
    protected static function boot()
    {
        parent::boot();

        static::created(function ($member) {
            $member->account()->create(['interest' => 5]);
        });
    }

    public function nextofkin()
    {
        return $this->hasOne(Nextofkin::class);
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

    public function account()
    {
        return $this->hasOne(Account::class);
    }
}
