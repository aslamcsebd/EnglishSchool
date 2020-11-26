<?php

namespace App\Admin;

use App\Admin\Category;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
