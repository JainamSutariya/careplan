<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkinCare extends Model
{
    use HasFactory;

    protected $fillable = [
        'skin_integrity',
        'morning',
        'lunch',
        'tea',
        'bed',
        'squeeze_cream_in_my_hand',
        'lower_strength_stand_up_from',
        'lower_strength_able_apply_cream',
        'squeeze_cream_in_right_hand',
        'lower_strength_hold_equipment',
        'open_box_cream_in_left_hand',
        'lower_strength_hold_furniture',
        'lower_strength_able_apply_cream_back',
        'open_box_cream_front_body_part',
        'lower_strength_turn_hold',
        'maintain_health_condition',
        'remain_healthy',
        'maximize_my_independence',
        'maintain_dignity_privacy',
        'desire_clean_smart',
        'avoid_unnecessary_hospital',
        'desire_not_fall',
        'healthey_lifestyle',
        'maintain_good_relationship',
        'quality_life',
        'other_outcomes_check_1',
        'other_outcomes_check_2',
        'other_outcomes_text',
        'other_outcomes_check_3',
        'other_outcomes_check_4',
        'support_from',
        'cream_name',
        'location_cream',
        'squeeze_where_apply_cream',
        'open_box_where_apply_cream',
        'reposition_support',
        'additional_thing_1',
        'additional_thing_2',
        'pressure_sore',
        'pressure_sore_grade',
        'maintain_skin_integrity',
        'district_nurse_referral',
        'date_district_nurse_referral',
        'date_district_nurse_referral_check',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
