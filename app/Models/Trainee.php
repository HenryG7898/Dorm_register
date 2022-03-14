<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;

    protected $fillable = [
        'course',
        'first_nm',
        'last_nm',
        'role',
        'trainee_ID',
        'DOB',
        'telephone',
        'gender',
        'room',
        'email',
    ];
}
