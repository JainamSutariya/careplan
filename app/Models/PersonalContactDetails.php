<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalContactDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'citizen_name',
        'preferred_to_call',
        'address',
        'dob',
        'current_gender',
        'ethnicity',
        'sex_assigned_birth',
        'language_know',
        'landline',
        'mobile',
        'general_practitioner',
        'pharmacy_details',
        'contact1_name',
        'contact2_name',
        'contact1_relationship_citizen',
        'contact2_relationship_citizen',
        'contact1_address',
        'contact2_address',
        'contact1_contact_number',
        'contact2_contact_number',
        'contact1_email',
        'contact2_email',
        'contact1_contact_day_or_night',
        'contact2_contact_day_or_night',
        'social_name',
        'social_contact',
        'social_email',
        'district_nurse',
        'person_care_first_id',
        'nhs_no',
        'care_service_start_date',
        'patient_id',
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
