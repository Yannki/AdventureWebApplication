<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tavern extends Model
{
    use HasFactory;

    public function adventurer(){
        return $this->hasMany(Adventurer::class);
    }

    public function commissions(){
        return $this->belongsToMany(Commission::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    protected $fillable = [
        'name',
        'country',
        'image',
    ]; 
}
