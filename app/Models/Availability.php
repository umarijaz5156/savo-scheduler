<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function slots()
    {
        return $this->hasMany(Slot::class)->where('status',0);
    }

//    public function slot()
//    {
//        return $this->belongsTo(Slot::class)->with('availability');
//    }

}
