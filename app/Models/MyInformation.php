<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefer_call_name',
        'prefer_language',
        'living_situation',
        'details_of_property',
        'property_belongs',
        'bedroom_location',
        'property_access',
        'lifeline_available',
        'hearing_aid',
        'preferred_side_communicate',
        'wear_glasses',
        'specify_reason',
        'specify_reason_other',
        'strong_side',
        'height',
        'weight',
        'end_of_life_care',
        'adrt',
        'adrt_exact_location',
        'dnacpr',
        'dnacpr_exact_location',
        'respect_place',
        'respect_exact_location',
        'pets_property',
        'pets_property_yes_details',
        'smoke_alarm',
        'funding',
        'people_present_meeting',
        'voice_of_family',
        'patient_id',
        'living_situation_other',
        'details_of_property_other',
        'property_belongs_other',
        'hearing_aid_other',
        'property_access_other',
        'bedroom_location_other',
        'eyesight_text',
        'property_access_key_safe',
        'funding_date_time'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
