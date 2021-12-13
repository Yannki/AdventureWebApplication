<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    public function adventurer(){
        return $this->belongsTo(Adventurer::class);
    }

    public function taverns(){
        return $this->belongsToMany(Tavern::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
