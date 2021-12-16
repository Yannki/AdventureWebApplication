<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function adventurer(){
        return $this->belongsTo(Adventurer::class);
    }

    public function commission(){
        return $this->belongsTo(Commission::class);
    }

    protected $fillable = [
        'text',
        'commission_id',
        'adventurer_id',
    ];
}
