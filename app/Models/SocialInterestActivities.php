<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialInterestActivities extends Model
{
    use HasFactory;

    protected $fillable = [
        'care_support_need',
        'desired_outcomes',
        'support_desired_outcomes',
        'preferred_care',
        'professional_visit',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
