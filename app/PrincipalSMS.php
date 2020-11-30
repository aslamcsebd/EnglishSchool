<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PrincipalSMS extends Model
{
     protected $fillable = ['title', 'leftSide', 'rightSide', 'teacherName', 'image'];
}
