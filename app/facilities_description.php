<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilities_description extends Model
{
   protected $fillable = ['facilities_ID', 'descriptions',];

   function facilityDescription(){
      return $this->hasOne('App\admin\facility', 'id', 'facilities_ID');
      // N:B: hasOne('Destination model', 'Destination model id(primary key)', 'to this model foreign key');
   }  

   
}
