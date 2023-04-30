<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
    protected $fillable = [
        'lev_id',
        'gam_id',
        'cha_val1',
        'cha_val2',
        'cha_val3',
    ];

    public function ChallengeGame()
    {
        return $this->belongsTo(Game::class,'gam_id');
    }    
}
