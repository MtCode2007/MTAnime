<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;
    protected $fillable = ['name','logo'];
    protected $table = 'studios';

    public function anime()
    {
        return $this->hasMany(Anime::class);
    }
}
