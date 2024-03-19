<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnviromentalRisk extends Model
{
    use HasFactory;

    protected $table = 'enviromental_risk';

    protected $fillable = [
        'level_access',
        'well_lit',
        'parking_close',
        'clear_access',
        'ground_floor',
        'flooring_safe',
        'tripping_hazards',
        'environment_free',
        'food_preparation',
        'working_condition',
        'toileting_facilities',
        'personal_hygiene',
        'control_measures',
        'behaviour_member',
        'user_problem',
        'smoker_household',
        'history_violence',
        'safeguarding',
        'summon_assistance',
        'details_hazards',
        'taken_immediately',
        'personal_injury',
        'patient_id',
        'level_access_no',
        'well_lit_no',
        'parking_close_no',
        'clear_access_no',
        'ground_floor_no',
        'flooring_safe_no',
        'tripping_hazards_no',
        'environment_free_no',
        'food_preparation_no',
        'working_condition_no',
        'toileting_facilities_no',
        'personal_hygiene_no',
        'control_measures_no',
        'behaviour_member_no',
        'user_problem_no',
        'smoker_household_no',
        'history_violence_no',
        'safeguarding_no',
        'summon_assistance_no',
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}