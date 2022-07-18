<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['avatar_path'];

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
            return asset('storage/avatars/default.jpg');
        }
    }
}
