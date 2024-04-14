<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anime extends Model
{
    use HasFactory;
    protected $fillable=['title','details','type','image','status','tags','studio_id','trailer','episoide_count','rating'];

    public function episoides():HasMany
    {
        return $this->hasMany(Episoide::class);
    }
    
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // public function tags()
    // {
    //     return $this->hasMany(Tag::class);
    // }

    public function studio()
    {
        return $this->belongsTo(Studio::class,'studio_id');
    }
}
