<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addinfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'first_nm',
        'last_nm',
        'relationship',
        'contact_nbr',
        'email',
        'street_1',
        'street_2',
        'town',
        'Parish ',
    ];
}
