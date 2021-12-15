<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventurer extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tavern(){
        return $this->belongsTo(Tavern::class);
    }

    public function commissions(){
        return $this->hasMany(Commission::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
