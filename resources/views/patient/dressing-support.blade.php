@extends('layouts.master')

@section('title') Dressing Support @endsection

@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Dressing Support
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<style>
  td input[type='checkbox'] {
    text-align: center;
    margin-top: 10px;
  }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeDressingSupport', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What care and support needs do I currently have?</b></label>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label">I would like to change the clothes,</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="change_cloth[]" type="checkbox" id="change_cloth" value="Morning" {{ CheckboxHelper::isChecked('Morning', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Morning
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="change_cloth[]" type="checkbox" id="change_cloth" value="Evening" {{ CheckboxHelper::isChecked('Evening', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Evening
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="change_cloth[]" type="checkbox" id="change_cloth" value="When it’s Wet" {{ CheckboxHelper::isChecked('When it’s Wet', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            When it’s Wet
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="change_cloth[]" type="checkbox" id="change_cloth" value="Other" {{ CheckboxHelper::isChecked('Other', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                        <textarea class="form-control change_cloth_other" name="change_cloth_other" style="@if(CheckboxHelper::isChecked('Other', $checkedValues)) display: block; @else display: none; @endif" rows="2">{{$dressingSupport->change_cloth_other ?? ''}}</textarea>
                    </div>
                    <br>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label"><b>while I am seated in</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name=dressing_while" type="radio" id="dressing_while" value="Bedroom" {{ old('dressing_while', optional($dressingSupport)->dressing_while) == 'Bedroom' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bedroom
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="dressing_while" type="radio" id="dressing_while" value="Bathroom" {{ old('dressing_while', optional($dressingSupport)->dressing_while) == 'Bathroom' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bathroom
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="dressing_while" type="radio" id="dressing_while" value="Kitchen" {{ old('dressing_while', optional($dressingSupport)->dressing_while) == 'Kitchen' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Kitchen
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="dressing_while" type="radio" id="dressing_while" value="Living Room" {{ old('dressing_while', optional($dressingSupport)->dressing_while) == 'Living Room' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Living Room
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="dressing_while" type="radio" id="dressing_while" value="Other" {{ old('dressing_while', optional($dressingSupport)->dressing_while) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                        <textarea class="form-control dressing_while_other" name="dressing_while_other" style="@if(old('dressing_while', optional($dressingSupport)->dressing_while) == 'Other') display: block; @else display: none; @endif" rows="2">{{$dressingSupport->dressing_while_other ?? ''}}</textarea>
                    </div>
                    <br>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label"><b>while I am seated on,</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Chair" {{ old('while_seated', optional($dressingSupport)->while_seated) == 'Chair' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Chair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Bed" {{ old('while_seated', optional($dressingSupport)->while_seated) == 'Bed' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bed
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Commode" {{ old('while_seated', optional($dressingSupport)->while_seated) == 'Commode' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Commode
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Other" {{ old('while_seated', optional($dressingSupport)->while_seated) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                        <textarea class="form-control while_seated_other" name="while_seated_other" style="@if(old('while_seated', optional($dressingSupport)->while_seated) == 'Other') display: block; @else display: none; @endif" rows="2">{{$dressingSupport->while_seated_other ?? ''}}</textarea>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Strength</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Upper Body Strength</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                          <input class="form-check-input" name="upper_body_strength[]" type="checkbox" id="upper_body_right_hand" value="Lift my right hand" {{ CheckboxHelper::isChecked('Lift my right hand', $checkedValues1) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Lift my right hand
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="upper_body_strength[]" type="checkbox" id="upper_body_left_hand" value="Lift my left hand" {{ CheckboxHelper::isChecked('Lift my right hand', $checkedValues1) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Lift my left hand
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="upper_body_strength[]" type="checkbox" id="upper_body_turn_bed" value="Turn and hold the bed rails" {{ CheckboxHelper::isChecked('Turn and hold the bed rails', $checkedValues1) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Turn and hold the bed rails
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="upper_body_strength[]" type="checkbox" id="upper_body_equipment" value="Hold the Equipment" {{ CheckboxHelper::isChecked('Hold the Equipment', $checkedValues1) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Hold the Equipment
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="upper_body_strength[]" type="checkbox" id="upper_body_furniture" value="Hold the Furniture" {{ CheckboxHelper::isChecked('Hold the Furniture', $checkedValues1) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Hold the Furniture
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="upper_body_strength[]" type="checkbox" id="upper_body_strength_other" value="Other" {{ CheckboxHelper::isChecked('Other', $checkedValues1) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <input type="text" class="form-control" name="upper_body_strength_other_text" id="upper_body_strength_other_text" style="{{ CheckboxHelper::isChecked('Other', $checkedValues1) ? '' : 'display: none;' }}" value="{{$dressingSupport->upper_body_strength_other_text ?? ''}}">
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Lower Body Strength</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Stand up from Bed / Chair</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="stand_up_strength" type="radio" id="stand_up_strength" value="Chair" {{ old('stand_up_strength', optional($dressingSupport)->stand_up_strength) == 'Chair' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Chair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="stand_up_strength" type="radio" id="stand_up_strength" value="Bed" {{ old('stand_up_strength', optional($dressingSupport)->stand_up_strength) == 'Bed' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                          Bed
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                          <input class="form-check-input" name="lower_body_strength[]" type="checkbox" id="lower_body_stand_up" value="Stand up and Hold the equipment" {{ CheckboxHelper::isChecked('Stand up and Hold the equipment', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Stand up and Hold the equipment
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="lower_body_strength[]" type="checkbox" id="lower_body_left_leg" value="Lift my left leg" {{ CheckboxHelper::isChecked('Lift my left leg', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Lift my left leg
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="lower_body_strength[]" type="checkbox" id="lower_body_rigth_leg" value="Lift my right leg" {{ CheckboxHelper::isChecked('Lift my right leg', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Lift my right leg
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="lower_body_strength[]" type="checkbox" id="lower_body_strength_other" value="Other" {{ CheckboxHelper::isChecked('Other', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <input type="text" class="form-control" name="lower_body_strength_other_text" id="lower_body_strength_other_text" style="{{ CheckboxHelper::isChecked('Other', $checkedValues2) ? '' : 'display: none;' }}" value="{{$dressingSupport->lower_body_strength_other_text ?? ''}}">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>What are my desired outcomes?</b></label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tbody>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_health_condition" {{ old('maintain_health_condition', optional($dressingSupport)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to maintain my health conditions</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="remain_healthy" {{ old('remain_healthy', optional($dressingSupport)->remain_healthy) == 'on' ? 'checked' : '' }}></td>
                                            <td>For my skin to remain healthy and not to get any sore</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maximize_my_independence" {{ old('maximize_my_independence', optional($dressingSupport)->maximize_my_independence) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maximize my independence</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_not_fall" {{ old('desire_not_fall', optional($dressingSupport)->desire_not_fall) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire not to have a fall.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_dignity_privacy" {{ old('maintain_dignity_privacy', optional($dressingSupport)->maintain_dignity_privacy) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my dignity and privacy.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="healthey_lifestyle" {{ old('healthey_lifestyle', optional($dressingSupport)->healthey_lifestyle) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my healthey lifestyle</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_clean_smart" {{ old('desire_clean_smart', optional($dressingSupport)->desire_clean_smart) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to be a clean and smart as I always prefer to be smart looking.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_good_relationship" {{ old('maintain_good_relationship', optional($dressingSupport)->maintain_good_relationship) == 'on' ? 'checked' : '' }}></td>
                                            <td>I prefer to maintain a good relationship with my family</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="avoid_unnecessary_hospital" {{ old('avoid_unnecessary_hospital', optional($dressingSupport)->avoid_unnecessary_hospital) == 'on' ? 'checked' : '' }}></td>
                                            <td>To avoid unnecessary hospital admission.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="quality_life" {{ old('quality_life', optional($dressingSupport)->quality_life) == 'on' ? 'checked' : '' }}></td>
                                            <td>To improve my quality of life</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                @php
                                  $text1 = '';
                                  $text2 = '';
                                  $text3 = '';
                                  $text4 = '';
                                  $otherOutcomesText = $dressingSupport->other_outcomes_text ?? null;
                                @endphp
                                @if ($otherOutcomesText)
                                  @foreach (json_decode($otherOutcomesText) as $key => $value)
                                    @php
                                      if ($key == 0) {
                                        $text1 = $value;
                                      } elseif ($key == 1) {
                                        $text2 = $value;
                                      } elseif ($key == 2) {
                                        $text3 = $value;
                                      } else {
                                        $text4 = $value;
                                      }
                                    @endphp
                                  @endforeach
                                @endif
                                <label for="basicpill-firstname-input">Other Outcome (if they have any):</label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_1" {{ old('other_outcomes_check_1', optional($dressingSupport)->other_outcomes_check_1) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text1}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_2" {{ old('other_outcomes_check_2', optional($dressingSupport)->other_outcomes_check_2) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text2}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_3" {{ old('other_outcomes_check_3', optional($dressingSupport)->other_outcomes_check_3) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text3}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_4" {{ old('other_outcomes_check_4', optional($dressingSupport)->other_outcomes_check_4) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text4}}"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>How do I want staff to support me to achieve my desired outcomes?</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I prefer to get the consent before care (refer communication section for more details).</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I prefer the care staff to maintain my privacy and dignity (refer privacy and dignity section for more detail)</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I would like to have support from</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="1 Carer" {{ old('support_from', optional($dressingSupport)->support_from) == '1 Carer' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            1 Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="2 Carer" {{ old('support_from', optional($dressingSupport)->support_from) == '2 Carer' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            2 Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Independent" {{ old('support_from', optional($dressingSupport)->support_from) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Supervision Only" {{ old('support_from', optional($dressingSupport)->support_from) == 'Supervision Only' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Supervision Only
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Other" {{ old('support_from', optional($dressingSupport)->support_from) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">to maintain most aspect of my personal care.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I would like to wear clothes, (please specify which types of clothes)</label>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="basicpill-firstname-input"><b>Additional Things</b></label>
                          <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                            <tr>
                              <td>Morning</td>
                              <td>
                                <input class="form-check-input" name="morning_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="morning_wear_clothes_trouser" value="Trouser" {{ CheckboxHelper::isChecked('Trouser', $checkedMorningClothes) ? 'checked' : '' }}>Trouser /
                                <input class="form-check-input" name="morning_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="morning_wear_clothes_tshirt" value="T-Shirt" {{ CheckboxHelper::isChecked('T-Shirt', $checkedMorningClothes) ? 'checked' : '' }}>T-Shirt /
                                <input class="form-check-input" name="morning_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="morning_wear_clothes_jumper" value="Jumper" {{ CheckboxHelper::isChecked('Jumper', $checkedMorningClothes) ? 'checked' : '' }}>Jumper /
                                <input class="form-check-input" name="morning_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="morning_wear_clothes_other" value="Other" {{ CheckboxHelper::isChecked('Other', $checkedMorningClothes) ? 'checked' : '' }}>Other
                                <input class="form-control" name="morning_wear_clothes_other_text" type="text" id="morning_wear_clothes_other_text" value="{{$dressingSupport->morning_wear_clothes_other_text ?? ''}}" style="{{ CheckboxHelper::isChecked('Other', $checkedMorningClothes) ? '' : 'display:none;' }}">
                              </td>
                            </tr>
                            <tr>
                              <td>Evening</td>
                              <td>
                                <input class="form-check-input" name="evening_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="evening_wear_clothes_trouser" value="Trouser" {{ CheckboxHelper::isChecked('Trouser', $checkedEveningClothes) ? 'checked' : '' }}>Trouser /
                                <input class="form-check-input" name="evening_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="evening_wear_clothes_tshirt" value="T-Shirt" {{ CheckboxHelper::isChecked('T-Shirt', $checkedEveningClothes) ? 'checked' : '' }}>T-Shirt /
                                <input class="form-check-input" name="evening_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="evening_wear_clothes_jumper" value="Jumper" {{ CheckboxHelper::isChecked('Jumper', $checkedEveningClothes) ? 'checked' : '' }}>Jumper /
                                <input class="form-check-input" name="evening_wear_clothes[]" type="checkbox" style="margin-top: 3px;" id="evening_wear_clothes_other" value="Other" {{ CheckboxHelper::isChecked('Other', $checkedEveningClothes) ? 'checked' : '' }}>Other
                                <input class="form-control" name="evening_wear_clothes_other_text" type="text" id="evening_wear_clothes_other_text" value="{{$dressingSupport->evening_wear_clothes_other_text ?? ''}}" style="{{ CheckboxHelper::isChecked('Other', $checkedEveningClothes) ? '' : 'display:none;' }}">
                              </td>
                            </tr>
                            <tr>
                              <td>Other</td>
                              <td><input type="text" name="other_details" class="form-control" value="{{$dressingSupport->other_details ?? ''}}"></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label">while I am seated in,</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="seated_in_bedroom" type="checkbox" id="seated_in_bedroom" value="Bedroom" {{ old('evening_wear_clothes', optional($dressingSupport)->evening_wear_clothes) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bedroom
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="seated_in_bathroom" type="checkbox" id="seated_in_bathroom" value="Bathroom" {{ old('seated_in_living_room', optional($dressingSupport)->seated_in_living_room) == 'Bathroom' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bathroom
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="seated_in_kitchen" type="checkbox" id="seated_in_kitchen" value="Kitchen" {{ old('seated_in_living_room', optional($dressingSupport)->seated_in_living_room) == 'Kitchen' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Kitchen
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="seated_in_living_room" type="checkbox" id="seated_in_living_room" value="Living Room" {{ old('seated_in_living_room', optional($dressingSupport)->seated_in_living_room) == 'Living Room' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Living Room
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="seated_in_living_room" type="checkbox" id="seated_in_other" value="Other" {{ old('seated_in_living_room', optional($dressingSupport)->seated_in_living_room) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label">while I am seated on,</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="seated_on_chair" type="checkbox" id="seated_on_chair" value="Chair" {{ old('seated_on_other', optional($dressingSupport)->seated_on_other) == 'Chair' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Chair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="seated_on_bed" type="checkbox" id="seated_on_bed" value="Bed" {{ old('seated_on_other', optional($dressingSupport)->seated_on_other) == 'Bed' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                          Bed
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="seated_on_commode" type="checkbox" id="seated_on_commode" value="Commode" {{ old('seated_on_other', optional($dressingSupport)->seated_on_other) == 'Commode' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                          Commode
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="seated_on_other" type="checkbox" id="seated_on_other" value="Other" {{ old('seated_on_other', optional($dressingSupport)->seated_on_other) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>My clothes</b></label>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="basicpill-firstname-input"><b>Additional Things</b></label>
                          <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                            <tr>
                              <td>Wardrobe Location</td>
                              <td>
                                Bedroom ===
                                <input class="form-check-input" name="wardrobe_location" type="radio" id="wardrobe_location_left_side" value="Left Side" {{ old('wardrobe_location', optional($dressingSupport)->wardrobe_location) == 'Left Side' ? 'checked' : '' }}>Left Side /
                                <input class="form-check-input" name="wardrobe_location" type="radio" id="wardrobe_location_right_side" value="Right Side" {{ old('wardrobe_location', optional($dressingSupport)->wardrobe_location) == 'Right Side' ? 'checked' : '' }}>Right Side /
                                <input class="form-check-input" name="wardrobe_location" type="radio" id="wardrobe_location_bed" value="Next to Bed" {{ old('wardrobe_location', optional($dressingSupport)->wardrobe_location) == 'Next to Bed' ? 'checked' : '' }}>Next to Bed /
                                <input class="form-check-input" name="wardrobe_location" type="radio" id="wardrobe_location_other" value="Other" {{ old('wardrobe_location', optional($dressingSupport)->wardrobe_location) == 'Other' ? 'checked' : '' }}>Other
                                <input class="form-control" name="wardrobe_location_other_text" type="text" id="wardrobe_location_other_text" value="{{$dressingSupport->wardrobe_location_other_text ?? ''}}" style="{{ old('wardrobe_location', optional($dressingSupport)->wardrobe_location) == 'Other' ? '' : 'display:none;' }}">
                              </td>
                            </tr>
                            <tr>
                              <td>Clothes Kept</td>
                              <td>
                                <input class="form-check-input" name="clothes_kept" type="radio" id="clothes_kept_bedroom" value="Bedrom" {{ old('clothes_kept', optional($dressingSupport)->clothes_kept) == 'Bedrom' ? 'checked' : '' }}>Bedroom /
                                <input class="form-check-input" name="clothes_kept" type="radio" id="clothes_kept_conservatory" value="Conservatory" {{ old('clothes_kept', optional($dressingSupport)->clothes_kept) == 'Conservatory' ? 'checked' : '' }}>Conservatory  /
                                <input class="form-check-input" name="clothes_kept" type="radio" id="clothes_kept_other" value="Other" {{ old('clothes_kept', optional($dressingSupport)->clothes_kept) == 'Other' ? 'checked' : '' }}>Other
                                <input class="form-control" name="clothes_kept_other" type="text" id="clothes_kept_other_text" value="{{$dressingSupport->clothes_kept_other_text ?? ''}}" style="{{ old('dirty_clothes', optional($dressingSupport)->dirty_clothes) == 'Other' ? '' : 'display:none;' }}">
                              </td>
                            </tr>
                            <tr>
                              <td>Dirty Clothes Need to Put</td>
                              <td>
                                <input class="form-check-input" name="dirty_clothes" type="radio" id="dirty_clothes_bathroom_basket" value="Bathroom Laundry Basket" {{ old('dirty_clothes', optional($dressingSupport)->dirty_clothes) == 'Bathroom Laundry Basket' ? 'checked' : '' }}>Bathroom Laundry Basket /
                                <input class="form-check-input" name="dirty_clothes" type="radio" id="dirty_clothes_kitchen_laundry_basket" value="Kitchen Laundry Basket" {{ old('dirty_clothes', optional($dressingSupport)->dirty_clothes) == 'Kitchen Laundry Basket' ? 'checked' : '' }}>Kitchen Laundry Basket  /
                                <input class="form-check-input" name="dirty_clothes" type="radio" id="dirty_clothes_direct_washing" value="Direct in Washing Machine" {{ old('dirty_clothes', optional($dressingSupport)->dirty_clothes) == 'Direct in Washing Machine' ? 'checked' : '' }}>Direct in Washing Machine
                                <input class="form-check-input" name="dirty_clothes" type="radio" id="dirty_clothes_other" value="Other" {{ old('dirty_clothes', optional($dressingSupport)->dirty_clothes) == 'Other' ? 'checked' : '' }}>Other
                                <input class="form-control" name="dirty_clothes_other_text" type="text" id="dirty_clothes_other_text" value="{{$dressingSupport->dirty_clothes_other_text ?? ''}}" style="{{ old('dirty_clothes', optional($dressingSupport)->dirty_clothes) == 'Other' ? '' : 'display:none;' }}">
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="basicpill-firstname-input"><b>Additional Things</b></label>
                          <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                            <tr>
                              <td><input type="checkbox" name="additional_thing_1" {{ old('additional_thing_1', optional($dressingSupport)->additional_thing_1) == 'on' ? 'checked' : '' }}></td>
                              <td>I prefer the care staff to apply the prescribed cream, monitor my skin integrity (refer the skin integrity section for further details)</td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="additional_thing_2" {{ old('additional_thing_2', optional($dressingSupport)->additional_thing_2) == 'on' ? 'checked' : '' }}></td>
                              <td>I prefer the care staff to support me to maintain my continence care (refer the incontinence care section for further details)</td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="additional_thing_3" {{ old('additional_thing_3', optional($dressingSupport)->additional_thing_3) == 'on' ? 'checked' : '' }}></td>
                              <td>I prefer the care staff to mop the floor / put the toiletries appropriately and make sure the area they have used is clean.</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#upper_body_strength_other').change(function() {
      if($(this).is(":checked")) {
        $('#upper_body_strength_other_text').show();
      } else {
        $('#upper_body_strength_other_text').hide();
      }
    });
    $('#lower_body_strength_other').change(function() {
      if($(this).is(":checked")) {
        $('#lower_body_strength_other_text').show();
      } else {
        $('#lower_body_strength_other_text').hide();
      }
    });

    $('#wardrobe_location_other').change(function() {
      if($(this).is(":checked")) {
        $('#wardrobe_location_other_text').show();
      } else {
        $('#wardrobe_location_other_text').hide();
      }
    });
    $('#clothes_kept_other').change(function() {
      if($(this).is(":checked")) {
        $('#clothes_kept_other_text').show();
      } else {
        $('#clothes_kept_other_text').hide();
      }
    });
    $('#dirty_clothes_other').change(function() {
      if($(this).is(":checked")) {
        $('#dirty_clothes_other_text').show();
      } else {
        $('#dirty_clothes_other_text').hide();
      }
    });

    function toggleWhileSeatedOther() {
      var isOtherChecked = $('input[name="change_cloth[]"][value="Other"]').is(':checked');
      $('.change_cloth_other').toggle(isOtherChecked);
    }

    $('input[name="change_cloth[]"]').change(function () {
      toggleWhileSeatedOther();
    });
    toggleWhileSeatedOther();

    $('input[name="dressing_while"][value="Other"]').on('click', function() {
      $('.dressing_while_other').show();
    });

    $('input[name="dressing_while"]').not('[value="Other"]').on('click', function() {
      $('.dressing_while_other').hide();
    });

    $('input[name="while_seated"][value="Other"]').on('click', function() {
      $('.while_seated_other').show();
    });

    $('input[name="while_seated"]').not('[value="Other"]').on('click', function() {
      $('.while_seated_other').hide();
    });

    function toggleEveningClothesOther() {
      var isOtherChecked = $('input[name="evening_wear_clothes[]"][value="Other"]').is(':checked');
      $('#evening_wear_clothes_other_text').toggle(isOtherChecked);
    }

    $('input[name="evening_wear_clothes[]"]').change(function () {
      toggleEveningClothesOther();
    });
    toggleEveningClothesOther();

    function toggleMorningClothesOther() {
      var isOtherChecked = $('input[name="morning_wear_clothes[]"][value="Other"]').is(':checked');
      $('#morning_wear_clothes_other_text').toggle(isOtherChecked);
    }

    $('input[name="morning_wear_clothes[]"]').change(function () {
      toggleMorningClothesOther();
    });
    toggleMorningClothesOther();

  });
</script>
@endsection