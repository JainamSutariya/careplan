<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContinenceCare extends Model
{
    use HasFactory;

    protected $fillable = [
        'using_toilet',
        'using_the_commode',
        'changing_incontinence',
        'hold_the_bed_rails',
        'stand_up_from_the_bed',
        'lift_both_legs',
        'go_to_bathroom',
        'use_the_commode',
        'maintain_health_condition',
        'skin_remain_health',
        'maximize_independence',
        'desire_not_have_fall',
        'maintain_dignity_privacy',
        'desire_avoid_unnecessary',
        'clean_smart_looking',
        'maintain_healthey_lifestyle',
        'unnecessary_hospital_admission',
        'maintain_good_relationship',
        'improve_quality_life',
        'malnutrition_dehydration',
        'other_outcomes_check_1',
        'other_outcomes_text',
        'other_outcomes_check_2',
        'other_outcomes_check_3',
        'other_outcomes_check_4',
        'desired_outcomes',
        'desired_outcomes_other_text',
        'location_incontinence_pad',
        'check_soiled_morning',
        'check_soiled_lunch',
        'check_soiled_tea',
        'check_soiled_bed',
        'commode_text',
        'commode_morning',
        'commode_lunch',
        'commode_tea',
        'commode_bed',
        'toilet_morning',
        'toilet_lunch',
        'toilet_tea',
        'toilet_bed',
        'leg_bag_text',
        'frequency_change_text',
        'every_day_text',
        'remove_night_beg',
        'empty_leg_bag_lunch',
        'empty_leg_bag_tea',
        'empty_leg_bag_bed',
        'family_size',
        'family_size_other',
        'incontinence_pads',
        'incontinence_pads_other',
        'refuse_bag',
        'dispose_pads',
        'ordering_catheter_bags',
        'ordering_catheter_bags_other',
        'prefer_care_staff',
        'prefer_care_monitor_check',
        'prefer_care_monitor',
        'patient_id',
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
