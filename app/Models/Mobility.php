<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobility extends Model
{
    use HasFactory;

    protected $fillable = [
        'transfer_place',
        'strength',
        'can_hold_details',
        'maintain_health_condition',
        'remain_healthy',
        'maximize_my_independence',
        'desire_not_fall',
        'maintain_dignity_privacy',
        'malnutrition',
        'desire_clean_smart',
        'maintain_good_relationship',
        'avoid_unnecessary_hospital',
        'maintain_healthey_lifestyle',
        'improve_quality_life',
        'maintain_healthy_diet',
        'other_outcomes_check',
        'other_outcomes_text',
        'equipment_place',
        'other_equipment',
        'size_small_sheet',
        'hoist_place',
        'hoist_delivered',
        'hoist_make',
        'hoist_last_service',
        'sling_place',
        'size_sling',
        'lunch_transfer',
        'tea_transfer',
        'bed_transfer',
        'reposition_support',
        'lunch_reposition',
        'tea_reposition',
        'bed_reposition',
        'care_staff_consent',
        'professional_involved',
        'nurse_frequency',
        'nurse_reason',
        'ot_frequency',
        'involved_ot_reason',
        'physio_frequency',
        'involved_physio_reason',
        'professional_referral',
        'gp_reason',
        'gp_referral',
        'spa_reason',
        'spa_referral',
        'physio_reason',
        'physio_referral',
        'ot_reason',
        'ot_referral',
        'other_information',
        'patient_id',
        'size_of_slide',
        'transfer_option',
        'lower_strength',
        'can_able'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
