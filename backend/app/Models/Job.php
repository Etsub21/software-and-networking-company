<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
 

    protected $fillable = [
        'title',
        'description',
        'type',
        'location',
        'salary',
        'category',
        'deadline'
    ];
} //

