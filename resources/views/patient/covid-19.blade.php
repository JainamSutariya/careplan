@extends('layouts.master')

@section('title') Patient Covid 19 Details @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Patient Covid 19 Details @endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeCovid19', $patient->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">1.Was Service User recently tested with COVID-19?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="covid_tested" type="radio" id="covid_tested_yes" value="yes" @if($covidTest && $covidTest->covid_tested && $covidTest->covid_tested == 'yes') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="covid_tested" type="radio" id="covid_tested_no" value="no" @if($covidTest && $covidTest->covid_tested && $covidTest->covid_tested == 'no') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">2. What is the result of COVID-19?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="covid_result" type="radio" id="covid_result_yes" value="yes" @if($covidTest && $covidTest->covid_result && $covidTest->covid_result == 'yes') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="covid_result" type="radio" id="covid_result_no" value="no" @if($covidTest && $covidTest->covid_result && $covidTest->covid_result == 'no') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="covid_result" type="radio" id="covid_result_n/a" value="n/a" @if($covidTest && $covidTest->covid_result && $covidTest->covid_result == 'n/a') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    N/A
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input">3. When was Service User tested with COVID-19?</label>
                                <div class="col-lg-4">
                                  <input type="text" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $covidTest->when_service_user_tested_date)->format('d-m-Y') }}" name="when_service_user_tested_date" class="form-control" id="when_service_user_tested_date" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-provide="datepicker" data-date-autoclose="true" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="service_user_covid_test" type="radio" id="service_user_covid_test_n/a" value="n/a" @if($covidTest && $covidTest->service_user_covid_test && $covidTest->service_user_covid_test == 'n/a') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                N/A
                              </label>
                            </div><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">4. Does Service User have any symptoms of COVID-19?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="service_user_symptoms" type="radio" id="service_user_symptoms_yes" value="yes" @if($covidTest && $covidTest->service_user_symptoms && $covidTest->service_user_symptoms == 'yes') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="service_user_symptoms" type="radio" id="service_user_symptoms_no" value="no" @if($covidTest && $covidTest->service_user_symptoms && $covidTest->service_user_symptoms == 'no') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="service_user_symptoms_yes_data" style="display: none;">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">5. What kind of symptoms Service User have?</label>
                                <ul>
                                  <li>
                                    <label for="example-checkbox-input">A High Temperature</label>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="high_temperature" type="radio" id="high_temperature_yes" value="yes" @if($covidTest && $covidTest->high_temperature && $covidTest->high_temperature == 'yes') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="high_temperature" type="radio" id="high_temperature_no" value="no" @if($covidTest && $covidTest->high_temperature && $covidTest->high_temperature == 'no') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        No
                                      </label>
                                    </div>
                                  </li>
                                  <li>
                                    <label for="example-checkbox-input">A new, Continuous Cough</label>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="continuous_cough" type="radio" id="continuous_cough_yes" value="yes" @if($covidTest && $covidTest->continuous_cough && $covidTest->continuous_cough == 'yes') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="continuous_cough" type="radio" id="continuous_cough_no" value="no" @if($covidTest && $covidTest->continuous_cough && $covidTest->continuous_cough == 'no') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        No
                                      </label>
                                    </div>
                                  </li>
                                  <li>
                                    <label for="example-checkbox-input">Dry cough</label>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="dry_cough" type="radio" id="dry_cough_yes" value="yes" @if($covidTest && $covidTest->dry_cough && $covidTest->dry_cough == 'yes') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="dry_cough" type="radio" id="dry_cough_no" value="no" @if($covidTest && $covidTest->dry_cough && $covidTest->dry_cough == 'no') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        No
                                      </label>
                                    </div>
                                  </li>
                                  <li>
                                    <label for="example-checkbox-input">A loss or change to your sense of smell or taste</label>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="sense_smell_taste" type="radio" id="sense_smell_taste_yes" value="yes" @if($covidTest && $covidTest->sense_smell_taste && $covidTest->sense_smell_taste == 'yes') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="sense_smell_taste" type="radio" id="sense_smell_taste_no" value="no" @if($covidTest && $covidTest->sense_smell_taste && $covidTest->sense_smell_taste == 'no') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        No
                                      </label>
                                    </div>
                                  </li>
                                  <li>
                                    <label for="example-checkbox-input">Difficulty breathing or Shortness of breath</label>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="difficulty_breathing" type="radio" id="difficulty_breathing_yes" value="yes" @if($covidTest && $covidTest->difficulty_breathing && $covidTest->difficulty_breathing == 'yes') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="difficulty_breathing" type="radio" id="difficulty_breathing_no" value="no" @if($covidTest && $covidTest->difficulty_breathing && $covidTest->difficulty_breathing == 'no') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        No
                                      </label>
                                    </div>
                                  </li>
                                  <li>
                                    <label for="example-checkbox-input">Chest pain or pressure</label>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="chest_pain" type="radio" id="chest_pain_yes" value="yes" @if($covidTest && $covidTest->chest_pain && $covidTest->chest_pain == 'yes') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" name="chest_pain" type="radio" id="chest_pain_no" value="no" @if($covidTest && $covidTest->chest_pain && $covidTest->chest_pain == 'no') checked @endif>
                                      <label class="form-check-label" for="toast-type-radio1">
                                        No
                                      </label>
                                    </div>
                                  </li>
                                </ul>
                                <label for="example-checkbox-input">If any other symptoms guided by NHS or WHO, then please give details</label>
                                <textarea class="form-control" name="symptoms_details" id="symptoms_details" rows="2">{{$covidTest->symptoms_details ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">6. Did the service user taken COVID-19 Vaccination?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="vaccination" type="radio" id="vaccination_yes" value="yes" @if($covidTest && $covidTest->vaccination && $covidTest->vaccination == 'yes') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="vaccination" type="radio" id="vaccination_no" value="no" @if($covidTest && $covidTest->vaccination && $covidTest->vaccination == 'no') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <label for="example-checkbox-input">If yes, please give the date/s of the vaccination taken:</label>
                                <div class="row">
                                  <div class="col-lg-2">
                                    <input class="form-check-input" name="first_dose" type="checkbox" id="first_dose" value="yes" @if($covidTest && $covidTest->first_dose && $covidTest->first_dose == 'yes') checked @endif>
                                    <label class="form-check-label" for="toast-type-radio1">
                                      &nbsp;1st Dose
                                    </label>
                                  </div>
                                  <div class="col-lg-2">
                                    <input class="form-check-input" name="second_dose" type="checkbox" id="second_dose" value="yes" @if($covidTest && $covidTest->second_dose && $covidTest->second_dose == 'yes') checked @endif>
                                    <label class="form-check-label" for="toast-type-radio1">
                                      &nbsp;2nd Dose
                                    </label>
                                  </div>
                                  <div class="col-lg-2">
                                    <input class="form-check-input" name="third_dose" type="checkbox" id="third_dose" value="yes" @if($covidTest && $covidTest->third_dose && $covidTest->third_dose == 'yes') checked @endif>
                                    <label class="form-check-label" for="toast-type-radio1">
                                      &nbsp;3rd Dose
                                    </label>
                                  </div>
                                  <div class="col-lg-3">
                                    <input class="form-check-input" name="fourth_dose" type="checkbox" id="fourth_dose" value="yes" @if($covidTest && $covidTest->fourth_dose && $covidTest->fourth_dose == 'yes') checked @endif>
                                    <label class="form-check-label" for="toast-type-radio1">
                                      &nbsp;4th Dose
                                    </label>
                                  </div>
                                  <div class="col-lg-3">
                                    <input class="form-check-input" name="other_dose" type="checkbox" id="other_dose" value="yes" @if($covidTest && $covidTest->other_dose && $covidTest->other_dose == 'yes') checked @endif>
                                    <label class="form-check-label" for="toast-type-radio1">
                                      &nbsp;Other
                                    </label>
                                  </div>
                                </div>
                                <br>
                                <textarea class="form-control" name="other_dose_details" id="other_dose_details" rows="2" style="@if($covidTest && $covidTest->other_dose && $covidTest->other_dose == 'yes') display:block @else display:none @endif">{{$covidTest->other_dose_details ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">7. Does any family member tested COVID-19?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="family_member_tested" type="radio" id="family_member_tested_yes" value="yes" @if($covidTest && $covidTest->family_member_tested && $covidTest->family_member_tested == 'yes') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="family_member_tested" type="radio" id="family_member_tested_no" value="no" @if($covidTest && $covidTest->family_member_tested && $covidTest->family_member_tested == 'no') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="family_member_tested" type="radio" id="family_member_tested_n/a" value="n/a" @if($covidTest && $covidTest->family_member_tested && $covidTest->family_member_tested == 'n/a') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    N/A
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">8. Does any family member have symptoms of COVID-19?</label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="family_member_symptoms" type="radio" id="family_member_symptoms_yes" value="yes" @if($covidTest && $covidTest->family_member_symptoms && $covidTest->family_member_symptoms == 'yes') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="family_member_symptoms" type="radio" id="family_member_symptoms_no" value="no" @if($covidTest && $covidTest->family_member_symptoms && $covidTest->family_member_symptoms == 'no') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    No
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="family_member_symptoms" type="radio" id="family_member_symptoms_n/a" value="n/a" @if($covidTest && $covidTest->family_member_symptoms && $covidTest->family_member_symptoms == 'n/a') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    N/A
                                  </label>
                                </div>
                                <label for="example-checkbox-input">If yes, please give the details</label>
                                <textarea class="form-control" name="symptoms_details" id="symptoms_details" rows="2">{{$covidTest->symptoms_details ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input">9. If the Service User or any family member are COVID-19 positive or have any symptoms, kindly write the action plan what are the steps and process, including personal care, food supply, safe handle of waste & laundry to prevent spreading of COVID-19</label>
                                <textarea class="form-control" name="covid_19_9" id="covid_19_9" rows="6">{{$covidTest->covid_19_9 ?? ''}}</textarea>
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
    $(document).ready(function() {
      $('input[name="service_user_symptoms"][value="yes"]').on('click', function() {
        $('#service_user_symptoms_yes_data').show();
      });
      $('input[name="service_user_symptoms"][value="no"]').on('click', function() {
        $('#service_user_symptoms_yes_data').hide();
      });

      var initialCheckedValue = $('input[name="service_user_symptoms"]:checked').val();
      if (initialCheckedValue === "yes") {
          $('input[name="service_user_symptoms"][value="yes"]').trigger('click');
      } else {
          $('input[name="service_user_symptoms"][value="no"]').trigger('click');
      }

      document.getElementById('other_dose').addEventListener('change', function() {
        var textarea = document.getElementById('other_dose_details');
        textarea.style.display = this.checked ? 'block' : 'none';
      });
    });
</script>
@endsection