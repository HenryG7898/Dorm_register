<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register_mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainee_nm',
        'dorm_rm',
        'marking'
    ];
}
