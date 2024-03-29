<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfSport extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
    ];

    public function tournament(){
        return $this->hasMany(Tournament::class);
    }
}
