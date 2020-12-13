<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class GalleryImageList extends Model
{
    protected $fillable = ['gallery_title_id', 'photo'];

    function galleryName(){
      return $this->hasOne('App\Admin\Gallery', 'id', 'gallery_title_id');
      // N:B: hasOne('Destination model', 'Destination model id(primary key)', 'to this model foreign key');
   } 
}
