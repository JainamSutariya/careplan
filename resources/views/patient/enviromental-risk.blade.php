@extends('layouts.master')

@section('title') Enviromental Risk Assessment Tool @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Enviromental Risk Assessment Tool @endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createEnviromentalRiskForm" action="{{route('storeEnviromentalRisk', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Assessment Areas</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>1. Access to / from Location</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there level access?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="level_access" type="radio" id="level_access" value="Yes" @if($enviromentalRisk && $enviromentalRisk->level_access && $enviromentalRisk->level_access == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="level_access" type="radio" id="level_access" value="No" @if($enviromentalRisk && $enviromentalRisk->level_access && $enviromentalRisk->level_access == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="level_access_no" style="@if($enviromentalRisk && $enviromentalRisk->level_access && $enviromentalRisk->level_access == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="level_access_no" rows="2">{{ $enviromentalRisk->level_access_no ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is it well lit?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="well_lit" type="radio" id="well_lit" value="Yes" @if($enviromentalRisk && $enviromentalRisk->well_lit && $enviromentalRisk->well_lit == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="well_lit" type="radio" id="well_lit" value="No" @if($enviromentalRisk && $enviromentalRisk->well_lit && $enviromentalRisk->well_lit == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="well_lit_no" style="@if($enviromentalRisk && $enviromentalRisk->well_lit && $enviromentalRisk->well_lit == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="well_lit_no" rows="2">{{ $enviromentalRisk->well_lit_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there parking close by?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="parking_close" type="radio" id="parking_close" value="Yes" @if($enviromentalRisk && $enviromentalRisk->parking_close && $enviromentalRisk->parking_close == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="parking_close" type="radio" id="parking_close" value="No" @if($enviromentalRisk && $enviromentalRisk->parking_close && $enviromentalRisk->parking_close == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="parking_close_no" style="@if($enviromentalRisk && $enviromentalRisk->parking_close && $enviromentalRisk->parking_close == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="parking_close_no" rows="2">{{ $enviromentalRisk->parking_close_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is access clear?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="clear_access" type="radio" id="clear_access" value="Yes" @if($enviromentalRisk && $enviromentalRisk->clear_access && $enviromentalRisk->clear_access == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="clear_access" type="radio" id="clear_access" value="No" @if($enviromentalRisk && $enviromentalRisk->clear_access && $enviromentalRisk->clear_access == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="clear_access_no" style="@if($enviromentalRisk && $enviromentalRisk->clear_access && $enviromentalRisk->clear_access == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="clear_access_no" rows="2">{{ $enviromentalRisk->clear_access_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is it on the ground floor?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="ground_floor" type="radio" id="ground_floor" value="Yes" @if($enviromentalRisk && $enviromentalRisk->ground_floor && $enviromentalRisk->ground_floor == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="ground_floor" type="radio" id="ground_floor" value="No" @if($enviromentalRisk && $enviromentalRisk->ground_floor && $enviromentalRisk->ground_floor == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="ground_floor_no" style="@if($enviromentalRisk && $enviromentalRisk->ground_floor && $enviromentalRisk->ground_floor == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="ground_floor_no" rows="2">{{ $enviromentalRisk->ground_floor_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>2. Internal Environment</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is the flooring safe?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="flooring_safe" type="radio" id="flooring_safe" value="Yes" @if($enviromentalRisk && $enviromentalRisk->flooring_safe && $enviromentalRisk->flooring_safe == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="flooring_safe" type="radio" id="flooring_safe" value="No" @if($enviromentalRisk && $enviromentalRisk->flooring_safe && $enviromentalRisk->flooring_safe == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="flooring_safe_no" style="@if($enviromentalRisk && $enviromentalRisk->flooring_safe && $enviromentalRisk->flooring_safe == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="flooring_safe_no" rows="2">{{ $enviromentalRisk->flooring_safe_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is the environment free from slipping or tripping hazards?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="tripping_hazards" type="radio" id="tripping_hazards" value="Yes" @if($enviromentalRisk && $enviromentalRisk->tripping_hazards && $enviromentalRisk->tripping_hazards == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="tripping_hazards" type="radio" id="tripping_hazards" value="No" @if($enviromentalRisk && $enviromentalRisk->tripping_hazards && $enviromentalRisk->tripping_hazards == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="tripping_hazards_no" style="@if($enviromentalRisk && $enviromentalRisk->tripping_hazards && $enviromentalRisk->tripping_hazards == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="tripping_hazards_no" rows="2">{{ $enviromentalRisk->tripping_hazards_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is the environment free of steps/stairs?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="environment_free" type="radio" id="environment_free" value="Yes" @if($enviromentalRisk && $enviromentalRisk->environment_free && $enviromentalRisk->environment_free == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="environment_free" type="radio" id="environment_free" value="No" @if($enviromentalRisk && $enviromentalRisk->environment_free && $enviromentalRisk->environment_free == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="environment_free_no" style="@if($enviromentalRisk && $enviromentalRisk->environment_free && $enviromentalRisk->environment_free == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="environment_free_no" rows="2">{{ $enviromentalRisk->environment_free_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are food preparation areas clean?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="food_preparation" type="radio" id="food_preparation" value="Yes" @if($enviromentalRisk && $enviromentalRisk->food_preparation && $enviromentalRisk->food_preparation == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="food_preparation" type="radio" id="food_preparation" value="No" @if($enviromentalRisk && $enviromentalRisk->food_preparation && $enviromentalRisk->food_preparation == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="food_preparation_no" style="@if($enviromentalRisk && $enviromentalRisk->food_preparation && $enviromentalRisk->food_preparation == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="food_preparation_no" rows="2">{{ $enviromentalRisk->food_preparation_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there a smoke alarm in working condition?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="working_condition" type="radio" id="working_condition" value="Yes" @if($enviromentalRisk && $enviromentalRisk->working_condition && $enviromentalRisk->working_condition == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="working_condition" type="radio" id="working_condition" value="No" @if($enviromentalRisk && $enviromentalRisk->working_condition && $enviromentalRisk->working_condition == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="working_condition_no" style="@if($enviromentalRisk && $enviromentalRisk->working_condition && $enviromentalRisk->working_condition == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="working_condition_no" rows="2">{{ $enviromentalRisk->working_condition_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there adequate changing/toileting facilities?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="toileting_facilities" type="radio" id="toileting_facilities" value="Yes" @if($enviromentalRisk && $enviromentalRisk->toileting_facilities && $enviromentalRisk->toileting_facilities == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="toileting_facilities" type="radio" id="toileting_facilities" value="No" @if($enviromentalRisk && $enviromentalRisk->toileting_facilities && $enviromentalRisk->toileting_facilities == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="toileting_facilities_no" style="@if($enviromentalRisk && $enviromentalRisk->toileting_facilities && $enviromentalRisk->toileting_facilities == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="toileting_facilities_no" rows="2">{{ $enviromentalRisk->toileting_facilities_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are areas of personal hygiene free?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_hygiene" type="radio" id="personal_hygiene" value="Yes" @if($enviromentalRisk && $enviromentalRisk->personal_hygiene && $enviromentalRisk->personal_hygiene == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_hygiene" type="radio" id="personal_hygiene" value="No" @if($enviromentalRisk && $enviromentalRisk->personal_hygiene && $enviromentalRisk->personal_hygiene == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="personal_hygiene_no" style="@if($enviromentalRisk && $enviromentalRisk->personal_hygiene && $enviromentalRisk->personal_hygiene == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="personal_hygiene_no" rows="2">{{ $enviromentalRisk->personal_hygiene_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>3. Personal Safety/Security</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any pets that requires control measures?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="control_measures" type="radio" id="control_measures" value="Yes" @if($enviromentalRisk && $enviromentalRisk->control_measures && $enviromentalRisk->control_measures == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="control_measures" type="radio" id="control_measures" value="No" @if($enviromentalRisk && $enviromentalRisk->control_measures && $enviromentalRisk->control_measures == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="control_measures_no" style="@if($enviromentalRisk && $enviromentalRisk->control_measures && $enviromentalRisk->control_measures == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="control_measures_no" rows="2">{{ $enviromentalRisk->control_measures_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any concerns with the behaviour of the Service User or member or household?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="behaviour_member" type="radio" id="behaviour_member" value="Yes" @if($enviromentalRisk && $enviromentalRisk->behaviour_member && $enviromentalRisk->behaviour_member == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="behaviour_member" type="radio" id="behaviour_member" value="No" @if($enviromentalRisk && $enviromentalRisk->behaviour_member && $enviromentalRisk->behaviour_member == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="behaviour_member_no"  style="@if($enviromentalRisk && $enviromentalRisk->behaviour_member && $enviromentalRisk->behaviour_member == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="behaviour_member_no" rows="2">{{ $enviromentalRisk->behaviour_member_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Does the Service User/anyone in the house have a drug/alcohol problem?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="user_problem" type="radio" id="user_problem" value="Yes" @if($enviromentalRisk && $enviromentalRisk->user_problem && $enviromentalRisk->user_problem == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="user_problem" type="radio" id="user_problem" value="No" @if($enviromentalRisk && $enviromentalRisk->user_problem && $enviromentalRisk->user_problem == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="user_problem_no"  style="@if($enviromentalRisk && $enviromentalRisk->user_problem && $enviromentalRisk->user_problem == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="user_problem_no" rows="2">{{ $enviromentalRisk->user_problem_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any smokers in the household (Service User/Family)? If yes, give details</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="smoker_household" type="radio" id="smoker_household" value="Yes" @if($enviromentalRisk && $enviromentalRisk->smoker_household && $enviromentalRisk->smoker_household == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="smoker_household" type="radio" id="smoker_household" value="No" @if($enviromentalRisk && $enviromentalRisk->smoker_household && $enviromentalRisk->smoker_household == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="smoker_household_no"  style="@if($enviromentalRisk && $enviromentalRisk->smoker_household && $enviromentalRisk->smoker_household == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="smoker_household_no" rows="2">{{ $enviromentalRisk->smoker_household_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Is there a history of violence or aggression?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="history_violence" type="radio" id="history_violence" value="Yes" @if($enviromentalRisk && $enviromentalRisk->history_violence && $enviromentalRisk->history_violence == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="history_violence" type="radio" id="history_violence" value="No" @if($enviromentalRisk && $enviromentalRisk->history_violence && $enviromentalRisk->history_violence == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="history_violence_no"  style="@if($enviromentalRisk && $enviromentalRisk->history_violence && $enviromentalRisk->history_violence == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="history_violence_no" rows="2">{{ $enviromentalRisk->history_violence_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Are there any safeguarding or adult/child protection issues?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="safeguarding" type="radio" id="safeguarding" value="Yes" @if($enviromentalRisk && $enviromentalRisk->safeguarding && $enviromentalRisk->safeguarding == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="safeguarding" type="radio" id="safeguarding" value="No" @if($enviromentalRisk && $enviromentalRisk->safeguarding && $enviromentalRisk->safeguarding == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="safeguarding_no"  style="@if($enviromentalRisk && $enviromentalRisk->safeguarding && $enviromentalRisk->safeguarding == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="safeguarding_no" rows="2">{{ $enviromentalRisk->safeguarding_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">The patient is unable to summon assistance as required?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="summon_assistance" type="radio" id="summon_assistance" value="Yes" @if($enviromentalRisk && $enviromentalRisk->summon_assistance && $enviromentalRisk->summon_assistance == 'Yes') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="summon_assistance" type="radio" id="summon_assistance" value="No" @if($enviromentalRisk && $enviromentalRisk->summon_assistance && $enviromentalRisk->summon_assistance == 'No') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                        <div class="col-lg-12" id="summon_assistance_no"  style="@if($enviromentalRisk && $enviromentalRisk->summon_assistance && $enviromentalRisk->summon_assistance == 'No') display:block @else display:none @endif">
                            <div class="mb-3">
                                <textarea class="form-control" name="summon_assistance_no" rows="2">{{ $enviromentalRisk->summon_assistance_no ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label"><b>Provide more details of hazards</b></label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="details_hazards" rows="2">{{ $enviromentalRisk->details_hazards ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label"><b>Actions to be taken immediately</b></label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="taken_immediately" rows="2">{{ $enviromentalRisk->taken_immediately ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Taking account of your findings what is the current level of risk of personal injury to members of staff?</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_injury" type="radio" id="personal_injury" value="Low" @if($enviromentalRisk && $enviromentalRisk->personal_injury && $enviromentalRisk->personal_injury == 'Low') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Low
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_injury" type="radio" id="personal_injury" value="Medium" @if($enviromentalRisk && $enviromentalRisk->personal_injury && $enviromentalRisk->personal_injury == 'Medium') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Medium
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_injury" type="radio" id="personal_injury" value="High" @if($enviromentalRisk && $enviromentalRisk->personal_injury && $enviromentalRisk->personal_injury == 'High') checked @endif>
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
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
      $('input[name="level_access"][value="No"]').on('click', function() {
        $('#level_access_no').show();
      });
      $('input[name="level_access"][value="Yes"]').on('click', function() {
        $('#level_access_no').hide();
      });

      $('input[name="well_lit"][value="No"]').on('click', function() {
        $('#well_lit_no').show();
      });
      $('input[name="well_lit"][value="Yes"]').on('click', function() {
        $('#well_lit_no').hide();
      });

      $('input[name="parking_close"][value="No"]').on('click', function() {
        $('#parking_close_no').show();
      });
      $('input[name="parking_close"][value="Yes"]').on('click', function() {
        $('#parking_close_no').hide();
      });

      $('input[name="clear_access"][value="No"]').on('click', function() {
        $('#clear_access_no').show();
      });
      $('input[name="clear_access"][value="Yes"]').on('click', function() {
        $('#clear_access_no').hide();
      });

      $('input[name="ground_floor"][value="No"]').on('click', function() {
        $('#ground_floor_no').show();
      });
      $('input[name="ground_floor"][value="Yes"]').on('click', function() {
        $('#ground_floor_no').hide();
      });

      $('input[name="flooring_safe"][value="No"]').on('click', function() {
        $('#flooring_safe_no').show();
      });
      $('input[name="flooring_safe"][value="Yes"]').on('click', function() {
        $('#flooring_safe_no').hide();
      });

      $('input[name="tripping_hazards"][value="No"]').on('click', function() {
        $('#tripping_hazards_no').show();
      });
      $('input[name="tripping_hazards"][value="Yes"]').on('click', function() {
        $('#tripping_hazards_no').hide();
      });

      $('input[name="environment_free"][value="No"]').on('click', function() {
        $('#environment_free_no').show();
      });
      $('input[name="environment_free"][value="Yes"]').on('click', function() {
        $('#environment_free_no').hide();
      });

      $('input[name="food_preparation"][value="No"]').on('click', function() {
        $('#food_preparation_no').show();
      });
      $('input[name="food_preparation"][value="Yes"]').on('click', function() {
        $('#food_preparation_no').hide();
      });

      $('input[name="toileting_facilities"][value="No"]').on('click', function() {
        $('#toileting_facilities_no').show();
      });
      $('input[name="toileting_facilities"][value="Yes"]').on('click', function() {
        $('#toileting_facilities_no').hide();
      });

      $('input[name="personal_hygiene"][value="No"]').on('click', function() {
        $('#personal_hygiene_no').show();
      });
      $('input[name="personal_hygiene"][value="Yes"]').on('click', function() {
        $('#personal_hygiene_no').hide();
      });

      $('input[name="control_measures"][value="No"]').on('click', function() {
        $('#control_measures_no').show();
      });
      $('input[name="control_measures"][value="Yes"]').on('click', function() {
        $('#control_measures_no').hide();
      });

      $('input[name="behaviour_member"][value="No"]').on('click', function() {
        $('#behaviour_member_no').show();
      });
      $('input[name="behaviour_member"][value="Yes"]').on('click', function() {
        $('#behaviour_member_no').hide();
      });

      $('input[name="user_problem"][value="No"]').on('click', function() {
        $('#user_problem_no').show();
      });
      $('input[name="user_problem"][value="Yes"]').on('click', function() {
        $('#user_problem_no').hide();
      });

      $('input[name="smoker_household"][value="No"]').on('click', function() {
        $('#smoker_household_no').show();
      });
      $('input[name="smoker_household"][value="Yes"]').on('click', function() {
        $('#smoker_household_no').hide();
      });

      $('input[name="history_violence"][value="No"]').on('click', function() {
        $('#history_violence_no').show();
      });
      $('input[name="history_violence"][value="Yes"]').on('click', function() {
        $('#history_violence_no').hide();
      });

      $('input[name="safeguarding"][value="No"]').on('click', function() {
        $('#safeguarding_no').show();
      });
      $('input[name="safeguarding"][value="Yes"]').on('click', function() {
        $('#safeguarding_no').hide();
      });

      $('input[name="summon_assistance"][value="No"]').on('click', function() {
        $('#summon_assistance_no').show();
      });
      $('input[name="summon_assistance"][value="Yes"]').on('click', function() {
        $('#summon_assistance_no').hide();
      });
    });
</script>
@endsection