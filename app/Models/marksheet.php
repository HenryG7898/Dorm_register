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

    protected $casts = [
        'published_at' => 'date:Y-m-d'
    ];

    public function trainee(){
        return $this->belongsTo(Trainee::class, 'id', 'id');
    }
}
