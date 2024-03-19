@extends('layouts.master')

@section('title') End of Life @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') End of Life
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
                <form method="post" id="createPatientForm" action="{{route('storeEndLife', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">What care and support needs do I currently have?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="care_support_need" rows="5">{{$endLife->care_support_need ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">What are my desired outcomes?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="desired_outcomes" rows="5">{{$endLife->desired_outcomes ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">How do I want staff to support me to achieve my desired outcomes?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="achieve_desired" rows="5">{{$endLife->achieve_desired ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does the service user require any communication support in expressing their wishesh around the end of life?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="communication_expressing" type="radio" id="communication_expressing" value="Yes" {{ old('communication_expressing', optional($endLife)->communication_expressing) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="communication_expressing" type="radio" id="communication_expressing" value="No" {{ old('communication_expressing', optional($endLife)->communication_expressing) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please provide additional details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="communication_expressing_details" rows="2">{{$endLife->communication_expressing_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any specific topics of communication to avoid or encourage?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="topics_communication_avoid" type="radio" id="topics_communication_avoid" value="Yes" {{ old('topics_communication_avoid', optional($endLife)->topics_communication_avoid) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="topics_communication_avoid" type="radio" id="topics_communication_avoid" value="No" {{ old('topics_communication_avoid', optional($endLife)->topics_communication_avoid) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please provide additional details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="topics_communication_avoid_details" rows="2">{{$endLife->topics_communication_avoid_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Has the service user opted out of being on the organ donation register?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="opted_organ_donation" type="radio" id="opted_organ_donation" value="Yes" {{ old('opted_organ_donation', optional($endLife)->opted_organ_donation) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="opted_organ_donation" type="radio" id="opted_organ_donation" value="No" {{ old('opted_organ_donation', optional($endLife)->opted_organ_donation) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please write the Organ donation number</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="opted_organ_donation_details" rows="2">{{$endLife->opted_organ_donation_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there a specific care plan put in place by the GP for pain management?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="care_plan_gp_pain" type="radio" id="care_plan_gp_pain" value="Yes" {{ old('care_plan_gp_pain', optional($endLife)->care_plan_gp_pain) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="care_plan_gp_pain" type="radio" id="care_plan_gp_pain" value="No" {{ old('care_plan_gp_pain', optional($endLife)->care_plan_gp_pain) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, where is it kept</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="care_plan_gp_pain_kept_details" rows="2">{{$endLife->care_plan_gp_pain_kept_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Are there any treatments that service user does not want to have when approaching end of life?</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="treatments_approaching" type="radio" id="treatments_approaching" value="Yes" {{ old('treatments_approaching', optional($endLife)->treatments_approaching) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="treatments_approaching" type="radio" id="treatments_approaching" value="No" {{ old('treatments_approaching', optional($endLife)->treatments_approaching) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please provide additional details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="treatments_approaching_additional_details" rows="2">{{$endLife->treatments_approaching_additional_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">What would be important for the service user in their final days and hours of life?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="important_life_hours_details" rows="3">{{$endLife->important_life_hours_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">What specific wishes, if any, does service user have for their final days and hours of life?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="wishes_final_days" rows="3">{{$endLife->wishes_final_days ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Who would the service user like to be present during their final days and hours of life?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="service_user_present_days_hours" rows="3">{{$endLife->service_user_present_days_hours ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">What might comfort service user during their final days and hours of life?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="comfort_final_days_hours" rows="3">{{$endLife->comfort_final_days_hours ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any religious or cultural beliefs to be considered?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="cultural_beliefs_considered" type="radio" id="cultural_beliefs_considered" value="Yes" {{ old('cultural_beliefs_considered', optional($endLife)->cultural_beliefs_considered) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="cultural_beliefs_considered" type="radio" id="cultural_beliefs_considered" value="No" {{ old('cultural_beliefs_considered', optional($endLife)->cultural_beliefs_considered) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please provide additional details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="cultural_beliefs_considered_details" rows="3">{{$endLife->cultural_beliefs_considered_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Describe any wishes that service user has for their funeral</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="wishes_user_funeral" rows="3">{{$endLife->wishes_user_funeral ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there any funeral director in place?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="funeral_director_place" type="radio" id="funeral_director_place" value="Yes" {{ old('funeral_director_place', optional($endLife)->funeral_director_place) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="funeral_director_place" type="radio" id="funeral_director_place" value="No" {{ old('funeral_director_place', optional($endLife)->funeral_director_place) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please provide the details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="funeral_director_place_details" rows="3">{{$endLife->funeral_director_place_details ?? ''}}</textarea>
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