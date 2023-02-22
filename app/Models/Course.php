<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function citycourse(){
        return $this->belongsTo(CityCourse::class,'id','course_id');
    }

    public function levelcourse(){
        return $this->belongsTo(LevelCourse::class,'level_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function assigncourse(){
        return $this->hasMany(AssignCourse::class,'course_id','id');
    }
    
}
