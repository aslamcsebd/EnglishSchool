<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class facility extends Model
{

   function facilityFull(){
      return $this->hasOne('App\facilities_description', 'facilities_ID', 'id');
      // N:B: hasOne('Destination model', 'Destination model id(primary key)', 'to this model foreign key');
   }   
}
