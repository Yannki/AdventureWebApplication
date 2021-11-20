<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventurer extends Model
{
    use HasFactory;

    public function tavern(){
        return $this->belongsTo(Tavern::class);
    }
}
