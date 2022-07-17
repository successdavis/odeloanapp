<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loancategory extends Model
{
    use HasFactory;

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
