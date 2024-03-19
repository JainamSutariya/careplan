<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_english',
        'language_punjabi',
        'language_hindi',
        'language_gujarati',
        'other_language',
        'way_communication_verbal',
        'way_communication_non_verbal',
        'way_communication_written',
        'way_communication_british_sign',
        'other_way',
        'communicate_clearly',
        'communicate_clearly_details',
        'speech_impairment',
        'speech_impairment_details',
        'pick_up_phone',
        'pick_up_phone_details',
        'communicate_phone',
        'communicate_phone_details',
        'care_plan_language',
        'care_plan_language_details',
        'care_staff_perform_task',
        'care_staff_perform_task_details',
        'prefer_consent',
        'consent_behalf',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
