<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass assignment
    protected $guarded = [
        'id'
    ];
    use HasFactory;
}
