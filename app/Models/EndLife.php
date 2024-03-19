<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndLife extends Model
{
    use HasFactory;

    protected $fillable = [
        'care_support_need',
        'desired_outcomes',
        'achieve_desired',
        'communication_expressing',
        'communication_expressing_details',
        'topics_communication_avoid',
        'topics_communication_avoid_details',
        'opted_organ_donation',
        'opted_organ_donation_details',
        'care_plan_gp_pain',
        'care_plan_gp_pain_kept_details',
        'treatments_approaching',
        'treatments_approaching_additional_details',
        'important_life_hours_details',
        'wishes_final_days',
        'service_user_present_days_hours',
        'comfort_final_days_hours',
        'cultural_beliefs_considered',
        'cultural_beliefs_considered_details',
        'wishes_user_funeral',
        'funeral_director_place',
        'funeral_director_place_details',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
