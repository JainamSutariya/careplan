@extends('layouts.master')

@section('title') Restraint Risk Assessment @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Restraint Risk Assessment
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
                <form method="post" id="createPatientForm" action="{{route('storeRestraintRisk', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there any keysafe in place?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="keysafe_place" type="radio" id="keysafe_place" value="Yes" @if($restraintRisk && $restraintRisk->keysafe_place && $restraintRisk->keysafe_place == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="keysafe_place" type="radio" id="keysafe_place" value="No" @if($restraintRisk && $restraintRisk->keysafe_place && $restraintRisk->keysafe_place == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Did the service user gave the consent, to lock the door using the key and keep it back to the key-safe for their safety.</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_safety" type="radio" id="consent_safety" value="Yes" @if($restraintRisk && $restraintRisk->consent_safety && $restraintRisk->consent_safety == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_safety" type="radio" id="consent_safety" value="No" @if($restraintRisk && $restraintRisk->consent_safety && $restraintRisk->consent_safety == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, please give more details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="consent_safety_no_details" rows="2">{{$restraintRisk->consent_safety_no_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there any bedrails in place? </label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="bedrails_place" type="radio" id="bedrails_place" value="Yes" @if($restraintRisk && $restraintRisk->bedrails_place && $restraintRisk->bedrails_place == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="bedrails_place" type="radio" id="bedrails_place" value="No" @if($restraintRisk && $restraintRisk->bedrails_place && $restraintRisk->bedrails_place == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Did the service user gave the consent, to raise the bedrails before raising the bed rails for their safety? </label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_bedrails" type="radio" id="consent_bedrails" value="Yes" @if($restraintRisk && $restraintRisk->consent_bedrails && $restraintRisk->consent_bedrails == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_bedrails" type="radio" id="consent_bedrails" value="No" @if($restraintRisk && $restraintRisk->consent_bedrails && $restraintRisk->consent_bedrails == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, please give more details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="consent_bedrails_details" rows="2">{{$restraintRisk->consent_bedrails_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there any safety belt in place? </label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="safety_belt" type="radio" id="safety_belt" value="Yes" @if($restraintRisk && $restraintRisk->safety_belt && $restraintRisk->safety_belt == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="safety_belt" type="radio" id="safety_belt" value="No" @if($restraintRisk && $restraintRisk->safety_belt && $restraintRisk->safety_belt == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Car Seat Belt / Wheelchair Safety Belt / </label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="car_seat_belt" rows="2">{{$restraintRisk->car_seat_belt ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Did the service user gave the consent, to put the safety belt on once they are in the car chair / wheelchair for their safety?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_car_seat_belt" type="radio" id="consent_car_seat_belt" value="Yes" @if($restraintRisk && $restraintRisk->consent_car_seat_belt && $restraintRisk->consent_car_seat_belt == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_car_seat_belt" type="radio" id="consent_car_seat_belt" value="No" @if($restraintRisk && $restraintRisk->consent_car_seat_belt && $restraintRisk->consent_car_seat_belt == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, please give more details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="consent_car_seat_belt_details" rows="2">{{$restraintRisk->consent_car_seat_belt_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Is there any mobile hoist sling in place?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="mobile_hoist" type="radio" id="mobile_hoist" value="Yes" @if($restraintRisk && $restraintRisk->mobile_hoist && $restraintRisk->mobile_hoist == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="mobile_hoist" type="radio" id="mobile_hoist" value="No" @if($restraintRisk && $restraintRisk->mobile_hoist && $restraintRisk->mobile_hoist == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Did the service user gave the consent to hook them on mobile hoist sling to safe transfer from one place to another place</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="mobile_hoist_transfer" type="radio" id="mobile_hoist_transfer" value="Yes" @if($restraintRisk && $restraintRisk->mobile_hoist_transfer && $restraintRisk->mobile_hoist_transfer == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="mobile_hoist_transfer" type="radio" id="mobile_hoist_transfer" value="No" @if($restraintRisk && $restraintRisk->mobile_hoist_transfer && $restraintRisk->mobile_hoist_transfer == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, please give more details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="mobile_hoist_transfer_no_details" rows="2">{{$restraintRisk->mobile_hoist_transfer_no_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there any medication lock safe in place?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="medication_lock_safe" type="radio" id="medication_lock_safe" value="Yes" @if($restraintRisk && $restraintRisk->medication_lock_safe && $restraintRisk->medication_lock_safe == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="medication_lock_safe" type="radio" id="medication_lock_safe" value="No" @if($restraintRisk && $restraintRisk->medication_lock_safe && $restraintRisk->medication_lock_safe == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Did the service user gave the consent to lock their medication in the medication lock box to prevent the overdose of the medication</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_overdose_medication_lock_safe" type="radio" id="consent_overdose_medication_lock_safe" value="Yes" @if($restraintRisk && $restraintRisk->consent_overdose_medication_lock_safe && $restraintRisk->consent_overdose_medication_lock_safe == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="consent_overdose_medication_lock_safe" type="radio" id="consent_overdose_medication_lock_safe" value="No" @if($restraintRisk && $restraintRisk->consent_overdose_medication_lock_safe && $restraintRisk->consent_overdose_medication_lock_safe == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If No, please give more details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="consent_overdose_medication_lock_safe_details" rows="2">{{$restraintRisk->consent_overdose_medication_lock_safe_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there any other restraint in place? </label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="restraint_place" type="radio" id="restraint_place" value="Yes" @if($restraintRisk && $restraintRisk->restraint_place && $restraintRisk->restraint_place == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="restraint_place" type="radio" id="restraint_place" value="No" @if($restraintRisk && $restraintRisk->restraint_place && $restraintRisk->restraint_place == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please specify below including the consent of the service user with the detail</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="including_consent_details" rows="2">{{$restraintRisk->including_consent_details ?? ''}}</textarea>
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