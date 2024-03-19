<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyLifeStyle extends Model
{
    use HasFactory;

    protected $fillable = [
        'spend_your_day',
        'my_likes',
        'my_dislikes',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
