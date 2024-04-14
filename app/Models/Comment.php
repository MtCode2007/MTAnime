<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','text','anime_id'];
    protected $table = 'comments';

    public function anime(){
        return $this->belongsTo(Anime::class,'anime_id');
    }


    public function user(){
        return $this->belongsTo(Anime::class,'user_id');
    }
}
