@extends('layouts.master')

@section('title') Patient Communication Details @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Patient Communication Details @endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeCommunication', $patient->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">1. My Preferred language to communicate:</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="language_english" type="checkbox" id="language" value="English" {{ old('language_english', optional($communication)->language_english) == 'English' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    English
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="language_punjabi" type="checkbox" id="language" value="Punjabi" {{ old('language_punjabi', optional($communication)->language_punjabi) == 'Punjabi' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Punjabi
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="language_hindi" type="checkbox" id="language" value="Hindi" {{ old('language_hindi', optional($communication)->language_hindi) == 'Hindi' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Hindi
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="language_gujarati" type="checkbox" id="language" value="Gujarati" {{ old('language_gujarati', optional($communication)->language_gujarati) == 'Gujarati' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Gujarati
                                  </label>
                                </div>
                            </div>
                            <input type="text" name="other_language" placeholder="Other Language" class="form-control" id="other_language" autocomplete="off" value="{{ old('other_language', optional($communication)->other_language) }}"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">2. My Preferred way of communication:</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="way_communication_verbal" type="checkbox" value="Verbal" id="way_communication_verbal" {{ old('way_communication_verbal', optional($communication)->way_communication_verbal) == 'Verbal' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Verbal
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="way_communication_non_verbal" type="checkbox" value="Non-Verbal" id="way_communication_non_verbal" {{ old('way_communication_non_verbal', optional($communication)->way_communication_non_verbal) == 'Non-Verbal' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Non-Verbal
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="way_communication_written" type="checkbox" value="Written" id="way_communication_written" {{ old('way_communication_written', optional($communication)->way_communication_written) == 'Written' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Written
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="way_communication_british_sign" type="checkbox" value="British Sign" id="way_communication_british_sign" {{ old('way_communication_british_sign', optional($communication)->way_communication_british_sign) == 'British Sign' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    British Sign
                                  </label>
                                </div>
                            </div>
                            <input type="text" name="other_way" placeholder="Other Way Of Communication" class="form-control" id="other_way" autocomplete="off" value="{{ old('other_way', optional($communication)->other_way) }}"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input">Can you communicate clearly?</label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="communicate_clearly" type="radio" value="yes" id="communicate_clearly" {{ old('communicate_clearly', optional($communication)->communicate_clearly) == 'yes' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="communicate_clearly" type="radio" value="no" id="communicate_clearly" {{ old('communicate_clearly', optional($communication)->communicate_clearly) == 'no' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <label for="example-checkbox-input">If No, then provide details</label>
                            <textarea class="form-control" name="communicate_clearly_details" placeholder="" rows="2">{{ old('communicate_clearly_details', optional($communication)->communicate_clearly_details) }}</textarea>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input">Is there any speech impairment?</label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="speech_impairment" type="radio" value="yes" id="speech_impairment" {{ old('speech_impairment', optional($communication)->speech_impairment) == 'yes' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="speech_impairment" type="radio" value="no" id="speech_impairment" {{ old('speech_impairment', optional($communication)->speech_impairment) == 'no' ? 'checked' : '' }}>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <label for="example-checkbox-input">If No, then provide details</label>
                            <textarea class="form-control" name="speech_impairment_details" placeholder="" rows="2">{{ old('speech_impairment_details', optional($communication)->speech_impairment_details) == 'no' ? 'checked' : '' }}</textarea>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">Are you able to pick up the phone?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="pick_up_phone" type="radio" value="yes" id="pick_up_phone" {{ old('pick_up_phone', optional($communication)->pick_up_phone) == 'yes' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="pick_up_phone" type="radio" value="no" id="pick_up_phone" {{ old('pick_up_phone', optional($communication)->pick_up_phone) == 'no' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <label>If No, then provide details</label>
                                <textarea class="form-control" name="pick_up_phone_details" placeholder="" rows="2">{{ old('pick_up_phone_details', optional($communication)->pick_up_phone_details) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">Are you able to communicate on the phone?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="communicate_phone" type="radio" value="yes" id="communicate_phone" {{ old('communicate_phone', optional($communication)->communicate_phone) == 'yes' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="communicate_phone" type="radio" value="no" id="communicate_phone" {{ old('communicate_phone', optional($communication)->communicate_phone) == 'no' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <label>If No, then provide details of communication</label>
                                <textarea class="form-control" name="communicate_phone_details" placeholder="" rows="2">{{ old('communicate_phone_details', optional($communication)->communicate_phone_details) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">Would you like your care plan in any other language</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_plan_language" type="radio" value="yes" id="care_plan_language" {{ old('care_plan_language', optional($communication)->care_plan_language) == 'yes' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_plan_language" type="radio" value="no" id="care_plan_language" {{ old('care_plan_language', optional($communication)->care_plan_language) == 'no' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <label>If Yes, then provide details</label>
                                <textarea class="form-control" name="care_plan_language_details" placeholder="" rows="2">{{ old('care_plan_language_details', optional($communication)->care_plan_language_details) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">Are you able to give the consent to the care staff to perform the task?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_staff_perform_task" type="radio" value="yes" id="care_staff_perform_task" {{ old('care_staff_perform_task', optional($communication)->care_staff_perform_task) == 'yes' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="care_staff_perform_task" type="radio" value="no" id="care_staff_perform_task" {{ old('care_staff_perform_task', optional($communication)->care_staff_perform_task) == 'no' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <label>If No, then provide details</label>
                                <textarea class="form-control" name="care_staff_perform_task_details" placeholder="" rows="2">{{ old('care_staff_perform_task_details', optional($communication)->care_staff_perform_task_details) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">How would you prefer to give the consent?</label>
                                <textarea class="form-control" name="prefer_consent" id="prefer_consent" rows="2">{{ old('prefer_consent', optional($communication)->prefer_consent) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">If the service user not able to give the consent then who will give the consent on behalf of the service user?</label>
                                <textarea class="form-control" name="consent_behalf" id="consent_behalf" rows="2">{{ old('consent_behalf', optional($communication)->consent_behalf) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="example-password-input"></label>
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