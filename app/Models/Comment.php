<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guarded = [];


    public function commentator() {
        return $this->belongsTo(User::class, 'user_id');
     }
     
     public function post() {
         return $this->belongsTo(Post::class, 'post_id');
      } 
 

    use HasFactory;
}
