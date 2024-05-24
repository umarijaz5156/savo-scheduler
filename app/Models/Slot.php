<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function availability()
    {
        return $this->belongsTo(Availability::class);
    }

    public function appointment(){
        return $this->hasOne(Appointment::class);
    }

    public function available(){
        return $this->belongsTo(Availability::class);

    }
}
