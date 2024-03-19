<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietaryRisk extends Model
{
    use HasFactory;

    protected $fillable = [
        'allergy_food',
        'allergy_food_details',
        'dietary_restriction',
        'dietary_restriction_details',
        'encouragement_food',
        'encouragement_food_details',
        'encouragement_fluids',
        'encouragement_fluids_details',
        'food_preparation',
        'fluids_preparation',
        'difficulties_chewing',
        'difficulties_chewing_details',
        'difficulties_swallowing',
        'difficulties_swallowing_details',
        'difficulties_swallowing_fluid',
        'difficulties_swallowing_fluid_details',
        'sore_mouth_details',
        'chocking_risk',
        'drugs_alcohol',
        'risk_level',
        'dietary_Information',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
