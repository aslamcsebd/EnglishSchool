<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherList extends Model
{
    protected $fillable = ['designation_id', 'teacherName', 'qualification', 'photo'];

    function teacherDesignation(){
      return $this->hasOne('App\teacherDesignation', 'id', 'designation_id');
      // N:B: hasOne('Destination model', 'Destination model id(primary key)', 'to this model foreign key');
   } 


}
