<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCare extends Model
{
    use HasFactory;

    protected $fillable = [
        'care_support_need',
        'while_seated',
        'squeeze_brush_able_to',
        'squeeze_brush_support_with',
        'hold_the_brush_able_to',
        'hold_the_brush_support_with',
        'hold_the_glass_able_to',
        'hold_the_glass_support_with',
        'goto_bathroom_able_to',
        'goto_bathroom_support_with',
        'stand_in_front_able_to',
        'stand_in_front_support_with',
        'seat_on_commode_able_to',
        'seat_on_commode_support_with',
        'maintain_health_condition',
        'desire_not_fall',
        'maximize_my_independence',
        'desire_to_oral_health',
        'maintain_dignity_privacy',
        'desire_to_avoid_appointment',
        'desire_clean_smart',
        'maintain_healthey_lifestyle',
        'avoid_unnecessary_hospital',
        'maintain_good_relation',
        'improve_quality_life',
        'prevent_malnutrition',
        'other_outcomes_check',
        'other_outcomes_text',
        'shaving_support',
        'shaving_support_need',
        'electric_shaver_other_details',
        'shaving_kept_location',
        'complete_shaving',
        'complete_shaving_day_time',
        'nail_cutting_support',
        'hand_nail_cutting_self',
        'hand_nail_cutting_family_support',
        'hand_nail_cutting_professional',
        'foot_nail_cutting_self',
        'foot_nail_cutting_family_support',
        'foot_nail_cutting_professional',
        'nail_cutting_other_details',
        'patient_id',
        'while_seated_other',
        'towel_location'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
