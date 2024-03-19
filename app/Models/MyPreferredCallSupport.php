<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPreferredCallSupport extends Model
{
    use HasFactory;

    protected $fillable = [
        'morning_call_text',
        'morning_call_requested',
        'morning_call_duration',
        'morning_call_carers',
        'morning_call_personal_care',
        'morning_call_transfer',
        'morning_call_food',
        'morning_call_stoma_care',
        'morning_call_medication',
        'morning_call_change_bed',
        'lunch_call_text',
        'lunch_call_request_time',
        'lunch_call_duration',
        'lunch_call_carers',
        'lunch_call_personal_care',
        'lunch_call_transfer',
        'lunch_call_food',
        'lunch_call_stoma_care',
        'lunch_call_medication',
        'lunch_call_change_bed',
        'tea_call_text',
        'tea_call_requested',
        'tea_call_duration',
        'tea_carers_text',
        'tea_call_personal_care',
        'tea_call_transfer',
        'tea_call_food',
        'tea_call_stoma',
        'tea_medication',
        'tea_change_bed_text',
        'tuck_call_text',
        'tuck_call_requested_time',
        'tuck_call_duration_text',
        'tuck_call_carers_text',
        'tuck_call_personal_care_carer',
        'tuck_call_transfer_carer',
        'tuck_call_food_carer',
        'tuck_call_stoma_care_carer',
        'tuck_call_medication_carer',
        'tuck_call_change_carer',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
