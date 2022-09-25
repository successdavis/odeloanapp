<?php

namespace App\Models;

use App\Models\Traits\Billable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasFactory;
    use Billable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
