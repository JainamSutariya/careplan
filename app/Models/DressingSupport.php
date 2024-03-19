<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressingSupport extends Model
{
    use HasFactory;

    protected $fillable = [
        'change_cloth',
        'dressing_while',
        'while_seated',
        'upper_body_strength',
        'upper_body_strength_other_text',
        'stand_up_strength',
        'lower_body_strength',
        'lower_body_strength_other_text',
        'maintain_health_condition',
        'remain_healthy',
        'maximize_my_independence',
        'desire_not_fall',
        'maintain_dignity_privacy',
        'healthey_lifestyle',
        'desire_clean_smart',
        'maintain_good_relationship',
        'avoid_unnecessary_hospital',
        'quality_life',
        'other_outcomes_check_1',
        'other_outcomes_check_2',
        'other_outcomes_check_3',
        'other_outcomes_check_4',
        'other_outcomes_text',
        'support_from',
        'morning_wear_clothes',
        'morning_wear_clothes_other_text',
        'evening_wear_clothes',
        'evening_wear_clothes_other_text',
        'other_details',
        'seated_in_bedroom',
        'seated_in_bathroom',
        'seated_in_kitchen',
        'seated_in_living_room',
        'seated_on_chair',
        'seated_on_bed',
        'seated_on_commode',
        'seated_on_other',
        'wardrobe_location',
        'wardrobe_location_other_text',
        'clothes_kept',
        'clothes_kept_other_text',
        'dirty_clothes',
        'dirty_clothes_other_text',
        'additional_thing_1',
        'additional_thing_2',
        'additional_thing_3',
        'patient_id',
        'while_seated_other',
        'dressing_while_other',
        'change_cloth_other'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
