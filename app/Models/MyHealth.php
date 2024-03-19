<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyHealth extends Model
{
    use HasFactory;

    protected $fillable = [
        'my_health_details',
        'mobility',
        'personal_care',
        'dressing_support',
        'skin_care',
        'continence_care',
        'nutrition_and_hydration',
        'medication',
        'social_interest',
        'maintain_health_condition',
        'remain_healthy',
        'maximize_my_independence',
        'desire_not_fall',
        'maintain_dignity_privacy',
        'maintain_oral_health',
        'desire_clean_smart',
        'desire_to_avoid_appointment',
        'avoid_unnecessary_hospital',
        'maintain_healthey_lifestyle',
        'improve_quality_life',
        'maintain_healthy_diet',
        'prevent_malnutrition',
        'maintain_good_relationship',
        'other_outcomes_check',
        'other_outcomes_text',
        'desired_outcome_details',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
