<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','text','blog_id'];
    protected $table = 'blog_comments';

    public function blog(){
        return $this->belongsTo(Anime::class,'blog_id');
    }

    public function user(){
        return $this->belongsTo(Anime::class,'user_id');
    }
}
