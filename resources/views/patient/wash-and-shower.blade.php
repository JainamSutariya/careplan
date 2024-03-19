@extends('layouts.master')

@section('title') Wash and Shower @endsection

@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Wash and Shower
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<style>
  td, input[type='checkbox'] {
    text-align: center;
    margin-top: 10px;
  }
  .form-check-input {
    margin-top: 0px !important;
    margin-bottom: 10px !important;
  }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeWashAndShower', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What care and support needs do I currently have?</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">I would like to have,</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_care_need[]" type="checkbox" id="support_care_need" value="Strip Wash" {{ CheckboxHelper::isChecked('Strip Wash', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Strip Wash
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_care_need[]" type="checkbox" id="support_care_need" value="Shower" {{ CheckboxHelper::isChecked('Shower', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Shower
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_care_need[]" type="checkbox" id="support_care_need" value="Bed Wash" {{ CheckboxHelper::isChecked('Bed Wash', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bed Wash
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label"></label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="strip_wash_radio" type="radio" id="support_care_need_days" value="Every Day" {{ old('strip_wash_radio', optional($washAndShower)->strip_wash_radio) == 'Every Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Day
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="shower_radio" type="radio" id="support_care_need_days" value="Every Day" {{ old('shower_radio', optional($washAndShower)->shower_radio) == 'Every Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Day
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="bed_wash_radio" type="radio" id="support_care_need_days" value="Every Day" {{ old('bed_wash_radio', optional($washAndShower)->bed_wash_radio) == 'Every Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Day
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label"></label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="strip_wash_radio" type="radio" id="strip_wash_radio" value="Every Other Day" {{ old('strip_wash_radio', optional($washAndShower)->strip_wash_radio) == 'Every Other Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Other Day
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="shower_radio" type="radio" id="shower_radio" value="Every Other Day" {{ old('shower_radio', optional($washAndShower)->shower_radio) == 'Every Other Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Other Day
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="bed_wash_radio" type="radio" id="bed_wash_radio" value="Every Other Day" {{ old('bed_wash_radio', optional($washAndShower)->bed_wash_radio) == 'Every Other Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Other Day
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label"></label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="strip_wash_radio" type="radio" id="strip_wash_radio" value="Once a Week" {{ old('strip_wash_radio', optional($washAndShower)->strip_wash_radio) == 'Once a Week' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Once a Week
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="shower_radio" type="radio" id="shower_radio" value="Once a Week" {{ old('shower_radio', optional($washAndShower)->shower_radio) == 'Once a Week' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Once a Week
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="bed_wash_radio" type="radio" id="bed_wash_radio" value="Once a Week" {{ old('bed_wash_radio', optional($washAndShower)->bed_wash_radio) == 'Once a Week' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Once a Week
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label"><b>I would like to take a wash, while I am in</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="take_wash_while" type="radio" id="take_wash_while" value="Bedroom" {{ old('take_wash_while', optional($washAndShower)->take_wash_while) == 'Bedroom' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bedroom
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="take_wash_while" type="radio" id="take_wash_while" value="Bathroom" {{ old('take_wash_while', optional($washAndShower)->take_wash_while) == 'Bathroom' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bathroom
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="take_wash_while" type="radio" id="take_wash_while" value="Kitchen" {{ old('take_wash_while', optional($washAndShower)->take_wash_while) == 'Kitchen' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Kitchen
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="take_wash_while" type="radio" id="take_wash_while" value="Living Room" {{ old('take_wash_while', optional($washAndShower)->take_wash_while) == 'Living Room' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Living Room
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="take_wash_while" type="radio" id="take_wash_while" value="Other" {{ old('take_wash_while', optional($washAndShower)->take_wash_while) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                        <textarea class="form-control take_wash_while_other" name="take_wash_while_other" style="@if($washAndShower && $washAndShower->take_wash_while && $washAndShower->take_wash_while == 'Other') display: block; @else display: none; @endif" rows="2">{{$washAndShower->take_wash_while_other ?? ''}}</textarea>
                    </div>
                    <br>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label"><b>while I am seated on,</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Chair" {{ old('while_seated', optional($washAndShower)->while_seated) == 'Chair' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Chair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Bed" {{ old('while_seated', optional($washAndShower)->while_seated) == 'Bed' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bed
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Commode" {{ old('while_seated', optional($washAndShower)->while_seated) == 'Commode' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Commode
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="while_seated" type="radio" id="while_seated" value="Other" {{ old('while_seated', optional($washAndShower)->while_seated) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label"><b>I would like to take a hair wash,</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                          <input class="form-check-input" name="hair_wash" type="radio" id="hair_wash" value="Every Day" {{ old('hair_wash', optional($washAndShower)->hair_wash) == 'Every Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Day
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="hair_wash" type="radio" id="hair_wash" value="Every Other Day" {{ old('hair_wash', optional($washAndShower)->hair_wash) == 'Every Other Day' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Every Other Day
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="hair_wash" type="radio" id="hair_wash" value="Once a Week" {{ old('hair_wash', optional($washAndShower)->hair_wash) == 'Once a Week' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Once a Week
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>I would like to wash my hair while I am in,</b></label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="wash_hair_while" type="radio" id="wash_hair_while" value="Bedroom" {{ old('wash_hair_while', optional($washAndShower)->wash_hair_while) == 'Bedroom' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bedroom
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="wash_hair_while" type="radio" id="wash_hair_while" value="Bathroom" {{ old('wash_hair_while', optional($washAndShower)->wash_hair_while) == 'Bathroom' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bathroom
                          </label>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Strength</b></label>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-md-6">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Upper body Strength</b></label>
                        <div class="col-md-12">
                          <input class="form-check-input" name="strength" type="radio" id="strength" value="Good" {{ old('strength', optional($washAndShower)->strength) == 'Good' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Good
                          </label>
                        </div>
                        <div class="col-md-12">
                          <input class="form-check-input" name="strength" type="radio" id="strength" value="Struggling" {{ old('strength', optional($washAndShower)->strength) == 'Struggling' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Struggling
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Lower body Strength</b></label>
                        <div class="col-md-12">
                          <input class="form-check-input" name="lower_strength" type="radio" id="lower_strength" value="Good" {{ old('lower_strength', optional($washAndShower)->lower_strength) == 'Good' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Good
                          </label>
                        </div>
                        <div class="col-md-12">
                          <input class="form-check-input" name="lower_strength" type="radio" id="lower_strength" value="Struggling" {{ old('lower_strength', optional($washAndShower)->lower_strength) == 'Struggling' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Struggling
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Can Able</b></label>
                        <div class="col-md-12">
                          <input class="form-check-input" name="can_able" type="radio" id="can_able" value="To bear my weight" {{ old('can_able', optional($washAndShower)->can_able) == 'To bear my weight' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            To bear my weight
                          </label>
                        </div>
                        <div class="col-md-12">
                          <input class="form-check-input" name="can_able" type="radio" id="can_able" value="Dependent on the Care Staff" {{ old('can_able', optional($washAndShower)->can_able) == 'Dependent on the Care Staff' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Dependent on the Care Staff
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Sit Unattended</b></label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="sit_unattended" type="radio" id="sit_unattended" value="Yes" {{ old('sit_unattended', optional($washAndShower)->sit_unattended) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="sit_unattended" type="radio" id="sit_unattended" value="No" {{ old('sit_unattended', optional($washAndShower)->sit_unattended) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label"><b>Wash</b></label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="wash[]" type="checkbox" id="wash" value="Face" {{ CheckboxHelper::isChecked('Face', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Face
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="wash[]" type="checkbox" id="wash" value="Hand" {{ CheckboxHelper::isChecked('Hand', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Hand
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="wash[]" type="checkbox" id="wash" value="Front" {{ CheckboxHelper::isChecked('Front', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Front
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="wash[]" type="checkbox" id="wash" value="Body Part" {{ CheckboxHelper::isChecked('Body Part', $checkedValues2) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Body Part
                          </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>What are my desired outcomes?</b></label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tbody>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_health_condition" {{ old('maintain_health_condition', optional($washAndShower)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to maintain my health conditions</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="remain_healthy" {{ old('remain_healthy', optional($washAndShower)->remain_healthy) == 'on' ? 'checked' : '' }}></td>
                                            <td>For my skin to remain healthy and not to get any sore</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maximize_my_independence" {{ old('desire_not_fall', optional($washAndShower)->desire_not_fall) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maximize my independence</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_not_fall" {{ old('desire_not_fall', optional($washAndShower)->desire_not_fall) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire not to have a fall.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_dignity_privacy" {{ old('maintain_dignity_privacy', optional($washAndShower)->maintain_dignity_privacy) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my dignity and privacy.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="quality_life" {{ old('quality_life', optional($washAndShower)->quality_life) == 'on' ? 'checked' : '' }}></td>
                                            <td>To improve my quality of life</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_clean_smart" {{ old('maintain_good_relationship', optional($washAndShower)->maintain_good_relationship) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to be a clean and smart as I always prefer to be smart looking.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_good_relationship" {{ old('maintain_good_relationship', optional($washAndShower)->maintain_good_relationship) == 'on' ? 'checked' : '' }}></td>
                                            <td>I prefer to maintain a good relationship with my family</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="avoid_unnecessary_hospital" {{ old('avoid_unnecessary_hospital', optional($washAndShower)->avoid_unnecessary_hospital) == 'on' ? 'checked' : '' }}></td>
                                            <td>To avoid unnecessary hospital admission.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_healthey_lifestyle" {{ old('avoid_unnecessary_hospital', optional($washAndShower)->avoid_unnecessary_hospital) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my healthey lifestyle.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                @php
                                  $check1 = '';
                                  $check2 = '';
                                  $check3 = '';
                                  $check4 = '';
                                  $check5 = '';
                                  $check6 = '';
                                  $check7 = '';
                                  $check8 = '';
                                  $text1 = '';
                                  $text2 = '';
                                  $text3 = '';
                                  $text4 = '';
                                  $text5 = '';
                                  $text6 = '';
                                  $text7 = '';
                                  $text8 = '';
                                  $otherOutcomesCheck = $washAndShower->other_outcomes_check ?? null;
                                  $otherOutcomesText = $washAndShower->other_outcomes_text ?? null;
                                @endphp
                                @if ($otherOutcomesCheck)
                                  @foreach (json_decode($otherOutcomesCheck) as $key => $value)
                                    @php
                                      if ($key == 0) {
                                        $check1 = $value;
                                      } elseif ($key == 1) {
                                        $check2 = $value;
                                      } elseif ($key == 2) {
                                        $check3 = $value;
                                      } elseif ($key == 3) {
                                        $check4 = $value;
                                      } elseif ($key == 4) {
                                        $check5 = $value;
                                      } elseif ($key == 5) {
                                        $check6 = $value;
                                      } elseif ($key == 6) {
                                        $check7 = $value;
                                      } else {
                                        $check8 = $value;
                                      }
                                    @endphp
                                  @endforeach
                                @endif
                                @if ($otherOutcomesText)
                                  @foreach (json_decode($otherOutcomesText) as $key => $value)
                                    @php
                                      if ($key == 0) {
                                        $text1 = $value;
                                      } elseif ($key == 1) {
                                        $text2 = $value;
                                      } elseif ($key == 2) {
                                        $text3 = $value;
                                      } elseif ($key == 3) {
                                        $text4 = $value;
                                      } elseif ($key == 4) {
                                        $text5 = $value;
                                      } elseif ($key == 5) {
                                        $text6 = $value;
                                      } elseif ($key == 6) {
                                        $text7 = $value;
                                      } else {
                                        $text8 = $value;
                                      }
                                    @endphp
                                  @endforeach
                                @endif
                                <label for="basicpill-firstname-input">Other Outcome (if they have any):</label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_1" {{ old('other_outcomes_check_1', optional($washAndShower)->other_outcomes_check_1) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text1}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_2" {{ old('other_outcomes_check_2', optional($washAndShower)->other_outcomes_check_2) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text2}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_3" {{ old('other_outcomes_check_3', optional($washAndShower)->other_outcomes_check_3) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text3}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_4" {{ old('other_outcomes_check_4', optional($washAndShower)->other_outcomes_check_4) == 'on' ? 'checked' : '' }}></td>
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
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="1 Carer" {{ old('support_from', optional($washAndShower)->support_from) == '1 Carer' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            1 Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="2 Carer" {{ old('support_from', optional($washAndShower)->support_from) == '2 Carer' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            2 Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Independent" {{ old('support_from', optional($washAndShower)->support_from) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Supervision Only" {{ old('support_from', optional($washAndShower)->support_from) == 'Supervision Only' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Supervision Only
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Other" {{ old('support_from', optional($washAndShower)->support_from) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">to maintain most aspect of my personal care.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Bathroom Location – (refer mobility section for mobilising / transferring needs inside the house).</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="bathroom_location" type="radio" id="bathroom_location" value="Upstairs" {{ old('bathroom_location', optional($washAndShower)->bathroom_location) == 'Upstairs' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Upstairs
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="bathroom_location" type="radio" id="bathroom_location" value="Downstairs" {{ old('bathroom_location', optional($washAndShower)->bathroom_location) == 'Downstairs' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Downstairs
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="bathroom_location" type="radio" id="bathroom_location" value="Same Floor" {{ old('bathroom_location', optional($washAndShower)->bathroom_location) == 'Same Floor' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Same Floor
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I prefer the care staff to get, (Please specify the Brand Name and Location)</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Shower Gel</label>
                        <div class="col-md-10">
                          <input class="form-control" name="shower_gel" type="text" id="shower_gel" value="{{$washAndShower->shower_gel ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Shampoo</label>
                        <div class="col-md-10">
                          <input class="form-control" name="shampoo" type="text" id="shampoo" value="{{$washAndShower->shampoo ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Washing Bowl</label>
                        <div class="col-md-10">
                          <input class="form-control" name="washing_bowl" type="text" id="washing_bowl" value="{{$washAndShower->washing_bowl ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Towel</label>
                        <div class="col-md-10">
                          <input class="form-control" name="towel" type="text" id="towel" value="{{$washAndShower->towel ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Flannels, (Please specify Colour and Location)</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Upper Body</label>
                        <div class="col-md-10">
                          <input class="form-control" name="upper_body" type="text" id="upper_body" value="{{$washAndShower->upper_body ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Lower Body</label>
                        <div class="col-md-10">
                          <input class="form-control" name="lower_body" type="text" id="lower_body" value="{{$washAndShower->lower_body ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Location</label>
                        <div class="col-md-10">
                          <input class="form-control" name="location" type="text" id="location" value="{{$washAndShower->location ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">(If one flannel in place – advice the service user to get another one)</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I would like to have,</label>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <thead>
                                      <tr>
                                        <td><b>Wash Type</b></td>
                                        <td><b>Strength</b></td>
                                        <td><b>Body Part</b></td>
                                        <td><b>Able to Wash</b></td>
                                        <td><b>Support from the Carer</b></td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;"><input type="checkbox" name="type_strip_wash" {{ old('type_strip_wash', optional($washAndShower)->type_strip_wash) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Strip Wash</label></td>
                                            <td style="text-align: center;"><input type="checkbox" name="strength_upper_body" {{ old('strength_upper_body', optional($washAndShower)->strength_upper_body) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Upper Body Strength</label></td>
                                            <td style="text-align: center;"><input type="checkbox" name="part_face" {{ old('part_face', optional($washAndShower)->part_face) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Face</label></td>
                                            <td style="text-align: center;"><input type="radio" name="able_to_wash_face" {{ old('able_to_wash_face', optional($washAndShower)->able_to_wash_face) == 'on' ? 'checked' : '' }}></td>
                                            <td style="text-align: center;"><input type="radio" name="support_from_carer_face" {{ old('support_from_carer_face', optional($washAndShower)->support_from_carer_face) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><input type="checkbox" name="front_body_part" {{ old('front_body_part', optional($washAndShower)->front_body_part) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Front Body Part</label></td>
                                            <td style="text-align: center;"><input type="radio" name="able_to_wash_front_body" {{ old('able_to_wash_front_body', optional($washAndShower)->able_to_wash_front_body) == 'on' ? 'checked' : '' }}></td>
                                            <td style="text-align: center;"><input type="radio" name="support_from_carer_front_body" {{ old('support_from_carer_front_body', optional($washAndShower)->support_from_carer_front_body) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><input type="checkbox" name="type_bed_wash" {{ old('type_bed_wash', optional($washAndShower)->type_bed_wash) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Bed Wash</label></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><input type="checkbox" name="part_hand" {{ old('part_hand', optional($washAndShower)->part_hand) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Hand</label></td>
                                            <td style="text-align: center;"><input type="radio" name="able_to_wash_hand" {{ old('able_to_wash_hand', optional($washAndShower)->able_to_wash_hand) == 'on' ? 'checked' : '' }}></td>
                                            <td style="text-align: center;"><input type="radio" name="support_from_carer_hand" {{ old('support_from_carer_hand', optional($washAndShower)->support_from_carer_hand) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><input type="checkbox" name="strength_lower_body" {{ old('strength_lower_body', optional($washAndShower)->strength_lower_body) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Lower Body Strength</label></td>
                                            <td style="text-align: center;"><input type="checkbox" name="part_back" {{ old('part_back', optional($washAndShower)->part_back) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Back</label></td>
                                            <td style="text-align: center;"><input type="radio" name="able_to_wash_back" {{ old('able_to_wash_back', optional($washAndShower)->able_to_wash_back) == 'on' ? 'checked' : '' }}></td>
                                            <td style="text-align: center;"><input type="radio" name="support_from_carer_back" {{ old('support_from_carer_back', optional($washAndShower)->support_from_carer_back) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><input type="checkbox" name="type_drying_shower" {{ old('type_drying_shower', optional($washAndShower)->type_drying_shower) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Shower</label></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><input type="checkbox" name="part_buttock" {{ old('part_buttock', optional($washAndShower)->part_buttock) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Buttock</label></td>
                                            <td style="text-align: center;"><input type="radio" name="able_to_wash_buttock" {{ old('able_to_wash_buttock', optional($washAndShower)->able_to_wash_buttock) == 'on' ? 'checked' : '' }}></td>
                                            <td style="text-align: center;"><input type="radio" name="support_from_carer_buttock" {{ old('support_from_carer_buttock', optional($washAndShower)->support_from_carer_buttock) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><input type="checkbox" name="type_drying_body" {{ old('type_drying_body', optional($washAndShower)->type_drying_body) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Drying the Body</label></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><input type="checkbox" name="part_lag" {{ old('part_lag', optional($washAndShower)->part_lag) == 'on' ? 'checked' : '' }}><label class="form-check-label" for="toast-type-radio1">Legs</label></td>
                                            <td style="text-align: center;"><input type="radio" name="able_to_wash_lag" {{ old('able_to_wash_lag', optional($washAndShower)->able_to_wash_lag) == 'on' ? 'checked' : '' }}></td>
                                            <td style="text-align: center;"><input type="radio" name="support_from_carer_lag" {{ old('support_from_carer_lag', optional($washAndShower)->support_from_carer_lag) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <label for="basicpill-firstname-input">Other Outcome (if they have any):</label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_5" {{ old('other_outcomes_check_5', optional($washAndShower)->other_outcomes_check_5) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text5}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_6" {{ old('other_outcomes_check_6', optional($washAndShower)->other_outcomes_check_6) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text6}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_7" {{ old('other_outcomes_check_7', optional($washAndShower)->other_outcomes_check_7) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text7}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_8" {{ old('other_outcomes_check_8', optional($washAndShower)->other_outcomes_check_8) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text8}}"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I can able to take wash</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="able_take_wash" type="radio" id="able_take_wash" value="Independently" {{ old('able_take_wash', optional($washAndShower)->able_take_wash) == 'Independently' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independently
                          </label>
                        </div>
                        <div class="col-md-5">
                          <input class="form-check-input" name="able_take_wash" type="radio" id="able_take_wash" value="Carer to Supervise me while I am taking wash" {{ old('able_take_wash', optional($washAndShower)->able_take_wash) == 'Carer to Supervise me while I am taking wash' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer to Supervise me while I am taking wash
                          </label>
                        </div>
                        <div class="col-md-5">
                          <input class="form-check-input" name="able_take_wash" type="radio" id="able_take_wash" value="Carer to encourage me to take wash as I am independent" {{ old('able_take_wash', optional($washAndShower)->able_take_wash) == 'Carer to encourage me to take wash as I am independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer to encourage me to take wash as I am independent
                          </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>Additional Things</b></label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                  <tr>
                                    <td><input type="checkbox" name="additional_thing_1" {{ old('additional_thing_1', optional($washAndShower)->additional_thing_1) == 'on' ? 'checked' : '' }}></td>
                                    <td>I prefer the care staff to support me wear my clothes (refer dressing support for further details)</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" name="additional_thing_2" {{ old('additional_thing_2', optional($washAndShower)->additional_thing_2) == 'on' ? 'checked' : '' }}></td>
                                    <td>I prefer the care staff to apply the prescribed cream, monitor my skin integrity (refer the skin integrity section for further details)</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" name="additional_thing_3" {{ old('additional_thing_3', optional($washAndShower)->additional_thing_3) == 'on' ? 'checked' : '' }}></td>
                                    <td>I prefer the care staff to support me to maintain my continence care (refer the incontinence care section for further details)</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" name="additional_thing_4" {{ old('additional_thing_4', optional($washAndShower)->additional_thing_4) == 'on' ? 'checked' : '' }}></td>
                                    <td>I prefer the care staff to mop the floor / put the toiletries appropriately and make sure the area they have used is clean.</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" name="additional_thing_5" {{ old('additional_thing_5', optional($washAndShower)->additional_thing_5) == 'on' ? 'checked' : '' }}></td>
                                    <td>I prefer the care staff to check the temperature of the water and make sure it’s comfortable to me.</td>
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
    $("#createPatientForm").validate({
        rules: {
            mobile_no: {
                required: true,
                minlength: 10,
                maxlength: 10
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    $(document).ready(function() {
      $('input[name="take_wash_while"][value="Other"]').on('click', function() {
        $('.take_wash_while_other').show();
      });
      $('input[name="take_wash_while"]').not('[value="Other"]').on('click', function() {
        $('.take_wash_while_other').hide();
      });
    })
</script>
@endsection