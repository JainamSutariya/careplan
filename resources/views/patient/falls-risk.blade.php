@extends('layouts.master')

@section('title') Falls Risk Assessment Tool @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Falls Risk Assessment Tool
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<style>
    td, input[type='checkbox'] {
        text-align: center;
        margin-top: 1px;
    }
</style>
@php
    if ($fallsRisk) {
        $gaitBalanceArray = json_decode($fallsRisk->gait_balance, true);
        $sensoryDeficitArray = json_decode($fallsRisk->sensory_deficit, true);
        $fallHistoryArray = json_decode($fallsRisk->fall_history, true);
        $medicationFactorArray = json_decode($fallsRisk->medication_factor, true);
        $mobilityArray = json_decode($fallsRisk->mobility, true);
        $homeArray = json_decode($fallsRisk->home, true);

        $mentalStateArray = json_decode($fallsRisk->mental_state, true);
        $medicalConditionArray = json_decode($fallsRisk->medical_condition, true);
        $nutritionArray = json_decode($fallsRisk->nutrition, true);
        $painMovementArray = json_decode($fallsRisk->pain_movement, true);
        $eliminationArray = json_decode($fallsRisk->elimination, true);
        $clothingFootwearArray = json_decode($fallsRisk->clothing_footwear, true);
        $homeEnvironmentArray = json_decode($fallsRisk->home_environment, true);
    } else {
        $gaitBalanceArray = [];
        $sensoryDeficitArray = [];
        $fallHistoryArray = [];
        $medicationFactorArray = [];
        $mobilityArray = [];
        $homeArray = [];

        $mentalStateArray = [];
        $medicalConditionArray = [];
        $nutritionArray = [];
        $painMovementArray = [];
        $eliminationArray = [];
        $clothingFootwearArray = [];
        $homeEnvironmentArray = [];
    }
@endphp
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeFallsRisk', $patient->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <thead>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Category</td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Score</td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Category</td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Score</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Gait or Balance</td>
                                            <td></td>
                                            <td>Mental State</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Steady</td>
                                            <td>
                                                <input class="form-check-input" name="gait_balance[]" type="checkbox" value="0" id="steady_score" {{ in_array('0', $gaitBalanceArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    0
                                                </label>
                                            </td>
                                            <td>Oriented</td>
                                            <td>
                                                <input class="form-check-input" name="mental_state[]" type="checkbox" value="0" id="oriented_score" {{ in_array('0', $mentalStateArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    0
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hesitate</td>
                                            <td>
                                                <input class="form-check-input" name="gait_balance[]" type="checkbox" value="1" id="hesitate_score" {{ in_array('1', $gaitBalanceArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td>Intermittent confusion</td>
                                            <td>
                                                <input class="form-check-input" name="mental_state[]" type="checkbox" value="1" id="confusion_score" {{ in_array('1', $mentalStateArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Poor Transfer</td>
                                            <td>
                                                <input class="form-check-input" name="gait_balance[]" type="checkbox" value="2" id="poor_score" {{ in_array('2', $gaitBalanceArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    2
                                                </label>
                                            </td>
                                            <td>Confused at all times</td>
                                            <td>
                                                <input class="form-check-input" name="mental_state[]" type="checkbox" value="2" id="confused_score" {{ in_array('2', $mentalStateArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    2
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Unsteady</td>
                                            <td>
                                                <input class="form-check-input" name="gait_balance[]" type="checkbox" value="3" id="unsteady_score" {{ in_array('3', $gaitBalanceArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    3
                                                </label>
                                            </td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Medical Conditions</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Sensory Deficit</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                            <td>Osteoporosis</td>
                                            <td>
                                                <input class="form-check-input" name="medical_condition[]" type="checkbox" value="1" id="osteoporosis_score" {{ in_array('1', $medicalConditionArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Poor Sight</td>
                                            <td>
                                                <input class="form-check-input" name="sensory_deficit[]" type="checkbox" value="1" id="poor_sight" {{ in_array('1', $sensoryDeficitArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td>Cardiac Conditions</td>
                                            <td>
                                                <input class="form-check-input" name="medical_condition[]" type="checkbox" value="2" id="cardiac_score" {{ in_array('2', $medicalConditionArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Poor Hearing</td>
                                            <td>
                                                <input class="form-check-input" name="sensory_deficit[]" type="checkbox" value="2" id="poor_hearing_score" {{ in_array('2', $sensoryDeficitArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td>Respiratory Condition</td>
                                            <td>
                                                <input class="form-check-input" name="medical_condition[]" type="checkbox" value="3" id="respiratory_score" {{ in_array('3', $medicalConditionArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cognitive Impairment</td>
                                            <td>
                                                <input class="form-check-input" name="sensory_deficit[]" type="checkbox" value="3" id="cognitive_score" {{ in_array('3', $sensoryDeficitArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td>Neurological Condition</td>
                                            <td>
                                                <input class="form-check-input" name="medical_condition[]" type="checkbox" value="4" id="neurological_score" {{ in_array('4', $medicalConditionArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Fall History</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                            <td>Endocrine Condition</td>
                                            <td>
                                                <input class="form-check-input" name="medical_condition[]" type="checkbox" value="5" id="endocrine_score" {{ in_array('5', $medicalConditionArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>None</td>
                                            <td>
                                                <input class="form-check-input" name="fall_history[]" type="checkbox" value="0" id="none_score" {{ in_array('0', $fallHistoryArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    0
                                                </label>
                                            </td>
                                            <td>Abnormal Bloods</td>
                                            <td>
                                                <input class="form-check-input" name="medical_condition[]" type="checkbox" value="6" id="abnormal_blood_score" {{ in_array('6', $medicalConditionArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>At Home less then 6 months</td>
                                            <td>
                                                <input class="form-check-input" name="fall_history[]" type="checkbox" value="1" id="home_less_6_month" {{ in_array('1', $fallHistoryArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Nutrition</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                        </tr>
                                        <tr>
                                            <td>Outside Less then 6 months</td>
                                            <td>
                                                <input class="form-check-input" name="fall_history[]" type="checkbox" value="2" id="outside_home_less_6_month" {{ in_array('2', $fallHistoryArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    2
                                                </label>
                                            </td>
                                            <td>Assistance required / Food Supplements</td>
                                            <td>
                                                <input class="form-check-input" name="nutrition[]" type="checkbox" value="2" id="abnormal_blood_score" {{ in_array('2', $nutritionArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    2
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Clinical Setting less then 6 months</td>
                                            <td>
                                                <input class="form-check-input" name="fall_history[]" type="checkbox" value="3" id="clinical_setting_less_6_month" {{ in_array('3', $fallHistoryArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Pain & Movement</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Medication Factor</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                            <td>Pain on movement</td>
                                            <td>
                                                <input class="form-check-input" name="pain_movement[]" type="checkbox" value="1" id="pain_movement_score" {{ in_array('1', $painMovementArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Diuretic / Laxative / Antihypertensive</td>
                                            <td>
                                                <input class="form-check-input" name="medication_factor[]" type="checkbox" value="1" id="pain_movement_score" {{ in_array('1', $medicationFactorArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Elimination</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                        </tr>
                                        <tr>
                                            <td>Sedatives & Hypnotic</td>
                                            <td>
                                                <input class="form-check-input" name="medication_factor[]" type="checkbox" value="2" id="sedatives_score" {{ in_array('2', $medicationFactorArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1 + 1
                                                </label>
                                            </td>
                                            <td>Incontinent / Constipation</td>
                                            <td>
                                                <input class="form-check-input" name="elimination[]" type="checkbox" value="1" id="incontinent_score" {{ in_array('1', $eliminationArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Opioids</td>
                                            <td>
                                                <input class="form-check-input" name="medication_factor[]" type="checkbox" value="3" id="opioids_score" {{ in_array('3', $medicationFactorArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td>Urgency / Frequency</td>
                                            <td>
                                                <input class="form-check-input" name="elimination[]" type="checkbox" value="2" id="urgency_score" {{ in_array('2', $eliminationArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Mobility</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                            <td>Catheter / Stoma</td>
                                            <td>
                                                <input class="form-check-input" name="elimination[]" type="checkbox" value="3" id="catheter_score" {{ in_array('3', $eliminationArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Full</td>
                                            <td>
                                                <input class="form-check-input" name="mobility[]" type="checkbox" value="0" id="full_score" {{ in_array('0', $mobilityArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    0
                                                </label>
                                            </td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Clothing & Footwear</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                        </tr>
                                        <tr>
                                            <td>Uses Aids</td>
                                            <td>
                                                <input class="form-check-input" name="mobility[]" type="checkbox" value="2" id="uses_aids_score" {{ in_array('2', $mobilityArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    2
                                                </label>
                                            </td>
                                            <td>III Fitted clothing</td>
                                            <td>
                                                <input class="form-check-input" name="clothing_footwear[]" type="checkbox" value="1" id="fitted_cloth_score" {{ in_array('1', $clothingFootwearArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Restricted</td>
                                            <td>
                                                <input class="form-check-input" name="mobility[]" type="checkbox" value="3" id="restricted_score" {{ in_array('3', $mobilityArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    3
                                                </label>
                                            </td>
                                            <td>III Fitted shoes</td>
                                            <td>
                                                <input class="form-check-input" name="clothing_footwear[]" type="checkbox" value="2" id="fitted_shoes_score" {{ in_array('2', $clothingFootwearArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bed Bound</td>
                                            <td>
                                                <input class="form-check-input" name="mobility[]" type="checkbox" value="4" id="bed_bound_score" {{ in_array('4', $mobilityArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    2
                                                </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Home</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Home Environment</td>
                                            <td style="background-color:#74788d;color:#eff2f7;"></td>
                                        </tr>
                                        <tr>
                                            <td>Stairs</td>
                                            <td>
                                                <input class="form-check-input" name="home[]" type="checkbox" value="1" id="stairs_score" {{ in_array('1', $homeArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    1
                                                </label>
                                            </td>
                                            <td>Clear of Hazards</td>
                                            <td>
                                                <input class="form-check-input" name="home_environment[]" type="checkbox" value="0" id="clear_hazards_score" {{ in_array('0', $homeEnvironmentArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    0
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Level Access</td>
                                            <td>
                                                <input class="form-check-input" name="home[]" type="checkbox" value="0" id="level_access_score" {{ in_array('0', $homeArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    0
                                                </label>
                                            </td>
                                            <td>Cluttered/Hoarding Concern</td>
                                            <td>
                                                <input class="form-check-input" name="home_environment[]" type="checkbox" value="2" id="cluttered_concern_score" {{ in_array('2', $homeEnvironmentArray) ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;
                                                <label class="form-check-label" for="toast-type-radio1">
                                                    2
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Sub Total A</td>
                                            <td style="background-color:#74788d;color:#eff2f7;" id="total_a"></td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Sub Total B</td>
                                            <td style="background-color:#74788d;color:#eff2f7;" id="total_b"></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#74788d;color:#eff2f7;">Total Risk Score A + B</td>
                                            <td style="background-color:#74788d;color:#eff2f7;" id="score_a_b"></td>
                                            <td style="background-color:#74788d;color:#eff2f7;">Risk Rating:</td>
                                            <td style="background-color:#74788d;color:#eff2f7;" id="risk_rating"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="mitigate_risk" id="mitigateRiskLow" value="0-3" {{ old('mitigate_risk', optional($fallsRisk)->referral_made_ot) == '0-3' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="formRadios1">
                                                    0 - 3 Low
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="mitigate_risk" id="mitigateRiskMedium" value="4-7" {{ old('mitigate_risk', optional($fallsRisk)->mitigate_risk) == '4-7' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="formRadios1">
                                                    4 - 7 Medium
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="mitigate_risk" id="mitigateRiskHigh" value="7-12" {{ old('mitigate_risk', optional($fallsRisk)->mitigate_risk) == '7-12' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="formRadios1">
                                                    7 - 12 High
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="mitigate_risk" id="mitigateRiskExtreme" value="12+" {{ old('mitigate_risk', optional($fallsRisk)->mitigate_risk) == '12+' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="formRadios1">
                                                    12+ Extreme
                                                </label>
                                            </div>
                                            <label class="form-check-label" for="formRadios1">Please consider interventions to mitigate risks</label>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <label class="form-check-label" for="formRadios1">Please provide details of referrals made:</label>
                                            <br>
                                            <br>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-6 col-form-label">Referral made to OT:</label>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_ot" type="radio" id="referral_made_ot" value="Yes" {{ old('referral_made_ot', optional($fallsRisk)->referral_made_ot) == 'Yes' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_ot" type="radio" id="referral_made_ot" value="No" {{ old('referral_made_ot', optional($fallsRisk)->referral_made_ot) == 'No' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <!--<div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Date:</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="referral_made_ot_date" class="form-control" value="{{$fallsRisk->referral_made_ot_date ?? ''}}">
                                                </div>
                                            </div>-->
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-6 col-form-label">Referral made to Physio:</label>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_physio" type="radio" id="referral_made_physio" value="Yes" {{ old('referral_made_physio', optional($fallsRisk)->referral_made_physio) == 'Yes' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_physio" type="radio" id="referral_made_physio" value="No" {{ old('referral_made_physio', optional($fallsRisk)->referral_made_physio) == 'No' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <!--<div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Date:</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="referral_made_physio_date" class="form-control" value="{{$fallsRisk->referral_made_physio_date ?? ''}}">
                                                </div>
                                            </div>-->
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-6 col-form-label">Referral made to GP:</label>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_gp" type="radio" id="referral_made_gp" value="Yes" {{ old('referral_made_gp', optional($fallsRisk)->referral_made_gp) == 'Yes' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_gp" type="radio" id="referral_made_gp" value="No" {{ old('referral_made_gp', optional($fallsRisk)->referral_made_gp) == 'No' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <!--<div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Date:</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="referral_made_gp_date" class="form-control" value="{{$fallsRisk->referral_made_gp_date ?? ''}}">
                                                </div>
                                            </div>-->
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-6 col-form-label">Referral made to SALT Team:</label>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_salt" type="radio" id="referral_made_salt" value="Yes" {{ old('referral_made_salt', optional($fallsRisk)->referral_made_salt) == 'Yes' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-check-input" name="referral_made_salt" type="radio" id="referral_made_salt" value="No" {{ old('referral_made_salt', optional($fallsRisk)->referral_made_salt) == 'No' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toast-type-radio1">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <!--<div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Date:</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="referral_made_salt_date" class="form-control" value="{{$fallsRisk->referral_made_salt_date ?? ''}}">
                                                </div>
                                            </div>-->
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-3 col-form-label">Risk Rating:</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="risk_rating_date" id="risk_rating_date" class="form-control" value="{{$fallsRisk->risk_rating_date ?? ''}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="example-password-input" class="col-md-2 col-form-label"></label>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
        function checkRadioBasedOnScore(score) {
            if (score >= 0 && score <= 3) {
                $('#mitigateRiskLow').prop('checked', true);
                $('#risk_rating').text('Low');
                $('#risk_rating_date').val('Low');
            } else if (score >= 4 && score <= 7) {
                $('#mitigateRiskMedium').prop('checked', true);
                $('#risk_rating').text('Medium');
                $('#risk_rating_date').val('Medium');
            } else if (score >= 8 && score <= 12) {
                $('#mitigateRiskHigh').prop('checked', true);
                $('#risk_rating').text('High');
                $('#risk_rating_date').val('High');
            } else if (score >= 13) {
                $('#mitigateRiskExtreme').prop('checked', true);
                $('#risk_rating').text('Extreme');
                $('#risk_rating_date').val('Extreme');
            }
        }
        function calculateScore() {
            var scoreA = 0; // Initialize scoreA
            var scoreB = 0; // Initialize scoreB

            var checkboxGroups = [
            'gait_balance',
            'sensory_deficit',
            'fall_history',
            'medication_factor',
            'mobility',
            'home',
            ];

            var checkboxGroupsB = [
            'mental_state',
            'medical_condition',
            'nutrition',
            'pain_movement',
            'elimination',
            'clothing_footwear',
            'home_environment',
            ];

            // Calculate scoreA
            $.each(checkboxGroups, function(index, groupName) {
                var values = [];
                $('input[name="' + groupName + '[]"]:checked').each(function() {
                    var value = parseInt($(this).val());
                    if (groupName === 'fall_history' && value === 3) {
                        value = 1;
                    } else if (groupName === 'sensory_deficit' && (value === 2 || value === 3)) {
                        value = 1;
                    } else if (groupName === 'medication_factor' && value === 3) {
                        value = 1;
                    } else if (groupName === 'mobility' && value === 4) {
                        value = 1;
                    }

                    values.push(value);
                });
                var groupValue = values.reduce(function(sum, value) {
                    return sum + value;
                }, 0);

                if (!isNaN(groupValue)) {
                    scoreA += groupValue;
                }
            });

            // Calculate scoreB
            $.each(checkboxGroupsB, function(index, groupName) {
                var values = [];
                $('input[name="' + groupName + '[]"]:checked').each(function() {
                    var value = parseInt($(this).val());
                    if (groupName === 'elimination') {
                        value = 1;
                    } else if (groupName === 'clothing_footwear') {
                        value = 1;
                    } else if (groupName === 'medical_condition') {
                        value = 1;
                    }

                    values.push(value);
                });
                var groupValue = values.reduce(function(sum, value) {
                    return sum + value;
                }, 0);

                if (!isNaN(groupValue)) {
                    scoreB += groupValue;
                }
            });

            $('#score_a_b').text(scoreA + ' + ' + scoreB);
            var score = scoreA + scoreB;
            checkRadioBasedOnScore(score);
        }

        function calculateScoreA() {
            var scoreA = 0;

            var checkboxGroups = [
            'gait_balance',
            'sensory_deficit',
            'fall_history',
            'medication_factor',
            'mobility',
            'home',
            ];

            $.each(checkboxGroups, function(index, groupName) {
                var values = [];
                $('input[name="' + groupName + '[]"]:checked').each(function() {
                    var value = parseInt($(this).val());
                    if (groupName === 'fall_history' && value === 3) {
                        value = 1;
                    } else if (groupName === 'sensory_deficit' && (value === 2 || value === 3)) {
                        value = 1;
                    } else if (groupName === 'medication_factor' && value === 3) {
                        value = 1;
                    } else if (groupName === 'mobility' && value === 4) {
                        value = 1;
                    }

                    values.push(value);
                });
                console.log(groupName, values);
                var groupValue = values.reduce(function(sum, value) {
                    return sum + value;
                }, 0);

                if (!isNaN(groupValue)) {
                    scoreA += groupValue;
                }
            });
            $('#total_a').text(scoreA);
            console.log("Total ScoreA: " + scoreA);
        }
        function calculateScoreB() {
            var scoreB = 0;

            var checkboxGroups = [
            'mental_state',
            'medical_condition',
            'nutrition',
            'pain_movement',
            'elimination',
            'clothing_footwear',
            'home_environment'
            ];

            $.each(checkboxGroups, function(index, groupName) {
                var values = [];
                $('input[name="' + groupName + '[]"]:checked').each(function() {
                    var value = parseInt($(this).val());
                    if (groupName === 'elimination') {
                        value = 1;
                    } else if (groupName === 'clothing_footwear') {
                        value = 1;
                    } else if (groupName === 'medical_condition') {
                        value = 1;
                    }

                    values.push(value);
                });
                console.log(groupName, values);
                var groupValue = values.reduce(function(sum, value) {
                    return sum + value;
                }, 0);

                if (!isNaN(groupValue)) {
                    scoreB += groupValue;
                }
            });
            $('#total_b').text(scoreB);
            console.log("Total ScoreB: " + scoreB);
        }

        $('input[type="checkbox"]').on('click', function() {
            calculateScore();
            calculateScoreA();
            calculateScoreB();
        });
        calculateScore();
        calculateScoreA();
        calculateScoreB();
    });
</script>
@endsection