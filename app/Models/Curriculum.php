<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curricula';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
    ];
}
