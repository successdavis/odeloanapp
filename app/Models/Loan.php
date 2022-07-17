<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    /** @test */
    public function category()
    {
        return $this->belongsTo(Loancategory::class, 'loancategory_id');
    }
}
