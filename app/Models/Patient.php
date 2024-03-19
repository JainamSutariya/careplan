<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_no',
        'email',
        'address',
        'dob',
        'status',
        'user_id'
    ];

    public function myLifeStyle() {
        return $this->hasOne(MyLifeStyle::class, 'patient_id');
    }

    public function allergies() {
        return $this->hasOne(Allergies::class, 'patient_id');
    }

    public function personalContactDetails() {
        return $this->hasOne(PersonalContactDetails::class, 'patient_id');
    }

    public function myInformation() {
        return $this->hasOne(MyInformation::class, 'patient_id');
    }

    public function myHealth() {
        return $this->hasOne(MyHealth::class, 'patient_id');
    }

    public function mobilityAndTransferRisk() {
        return $this->hasOne(MobilityAndTransferRisk::class, 'patient_id');
    }

    public function mobility() {
        return $this->hasOne(Mobility::class, 'patient_id');
    }

    public function fireSafetyRisk() {
        return $this->hasOne(FireSafetyRisk::class, 'patient_id');
    }

    public function enviromentalRisk() {
        return $this->hasOne(EnviromentalRisk::class, 'patient_id');
    }

    public function covidTest() {
        return $this->hasOne(CovidTest::class, 'patient_id');
    }

    public function communication() {
        return $this->hasOne(Communication::class, 'patient_id');
    }

    public function generalTidyUp() {
        return $this->hasOne(GeneralTidyUp::class, 'patient_id');
    }

    public function extraNeed() {
        return $this->hasOne(ExtraNeed::class, 'patient_id');
    }

    public function endLife() {
        return $this->hasOne(EndLife::class, 'patient_id');
    }

    public function socialInterestActivities() {
        return $this->hasOne(SocialInterestActivities::class, 'patient_id');
    }

    public function dietaryRisk() {
        return $this->hasOne(DietaryRisk::class, 'patient_id');
    }

    public function medicationRisk() {
        return $this->hasOne(MedicationRisk::class, 'patient_id');
    }

    public function restraintRisk() {
        return $this->hasOne(RestraintRisk::class, 'patient_id');
    }

    public function fallsRisk() {
        return $this->hasOne(FallsRisk::class, 'patient_id');
    }

    public function personalCare() {
        return $this->hasOne(PersonalCare::class, 'patient_id');
    }

    public function washAndShower() {
        return $this->hasOne(WashAndShower::class, 'patient_id');
    }

    public function dressingSupport() {
        return $this->hasOne(DressingSupport::class, 'patient_id');
    }

    public function skinCare() {
        return $this->hasOne(SkinCare::class, 'patient_id');
    }

    public function nutritionHydration() {
        return $this->hasOne(NutritionHydration::class, 'patient_id');
    }

    public function emergencyActionPlan() {
        return $this->hasOne(EmergencyActionPlan::class, 'patient_id');
    }

    public function adaptedWalsallScore() {
        return $this->hasOne(AdaptedWalsallScore::class, 'patient_id');
    }

    public function continenceCare() {
        return $this->hasOne(ContinenceCare::class, 'patient_id');
    }

    public function pressureUlcerRecordTool() {
        return $this->hasOne(PressureUlcerRecord::class, 'patient_id');
    }

    public function preferredCallSupport() {
        return $this->hasOne(MyPreferredCallSupport::class, 'patient_id');
    }

    public function medication() {
        return $this->hasOne(Medication::class, 'patient_id');
    }
}
