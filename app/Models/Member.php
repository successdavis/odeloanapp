<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function nextofkin()
    {
        return $this->hasOne(Nextofkin::class);
    }

    public function addNextOfKin($nextofkin)
    {
       $nextofkin =  $this->nextofkin()->create($nextofkin);

       return $nextofkin;
    }

}
