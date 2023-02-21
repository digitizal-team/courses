<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelCourse extends Model
{
    use HasFactory;

    public function levelcourse(){
        return $this->hasOne(Course::class);
    }
}
