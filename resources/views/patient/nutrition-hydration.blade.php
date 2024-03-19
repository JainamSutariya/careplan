@extends('layouts.master')

@section('title') Nutrition and Hydration @endsection

@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Nutrition and Hydration
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<style>
  td input[type='checkbox'] {
    text-align: center;
    margin-top: 10px;
  }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeNutritionHydration', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What care and support needs do I currently have?</b></label>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label">I would like to maintain my nutrition and hydration by having my,</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="maintain_nutrition[]" type="checkbox" id="maintain_nutrition" value="Morning" {{ CheckboxHelper::isChecked('Morning', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Morning
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="maintain_nutrition[]" type="checkbox" id="maintain_nutrition" value="Lunch" {{ CheckboxHelper::isChecked('Lunch', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Lunch
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="maintain_nutrition[]" type="checkbox" id="maintain_nutrition" value="Tea" {{ CheckboxHelper::isChecked('Tea', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Tea
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="maintain_nutrition[]" type="checkbox" id="maintain_nutrition" value="Bed" {{ CheckboxHelper::isChecked('Bed', $checkedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Bed
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-12 col-form-label"><b>with the support of</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Family Support" {{ old('support_from', optional($nutritionHydration)->support_from) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Carer Support" {{ old('support_from', optional($nutritionHydration)->support_from) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Independent" {{ old('support_from', optional($nutritionHydration)->support_from) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="support_from" type="radio" id="support_from" value="Other" {{ old('Other', optional($nutritionHydration)->support_from) == 'Other' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Other
                          </label>
                        </div>
                        <textarea class="form-control support_from_other" name="support_from_other" style="@if(old('Other', optional($nutritionHydration)->support_from) == 'Other') display: block; @else display: none; @endif" rows="2">{{$nutritionHydration->support_from_other ?? ''}}</textarea>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label"><b>Strength</b></label>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <label for="basicpill-firstname-input"><b>What are my desired outcomes?</b></label>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                              <thead>
                                <tr>
                                  <td>Strength</td>
                                  <td>Task</td>
                                  <td>Able to</td>
                                  <td>Support With</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Upper Body Strength</td>
                                  <td>Hold the Cutlery</td>
                                  <td><input type="checkbox" name="cutlery_able_to" {{ old('cutlery_able_to', optional($nutritionHydration)->cutlery_able_to) == 'on' ? 'checked' : '' }}></td>
                                  <td><input type="checkbox" name="cutlery_Support_with" {{ old('cutlery_Support_with', optional($nutritionHydration)->cutlery_Support_with) == 'on' ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Eat my Food</td>
                                  <td><input type="checkbox" name="food_able_to" {{ old('food_able_to', optional($nutritionHydration)->food_able_to) == 'on' ? 'checked' : '' }}></td>
                                  <td><input type="checkbox" name="food_Support_with" {{ old('food_Support_with', optional($nutritionHydration)->food_Support_with) == 'on' ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Drink my Fluid</td>
                                  <td><input type="checkbox" name="fluid_able_to" {{ old('fluid_able_to', optional($nutritionHydration)->fluid_able_to) == 'on' ? 'checked' : '' }}></td>
                                  <td><input type="checkbox" name="fluid_Support_with" {{ old('fluid_Support_with', optional($nutritionHydration)->fluid_Support_with) == 'on' ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Prepare food and fluid of my choice</td>
                                  <td><input type="checkbox" name="choice_able_to" {{ old('choice_able_to', optional($nutritionHydration)->choice_able_to) == 'on' ? 'checked' : '' }}></td>
                                  <td><input type="checkbox" name="choice_Support_with" {{ old('choice_Support_with', optional($nutritionHydration)->choice_Support_with) == 'on' ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                  <td>Lower Body Strength</td>
                                  <td>Go to the Kitchen by holding equipment</td>
                                  <td><input type="checkbox" name="holding_able_to" {{ old('holding_able_to', optional($nutritionHydration)->holding_able_to) == 'on' ? 'checked' : '' }}></td>
                                  <td><input type="checkbox" name="holding_Support_with" {{ old('holding_Support_with', optional($nutritionHydration)->holding_Support_with) == 'on' ? 'checked' : '' }}></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>What are my desired outcomes?</b></label>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <tbody>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_health_condition" {{ old('maintain_health_condition', optional($nutritionHydration)->maintain_health_condition) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to maintain my health conditions</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="remain_healthy" {{ old('remain_healthy', optional($nutritionHydration)->remain_healthy) == 'on' ? 'checked' : '' }}></td>
                                            <td>For my skin to remain healthy and not to get any sore</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maximize_my_independence" {{ old('maximize_my_independence', optional($nutritionHydration)->maximize_my_independence) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maximize my independence</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_not_fall" {{ old('desire_not_fall', optional($nutritionHydration)->desire_not_fall) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire not to have a fall.</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_dignity_privacy" {{ old('maintain_dignity_privacy', optional($nutritionHydration)->maintain_dignity_privacy) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain my dignity and privacy.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="malnutrition_dehydration" {{ old('malnutrition_dehydration', optional($nutritionHydration)->malnutrition_dehydration) == 'on' ? 'checked' : '' }}></td>
                                            <td>To prevent malnutrition and dehydration</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="desire_clean_smart" {{ old('desire_clean_smart', optional($nutritionHydration)->desire_clean_smart) == 'on' ? 'checked' : '' }}></td>
                                            <td>I desire to be a clean and smart as I always prefer to be smart looking.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_healthy_nutritious" {{ old('maintain_healthy_nutritious', optional($nutritionHydration)->maintain_healthy_nutritious) == 'on' ? 'checked' : '' }}></td>
                                            <td>To maintain a healthy, nutritious, and varied diet</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="avoid_unnecessary_hospital" {{ old('avoid_unnecessary_hospital', optional($nutritionHydration)->avoid_unnecessary_hospital) == 'on' ? 'checked' : '' }}></td>
                                            <td>To avoid unnecessary hospital admission.</td>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="maintain_good_relation" {{ old('maintain_good_relation', optional($nutritionHydration)->maintain_good_relation) == 'on' ? 'checked' : '' }}></td>
                                            <td>I prefer to maintain a good relationship with my family</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40px;text-align: center;"><input type="checkbox" name="quality_life_improve" {{ old('quality_life_improve', optional($nutritionHydration)->quality_life_improve) == 'on' ? 'checked' : '' }}></td>
                                            <td>To improve my quality of life</td>
                                            <td style="width: 40px;text-align: center;"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                @php
                                  $text1 = '';
                                  $text2 = '';
                                  $text3 = '';
                                  $text4 = '';
                                  $otherOutcomesText = $nutritionHydration->other_outcomes_text ?? null;
                                @endphp
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
                                        <td><input type="checkbox" name="other_outcomes_check_1" {{ old('other_outcomes_check_1', optional($nutritionHydration)->other_outcomes_check_1) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text1}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_2" {{ old('other_outcomes_check_2', optional($nutritionHydration)->other_outcomes_check_2) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text2}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="other_outcomes_check_3" {{ old('other_outcomes_check_3', optional($nutritionHydration)->other_outcomes_check_3) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text3}}"></td>
                                        <td><input type="checkbox" name="other_outcomes_check_4" {{ old('other_outcomes_check_4', optional($nutritionHydration)->other_outcomes_check_4) == 'on' ? 'checked' : '' }}></td>
                                        <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text2}}"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>How do I want staff to support me to achieve my desired outcomes?</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I prefer to get the consent before care (refer communication section for more details).</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I prefer the care staff to maintain my privacy and dignity (refer privacy and dignity section for more detail)</label>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                              <thead>
                                <tr>
                                  <td>Time</td>
                                  <td>During the Visit</td>
                                  <td>Before Leaving the Property, I would like</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Morning</td>
                                  <td><input type="text" class="form-control" name="morning_during_visit" value="{{$nutritionHydration->morning_during_visit ?? ''}}"></td>
                                  <td>Leave the water close to me<br><input type="text" class="form-control" name="morning_leave_water_close" value="{{$nutritionHydration->morning_leave_water_close ?? ''}}"></td>
                                </tr>
                                <tr>
                                  <td>Lunch</td>
                                  <td><input type="text" class="form-control" name="lunch_during_visit" value="{{$nutritionHydration->lunch_during_visit ?? ''}}"></td>
                                  <td>Leave the water close to me<br><input type="text" class="form-control" name="lunch_leave_water_close" value="{{$nutritionHydration->lunch_leave_water_close ?? ''}}"></td>
                                </tr>
                                <tr>
                                  <td>Tea</td>
                                  <td><input type="text" class="form-control" name="tea_during_visit" value="{{$nutritionHydration->tea_during_visit ?? ''}}"></td>
                                  <td>Leave the water close to me<br><input type="text" class="form-control" name="tea_leave_water_close" value="{{$nutritionHydration->tea_leave_water_close ?? ''}}"></td>
                                </tr>
                                <tr>
                                  <td>Bed</td>
                                  <td><input type="text" class="form-control" name="bed_during_visit" value="{{$nutritionHydration->bed_during_visit ?? ''}}"></td>
                                  <td>Leave the water close to me<br><input type="text" class="form-control" name="bed_leave_water_close" value="{{$nutritionHydration->bed_leave_water_close ?? ''}}"></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Restricted with</label>
                        <div class="col-md-9">
                          <input class="form-control" name="restricted_with" type="text" id="restricted_with" value="{{$nutritionHydration->restricted_with ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Which cutlery would like to use</label>
                        <div class="col-md-9">
                          <input class="form-control" name="cutlery_use" type="text" id="cutlery_use" value="{{$nutritionHydration->cutlery_use ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Where the cutlery kept</label>
                        <div class="col-md-9">
                          <input class="form-control" name="cutlery_kept" type="text" id="cutlery_kept" value="{{$nutritionHydration->cutlery_kept ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-3 col-form-label">Feeding Support</label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="feeding_support[]" type="checkbox" id="feeding_support" value="Carer to Feed Food" {{ CheckboxHelper::isChecked('Carer to Feed Food', $feedingCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer to Feed Food
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="feeding_support[]" type="checkbox" id="feeding_support" value="Carer to Feed Fluid" {{ CheckboxHelper::isChecked('Carer to Feed Fluid', $feedingCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer to Feed Fluid
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="feeding_support[]" type="checkbox" id="feeding_support" value="Independent to eat my Food" {{ CheckboxHelper::isChecked('Independent to eat my Food', $feedingCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent to eat my Food
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="feeding_support[]" type="checkbox" id="feeding_support" value="Independent to drink Fluid" {{ CheckboxHelper::isChecked('Independent to drink Fluid', $feedingCheckedValues) ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent to drink Fluid
                          </label>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-3">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                              <tbody>
                                <tr>
                                  <td><input type="checkbox" name="hydration_need" {{ old('hydration_need', optional($nutritionHydration)->hydration_need) == 'on' ? 'checked' : '' }}></td>
                                  <td>I prefer the care staff to wash hands before supporting me with my nutrition and hydration needs.</td>
                                </tr>
                                <tr>
                                  <td><input type="checkbox" name="food_fluid_expire" {{ old('food_fluid_expire', optional($nutritionHydration)->food_fluid_expire) == 'on' ? 'checked' : '' }}></td>
                                  <td>I prefer the care staff to check the expiry date of the food and fluid, and if the food and fluid is expired, the care staff to get the consent and dispose of the food and fluid appropriately.</td>
                                </tr>
                                <tr>
                                  <td><input type="checkbox" name="high_suger" {{ old('high_suger', optional($nutritionHydration)->high_suger) == 'on' ? 'checked' : '' }}></td>
                                  <td>I am restricted with High Sugary food and fluid, so the care staff to check the content in the food and fluid before serving to me and if I will ask for the high sugary food and fluid then the care staff to keep updated my</td>
                                </tr>
                                <tr>
                                  <td><input type="checkbox" name="position_supporting" {{ old('position_supporting', optional($nutritionHydration)->position_supporting) == 'on' ? 'checked' : '' }}></td>
                                  <td>I prefer the care staff to make sure that, I seated in incline position before supporting me with my food and fluid. </td>
                                </tr>
                                <tr>
                                  <td><input type="checkbox" name="dietitian" {{ old('dietitian', optional($nutritionHydration)->dietitian) == 'on' ? 'checked' : '' }}></td>
                                  <td>I am on high risk of chocking the food, so the care staff to follow my diet plan given by my dietitian.</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is the service user on risk of chocking?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_chocking" type="radio" id="risk_chocking" value="Yes" {{ old('dietitian', optional($nutritionHydration)->dietitian) == 'on' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_chocking" type="radio" id="risk_chocking" value="No" {{ old('dietitian', optional($nutritionHydration)->dietitian) == 'on' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">If Yes, SALT (Speech And Language Therapy) team in place?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="salt" type="radio" id="salt" value="Yes" {{ old('salt', optional($nutritionHydration)->salt) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="salt" type="radio" id="salt" value="No" {{ old('salt', optional($nutritionHydration)->salt) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please provide the contact details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="salt_details" rows="2">{{$nutritionHydration->salt_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">If No, Does the service user needs to refer to the SALT Team? </label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="refer_salt_team" type="radio" id="refer_salt_team" value="Yes" {{ old('refer_salt_team', optional($nutritionHydration)->refer_salt_team) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="refer_salt_team" type="radio" id="refer_salt_team" value="No" {{ old('refer_salt_team', optional($nutritionHydration)->refer_salt_team) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Details of Referral:</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="referral_details" rows="2">{{$nutritionHydration->referral_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Which Level of Diet currently service user have?</label>
                        <div class="col-md-1">
                          <input class="form-check-input" name="level_of_diet" type="radio" id="level_of_diet" value="Level 1" {{ old('level_of_diet', optional($nutritionHydration)->level_of_diet) == 'Level 1' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Level 1
                          </label>
                        </div>
                        <div class="col-md-1">
                          <input class="form-check-input" name="level_of_diet" type="radio" id="level_of_diet" value="Level 2" {{ old('level_of_diet', optional($nutritionHydration)->level_of_diet) == 'Level 2' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Level 2
                          </label>
                        </div>
                        <div class="col-md-1">
                          <input class="form-check-input" name="level_of_diet" type="radio" id="level_of_diet" value="Level 3" {{ old('level_of_diet', optional($nutritionHydration)->level_of_diet) == 'Level 3' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Level 3
                          </label>
                        </div>
                        <div class="col-md-1">
                          <input class="form-check-input" name="level_of_diet" type="radio" id="level_of_diet" value="Level 4" {{ old('level_of_diet', optional($nutritionHydration)->level_of_diet) == 'Level 4' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Level 4
                          </label>
                        </div>
                        <div class="col-md-1">
                          <input class="form-check-input" name="level_of_diet" type="radio" id="level_of_diet" value="Level 5" {{ old('level_of_diet', optional($nutritionHydration)->level_of_diet) == 'Level 5' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Level 5
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label"></label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="level_of_diet_text" rows="2">{{$nutritionHydration->level_of_diet_text ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Any progressive changes in the condition of swallowing the food and fluid?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="condition_swallowing" type="radio" id="condition_swallowing" value="Yes" {{ old('condition_swallowing', optional($nutritionHydration)->condition_swallowing) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="condition_swallowing" type="radio" id="condition_swallowing" value="No" {{ old('condition_swallowing', optional($nutritionHydration)->condition_swallowing) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">If Yes, please giver more details</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="condition_swallowing_details" rows="2">{{$nutritionHydration->condition_swallowing_details ?? ''}}</textarea>
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
    $(document).ready(function() {
      $('input[name="support_from"][value="Other"]').on('click', function() {
        $('.support_from_other').show();
      });

      $('input[name="support_from"]').not('[value="Other"]').on('click', function() {
        $('.support_from_other').hide();
      });
    });
</script>
@endsection