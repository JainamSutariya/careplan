<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestraintRisk extends Model
{
    use HasFactory;

    protected $fillable = [
        'keysafe_place',
        'consent_safety',
        'consent_safety_no_details',
        'bedrails_place',
        'consent_bedrails',
        'consent_bedrails_details',
        'safety_belt',
        'car_seat_belt',
        'consent_car_seat_belt',
        'consent_car_seat_belt_details',
        'mobile_hoist',
        'mobile_hoist_transfer',
        'mobile_hoist_transfer_no_details',
        'medication_lock_safe',
        'consent_overdose_medication_lock_safe',
        'consent_overdose_medication_lock_safe_details',
        'restraint_place',
        'including_consent_details',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
