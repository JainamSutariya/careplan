@extends('layouts.master')

@section('title') Patient Personal Care Details @endsection

@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Patient Personal Care Details @endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<style>
    /* table, th, td {
        border: 1px solid black;
    }
    table{
        width: 100%;
    } */
    td, input[type='checkbox'] {
        text-align: center;
        margin-top: 10px;
    }
    td, input[type='text'] {
        width: -webkit-fill-available;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storePersonalCare', $patient->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">1. What care and support needs do I currently have?</label><br><br>
                                <span>I would like to maintain my oral care,</span><br><br>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_support_need[]" type="checkbox" id="care_support_need" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Independent
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_support_need[]" type="checkbox" id="care_support_need" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Family Support
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_support_need[]" type="checkbox" id="care_support_need" value="Require Support from Carers" {{ CheckboxHelper::isChecked('Require Support from Carers', $checkedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Require Support from Carers
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_support_need[]" type="checkbox" id="care_support_need" value="Required Supervision" {{ CheckboxHelper::isChecked('Required Supervision', $checkedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Required Supervision
                                  </label>
                                </div><br>
                                <label for="basicpill-firstname-input">While seated in,</label><br>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="while_seated[]" type="checkbox" id="while_seated" value="Bedroom" {{ CheckboxHelper::isChecked('Bedroom', $otherCheckedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Bedroom
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="while_seated[]" type="checkbox" id="while_seated" value="Bathroom" {{ CheckboxHelper::isChecked('Bathroom', $otherCheckedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Bathroom
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="while_seated[]" type="checkbox" id="while_seated" value="Living Room" {{ CheckboxHelper::isChecked('Living Room', $otherCheckedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Living Room
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="while_seated[]" type="checkbox" id="while_seated" value="Other" {{ CheckboxHelper::isChecked('Other', $otherCheckedValues) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Other
                                  </label>
                                </div>
                                <textarea class="form-control while_seated_other" name="while_seated_other" style="@if(CheckboxHelper::isChecked('Other', $otherCheckedValues)) display: block; @else display: none; @endif" rows="2">{{$personalCare->while_seated_other ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">2. Strength</label><br>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <thead>
                                        <tr>
                                            <th>Body Part</th>
                                            <th>Strength</th>
                                            <th>Able to</th>
                                            <th>Support With</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Upper Body Strength</td>
                                            <td>Squeeze the Toothpaste on Brush</td>
                                            <td><input type="radio" name="squeeze_brush_able_to" autocomplete="off" {{ old('squeeze_brush_able_to', optional($personalCare)->squeeze_brush_able_to) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="squeeze_brush_support_with" autocomplete="off" {{ old('squeeze_brush_support_with', optional($personalCare)->squeeze_brush_support_with) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Hold the Brush and Complete Oral Care</td>
                                            <td><input type="radio" name="hold_the_brush_able_to" autocomplete="off" {{ old('hold_the_brush_able_to', optional($personalCare)->hold_the_brush_able_to) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="hold_the_brush_support_with" autocomplete="off" {{ old('hold_the_brush_support_with', optional($personalCare)->hold_the_brush_support_with) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Hold the Glass and Gargle</td>
                                            <td><input type="radio" name="hold_the_glass_able_to" autocomplete="off" {{ old('hold_the_glass_able_to', optional($personalCare)->hold_the_glass_able_to) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="hold_the_glass_support_with" autocomplete="off" {{ old('hold_the_glass_support_with', optional($personalCare)->hold_the_glass_support_with) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td>Lower Body Strength</td>
                                            <td>Go to the Bathroom</td>
                                            <td><input type="radio" name="goto_bathroom_able_to" autocomplete="off" {{ old('goto_bathroom_able_to', optional($personalCare)->goto_bathroom_able_to) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="goto_bathroom_support_with" autocomplete="off" {{ old('goto_bathroom_support_with', optional($personalCare)->goto_bathroom_support_with) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Stand in front of the washbasin</td>
                                            <td><input type="radio" name="stand_in_front_able_to" autocomplete="off" {{ old('stand_in_front_able_to', optional($personalCare)->stand_in_front_able_to) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="stand_in_front_support_with" autocomplete="off" {{ old('stand_in_front_support_with', optional($personalCare)->stand_in_front_support_with) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Seat on the Commode / Bed</td>
                                            <td><input type="radio" name="seat_on_commode_able_to" autocomplete="off" {{ old('seat_on_commode_able_to', optional($personalCare)->seat_on_commode_able_to) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="seat_on_commode_support_with" autocomplete="off" {{ old('seat_on_commode_support_with', optional($personalCare)->seat_on_commode_support_with) == 'on' ? 'checked' : '' }}></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">3. What are my desired outcomes?</label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tbody>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_health_condition" {{ old('maintain_health_condition', optional($personalCare)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to maintain my health conditions</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_not_fall" {{ old('desire_not_fall', optional($personalCare)->desire_not_fall) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire not to have a fall.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maximize_my_independence" {{ old('maximize_my_independence', optional($personalCare)->maximize_my_independence) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maximize my independence</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_to_oral_health" {{ old('desire_to_oral_health', optional($personalCare)->desire_to_oral_health) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to maintain my oral health and hygiene.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_dignity_privacy" {{ old('maintain_dignity_privacy', optional($personalCare)->maintain_dignity_privacy) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my dignity and privacy.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_to_avoid_appointment" {{ old('desire_to_avoid_appointment', optional($personalCare)->desire_to_avoid_appointment) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to avoid unnecessary dentist appointment.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_clean_smart" {{ old('desire_clean_smart', optional($personalCare)->desire_clean_smart) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to be a clean and smart as I always prefer to be smart looking.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_healthey_lifestyle" {{ old('maintain_healthey_lifestyle', optional($personalCare)->maintain_healthey_lifestyle) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my healthey lifestyle.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="avoid_unnecessary_hospital" {{ old('avoid_unnecessary_hospital', optional($personalCare)->avoid_unnecessary_hospital) == 'on' ? 'checked' : '' }}></td>
                                            <td>To avoid unnecessary hospital admission.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_good_relation" {{ old('maintain_good_relation', optional($personalCare)->maintain_good_relation) == 'on' ? 'checked' : '' }}></td>
                                            <td>I prefer to maintain a good relationship with my family</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="improve_quality_life" {{ old('maintain_health_condition', optional($personalCare)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>To improve my quality of life.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="prevent_malnutrition" {{ old('maintain_health_condition', optional($personalCare)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>To prevent malnutrition and dehydration</td>
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
                                    $otherOutcomesCheck = $personalCare->other_outcomes_check ?? null;
                                    $otherOutcomesText = $personalCare->other_outcomes_text ?? null;
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
                    <!--<div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">4. How do I want staff to support me to achieve my desired outcomes?</label><br>
                                <span>I prefer to get the consent before care (refer communication section for more details)</span><br>
                                <span>I prefer the care staff to maintain my privacy and dignity (refer privacy and dignity section)</span><br>
                                <span>Need support from the care staff to,</span><br><br>
                                <button type="submit" class="btn btn-light w-md">Add Risk</button>
                            </div>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input">Towel Location</label>
                                <textarea class="form-control" name="towel_location" placeholder="" rows="2">{{$personalCare->towel_location ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input">4. Shaving – ELECTRIC ONLY</label>
                            </div>
                            <label for="example-checkbox-input">Do you need support</label>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="shaving_support" type="radio" value="yes" id="shaving_support" {{ old('shaving_support', optional($personalCare)->shaving_support) == 'yes' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="shaving_support" type="radio" value="no" id="shaving_support" {{ old('shaving_support', optional($personalCare)->shaving_support) == 'no' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Who Support you</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="shaving_support_need[]" type="checkbox" id="shaving_support_need" value="Independent" {{ CheckboxHelper::isChecked('Independent', $otherCheckedValues1) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Independent
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="shaving_support_need[]" type="checkbox" id="shaving_support_need" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $otherCheckedValues1) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Family Support
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="shaving_support_need[]" type="checkbox" id="shaving_support_need" value="Require Support from Carers" {{ CheckboxHelper::isChecked('Require Support from Carers', $otherCheckedValues1) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Require Support from Carers
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="shaving_support_need[]" type="checkbox" id="shaving_support_need" value="Required Supervision" {{ CheckboxHelper::isChecked('Required Supervision', $otherCheckedValues1) ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Required Supervision
                                  </label>
                                </div>
                            </div>
                            <label for="example-checkbox-input">Other Details</label>
                            <textarea class="form-control" name="electric_shaver_other_details" placeholder="" rows="2">{{$personalCare->electric_shaver_other_details ?? ''}}</textarea>
                            <br>
                            <label for="example-checkbox-input">Electric Shaver</label>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="example-checkbox-input">Kept (location)</label>
                                    <input class="form-control" type="text" name="shaving_kept_location" value="{{$personalCare->shaving_kept_location ?? ''}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-checkbox-input">Complete the Shaving</label>
                                    <input class="form-control" type="text" name="complete_shaving" value="{{$personalCare->complete_shaving ?? ''}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-checkbox-input">Complete the shaving on, (Day and Time)</label>
                                    <input class="form-control" type="text" name="complete_shaving_day_time" value="{{$personalCare->complete_shaving_day_time ?? ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input">5. Nail Cutting Support</label>
                            </div>
                            <label for="example-checkbox-input">Do you need support</label>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="nail_cutting_support" type="radio" value="yes" id="nail_cutting_support" {{ old('nail_cutting_support', optional($personalCare)->nail_cutting_support) == 'yes' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="nail_cutting_support" type="radio" value="no" id="nail_cutting_support" {{ old('nail_cutting_support', optional($personalCare)->nail_cutting_support) == 'no' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <br>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                <tr>
                                    <td></td>
                                    <td>Self</td>
                                    <td>Family Support</td>
                                    <td>Professional</td>
                                </tr>
                                <tr>
                                    <td>Hand Nails</td>
                                    <td><input type="text" class="form-control" name="hand_nail_cutting_self" value="{{$personalCare->hand_nail_cutting_self ?? ''}}"></td>
                                    <td><input type="text" class="form-control" name="hand_nail_cutting_falimy_support" value="{{$personalCare->hand_nail_cutting_falimy_support ?? ''}}"></td>
                                    <td><input type="text" class="form-control" name="hand_nail_cutting_professinal" value="{{$personalCare->hand_nail_cutting_professinal ?? ''}}"></td>
                                </tr>
                                <tr>
                                    <td>Foot Nails</td>
                                    <td><input type="text" class="form-control" name="foot_nail_cutting_self" value="{{$personalCare->foot_nail_cutting_self ?? ''}}"></td>
                                    <td><input type="text" class="form-control" name="foot_nail_cutting_falimy_support" value="{{$personalCare->foot_nail_cutting_falimy_support ?? ''}}"></td>
                                    <td><input type="text" class="form-control" name="foot_nail_cutting_professinal" value="{{$personalCare->foot_nail_cutting_professinal ?? ''}}"></td>
                                </tr>
                            </table>
                            <label for="example-checkbox-input">Other Details</label>
                            <textarea class="form-control" name="nail_cutting_other_details" placeholder="" rows="2">{{$personalCare->nail_cutting_other_details ?? ''}}</textarea>
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
    $(document).ready(function () {
        function toggleWhileSeatedOther() {
            var isOtherChecked = $('input[name="while_seated[]"][value="Other"]').is(':checked');
            $('.while_seated_other').toggle(isOtherChecked);
        }

        $('input[name="while_seated[]"]').change(function () {
            toggleWhileSeatedOther();
        });

        toggleWhileSeatedOther();
    });
</script>
@endsection