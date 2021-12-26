<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOrder extends Model
{
     protected $fillable = [
        'first_name','last_name','phone', 'email','address','city','country','course_id',
    ];
    public function addcourse()
    {
    	return $this->belongsTo('App\AddCourse','course_id');
    }
}
