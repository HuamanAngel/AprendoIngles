<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'ave_id',
        'lev_name',
    ];

    public function LevelChallenge()
    {
        return $this->hasMany(Challenge::class,'lev_id','id');
    }
    public function LevelAventure()
    {
        return $this->belongsTo(Aventure::class,'ave_id','id');
    }

}
