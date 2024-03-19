@extends('layouts.master')

@section('title') My Health @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') My Health
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
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createMyHealthForm" action="{{route('storeMyHealth', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">My Health History</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="my_health_details" rows="5">{{ $myHealth->my_health_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>What care and support needs do I currently have?</b></label>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Mobility</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="mobility" rows="2">{{ $myHealth->mobility ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Personal Care</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="personal_care" rows="2">{{ $myHealth->personal_care ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Dressing Support</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="dressing_support" rows="2">{{ $myHealth->dressing_support ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Skin Care</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="skin_care" rows="2">{{ $myHealth->skin_care ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Continence Care</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="continence_care" rows="2">{{ $myHealth->continence_care ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Nutrition and Hydration</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="nutrition_and_hydration" rows="2">{{ $myHealth->nutrition_and_hydration ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Medication</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="medication" rows="2">{{ $myHealth->medication ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Social Interest</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="social_interest" rows="2">{{ $myHealth->social_interest ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">What are my desired outcomes?</label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tbody>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_health_condition" value="yes" @if($myHealth && $myHealth->maintain_health_condition && $myHealth->maintain_health_condition == 'yes') checked @endif></td>
                                            <td>I desire to maintain my health conditions</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="remain_healthy" value="yes" @if($myHealth && $myHealth->remain_healthy && $myHealth->remain_healthy == 'yes') checked @endif></td>
                                            <td>For my skin to remain healthy and not to get any sore</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maximize_my_independence" value="yes" @if($myHealth && $myHealth->maximize_my_independence && $myHealth->maximize_my_independence == 'yes') checked @endif></td>
                                            <td>To maximize my independence</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_not_fall" value="yes" @if($myHealth && $myHealth->desire_not_fall && $myHealth->desire_not_fall == 'yes') checked @endif></td>
                                            <td>I desire not to have a fall.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_dignity_privacy" value="yes" @if($myHealth && $myHealth->maintain_dignity_privacy && $myHealth->maintain_dignity_privacy == 'yes') checked @endif></td>
                                            <td>To maintain my dignity and privacy.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_oral_health" value="yes" @if($myHealth && $myHealth->maintain_oral_health && $myHealth->maintain_oral_health == 'yes') checked @endif></td>
                                            <td>I desire to maintain my oral health and hygiene.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_clean_smart" value="yes" @if($myHealth && $myHealth->desire_clean_smart && $myHealth->desire_clean_smart == 'yes') checked @endif></td>
                                            <td>I desire to be a clean and smart as I always prefer to be smart looking.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_to_avoid_appointment" value="yes" @if($myHealth && $myHealth->desire_to_avoid_appointment && $myHealth->desire_to_avoid_appointment == 'yes') checked @endif></td>
                                            <td>I desire to avoid unnecessary dentist appointment.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="avoid_unnecessary_hospital" value="yes" @if($myHealth && $myHealth->avoid_unnecessary_hospital && $myHealth->avoid_unnecessary_hospital == 'yes') checked @endif></td>
                                            <td>To avoid unnecessary hospital admission.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_healthey_lifestyle" value="yes" @if($myHealth && $myHealth->maintain_healthey_lifestyle && $myHealth->maintain_healthey_lifestyle == 'yes') checked @endif></td>
                                            <td>To maintain my healthey lifestyle.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="improve_quality_life" value="yes" @if($myHealth && $myHealth->improve_quality_life && $myHealth->improve_quality_life == 'yes') checked @endif></td>
                                            <td>To improve my quality of life.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_healthy_diet" value="yes" @if($myHealth && $myHealth->maintain_healthy_diet && $myHealth->maintain_healthy_diet == 'yes') checked @endif></td>
                                            <td>To maintain a healthy, nutritious, and varied diet</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="prevent_malnutrition" value="yes" @if($myHealth && $myHealth->prevent_malnutrition && $myHealth->prevent_malnutrition == 'yes') checked @endif></td>
                                            <td>To prevent malnutrition and dehydration</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_good_relationship" value="yes" @if($myHealth && $myHealth->maintain_good_relationship && $myHealth->maintain_good_relationship == 'yes') checked @endif></td>
                                            <td>I prefer to maintain a good relationship with my family</td>
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
                                    $otherOutcomesCheck = $myHealth->other_outcomes_check ?? null;
                                    $otherOutcomesText = $myHealth->other_outcomes_text ?? null;
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
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-10 col-form-label"><b>How do I want staff to support me to achieve my desired outcome?<b></label>
                        <div class="col-md-12">
                          <textarea class="form-control" name="desired_outcome_details" rows="5">{{ $myHealth->desired_outcome_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-10 col-form-label"><b>Include chronical conditions of the service user<br>Chronic conditions are those which in most cases cannot be cured, only controlled, and are often life-long and limiting in terms of quality of life.</b></label>
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