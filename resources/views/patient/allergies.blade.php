@extends('layouts.master')

@section('title') Allergies @endsection

@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Allergies
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
                <form method="post" id="createPatientForm" action="{{route('storeAllergies', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any general allergies?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="general_allergies" type="radio" id="general_allergies" value="Yes" {{ old('general_allergies', optional($allergies)->general_allergies) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="general_allergies" type="radio" id="general_allergies" value="No" {{ old('general_allergies', optional($allergies)->general_allergies) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If yes, please provide the details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="general_allergies_yes_details" rows="2">{{ old('general_allergies_yes_details', optional($allergies)->general_allergies_yes_details) }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any medication allergies?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="medication_allergies" type="radio" id="medication_allergies" value="Yes" {{ old('medication_allergies', optional($allergies)->medication_allergies) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="medication_allergies" type="radio" id="medication_allergies" value="No" {{ old('medication_allergies', optional($allergies)->medication_allergies) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If yes, please provide the details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="medication_allergies_yes_details" rows="2">{{ old('medication_allergies_yes_details', optional($allergies)->medication_allergies_yes_details) }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any food and fluid allergies?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="fluid_allergies" type="radio" id="fluid_allergies" value="Yes" {{ old('fluid_allergies', optional($allergies)->fluid_allergies) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="fluid_allergies" type="radio" id="fluid_allergies" value="No" {{ old('fluid_allergies', optional($allergies)->fluid_allergies) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If yes, please provide the details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="fluid_allergies_yes_details" rows="2">{{ old('fluid_allergies_yes_details', optional($allergies)->fluid_allergies_yes_details) }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>My Mental Capacity:</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Can be able to take decision for</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="mental_capacity_decision[]" type="checkbox" id="mental_capacity_decision" value="Health" {{ CheckboxHelper::isChecked('Health', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Health
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="mental_capacity_decision[]" type="checkbox" id="mental_capacity_decision" value="Wellbeing" {{ CheckboxHelper::isChecked('Wellbeing', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Wellbeing
                          </label>
                        </div>
                        <div class="col-md-5">
                          <input class="form-check-input" name="mental_capacity_decision[]" type="checkbox" id="mental_capacity_decision" value="Family Helping for the Important Decisions" {{ CheckboxHelper::isChecked('Family Helping for the Important Decisions', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Helping for the Important Decisions
                          </label>
                        </div>
                        <textarea class="form-control mental_capacity_decision_other" name="mental_capacity_decision_other" rows="2">{{$allergies->mental_capacity_decision_other ?? ''}}</textarea>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Legal Power of Attorney</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="legal_attorney" type="radio" id="legal_attorney" value="Yes" {{ old('legal_attorney', optional($allergies)->legal_attorney) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="legal_attorney" type="radio" id="legal_attorney" value="No" {{ old('legal_attorney', optional($allergies)->legal_attorney) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please write LPA reference number, (Contact to the Public Guardian Officer)</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="lpa_reference_number" rows="2">{{ old('lpa_reference_number', optional($allergies)->lpa_reference_number) }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">DoLS (Deprivation of Liberty Safeguards)</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="dols_details" rows="2">{{ old('dols_details', optional($allergies)->dols_details) }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>Privacy and Dignity</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label"><b>I prefer the care staff to maintain my privacy and dignity by,</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-1">
                          <input type="checkbox" name="maintain_health_condition" style="margin-top: 10px;" {{ old('maintain_health_condition', optional($allergies)->maintain_health_condition) == 'on' ? 'checked' : '' }}>
                        </div>
                        <label for="example-text-input" class="col-md-11 col-form-label">Covering my upper body and lower body part appropriately while providing the care with the towel or a piece of cloth.</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-1">
                          <input type="checkbox" name="closing_door" style="margin-top: 10px;" {{ old('closing_door', optional($allergies)->closing_door) == 'on' ? 'checked' : '' }}>
                        </div>
                        <label for="example-text-input" class="col-md-11 col-form-label">By closing the door / window and Blinds</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-1">
                          <input type="checkbox" name="maintaining_choice" style="margin-top: 10px;" {{ old('maintaining_choice', optional($allergies)->maintaining_choice) == 'on' ? 'checked' : '' }}>
                        </div>
                        <label for="example-text-input" class="col-md-11 col-form-label">By maintaining my choice, preferences and respect me</label>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Location of Towel Kept</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="location_towel_kept" rows="2">{{ old('location_towel_kept', optional($allergies)->location_towel_kept) }}</textarea>
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