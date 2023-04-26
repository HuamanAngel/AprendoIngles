<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Use_ave extends Model
{
    use HasFactory;

    protected $fillable = [
        'ave_id',
        'us_id',
        'use_ave_level_complete',
        'use_ave_challenge_complete',
        'use_ave_complete',
    ];    
}
