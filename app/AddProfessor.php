<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddProfessor extends Model
{
    protected $fillable = [
        'professor_first_name','professor_last_name','email', 'joining_date','password','designation','department','gender', 'phone','date_of_birth','address','image','education',
    ];
}
