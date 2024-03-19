<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'covid_tested',
        'when_service_user_tested_date',
        'covid_result',
        'service_user_symptoms',
        'service_user_covid_test',
        'high_temperature',
        'continuous_cough',
        'dry_cough',
        'sense_smell_taste',
        'difficulty_breathing',
        'chest_pain',
        'symptoms_details',
        'vaccination',
        'first_dose',
        'second_dose',
        'third_dose',
        'fourth_dose',
        'family_member_tested',
        'family_member_symptoms',
        'covid_19_9',
        'patient_id',
        'other_dose',
        'other_dose_details'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
