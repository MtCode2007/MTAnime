<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogComments;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'text',
        'category_id'
    ];
    protected $table = 'blog';
    public function category()
    {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }
    public function comments()
    {
        return $this->hasMany(BlogComments::class);
    }
}
