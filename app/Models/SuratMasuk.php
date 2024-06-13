<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratmasuk extends Model
{
    use HasFactory;

    public function pengirim(){
        return $this->belongsTo(user::class);
    }
}
