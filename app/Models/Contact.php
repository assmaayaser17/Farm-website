<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // تحديد الأعمدة اللي مسموح بالملء فيها
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}

