<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCourse extends Model
{
     protected $fillable = [
        'course_name','course_code','course_details', 'course_date','course_length','course_price','course_professor','max_student_number', 'phone','image',
    ];

     public function CourseOrder()
    {
    	return $this->hasMany('App\CourseOrder','id');
    }

}
