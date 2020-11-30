<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlankForm extends Model{
   protected $fillable = ['name_eng', 'father_name_eng', 'mother_name_eng', 'dob'];
}
