<?php

namespace App\Admin\Dental_college;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Dental_college\DentalCollegeCategory;

class DentalCollegePost extends Model
{
    
    public function category()
    {
        return $this->belongsTo(DentalCollegeCategory::class);
    }
}
