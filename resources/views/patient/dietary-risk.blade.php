@extends('layouts.master')

@section('title') Dietary Risk Assessment Tool @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Dietary Risk Assessment Tool
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
                <form method="post" id="createPatientForm" action="{{route('storeDietaryRisk', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does a Service User have any allergy to food?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="allergy_food" type="radio" id="allergy_food" value="Yes" @if($dietaryRisk && $dietaryRisk->allergy_food && $dietaryRisk->allergy_food == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="allergy_food" type="radio" id="allergy_food" value="No" @if($dietaryRisk && $dietaryRisk->allergy_food && $dietaryRisk->allergy_food == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please give details of allergy</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="allergy_food_details" rows="2">{{$dietaryRisk->allergy_food_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does a Service User have any dietary restriction? </label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="dietary_restriction" type="radio" id="dietary_restriction" value="Yes" @if($dietaryRisk && $dietaryRisk->dietary_restriction && $dietaryRisk->dietary_restriction == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="dietary_restriction" type="radio" id="dietary_restriction" value="No" @if($dietaryRisk && $dietaryRisk->dietary_restriction && $dietaryRisk->dietary_restriction == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="dietary_restriction_details" rows="2">{{$dietaryRisk->dietary_restriction_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does Service User need encouragement with food?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="encouragement_food" type="radio" id="encouragement_food" value="Yes" @if($dietaryRisk && $dietaryRisk->encouragement_food && $dietaryRisk->encouragement_food == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="encouragement_food" type="radio" id="encouragement_food" value="No" @if($dietaryRisk && $dietaryRisk->encouragement_food && $dietaryRisk->encouragement_food == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If yes, please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="encouragement_food_details" rows="2">{{$dietaryRisk->encouragement_food_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does Service User need encouragement with fluids?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="encouragement_fluids" type="radio" id="encouragement_fluids" value="Yes" @if($dietaryRisk && $dietaryRisk->encouragement_fluids && $dietaryRisk->encouragement_fluids == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="encouragement_fluids" type="radio" id="encouragement_fluids" value="No" @if($dietaryRisk && $dietaryRisk->encouragement_fluids && $dietaryRisk->encouragement_fluids == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If yes, please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="encouragement_fluids_details" rows="2">{{$dietaryRisk->encouragement_fluids_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Who manages Service User food preparation? </label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="food_preparation" type="radio" id="food_preparation" value="Carer" @if($dietaryRisk && $dietaryRisk->food_preparation && $dietaryRisk->food_preparation == 'Carer') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="food_preparation" type="radio" id="food_preparation" value="Family Support" @if($dietaryRisk && $dietaryRisk->food_preparation && $dietaryRisk->food_preparation == 'Family Support') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="food_preparation" type="radio" id="food_preparation" value="Independent" @if($dietaryRisk && $dietaryRisk->food_preparation && $dietaryRisk->food_preparation == 'Independent') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Who manages Service User fluid preparation?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="fluids_preparation" type="radio" id="fluids_preparation" value="Carer" @if($dietaryRisk && $dietaryRisk->fluids_preparation && $dietaryRisk->fluids_preparation == 'Carer') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="fluids_preparation" type="radio" id="fluids_preparation" value="Family Support" @if($dietaryRisk && $dietaryRisk->fluids_preparation && $dietaryRisk->fluids_preparation == 'Family Support') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="fluids_preparation" type="radio" id="fluids_preparation" value="Independent" @if($dietaryRisk && $dietaryRisk->fluids_preparation && $dietaryRisk->fluids_preparation == 'Independent') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does a Service User have any difficulties chewing food?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="difficulties_chewing" type="radio" id="difficulties_chewing" value="Yes" @if($dietaryRisk && $dietaryRisk->difficulties_chewing && $dietaryRisk->difficulties_chewing == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="difficulties_chewing" type="radio" id="difficulties_chewing" value="No" @if($dietaryRisk && $dietaryRisk->difficulties_chewing && $dietaryRisk->difficulties_chewing == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Please give details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="difficulties_chewing_details" rows="2">{{$dietaryRisk->difficulties_chewing_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does Service User have any difficulties to swallowing food?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="difficulties_swallowing" type="radio" id="difficulties_swallowing" value="Yes" @if($dietaryRisk && $dietaryRisk->difficulties_swallowing && $dietaryRisk->difficulties_swallowing == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="difficulties_swallowing" type="radio" id="difficulties_swallowing" value="No" @if($dietaryRisk && $dietaryRisk->difficulties_swallowing && $dietaryRisk->difficulties_swallowing == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If yes, please provide further details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="difficulties_swallowing_details" rows="2">{{$dietaryRisk->difficulties_swallowing_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does Service User have any difficulties to swallowing fluid?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="difficulties_swallowing_fluid" type="radio" id="difficulties_swallowing_fluid" value="Yes" @if($dietaryRisk && $dietaryRisk->difficulties_swallowing_fluid && $dietaryRisk->difficulties_swallowing_fluid == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="difficulties_swallowing_fluid" type="radio" id="difficulties_swallowing_fluid" value="No" @if($dietaryRisk && $dietaryRisk->difficulties_swallowing_fluid && $dietaryRisk->difficulties_swallowing_fluid == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If yes, please provide further details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="difficulties_swallowing_fluid_details" rows="2">{{$dietaryRisk->difficulties_swallowing_fluid_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Does a Service User have a sore mouth?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="sore_mouth_details" rows="2">{{$dietaryRisk->sore_mouth_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does a Service User has any risk of chocking?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="chocking_risk" type="radio" id="chocking_risk" value="Yes" @if($dietaryRisk && $dietaryRisk->chocking_risk && $dietaryRisk->chocking_risk == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="chocking_risk" type="radio" id="chocking_risk" value="No" @if($dietaryRisk && $dietaryRisk->chocking_risk && $dietaryRisk->chocking_risk == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does Service User addict to drugs or alcohol?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="drugs_alcohol" type="radio" id="drugs_alcohol" value="Yes" @if($dietaryRisk && $dietaryRisk->drugs_alcohol && $dietaryRisk->drugs_alcohol == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="drugs_alcohol" type="radio" id="drugs_alcohol" value="No" @if($dietaryRisk && $dietaryRisk->drugs_alcohol && $dietaryRisk->drugs_alcohol == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Risk Level</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="Low" @if($dietaryRisk && $dietaryRisk->risk_level && $dietaryRisk->risk_level == 'Low') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Low
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="Medium" @if($dietaryRisk && $dietaryRisk->risk_level && $dietaryRisk->risk_level == 'Medium') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Medium
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="High" @if($dietaryRisk && $dietaryRisk->risk_level && $dietaryRisk->risk_level == 'High') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            High
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Other Dietary Information</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="dietary_Information" rows="2">{{$dietaryRisk->dietary_Information ?? ''}}</textarea>
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