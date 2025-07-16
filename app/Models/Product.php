<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'name',
    'season',
    'variety',
    'specification',
    'sizes',
    'package',
    'category_id',
    'imagepath'
];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
