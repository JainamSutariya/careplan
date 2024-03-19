@extends('layouts.master')

@section('title') Skin Care @endsection

@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Skin Care
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
                <form method="post" id="createPatientForm" action="{{route('storeSkinCare', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What care and support needs do I currently have?</b></label>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label">I would like to maintain my skin integrity by regularly monitoring,</label>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label">By applying the prescribed cream in,</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="skin_integrity[]" type="checkbox" id="skin_integrity" value="Morning" {{ CheckboxHelper::isChecked('Morning', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Morning
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="skin_integrity[]" type="checkbox" id="skin_integrity" value="Lunch" {{ CheckboxHelper::isChecked('Lunch', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Lunch
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="skin_integrity[]" type="checkbox" id="skin_integrity" value="Tea" {{ CheckboxHelper::isChecked('Tea', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Tea
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="skin_integrity[]" type="checkbox" id="skin_integrity" value="Bed" {{ CheckboxHelper::isChecked('Bed', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bed
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label"><b>And reposition me, (from where to where / side to side)</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Morning</label>
                        <div class="col-md-9">
                          <input class="form-control" name="morning" type="text" id="morning" value="{{$skinCare->morning ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Lunch</label>
                        <div class="col-md-9">
                          <input class="form-control" name="lunch" type="text" id="lunch" value="{{$skinCare->lunch ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Tea</label>
                        <div class="col-md-9">
                          <input class="form-control" name="tea" type="text" id="tea" value="{{$skinCare->tea ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Bed</label>
                        <div class="col-md-9">
                          <input class="form-control" name="bed" type="text" id="bed" value="{{$skinCare->bed ?? ''}}">
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Strength</b></label>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                  <thead>
                                    <tr>
                                      <td>Upper Body Strength</td>
                                      <td>Able to Apply Cream</td>
                                      <td>Lower Body Strength</td>
                                      <td>Able to Apply Cream</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Squeeze Cream in My Hand</td>
                                      <td><input class="form-check-input" name="squeeze_cream_in_my_hand" type="checkbox" id="squeeze_cream_in_my_hand" value="Face" style="margin-top: 2px;" {{ old('squeeze_cream_in_my_hand', optional($skinCare)->squeeze_cream_in_my_hand) == 'Face' ? 'checked' : '' }}>Face</td>
                                      <td>
                                        Stand Up from the ---
                                        <input class="form-check-input" name="lower_strength_stand_up_from[]" type="checkbox" id="lower_strength_stand_up_from_bed" value="Bed" style="margin-top: 2px;" {{ CheckboxHelper::isChecked('Bed', $checkedValues3) ? 'checked' : '' }}>Bed
                                        <input class="form-check-input" name="lower_strength_stand_up_from[]" type="checkbox" id="lower_strength_stand_up_from_chair" value="Chair" style="margin-top: 2px;" {{ CheckboxHelper::isChecked('Chair', $checkedValues3) ? 'checked' : '' }}>Chair
                                      </td>
                                      <td>
                                        <input class="form-check-input" name="lower_strength_able_apply_cream" type="checkbox" id="lower_strength_able_apply_cream" value="Buttock" style="margin-top: 2px;" {{ old('lower_strength_able_apply_cream', optional($skinCare)->lower_strength_able_apply_cream) == 'Buttock' ? 'checked' : '' }}>Buttock
                                      </td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td><input class="form-check-input" name="squeeze_cream_in_right_hand" type="checkbox" id="squeeze_cream_in_right_hand" value="Right Hand" style="margin-top: 2px;" {{ old('squeeze_cream_in_right_hand', optional($skinCare)->squeeze_cream_in_right_hand) == 'Right Hand' ? 'checked' : '' }}>Right Hand</td>
                                      <td>
                                        <input class="form-check-input" name="lower_strength_hold_equipment" type="checkbox" id="lower_strength_hold_equipment" value="Hold the Equipment" style="margin-top: 2px;" {{ old('lower_strength_hold_equipment', optional($skinCare)->lower_strength_hold_equipment) == 'Hold the Equipment' ? 'checked' : '' }}>Hold the Equipment
                                      </td>
                                      <td>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Open the box of cream</td>
                                      <td><input class="form-check-input" name="open_box_cream_in_left_hand" type="checkbox" id="open_box_cream_in_left_hand" value="Left Hand" style="margin-top: 2px;" {{ old('open_box_cream_in_left_hand', optional($skinCare)->open_box_cream_in_left_hand) == 'Left Hand' ? 'checked' : '' }}>Left Hand</td>
                                      <td>
                                        <input class="form-check-input" name="lower_strength_hold_furniture" type="checkbox" id="lower_strength_hold_furniture" value="Hold the Furniture" style="margin-top: 2px;" {{ old('lower_strength_hold_furniture', optional($skinCare)->lower_strength_hold_furniture) == 'Hold the Furniture' ? 'checked' : '' }}>Hold the Furniture
                                      </td>
                                      <td>
                                        <input class="form-check-input" name="lower_strength_able_apply_cream_back" type="checkbox" id="lower_strength_able_apply_cream_back" value="Back" style="margin-top: 2px;" {{ old('lower_strength_able_apply_cream_back', optional($skinCare)->lower_strength_able_apply_cream_back) == 'Back' ? 'checked' : '' }}>Back
                                      </td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td><input class="form-check-input" name="open_box_cream_front_body_part" type="checkbox" id="open_box_cream_front_body_part" value="Front Boody Part" style="margin-top: 2px;" {{ old('open_box_cream_front_body_part', optional($skinCare)->open_box_cream_front_body_part) == 'Front Boody Part' ? 'checked' : '' }}>Front Boody Part</td>
                                      <td>
                                        <input class="form-check-input" name="lower_strength_turn_hold" type="checkbox" id="lower_strength_turn_hold" value="Turn and Hold the Bed" style="margin-top: 2px;" {{ old('lower_strength_turn_hold', optional($skinCare)->lower_strength_turn_hold) == 'Turn and Hold the Bed' ? 'checked' : '' }}>Turn and Hold the Bed
                                      </td>
                                      <td>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>What are my desired outcomes?</b></label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tbody>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_health_condition" {{ old('maintain_health_condition', optional($skinCare)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to maintain my health conditions</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="remain_healthy" {{ old('remain_healthy', optional($skinCare)->remain_healthy) == 'on' ? 'checked' : '' }}></td>
                                            <td>For my skin to remain healthy and not to get any sore</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maximize_my_independence" {{ old('maximize_my_independence', optional($skinCare)->maximize_my_independence) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maximize my independence</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_not_fall" {{ old('desire_not_fall', optional($skinCare)->desire_not_fall) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire not to have a fall.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_dignity_privacy" {{ old('maintain_dignity_privacy', optional($skinCare)->maintain_dignity_privacy) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my dignity and privacy.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="healthey_lifestyle" {{ old('healthey_lifestyle', optional($skinCare)->healthey_lifestyle) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my healthey lifestyle</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_clean_smart" {{ old('desire_clean_smart', optional($skinCare)->desire_clean_smart) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to be a clean and smart as I always prefer to be smart looking.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_good_relationship" {{ old('maintain_good_relationship', optional($skinCare)->maintain_good_relationship) == 'on' ? 'checked' : '' }}></td>
                                            <td>I prefer to maintain a good relationship with my family</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="avoid_unnecessary_hospital" {{ old('avoid_unnecessary_hospital', optional($skinCare)->avoid_unnecessary_hospital) == 'on' ? 'checked' : '' }}></td>
                                            <td>To avoid unnecessary hospital admission.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="quality_life" {{ old('quality_life', optional($skinCare)->quality_life) == 'on' ? 'checked' : '' }}></td>
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
                                  $otherOutcomesText = $skinCare->other_outcomes_text ?? null;
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
                                        <td><input type="checkbox" name="other_outcomes_check_1" {{ old('other_outcomes_check_1', optional($skinCare)->other_outcomes_check_1) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text1}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_2" {{ old('other_outcomes_check_2', optional($skinCare)->other_outcomes_check_2) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text2}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_3" {{ old('other_outcomes_check_3', optional($skinCare)->other_outcomes_check_3) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text3}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_4" {{ old('other_outcomes_check_4', optional($skinCare)->other_outcomes_check_4) == 'on' ? 'checked' : '' }}></td>
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
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="1 Carer" {{ old('support_from', optional($skinCare)->support_from) == '1 Carer' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            1 Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="2 Carer" {{ old('support_from', optional($skinCare)->support_from) == '2 Carer' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            2 Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Independent" {{ old('support_from', optional($skinCare)->support_from) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Supervision Only" {{ old('support_from', optional($skinCare)->support_from) == 'Supervision Only' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Supervision Only
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Other" {{ old('support_from', optional($skinCare)->support_from) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">to maintain most aspect of my personal care.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I prefer the care staff to apply the</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                  <thead>
                                    <tr>
                                      <td>Cream Name</td>
                                      <td>Location of Cream</td>
                                      <td>Where to Apply the Cream</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @php
                                      $cream_name1 = '';
                                      $cream_name2 = '';
                                      $location_cream1 = '';
                                      $location_cream2 = '';
                                      $cream_text = $skinCare->cream_name ?? null;
                                      $location_text = $skinCare->location_cream ?? null;
                                    @endphp
                                    @if ($cream_text)
                                      @foreach (json_decode($cream_text) as $key => $value)
                                        @php
                                          if ($key == 0) {
                                            $cream_name1 = $value;
                                          } else {
                                            $cream_name2 = $value;
                                          }
                                        @endphp
                                      @endforeach
                                    @endif
                                    @if ($location_text)
                                      @foreach (json_decode($location_text) as $key => $value)
                                        @php
                                          if ($key == 0) {
                                            $location_cream1 = $value;
                                          } else {
                                            $location_cream2 = $value;
                                          }
                                        @endphp
                                      @endforeach
                                    @endif
                                    <tr>
                                      <td><input type="text" name="cream_name[]" class="form-control" value="{{$cream_name1}}"></td>
                                      <td><input type="text" name="location_cream[]" class="form-control" value="{{$location_cream1}}"></td>
                                      <td>
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream_back" style="margin-top: 2px;" value="Back" {{ CheckboxHelper::isChecked('Back', $checkedValues1) ? 'checked' : '' }}>Back /
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream_buttock" style="margin-top: 2px;" value="Buttock" {{ CheckboxHelper::isChecked('Buttock', $checkedValues1) ? 'checked' : '' }}>Buttock /
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream_groin_area" style="margin-top: 2px;" value="Groin Area" {{ CheckboxHelper::isChecked('Groin Area', $checkedValues1) ? 'checked' : '' }}>Groin Area /
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream+hand" style="margin-top: 2px;" value="Hand" {{ CheckboxHelper::isChecked('Hand', $checkedValues1) ? 'checked' : '' }}>Hand /
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream_face" style="margin-top: 2px;" value="Face" {{ CheckboxHelper::isChecked('Face', $checkedValues1) ? 'checked' : '' }}>Face /
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream_front_part" style="margin-top: 2px;" value="Front Part" {{ CheckboxHelper::isChecked('Front Part', $checkedValues1) ? 'checked' : '' }}>Front Part /
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream_leg" style="margin-top: 2px;" value="Legs" {{ CheckboxHelper::isChecked('Legs', $checkedValues1) ? 'checked' : '' }}>Legs /
                                        <input class="form-check-input" name="squeeze_where_apply_cream[]" type="checkbox" id="where_apply_cream_full_body" style="margin-top: 2px;" value="Full Body" {{ CheckboxHelper::isChecked('Full Body', $checkedValues1) ? 'checked' : '' }}>Full Body
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><input type="text" name="cream_name[]" class="form-control" value="{{$cream_name2}}"></td>
                                      <td><input type="text" name="location_cream[]" class="form-control" value="{{$location_cream2}}"></td>
                                      <td>
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream_back" style="margin-top: 2px;" value="Back" {{ CheckboxHelper::isChecked('Back', $checkedValues2) ? 'checked' : '' }}>Back /
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream_buttock" style="margin-top: 2px;" value="Buttock" {{ CheckboxHelper::isChecked('Buttock', $checkedValues2) ? 'checked' : '' }}>Buttock /
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream_groin_area" style="margin-top: 2px;" value="Groin Area" {{ CheckboxHelper::isChecked('Groin Area', $checkedValues2) ? 'checked' : '' }}>Groin Area /
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream+hand" style="margin-top: 2px;" value="Hand" {{ CheckboxHelper::isChecked('Hand', $checkedValues2) ? 'checked' : '' }}>Hand /
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream_face" style="margin-top: 2px;" value="Face" {{ CheckboxHelper::isChecked('Face', $checkedValues2) ? 'checked' : '' }}>Face /
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream_front_part" style="margin-top: 2px;" value="Front Part" {{ CheckboxHelper::isChecked('Front Part', $checkedValues2) ? 'checked' : '' }}>Front Part /
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream_leg" style="margin-top: 2px;" value="Legs" {{ CheckboxHelper::isChecked('Legs', $checkedValues2) ? 'checked' : '' }}>Legs /
                                        <input class="form-check-input" name="open_box_where_apply_cream[]" type="checkbox" id="open_box_where_apply_cream_full_body" style="margin-top: 2px;" value="Full Body" {{ CheckboxHelper::isChecked('Full Body', $checkedValues2) ? 'checked' : '' }}>Full Body
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Reposition Support Required from the Carer:</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="reposition_support" type="radio" id="reposition_support" value="Yes" {{ old('reposition_support', optional($skinCare)->reposition_support) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="reposition_support" type="radio" id="reposition_support" value="No" {{ old('reposition_support', optional($skinCare)->reposition_support) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="reposition_support" type="radio" id="reposition_support" value="N/A" {{ old('reposition_support', optional($skinCare)->reposition_support) == 'N/A' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            N/A
                          </label>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="basicpill-firstname-input"><b>Additional Things</b></label>
                          <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                            <tr>
                              <td><input type="checkbox" name="additional_thing_1" {{ old('additional_thing_1', optional($skinCare)->additional_thing_1) == 'on' ? 'checked' : '' }}></td>
                              <td>I prefer the care staff to encourage me to reposition me as I can able to re-position independently.</td>
                            </tr>
                            <tr>
                              <td><input type="checkbox" name="additional_thing_2" {{ old('additional_thing_2', optional($skinCare)->additional_thing_2) == 'on' ? 'checked' : '' }}></td>
                              <td>I prefer the care staff to monitor my skin integrity and if any concern, I prefer to get the consent from me and report to the </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Does the service user have any pressure sore?</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore" type="radio" id="pressure_sore" value="Yes" {{ old('pressure_sore', optional($skinCare)->pressure_sore) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore" type="radio" id="pressure_sore" value="No" {{ old('pressure_sore', optional($skinCare)->pressure_sore) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore" type="radio" id="pressure_sore" value="N/A" {{ old('pressure_sore', optional($skinCare)->pressure_sore) == 'N/A' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            N/A
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Which grade of pressure sore service user have?</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore_grade" type="radio" id="pressure_sore_grade" value="Grade 1" {{ old('pressure_sore_grade', optional($skinCare)->pressure_sore_grade) == 'Grade 1' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Grade 1
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore_grade" type="radio" id="pressure_sore_grade" value="Grade 2" {{ old('pressure_sore_grade', optional($skinCare)->pressure_sore_grade) == 'Grade 2' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Grade 2
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore_grade" type="radio" id="pressure_sore_grade" value="Grade 3" {{ old('pressure_sore_grade', optional($skinCare)->pressure_sore_grade) == 'Grade 3' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Grade 3
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore_grade" type="radio" id="pressure_sore_grade" value="Grade 4" {{ old('pressure_sore_grade', optional($skinCare)->pressure_sore_grade) == 'Grade 4' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Grade 4
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="pressure_sore_grade" type="radio" id="pressure_sore_grade" value="N/A" {{ old('pressure_sore_grade', optional($skinCare)->pressure_sore_grade) == 'N/A' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            N/A
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Is there any district nurse in place to maintain skin integrity?</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="maintain_skin_integrity" type="radio" id="maintain_skin_integrity" value="Yes" {{ old('maintain_skin_integrity', optional($skinCare)->maintain_skin_integrity) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="maintain_skin_integrity" type="radio" id="maintain_skin_integrity" value="No" {{ old('maintain_skin_integrity', optional($skinCare)->maintain_skin_integrity) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="maintain_skin_integrity" type="radio" id="maintain_skin_integrity" value="N/A" {{ old('maintain_skin_integrity', optional($skinCare)->maintain_skin_integrity) == 'N/A' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            N/A
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">District Nurse Referral required</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="district_nurse_referral" type="radio" id="district_nurse_referral" value="Yes" {{ old('district_nurse_referral', optional($skinCare)->district_nurse_referral) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="district_nurse_referral" type="radio" id="district_nurse_referral" value="No" {{ old('district_nurse_referral', optional($skinCare)->district_nurse_referral) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="district_nurse_referral" type="radio" id="district_nurse_referral" value="N/A" {{ old('district_nurse_referral', optional($skinCare)->district_nurse_referral) == 'N/A' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            N/A
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Date of District Nurse Referral</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                          <input class="form-control" name="date_district_nurse_referral" type="date" id="date_district_nurse_referral" value="{{$skinCare->date_district_nurse_referral ?? ''}}">
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="date_district_nurse_referral_check" type="radio" id="date_district_nurse_referral_check" value="N/A" {{ old('date_district_nurse_referral_check', optional($skinCare)->date_district_nurse_referral_check) == 'N/A' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            N/A
                          </label>
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