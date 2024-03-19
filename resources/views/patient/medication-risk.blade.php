@extends('layouts.master')

@section('title') Medication Risk Assessment Tool @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Medication Risk Assessment Tool
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
                <form method="post" id="createPatientForm" action="{{route('storeMedicationRisk', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does Service User have any history of refusal or overdose of medications?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="refusal_medications" type="radio" id="refusal_medications" value="Yes" @if($medicationRisk && $medicationRisk->refusal_medications && $medicationRisk->refusal_medications == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="refusal_medications" type="radio" id="refusal_medications" value="No"  @if($medicationRisk && $medicationRisk->refusal_medications && $medicationRisk->refusal_medications == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="refusal_medications_details" rows="2">{{$medicationRisk->refusal_medications_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does Service User have any allergies to any medications?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="allergies_medications" type="radio" id="allergies_medications" value="Yes" @if($medicationRisk && $medicationRisk->allergies_medications && $medicationRisk->allergies_medications == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="medication_allergies" type="radio" id="medication_allergies" value="No" @if($medicationRisk && $medicationRisk->allergies_medications && $medicationRisk->allergies_medications == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="allergies_medications_yes_details" rows="2">{{$medicationRisk->allergies_medications_yes_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Are there any medications they don’t need support with? If yes, Give details:</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="medications_support_details" rows="2">{{$medicationRisk->medications_support_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Is there any insulin, Service User is taking? If yes, give details:</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="insulin_service_details" rows="2">{{$medicationRisk->insulin_service_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">When original box medications will transfer to blister pack if medications is our responsibility?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="blister_medication" rows="2">{{$medicationRisk->blister_medication ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Is there any medications safe box available? If yes, please give details why family kept this?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="medications_safe_box" rows="2">{{$medicationRisk->medications_safe_box ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Finding difficulties taking medications out of the blister pack/original box?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="difficulties_medications" rows="2">{{$medicationRisk->difficulties_medications ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Is there any controlled drug medications, which needs support with prompting? If yes, please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="controlled_drug_medications" rows="2">{{$medicationRisk->controlled_drug_medications ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Have the medications changed recently?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="medications_changed" rows="2">{{$medicationRisk->medications_changed ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Any nasal drop the Service User is having regularly? If yes, give details:</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="nasal_drop" rows="2">{{$medicationRisk->nasal_drop ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Is the service user aware of timings and doses of medications?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="timings_medications" rows="2">{{$medicationRisk->timings_medications ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">When and whom was the last medication review carried out?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="last_medication" rows="2">{{$medicationRisk->last_medication ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Risk Level</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="Low" @if($medicationRisk && $medicationRisk->risk_level && $medicationRisk->risk_level == 'Low') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Low
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="Medium" @if($medicationRisk && $medicationRisk->risk_level && $medicationRisk->risk_level == 'Medium') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Medium
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="High" @if($medicationRisk && $medicationRisk->risk_level && $medicationRisk->risk_level == 'High') checked @endif>
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