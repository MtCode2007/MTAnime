<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episoide extends Model
{
    use HasFactory;
    protected $fillable = ['anime_id','link','date','num','status'];

    public function anime()
    {
        return $this->belongsTo(Anime::class,'anime_id');
    }
}