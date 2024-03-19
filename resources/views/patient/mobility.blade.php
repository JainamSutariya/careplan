@extends('layouts.master')

@section('title') Mobility @endsection

@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Mobility
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
                <form method="post" id="createPatientForm" action="{{route('storeMobility', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>What care and support needs do I currently have?</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">I would like to transfer from one place to another place</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="transfer_place[]" type="checkbox" id="transfer_place" value="Independent Supervision Only" {{ CheckboxHelper::isChecked('Independent Supervision Only', $transferPlace) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent Supervision Only
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="transfer_place[]" type="checkbox" id="transfer_place" value="Walking aid support" {{ CheckboxHelper::isChecked('Walking aid support', $transferPlace) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Walking aid support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="transfer_place[]" type="checkbox" id="transfer_place" value="Assistance of 1 person" {{ CheckboxHelper::isChecked('Assistance of 1 person', $transferPlace) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Assistance of 1 person
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="transfer_place[]" type="checkbox" id="transfer_place" value="Assistance of 2 person" {{ CheckboxHelper::isChecked('Assistance of 2 person', $transferPlace) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Assistance of 2 person
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="transfer_place[]" type="checkbox" id="transfer_place" value="Bed Bound" {{ CheckboxHelper::isChecked('Bed Bound', $transferPlace) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bed Bound
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
                          <input class="form-check-input" name="strength" type="radio" id="strength" value="Good" {{ old('strength', optional($mobility)->strength) == 'Good' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Good
                          </label>
                        </div>
                        <div class="col-md-12">
                          <input class="form-check-input" name="strength" type="radio" id="strength" value="Struggling" {{ old('strength', optional($mobility)->strength) == 'Struggling' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Struggling
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Lower body Strength</b></label>
                        <div class="col-md-12">
                          <input class="form-check-input" name="lower_strength" type="radio" id="lower_strength" value="Good" {{ old('lower_strength', optional($mobility)->lower_strength) == 'Good' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Good
                          </label>
                        </div>
                        <div class="col-md-12">
                          <input class="form-check-input" name="lower_strength" type="radio" id="lower_strength" value="Struggling" {{ old('lower_strength', optional($mobility)->lower_strength) == 'Struggling' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Struggling
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Can Able</b></label>
                        <div class="col-md-12">
                          <input class="form-check-input" name="can_able" type="radio" id="can_able" value="To bear my weight" {{ old('can_able', optional($mobility)->can_able) == 'To bear my weight' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            To bear my weight
                          </label>
                        </div>
                        <div class="col-md-12">
                          <input class="form-check-input" name="can_able" type="radio" id="can_able" value="Dependent on the Care Staff" {{ old('can_able', optional($mobility)->can_able) == 'Dependent on the Care Staff' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Dependent on the Care Staff
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">I Can hold</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="can_hold_details" rows="2">{{ old('can_hold_details', optional($mobility)->can_hold_details)}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">3. What are my desired outcomes?</label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tbody>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_health_condition" {{ old('maintain_health_condition', optional($mobility)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to maintain my health conditions</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="remain_healthy" {{ old('remain_healthy', optional($mobility)->remain_healthy) == 'on' ? 'checked' : '' }}></td>
                                            <td>For my skin to remain healthy and not to get any sore</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maximize_my_independence" {{ old('maximize_my_independence', optional($mobility)->maximize_my_independence) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maximize my independence</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_not_fall" {{ old('desire_not_fall', optional($mobility)->desire_not_fall) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire not to have a fall.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_dignity_privacy" {{ old('maintain_dignity_privacy', optional($mobility)->maintain_dignity_privacy) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my dignity and privacy.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="malnutrition" {{ old('malnutrition', optional($mobility)->malnutrition) == 'on' ? 'checked' : '' }}></td>
                                            <td>To prevent malnutrition and dehydration</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_clean_smart" {{ old('desire_clean_smart', optional($mobility)->desire_clean_smart) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to be a clean and smart as I always prefer to be smart looking.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_good_relationship" {{ old('maintain_good_relationship', optional($mobility)->maintain_good_relationship) == 'on' ? 'checked' : '' }}></td>
                                            <td>I prefer to maintain a good relationship with my family</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="avoid_unnecessary_hospital" {{ old('avoid_unnecessary_hospital', optional($mobility)->avoid_unnecessary_hospital) == 'on' ? 'checked' : '' }}></td>
                                            <td>To avoid unnecessary hospital admission.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_healthey_lifestyle" {{ old('maintain_healthey_lifestyle', optional($mobility)->maintain_healthey_lifestyle) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my healthey lifestyle.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="improve_quality_life" {{ old('improve_quality_life', optional($mobility)->improve_quality_life) == 'on' ? 'checked' : '' }}></td>
                                            <td>To improve my quality of life.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_healthy_diet" {{ old('maintain_healthy_diet', optional($mobility)->maintain_healthy_diet) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain a healthy, nutritious, and varied diet</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                @php
                                    $check1 = '';
                                    $check2 = '';
                                    $check3 = '';
                                    $check4 = '';
                                    $text1 = '';
                                    $text2 = '';
                                    $text3 = '';
                                    $text4 = '';
                                    $otherOutcomesCheck = $mobility->other_outcomes_check ?? null;
                                    $otherOutcomesText = $mobility->other_outcomes_text ?? null;
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
                                            } else {
                                                $check4 = $value;
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
                                            } else {
                                                $text4 = $value;
                                            }
                                        @endphp
                                    @endforeach
                                @endif
                                <label for="basicpill-firstname-input">Other Outcome (if they have any):</label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check[]" @if($check1 == 'on') checked @endif></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text1}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check[]" @if($check2 == 'on') checked @endif></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text2}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check[]" @if($check3 == 'on') checked @endif></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text3}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check[]" @if($check4 == 'on') checked @endif></td>
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
                        <label for="example-text-input" class="col-md-12 col-form-label">I prefer to get the consent before care (refer communication section for more details)<br>I prefer the care staff to maintain my privacy and dignity by (refer privacy and dignity section for more details)</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Equipment in Place</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Walking stick" {{ CheckboxHelper::isChecked('Walking stick', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Walking stick
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Zimmer frame" {{ CheckboxHelper::isChecked('Zimmer frame', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Zimmer frame
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Crutches" {{ CheckboxHelper::isChecked('Crutches', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Crutches
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Walker" {{ CheckboxHelper::isChecked('Walker', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Walker
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Cricket aid" {{ CheckboxHelper::isChecked('Cricket aid', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Cricket aid
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Mini Lift" {{ CheckboxHelper::isChecked('Mini Lift', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Mini Lift
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Mo Lift" {{ CheckboxHelper::isChecked('Mo Lift', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Mo Lift
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Stair Lift" {{ CheckboxHelper::isChecked('Stair Lift', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Stair Lift
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="In-house Lift" {{ CheckboxHelper::isChecked('In-house Lift', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            In-house Lift
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Wheelchair" {{ CheckboxHelper::isChecked('Wheelchair', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Wheelchair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Mobility Scooter" {{ CheckboxHelper::isChecked('Mobility Scooter', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Mobility Scooter
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Sara Steady Hoist" {{ CheckboxHelper::isChecked('Sara Steady Hoist', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Sara Steady Hoist
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Rotator / Patient Turner" {{ CheckboxHelper::isChecked('Rotator / Patient Turner', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Rotator / Patient Turner
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Commode" {{ CheckboxHelper::isChecked('Commode', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Commode
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Slide Sheet" {{ CheckboxHelper::isChecked('Slide Sheet', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Slide Sheet
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Reclining Chai" {{ CheckboxHelper::isChecked('Reclining Chai', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Reclining Chair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="High Chai" {{ CheckboxHelper::isChecked('High Chai', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            High Chair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Hospital Bed" {{ CheckboxHelper::isChecked('Hospital Bed', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Hospital Bed
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Table" {{ CheckboxHelper::isChecked('Table', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Table
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="equipment_place[]" type="checkbox" id="equipment_place" value="Trolley" {{ CheckboxHelper::isChecked('Trolley', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Trolley
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Other Equipment</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Shower Chair" {{ CheckboxHelper::isChecked('Shower Chair', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Shower Chair
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Grab Rail" {{ CheckboxHelper::isChecked('Grab Rail', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Grab Rail
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Bed Rail" {{ CheckboxHelper::isChecked('Bed Rail', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bed Rail
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Air Mattress" {{ CheckboxHelper::isChecked('Air Mattress', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Air Mattress
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Urine Bottles" {{ CheckboxHelper::isChecked('Urine Bottles', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Urine Bottles
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Bath Seat" {{ CheckboxHelper::isChecked('Bath Seat', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bath Seat
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Toilet Seat" {{ CheckboxHelper::isChecked('Toilet Seat', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Toilet Seat
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Toilet Frame" {{ CheckboxHelper::isChecked('Toilet Frame', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Toilet Frame
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Bath Tub" {{ CheckboxHelper::isChecked('Bath Tub', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bath Tub
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Perching Stool" {{ CheckboxHelper::isChecked('Perching Stool', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Perching Stool
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Wet Room" {{ CheckboxHelper::isChecked('Wet Room', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Wet Room
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Walk-in Shower" {{ CheckboxHelper::isChecked('Walk-in Shower', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Walk-in Shower
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Bath Hoist" {{ CheckboxHelper::isChecked('Bath Hoist', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bath Hoist
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="other_equipment[]" type="checkbox" id="other_equipment" value="Swivel Bather" {{ CheckboxHelper::isChecked('Swivel Bather', $otherCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Swivel Bather
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Size of Slide</b></label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="size_of_slide" type="radio" id="size_of_slide" value="Yes" {{ old('size_of_slide', optional($mobility)->size_of_slide) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="size_of_slide" type="radio" id="size_of_slide" value="No" {{ old('size_of_slide', optional($mobility)->size_of_slide) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Size of Slide Sheet</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="size_small_sheet" type="radio" id="size_small_sheet" value="Small" {{ old('size_small_sheet', optional($mobility)->size_small_sheet) == 'Small' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Small
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="size_small_sheet" type="radio" id="size_small_sheet" value="Medium" {{ old('size_small_sheet', optional($mobility)->size_small_sheet) == 'Medium' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Medium
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="size_small_sheet" type="radio" id="size_small_sheet" value="Large" {{ old('size_small_sheet', optional($mobility)->size_small_sheet) == 'Large' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Large
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="size_small_sheet" type="radio" id="size_small_sheet" value="X-Large" {{ old('size_small_sheet', optional($mobility)->size_small_sheet) == 'X-Large' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            X-Large
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Hoist (Mobile Hoist / Ceiling Hoist)</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Hoist in Place</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="hoist_place" type="radio" id="hoist_place" value="Yes" {{ old('hoist_place', optional($mobility)->hoist_place) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="hoist_place" type="radio" id="hoist_place" value="No" {{ old('hoist_place', optional($mobility)->hoist_place) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Hoist Delivered By (Company Name)</label>
                        <div class="col-md-9">
                          <input class="form-control" name="hoist_delivered" type="text" id="hoist_delivered" value="{{ old('hoist_delivered', optional($mobility)->hoist_delivered) ? $mobility->hoist_delivered : '' }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Hoist Make:</label>
                        <div class="col-md-9">
                          <input class="form-control" name="hoist_make" type="text" id="hoist_make" value="{{ old('hoist_make', optional($mobility)->hoist_make) ? $mobility->hoist_make : '' }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Hoist Last Service Date: (LOLER Check)</label>
                        <div class="col-md-9">
                          <input class="form-control" name="hoist_last_service" type="text" id="hoist_last_service" value="{{ old('hoist_last_service', optional($mobility)->hoist_last_service) ? $mobility->hoist_last_service : '' }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Sling in Place</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="sling_place" type="radio" id="sling_place" value="Yes" {{ old('sling_place', optional($mobility)->sling_place) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="sling_place" type="radio" id="sling_place" value="No" {{ old('sling_place', optional($mobility)->sling_place) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Size of Sling:</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="size_sling" type="radio" id="size_sling" value="Small" {{ old('size_sling', optional($mobility)->size_sling) == 'Small' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Small
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="size_sling" type="radio" id="size_sling" value="Medium" {{ old('size_sling', optional($mobility)->size_sling) == 'Medium' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Medium
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="size_sling" type="radio" id="size_sling" value="Large" {{ old('size_sling', optional($mobility)->size_sling) == 'Large' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Large
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="size_sling" type="radio" id="size_sling" value="X-Large" {{ old('size_sling', optional($mobility)->size_sling) == 'X-Large' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            X-Large
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="size_sling" type="radio" id="size_sling" value="Custom Size" {{ old('size_sling', optional($mobility)->size_sling) == 'Custom Size' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Custom Size
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Transfer</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="transfer_option" type="radio" id="transfer_option" value="Yes" {{ old('transfer_option', optional($mobility)->transfer_option) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="transfer_option" type="radio" id="transfer_option" value="No" {{ old('transfer_option', optional($mobility)->transfer_option) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Transfer:</b></label>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-md-3">
                        <input class="form-check-input" name="morning_transfer" type="checkbox" id="morning_transfer" value="Morning" {{ old('morning_transfer', optional($mobility)->morning_transfer) == 'Morning' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Morning
                        </label>
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" name="lunch_transfer" type="checkbox" id="lunch_transfer" value="Lunch" {{ old('morning_transfer', optional($mobility)->morning_transfer) == 'Lunch' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Lunch
                        </label>
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" name="tea_transfer" type="checkbox" id="tea_transfer" value="Tea" {{ old('morning_transfer', optional($mobility)->morning_transfer) == 'Tea' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Tea
                        </label>
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" name="bed_transfer" type="checkbox" id="bed_transfer" value="Bed" {{ old('morning_transfer', optional($mobility)->morning_transfer) == 'Bed' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Bed
                        </label>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>Reposition Support Required:</b></label>
                        <div class="col-md-4">
                          <input class="form-check-input" name="reposition_support" type="radio" id="reposition_support" value="Yes" {{ old('reposition_support', optional($mobility)->reposition_support) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="reposition_support" type="radio" id="reposition_support" value="No" {{ old('reposition_support', optional($mobility)->reposition_support) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-md-3">
                        <input class="form-check-input" name="morning_reposition" type="checkbox" id="morning_reposition" value="Morning" {{ old('morning_reposition', optional($mobility)->morning_reposition) == 'Morning' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Morning
                        </label>
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" name="lunch_reposition" type="checkbox" id="lunch_reposition" value="Lunch" {{ old('lunch_reposition', optional($mobility)->lunch_reposition) == 'Lunch' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Lunch
                        </label>
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" name="tea_reposition" type="checkbox" id="tea_reposition" value="Tea" {{ old('tea_reposition', optional($mobility)->tea_reposition) == 'Tea' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Tea
                        </label>
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" name="bed_reposition" type="checkbox" id="bed_reposition" value="Bed" {{ old('bed_reposition', optional($mobility)->bed_reposition) == 'Bed' ? 'checked' : '' }}>
                        <label class="form-check-label" for="toast-type-radio1">
                          Bed
                        </label>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Before leaving the property, the care staff to get the consent and</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                          <input class="form-check-input" name="care_staff_consent" type="radio" id="care_staff_consent" value="Raise the Bed Rail" {{ old('care_staff_consent', optional($mobility)->care_staff_consent) == 'Raise the Bed Rail' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Raise the Bed Rail
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="care_staff_consent" type="radio" id="care_staff_consent" value="Leave Equipment Close/Next to me" {{ old('care_staff_consent', optional($mobility)->care_staff_consent) == 'Leave Equipment Close/Next to me' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Leave Equipment Close/Next to me
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="care_staff_consent" type="radio" id="care_staff_consent" value="Crash Matt" {{ old('care_staff_consent', optional($mobility)->care_staff_consent) == 'Crash Matt' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Crash Matt
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>Any professional involved</b></label>
                        <div class="col-md-4">
                          <input class="form-check-input" name="professional_involved" type="radio" id="professional_involved" value="Yes" {{ old('professional_involved', optional($mobility)->professional_involved) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="professional_involved" type="radio" id="professional_involved" value="No" {{ old('professional_involved', optional($mobility)->professional_involved) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <thead>
                                        <tr>
                                            <td>Name of Team</td>
                                            <td>Frequency of Visit</td>
                                            <td>Reason for Visit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>District Nurse</td>
                                            <td><input type="text" class="form-control" name="nurse_frequency" value="{{$mobility->nurse_frequency ?? ''}}"></td>
                                            <td><input type="text" class="form-control" name="nurse_reason" value="{{$mobility->nurse_reason ?? ''}}"></td>
                                        </tr>
                                        <tr>
                                            <td>OT</td>
                                            <td><input type="text" class="form-control" name="ot_frequency" value="{{$mobility->ot_frequency ?? ''}}"></td>
                                            <td><input type="text" class="form-control" name="involved_ot_reason" value="{{$mobility->involved_ot_reason ?? ''}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Physio</td>
                                            <td><input type="text" class="form-control" name="physio_frequency" value="{{$mobility->physio_frequency ?? ''}}"></td>
                                            <td><input type="text" class="form-control" name="involved_physio_reason" value="{{$mobility->involved_physio_reason ?? ''}}"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>Any professional referral required</b></label>
                        <div class="col-md-4">
                          <input class="form-check-input" name="professional_referral" type="radio" id="professional_referral" value="Yes" {{ old('professional_referral', optional($mobility)->professional_referral) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-4">
                          <input class="form-check-input" name="professional_referral" type="radio" id="professional_referral" value="No" {{ old('professional_referral', optional($mobility)->professional_referral) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Please specify the details – why the professional referral is required</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <thead>
                                        <tr>
                                            <td>Name of Team</td>
                                            <td>Reason for referral</td>
                                            <td>Referral Date</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GP</td>
                                            <td><input type="text" class="form-control" name="gp_reason" value="{{ $mobility->gp_reason ?? '' }}"></td>
                                            <td><input type="text" class="form-control" name="gp_referral" value="{{ $mobility->gp_referral ?? '' }}"></td>
                                        </tr>
                                        <tr>
                                            <td>SPA - DN</td>
                                            <td><input type="text" class="form-control" name="spa_reason" value="{{ $mobility->spa_reason ?? '' }}"></td>
                                            <td><input type="text" class="form-control" name="spa_referral" value="{{ $mobility->spa_referral ?? '' }}"></td>
                                        </tr>
                                        <tr>
                                            <td>Physio</td>
                                            <td><input type="text" class="form-control" name="physio_reason" value="{{ $mobility->physio_reason ?? '' }}"></td>
                                            <td><input type="text" class="form-control" name="physio_referral" value="{{ $mobility->physio_referral ?? '' }}"></td>
                                        </tr>
                                        <tr>
                                            <td>OT</td>
                                            <td><input type="text" class="form-control" name="ot_reason" value="{{ $mobility->ot_reason ?? '' }}"></td>
                                            <td><input type="text" class="form-control" name="ot_referral" value="{{ $mobility->ot_referral ?? '' }}"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Details/other information (if required)</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="other_information" rows="2">{{ $mobility->other_information ?? '' }}</textarea>
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
</script>
@endsection