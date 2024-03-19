<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergies extends Model
{
    use HasFactory;

    protected $fillable = [
        'general_allergies',
        'general_allergies_yes_details',
        'medication_allergies',
        'medication_allergies_yes_details',
        'fluid_allergies',
        'fluid_allergies_yes_details',
        'mental_capacity_decision',
        'legal_attorney',
        'lpa_reference_number',
        'dols_details',
        'maintain_health_condition',
        'closing_door',
        'maintaining_choice',
        'location_towel_kept',
        'patient_id',
        'mental_capacity_decision_other'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
