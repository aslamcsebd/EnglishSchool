<?php

namespace App\Admin\Dental_college;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Dental_college\DentalCollegePost;

class DentalCollegeCategory extends Model
{
    
    public function posts()
    {
        return $this->hasMany(DentalCollegePost::class);
    }
}
