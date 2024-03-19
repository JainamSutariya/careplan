<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyActionPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_care_emergency',
        'dietary_emergency',
        'medication_emergency',
        'transfer_emergency',
        'bed_position_emergency',
        'shopping_emergency',
        'banking_emergency',
        'accident_emergency',
        'other_info_details',
        'sevice_user_name',
        'signature',
        'date',
        'reason',
        'representative_name',
        'relationship_with_user',
        'representative_signature',
        'representative_date',
        'gaining_name',
        'gaining_signature',
        'gaining_date',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
