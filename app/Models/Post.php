<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //mass assignment
    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    //elequant relationship
    public function category() {
       return $this->belongsTo(Category::class);
    }
    
    //elequant relationship
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
     } 
}
