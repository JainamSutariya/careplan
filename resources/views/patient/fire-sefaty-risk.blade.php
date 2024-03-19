@extends('layouts.master')

@section('title') Fire Sefaty Risk Assessment Tool @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Fire Sefaty Risk Assessment Tool
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeFireSefatyRisk', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>Assessment Areas</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are smoke alarms fitted in the property?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="alarms_fitted" type="radio" id="alarms_fitted" value="Yes" @if($fireSefatyRisk && $fireSefatyRisk->alarms_fitted && $fireSefatyRisk->alarms_fitted == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="alarms_fitted" type="radio" id="alarms_fitted" value="No" @if($fireSefatyRisk && $fireSefatyRisk->alarms_fitted && $fireSefatyRisk->alarms_fitted == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, Please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="alarms_fitted_details" rows="2">{{ $fireSefatyRisk->alarms_fitted_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Where the smoke alarm is fitted?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="smoke_alarm_fitted" type="radio" id="smoke_alarm_fitted" value="In the Hallway" @if($fireSefatyRisk && $fireSefatyRisk->smoke_alarm_fitted && $fireSefatyRisk->smoke_alarm_fitted == 'In the Hallway') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            In the Hallway
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="smoke_alarm_fitted" type="radio" id="smoke_alarm_fitted" value="In the Kitchen" @if($fireSefatyRisk && $fireSefatyRisk->smoke_alarm_fitted && $fireSefatyRisk->smoke_alarm_fitted == 'In the Kitchen') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            In the Kitchen
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="smoke_alarm_fitted" type="radio" id="smoke_alarm_fitted" value="In the SU’s Room" @if($fireSefatyRisk && $fireSefatyRisk->smoke_alarm_fitted && $fireSefatyRisk->smoke_alarm_fitted == 'In the SU’s Room') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            In the SU’s Room
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="smoke_alarm_fitted" type="radio" id="smoke_alarm_fitted" value="In the Living Room" @if($fireSefatyRisk && $fireSefatyRisk->smoke_alarm_fitted && $fireSefatyRisk->smoke_alarm_fitted == 'In the Living Room') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            In the Living Room
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If the smoke alarm is installed on other place, please specify as well</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="alarms_installed_details" rows="2">{{ $fireSefatyRisk->alarms_installed_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">When the last smoke alarm / fire alarm was service?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="alarms_fire_service" rows="2">{{ $fireSefatyRisk->alarms_fire_service ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-8 col-form-label">In the event of fire, is the escape route adequate from all rooms including if used an attic or basement?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="fire_basement" type="radio" id="fire_basement" value="Yes" @if($fireSefatyRisk && $fireSefatyRisk->fire_basement && $fireSefatyRisk->fire_basement == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="fire_basement" type="radio" id="fire_basement" value="No" @if($fireSefatyRisk && $fireSefatyRisk->fire_basement && $fireSefatyRisk->fire_basement == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, please give the details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="alarms_fire_service_no_details" rows="2">{{ $fireSefatyRisk->alarms_fire_service_no_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-8 col-form-label">In the event of fire, is the service user able to open the door?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="fire_service_open_door" type="radio" id="fire_service_open_door" value="Yes" @if($fireSefatyRisk && $fireSefatyRisk->fire_service_open_door && $fireSefatyRisk->fire_service_open_door == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="fire_service_open_door" type="radio" id="fire_service_open_door" value="No" @if($fireSefatyRisk && $fireSefatyRisk->fire_service_open_door && $fireSefatyRisk->fire_service_open_door == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, please give the details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="fire_service_open_door_no_details" rows="2">{{ $fireSefatyRisk->fire_service_open_door_no_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-8 col-form-label">Are there any actions that need to be taken as a result of this Risk Assessment Tool?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="risk_assessment_tool" type="radio" id="risk_assessment_tool" value="Yes" @if($fireSefatyRisk && $fireSefatyRisk->risk_assessment_tool && $fireSefatyRisk->risk_assessment_tool == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="risk_assessment_tool" type="radio" id="risk_assessment_tool" value="No" @if($fireSefatyRisk && $fireSefatyRisk->risk_assessment_tool && $fireSefatyRisk->risk_assessment_tool == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="risk_assessment_tool_details" rows="2">{{ $fireSefatyRisk->risk_assessment_tool_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-8 col-form-label">Is there any hazard to the escape route which cause the concerns?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="hazard_escape_route" type="radio" id="hazard_escape_route" value="Yes" @if($fireSefatyRisk && $fireSefatyRisk->hazard_escape_route && $fireSefatyRisk->hazard_escape_route == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="hazard_escape_route" type="radio" id="hazard_escape_route" value="No" @if($fireSefatyRisk && $fireSefatyRisk->hazard_escape_route && $fireSefatyRisk->hazard_escape_route == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please give the details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="hazard_escape_route_details" rows="2">{{ $fireSefatyRisk->hazard_escape_route_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Contact Details (if any to contact in Emergency)</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="contact_details" rows="2">{{ $fireSefatyRisk->contact_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Taking account of your findings what is the current level of risk of personal injury to members of staff?</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_injury" type="radio" id="personal_injury" value="Low" @if($fireSefatyRisk && $fireSefatyRisk->personal_injury && $fireSefatyRisk->personal_injury == 'Low') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Low
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_injury" type="radio" id="personal_injury" value="Medium" @if($fireSefatyRisk && $fireSefatyRisk->personal_injury && $fireSefatyRisk->personal_injury == 'Medium') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Medium
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_injury" type="radio" id="personal_injury" value="High" @if($fireSefatyRisk && $fireSefatyRisk->personal_injury && $fireSefatyRisk->personal_injury == 'High') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            High
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