@extends('layouts.master')

@section('title') Social Interest and Activities @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Social Interest and Activities
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
                <form method="post" id="createPatientForm" action="{{route('storeSocialInterest', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">What care and support needs do I currently have?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="care_support_need" rows="5">{{$socialInterest->care_support_need ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">What are my desired outcomes?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="desired_outcomes" rows="5">{{$socialInterest->desired_outcomes ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">How do I want staff to support me to achieve my desired outcomes?</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="support_desired_outcomes" rows="5">{{$socialInterest->support_desired_outcomes ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Preferred Care Staff:</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="preferred_care" type="radio" id="preferred_care" value="Male" {{ old('preferred_care', optional($socialInterest)->preferred_care) == 'Male' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Male
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="preferred_care" type="radio" id="preferred_care" value="Female" {{ old('preferred_care', optional($socialInterest)->preferred_care) == 'Female' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Female
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="preferred_care" type="radio" id="preferred_care" value="No Preference" {{ old('preferred_care', optional($socialInterest)->preferred_care) == 'No Preference' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No Preference
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Other Professional Visits Me</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="professional_visit" rows="5">{{$socialInterest->professional_visit ?? ''}}</textarea>
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