<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityCourse extends Model
{
    use HasFactory;

    public function cityCourse(){
        return $this->belongsToMany(Course::class);
    }
}
