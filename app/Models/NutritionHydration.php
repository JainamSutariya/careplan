<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionHydration extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintain_nutrition',
        'support_from',
        'cutlery_able_to',
        'cutlery_Support_with',
        'food_able_to',
        'food_Support_with',
        'fluid_able_to',
        'fluid_Support_with',
        'choice_able_to',
        'choice_Support_with',
        'holding_able_to',
        'holding_Support_with',
        'maintain_health_condition',
        'remain_healthy',
        'maximize_my_independence',
        'desire_not_fall',
        'maintain_dignity_privacy',
        'malnutrition_dehydration',
        'desire_clean_smart',
        'maintain_healthy_nutritious',
        'avoid_unnecessary_hospital',
        'maintain_good_relation',
        'quality_life_improve',
        'other_outcomes_check_1',
        'other_outcomes_text',
        'other_outcomes_check_2',
        'other_outcomes_check_3',
        'other_outcomes_check_4',
        'morning_during_visit',
        'lunch_during_visit',
        'tea_during_visit',
        'bed_during_visit',
        'restricted_with',
        'cutlery_use',
        'cutlery_kept',
        'feeding_support',
        'hydration_need',
        'food_fluid_expire',
        'high_suger',
        'position_supporting',
        'dietitian',
        'risk_chocking',
        'salt',
        'salt_details',
        'refer_salt_team',
        'referral_details',
        'condition_swallowing',
        'condition_swallowing_details',
        'patient_id',
        'support_from_other',
        'morning_leave_water_close',
        'lunch_leave_water_close',
        'tea_leave_water_close',
        'bed_leave_water_close',
        'level_of_diet',
        'level_of_diet_text'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
