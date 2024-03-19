<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressureUlcerRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'mark_skin_change_1',
        'mark_skin_change_2',
        'mark_skin_change_3',
        'mark_skin_change_4',
        'mark_skin_change_5',
        'mark_skin_change_6',
        'mark_skin_change_7',
        'mark_skin_change_8',
        'mark_skin_change_9',
        'mark_skin_change_10',
        'mark_skin_change_11',
        'mark_skin_change_12',
        'mark_skin_change_13',
        'mark_skin_change_14',
        'mark_skin_change_15',
        'mark_skin_change_16',
        'mark_skin_change_17',
        'mark_skin_change_18',
        'mark_skin_change_19',
        'mark_skin_change_20',
        'mark_skin_change_21',
        'mark_skin_change_22',
        'mark_skin_change_23',
        'mark_skin_change_24',
        'mark_skin_change_25',
        'mark_skin_change_26',
        'mark_skin_change_27',
        'mark_skin_change_28',
        'mark_skin_change_29',
        'mark_skin_change_30',
        'mark_skin_change_31',
        'mark_skin_change_32',
        'mark_skin_change_33',
        'mark_skin_change_34',
        'mark_skin_change_35',
        'mark_skin_change_36',
        'pressure_sore',
        'location',
        'area',
        'reason',
        'details',
        'name',
        'date',
        'sign',
        'patient_id'
    ];

    protected $casts = [
        'pressure_sore' => 'array',
        'location' => 'array',
        'area' => 'array',
        'reason' => 'array',
        'details' => 'array',
        'name' => 'array',
        'date' => 'array',
        'sign' => 'array',
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
