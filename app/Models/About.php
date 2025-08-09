<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // اسم الجدول لو مش نفس اسم الموديل
    // protected $table = 'abouts';

    protected $fillable = [
        'title',
        'intro',
        'details',
        'image'
    ];
}

