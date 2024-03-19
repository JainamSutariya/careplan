<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationRisk extends Model
{
    use HasFactory;

    protected $fillable = [
        'refusal_medications',
        'refusal_medications_details',
        'allergies_medications',
        'allergies_medications_yes_details',
        'medications_support_details',
        'insulin_service_details',
        'blister_medication',
        'medications_safe_box',
        'difficulties_medications',
        'controlled_drug_medications',
        'medications_changed',
        'nasal_drop',
        'timings_medications',
        'last_medication',
        'risk_level',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
