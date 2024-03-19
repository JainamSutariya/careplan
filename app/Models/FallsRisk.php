<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FallsRisk extends Model
{
    use HasFactory;

    protected $fillable = [
        'mental_state',
        'gait_balance',
        'medical_condition',
        'sensory_deficit',
        'fall_history',
        'nutrition',
        'pain_movement',
        'elimination',
        'medication_factor',
        'mobility',
        'clothing_footwear',
        'home',
        'home_environment',
        'mitigate_risk',
        'referral_made_ot',
        'referral_made_ot_date',
        'referral_made_physio',
        'referral_made_physio_date',
        'referral_made_gp',
        'referral_made_gp_date',
        'referral_made_salt',
        'referral_made_salt_date',
        'risk_rating_date',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
