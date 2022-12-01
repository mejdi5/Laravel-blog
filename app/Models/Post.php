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
    
    //elequant relationship category/post
    public function category() {
       return $this->belongsTo(Category::class);
    }
    
    //elequant relationship author/post
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
     } 

     //elequant relationship comment/post
    public function comments() {
      return $this->hasMany(Comment::class);
    } 

    //filter
     public function scopeSearch($query) {
      if(request('search')) {
         $query->where(function ($q) {
            $q
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
         });
      }

      if(request('category')) {
         $query
         ->whereHas('category', function ($query) {
            return $query->where('slug', request('category'));
         });
      }

      if(request('author')) {
         $query
         ->whereHas('author', function ($query) {
            return $query->where('username', request('author'));
         });
      }
     }
}
