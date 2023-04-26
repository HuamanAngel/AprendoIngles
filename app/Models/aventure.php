<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;

    protected $fillable = [
        'ave_name',
        'ave_code',
        'ave_quantity_participants',
    ];
}
