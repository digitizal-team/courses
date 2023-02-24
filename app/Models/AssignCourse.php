<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignCourse extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class);
    }

   

    public function city(){
        return $this->belongsTo(City::class);
    }
}
