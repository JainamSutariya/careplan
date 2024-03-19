<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WashAndShower extends Model
{
    use HasFactory;

    protected $fillable = [
        'support_care_need',
        'support_care_need_days',
        'take_wash_while',
        'while_seated',
        'hair_wash',
        'wash_hair_while',
        'strength',
        'sit_unattended',
        'wash',
        'maintain_health_condition',
        'remain_healthy',
        'maximize_my_independence',
        'desire_not_fall',
        'maintain_dignity_privacy',
        'quality_life',
        'desire_clean_smart',
        'maintain_good_relationship',
        'avoid_unnecessary_hospital',
        'maintain_healthey_lifestyle',
        'other_outcomes_check_1',
        'other_outcomes_check_2',
        'other_outcomes_check_3',
        'other_outcomes_check_4',
        'other_outcomes_check_5',
        'other_outcomes_check_6',
        'other_outcomes_check_7',
        'other_outcomes_check_8',
        'other_outcomes_text',
        'support_from',
        'shower_gel',
        'shampoo',
        'washing_bowl',
        'towel',
        'upper_body',
        'lower_body',
        'location',
        'type_strip_wash',
        'strength_upper_body',
        'part_face',
        'able_to_wash_face',
        'support_from_carer_face',
        'front_body_part',
        'able_to_wash_front_body',
        'support_from_carer_front_body',
        'type_bed_wash',
        'part_hand',
        'able_to_wash_hand',
        'support_from_carer_hand',
        'strength_lower_body',
        'part_back',
        'able_to_wash_back',
        'support_from_carer_back',
        'type_drying_shower',
        'part_buttock',
        'able_to_wash_buttock',
        'support_from_carer_buttock',
        'type_drying_body',
        'part_lag',
        'able_to_wash_lag',
        'support_from_carer_lag',
        'bathroom_location',
        'able_take_wash',
        'additional_thing_1',
        'additional_thing_2',
        'additional_thing_3',
        'additional_thing_4',
        'additional_thing_5',
        'patient_id',
        'strip_wash_radio',
        'shower_radio',
        'bed_wash_radio',
        'take_wash_while_other',
        'lower_strength',
        'can_able'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
