<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marksheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
         'mark',
    ];

    public function trainee(){
        return $this->belongsTo(Trainee::class, 'id', 'id')->orderby('first_nm', 'asc');
    }
}
