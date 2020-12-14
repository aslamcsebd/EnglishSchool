<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class birthday extends Model
{
   protected $fillable = ['dob', 'name', 'class', 'classId'];
    
}
