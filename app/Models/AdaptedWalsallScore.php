<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdaptedWalsallScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'risk_date',
        'risk_date_1',
        'risk_date_2',
        'risk_date_3',
        'risk_date_4',
        'risk_time',
        'risk_time_1',
        'risk_time_2',
        'risk_time_3',
        'risk_time_4',
        'no_deficit',
        'deficit',
        'walk_independently',
        'walk_assistance',
        'unable_walk',
        'skin_condition',
        'skin_change',
        'pressure_ulcer',
        'verbal',
        'no_dietary',
        'dietary',
        'none',
        'occasional',
        'frequent',
        'bowel_none',
        'bowel_occasional',
        'bowel_frequent',
        'care_no_carer',
        'care_active_carer',
        'care_intermittent_carer',
        'zero_three_score',
        'four_nine_score',
        'ten_fourteen_score',
        'fifteen_above_score',
        'patient_id'
    ];

    protected $casts = [
        'no_deficit' => 'array',
        'deficit' => 'array',
        'walk_independently' => 'array',
        'walk_assistance' => 'array',
        'unable_walk' => 'array',
        'skin_condition' => 'array',
        'skin_change' => 'array',
        'pressure_ulcer' => 'array',
        'verbal' => 'array',
        'no_dietary' => 'array',
        'dietary' => 'array',
        'none' => 'array',
        'occasional' => 'array',
        'frequent' => 'array',
        'bowel_none' => 'array',
        'bowel_occasional' => 'array',
        'bowel_frequent' => 'array',
        'care_no_carer' => 'array',
        'care_active_carer' => 'array',
        'care_intermittent_carer' => 'array',
        'zero_three_score' => 'array',
        'four_nine_score' => 'array',
        'ten_fourteen_score' => 'array',
        'fifteen_above_score' => 'array',
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
