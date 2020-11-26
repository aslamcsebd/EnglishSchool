<?php

namespace App\Admin;

use App\Admin\Doctor;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class)->withTimestamps();
    }
}
