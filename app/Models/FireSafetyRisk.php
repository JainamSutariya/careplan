<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireSafetyRisk extends Model
{
    use HasFactory;

    protected $fillable = [
        'alarms_fitted',
        'alarms_fitted_details',
        'smoke_alarm_fitted',
        'alarms_installed_details',
        'alarms_fire_service',
        'fire_basement',
        'alarms_fire_service_no_details',
        'fire_service_open_door',
        'fire_service_open_door_no_details',
        'risk_assessment_tool',
        'risk_assessment_tool_details',
        'hazard_escape_route',
        'hazard_escape_route_details',
        'contact_details',
        'personal_injury',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
