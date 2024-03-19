<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraNeed extends Model
{
    use HasFactory;

    protected $fillable = [
        'shopping_details',
        'shopping_support',
        'weekly_shopping_limit',
        'who_shopping_pay',
        'shopping_receipt',
        'laundry_details',
        'laundry_support',
        'washing_machine_location',
        'laundry_outside',
        'closest_location_laundry',
        'pay_laundry',
        'laundry_receipt',
        'cleaning_details',
        'cleaning_support',
        'other_details',
        'banking_support_details',
        'banking_support',
        'information_details_office',
        'patient_id'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
