@extends('layouts.master')

@section('title') My Information @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') My Information @endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createMyInformationForm" action="{{route('storeMyInformation', $patient->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>I prefer to be called, </b></label>
                                <input type="text" value="{{$myInformation->prefer_call_name ?? ''}}" class="form-control" name="prefer_call_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>Preferred Language to Communicate</b></label>
                                <input type="text" value="{{$myInformation->prefer_language ?? ''}}" class="form-control" name="prefer_language" placeholder="Preferred language to communicate">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>Living Situation / Accommodation</b></label>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="living_situation" type="radio" id="living_situation" value="Living with family" @if($myInformation && $myInformation->living_situation && $myInformation->living_situation == 'Living with family') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Living with family
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="living_situation" type="radio" id="living_situation" value="Alone" @if($myInformation && $myInformation->living_situation && $myInformation->living_situation == 'Alone') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Alone
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="living_situation" type="radio" id="living_situation" value="Shared Accommodation" @if($myInformation && $myInformation->living_situation && $myInformation?->living_situation == 'Shared Accommodation') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Shared Accommodation
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="living_situation" type="radio" id="living_situation" value="Supported living" @if($myInformation && $myInformation->living_situation && $myInformation?->living_situation == 'Supported living') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Supported living
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" name="living_situation" type="radio" id="living_situation" value="Other" @if($myInformation && $myInformation->living_situation && $myInformation?->living_situation == 'Other') checked @endif>
                                  <label class="form-check-label" for="toast-type-radio1">
                                    Other
                                  </label>
                                </div>
                                <textarea class="form-control living_situation_other" name="living_situation_other" style="@if($myInformation && $myInformation->living_situation && $myInformation->living_situation == 'Other') display: block; @else display: none; @endif" rows="2">{{$myInformation->living_situation_other ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Details of Property</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="details_of_property" type="radio" value="House" id="details_of_property" @if($myInformation && $myInformation->details_of_property && $myInformation->details_of_property == 'House') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                House
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="details_of_property" type="radio" value="Flat" id="details_of_property" @if($myInformation && $myInformation->details_of_property && $myInformation->details_of_property == 'Flat') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Flat
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="details_of_property" type="radio" value="Sheltered Home" id="details_of_property" @if($myInformation && $myInformation->details_of_property && $myInformation->details_of_property == 'Sheltered Home') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Sheltered Home
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="details_of_property" type="radio" value="Warden Control Flat" id="details_of_property" @if($myInformation && $myInformation->details_of_property && $myInformation->details_of_property == 'Warden Control Flat') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Warden Control Flat
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="details_of_property" type="radio" value="Other" id="details_of_property" @if($myInformation && $myInformation->details_of_property && $myInformation->details_of_property == 'Other') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Other
                              </label>
                            </div>
                            <textarea class="form-control details_of_property_other" name="details_of_property_other" style="@if($myInformation && $myInformation->details_of_property && $myInformation->details_of_property == 'Other') display: block; @else display: none; @endif" rows="2">{{$myInformation->details_of_property_other ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Property belongs to</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_belongs" type="radio" value="Rented" id="property_belongs" @if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'Rented') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Rented
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_belongs" type="radio" value="Owner" id="property_belongs" @if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'Owner') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Owner
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_belongs" type="radio" value="Family Owns" id="property_belongs" @if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'Family Owns') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Family Owns
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_belongs" type="radio" value="BCC" id="property_belongs" @if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'BCC') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                BCC
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_belongs" type="radio" value="Housing Association" id="property_belongs" @if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'Housing Association') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Housing Association
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_belongs" type="radio" value="Local Authority" id="property_belongs" @if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'Local Authority') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Local Authority
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_belongs" type="radio" value="Other" id="property_belongs" @if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'Other') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Other
                              </label>
                            </div>
                            <textarea class="form-control property_belongs_other" name="property_belongs_other" style="@if($myInformation && $myInformation->property_belongs && $myInformation->property_belongs == 'Other') display: block; @else display: none; @endif" rows="2">{{$myInformation->property_belongs_other ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Bedroom location</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="bedroom_location" type="radio" value="Downstairs" id="bedroom_location" @if($myInformation && $myInformation->bedroom_location && $myInformation->bedroom_location == 'Downstairs') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Downstairs
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="bedroom_location" type="radio" value="Upstairs" id="bedroom_location" @if($myInformation && $myInformation->bedroom_location && $myInformation->bedroom_location == 'Upstairs') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Upstairs
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="bedroom_location" type="radio" value="Other" id="bedroom_location" @if($myInformation && $myInformation->bedroom_location && $myInformation->bedroom_location == 'Other') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Other
                              </label>
                            </div>
                            <textarea class="form-control bedroom_location_other" name="bedroom_location_other" style="@if($myInformation && $myInformation->bedroom_location && $myInformation->bedroom_location == 'Other') display: block; @else display: none; @endif" rows="2">{{$myInformation->bedroom_location_other ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Property Access Detail</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_access" type="radio" value="Key Safe" id="property_access" @if($myInformation && $myInformation->property_access && $myInformation->property_access == 'Key Safe') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Key Safe
                              </label>
                            </div>
                            <textarea class="form-control property_access_key_safe" name="property_access_key_safe" style="@if($myInformation && $myInformation->property_access && $myInformation->property_access == 'Key Safe') display: block; @else display: none; @endif" rows="2">{{$myInformation->property_access_key_safe ?? ''}}</textarea>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_access" type="radio" value="Family Support" id="property_access" @if($myInformation && $myInformation->property_access && $myInformation->property_access == 'Family Support') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Family Support
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_access" type="radio" value="Service User" id="property_access" @if($myInformation && $myInformation->property_access && $myInformation->property_access == 'Service User') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Service User
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_access" type="radio" value="Intercom" id="property_access" @if($myInformation && $myInformation->property_access && $myInformation->property_access == 'Intercom') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Intercom
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="property_access" type="radio" value="Other" id="property_access" @if($myInformation && $myInformation->property_access && $myInformation->property_access == 'Other') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Other
                              </label>
                            </div>
                            <textarea class="form-control property_access_other" name="property_access_other" style="@if($myInformation && $myInformation->property_access && $myInformation->property_access == 'Other') display: block; @else display: none; @endif" rows="2">{{$myInformation->property_access_other ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Careline pendent alarm / lifeline available</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="lifeline_available" type="radio" value="Yes" id="lifeline_available" @if($myInformation && $myInformation->lifeline_available && $myInformation->lifeline_available == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="lifeline_available" type="radio" value="No" id="lifeline_available" @if($myInformation && $myInformation->lifeline_available && $myInformation->lifeline_available == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="lifeline_available" type="radio" value="Wrist band" id="lifeline_available" @if($myInformation && $myInformation->lifeline_available && $myInformation->lifeline_available == 'Wrist band') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Wrist band
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="lifeline_available" type="radio" value="Neck less" id="lifeline_available" @if($myInformation && $myInformation->lifeline_available && $myInformation->lifeline_available == 'Neck less') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Neck less
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="lifeline_available" type="radio" value="Pull Cord" id="lifeline_available" @if($myInformation && $myInformation->lifeline_available && $myInformation->lifeline_available == 'Pull Cord') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Pull Cord
                              </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Hearing Aid</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="hearing_aid" type="radio" value="Yes" id="hearing_aid" @if($myInformation && $myInformation->hearing_aid && $myInformation->hearing_aid == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="hearing_aid" type="radio" value="No" id="hearing_aid" @if($myInformation && $myInformation->hearing_aid && $myInformation->hearing_aid == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <textarea class="form-control hearing_aid_other" name="hearing_aid_other" style="@if($myInformation && $myInformation->hearing_aid && $myInformation->hearing_aid == 'Yes') display: block; @else display: none; @endif" rows="2">{{$myInformation->hearing_aid_other ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Preferred side to communicate</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="preferred_side_communicate" type="radio" value="Right" id="preferred_side_communicate" @if($myInformation && $myInformation->preferred_side_communicate && $myInformation->preferred_side_communicate == 'Right') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Right
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="preferred_side_communicate" type="radio" value="Left" id="preferred_side_communicate" @if($myInformation && $myInformation->preferred_side_communicate && $myInformation->preferred_side_communicate == 'Left') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Left
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="preferred_side_communicate" type="radio" value="Face to Face" id="preferred_side_communicate" @if($myInformation && $myInformation->preferred_side_communicate && $myInformation->preferred_side_communicate == 'Face to Face') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Face to Face
                              </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="example-checkbox-input"><b>Eyesight</b></label>
                                <textarea class="form-control" name="eyesight_text" rows="2">{{$myInformation->eyesight_text ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="example-checkbox-input"><b>Wear Glasses</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="wear_glasses" type="radio" value="Yes" id="wear_glasses" @if($myInformation && $myInformation->wear_glasses && $myInformation->wear_glasses == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="wear_glasses" type="radio" value="No" id="wear_glasses" @if($myInformation && $myInformation->wear_glasses && $myInformation->wear_glasses == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <label for="example-checkbox-input">If yes, then please specify the reason</label>
                            <div class="form-check mb-2 specify-reason-container" style="@if($myInformation && $myInformation->wear_glasses && $myInformation->wear_glasses == 'Yes') display: block; @else display: none; @endif">
                              <input class="form-check-input" name="specify_reason" type="radio" value="Reading Only" id="specify_reason" @if($myInformation && $myInformation->wear_glasses && $myInformation->specify_reason == 'Reading Only') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Reading Only
                              </label>
                            </div>
                            <div class="form-check mb-2 specify-reason-container" style="@if($myInformation && $myInformation->wear_glasses && $myInformation->wear_glasses == 'Yes') display: block; @else display: none; @endif">
                              <input class="form-check-input" name="specify_reason" type="radio" value="Everyday Use" id="specify_reason" @if($myInformation && $myInformation->wear_glasses && $myInformation->specify_reason == 'Everyday Use') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Everyday Use
                              </label>
                            </div>
                            <div class="form-check mb-2 specify-reason-container" style="@if($myInformation && $myInformation->wear_glasses && $myInformation->wear_glasses == 'Yes') display: block; @else display: none; @endif">
                              <input class="form-check-input" name="specify_reason" type="radio" value="Other" id="specify_reason" @if($myInformation && $myInformation->wear_glasses && $myInformation->specify_reason == 'Other') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Other
                              </label>
                            </div>
                            <textarea class="form-control specify_reason_other" name="specify_reason_other" style="@if($myInformation && $myInformation->wear_glasses && $myInformation->wear_glasses == 'Yes' && $myInformation->specify_reason == 'Other') display: block; @else display: none; @endif" rows="2">{{$myInformation->specify_reason_other ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Dominant / Strong side</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="strong_side" type="radio" value="Right Side" id="strong_side" @if($myInformation && $myInformation->strong_side && $myInformation->strong_side == 'Right Side') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Right Side
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="strong_side" type="radio" value="Left Side" id="strong_side" @if($myInformation && $myInformation->strong_side && $myInformation->strong_side == 'Left Side') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Left Side
                              </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>Height</b></label>
                                <input type="text" value="{{$myInformation->height ?? ''}}" class="form-control" name="height" placeholder="Height">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>Weight</b></label>
                                <input type="text" value="{{$myInformation->weight ?? ''}}" class="form-control" name="weight" placeholder="Weight">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>End of life care</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="end_of_life_care" type="radio" value="Yes" id="end_of_life_care" @if($myInformation && $myInformation->end_of_life_care && $myInformation->end_of_life_care == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="end_of_life_care" type="radio" value="No" id="end_of_life_care" @if($myInformation && $myInformation->end_of_life_care && $myInformation->end_of_life_care == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>ADRT (Advance Decision to Refuse Treatment) in Place</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="adrt" type="radio" value="Yes" id="adrt" @if($myInformation && $myInformation->adrt && $myInformation->adrt == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="adrt" type="radio" value="No" id="adrt" @if($myInformation && $myInformation->adrt && $myInformation->adrt == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="adrt" type="radio" value="N/A" id="adrt" @if($myInformation && $myInformation->adrt && $myInformation->adrt == 'N/A') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                N/A
                              </label>
                            </div>
                            <label for="example-checkbox-input">If ADRT in place, please specify the exact location</label>
                            <textarea class="form-control" name="adrt_exact_location" rows="2">{{$myInformation->adrt_exact_location ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>DNACPR (Do Not Attempt Cardiopulmonary Resuscitation) in place</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="dnacpr" type="radio" value="Yes" id="dnacpr" @if($myInformation && $myInformation->dnacpr && $myInformation->dnacpr == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="dnacpr" type="radio" value="No" id="dnacpr" @if($myInformation && $myInformation->dnacpr && $myInformation->dnacpr == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="dnacpr" type="radio" value="N/A" id="dnacpr" @if($myInformation && $myInformation->dnacpr && $myInformation->dnacpr == 'N/A') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                N/A
                              </label>
                            </div>
                            <label for="example-checkbox-input">If DNACPR in place, please specify the exact location</label>
                            <textarea class="form-control" name="dnacpr_exact_location" rows="2">{{$myInformation->dnacpr_exact_location ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Respect form in Place</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="respect_place" type="radio" value="Yes" id="respect_place" @if($myInformation && $myInformation->respect_place && $myInformation->respect_place == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="respect_place" type="radio" value="No" id="respect_place" @if($myInformation && $myInformation->respect_place && $myInformation->respect_place == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="respect_place" type="radio" value="N/A" id="respect_place" @if($myInformation && $myInformation->respect_place && $myInformation->respect_place == 'N/A') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                N/A
                              </label>
                            </div>
                            <label for="example-checkbox-input">If Respect form in place, please specify the exact location</label>
                            <textarea class="form-control" name="respect_exact_location" rows="2">{{$myInformation->respect_exact_location ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Pets in property</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="pets_property" type="radio" value="Yes" id="pets_property" @if($myInformation && $myInformation->pets_property && $myInformation->pets_property == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="pets_property" type="radio" value="No" id="pets_property" @if($myInformation && $myInformation->pets_property && $myInformation->pets_property == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                            @if($myInformation && $myInformation->pets_property && $myInformation->pets_property == 'Yes')
                            <label class="pets_property_yes_details" for="example-checkbox-input">If yes, give details</label>
                            <textarea class="form-control pets_property_yes_details" name="pets_property_yes_details" rows="2">{{$myInformation->pets_property_yes_details ?? ''}}</textarea>
                            @else
                            <label class="pets_property_yes_details" for="example-checkbox-input" style="display: none;">If yes, give details</label>
                            <textarea class="form-control pets_property_yes_details" name="pets_property_yes_details" rows="2" style="display: none;">  </textarea>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Smoke alarm fitted in property</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="smoke_alarm" type="radio" value="Yes" id="smoke_alarm" @if($myInformation && $myInformation->smoke_alarm && $myInformation->smoke_alarm == 'Yes') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="smoke_alarm" type="radio" value="No" id="smoke_alarm" @if($myInformation && $myInformation->smoke_alarm && $myInformation->smoke_alarm == 'No') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                No
                              </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3" id="datepicker1">
                                <label for="example-checkbox-input"><b>Funding</b></label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="funding" type="radio" value="BCC" id="funding" @if($myInformation && $myInformation->funding && $myInformation->funding == 'BCC') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                BCC
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="funding" type="radio" value="Direct Payment" id="funding" @if($myInformation && $myInformation->funding && $myInformation->funding == 'Direct Payment') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Direct Payment
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="funding" type="radio" value="NHS" id="funding" @if($myInformation && $myInformation->funding && $myInformation->funding == 'NHS') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                NHS
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="funding" type="radio" value="Private" id="funding" @if($myInformation && $myInformation->funding && $myInformation->funding == 'Direct Payment') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Private
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" name="funding" type="radio" value="Other" id="funding" @if($myInformation && $myInformation->funding && $myInformation->funding == 'Other') checked @endif>
                              <label class="form-check-label" for="toast-type-radio1">
                                Other
                              </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                          <label for="example-checkbox-input">DateTime</label>
                          <div class="col-lg-4">
                            <input type="datetime-local" value="{{ $formattedDateTime }}" name="funding_date_time" class="form-control" id="funding_date_time" autocomplete="off">
                          </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>People present for the meeting, when and where: (include the time and location)</b></label>
                                <textarea class="form-control" name="people_present_meeting" rows="2">{{$myInformation->people_present_meeting ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input"><b>Voice of the family</b></label>
                                <textarea class="form-control" name="voice_of_family" rows="2">{{$myInformation->voice_of_family ?? ''}}</textarea>
                            </div>
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
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<script>
  $(document).ready(function() {
    // Event listener for the "Yes" radio button
    $('input[name="wear_glasses"][value="Yes"]').on('click', function() {
      $('.specify-reason-container').show();
      if ($('input[name="specify_reason"][value="Other"]').prop('checked')) {
        $('.specify_reason_other').show();
      }
    });

    // Event listener for the "No" radio button
    $('input[name="wear_glasses"][value="No"]').on('click', function() {
      $('.specify-reason-container').hide();
      $('.specify_reason_other').hide();
    });

    // Event listener for the "Other" radio button
    $('input[name="specify_reason"][value="Other"]').on('click', function() {
      $('.specify_reason_other').show();
    });

    // Event listener for the other specify_reason options
    $('input[name="specify_reason"]').not('[value="Other"]').on('click', function() {
      $('.specify_reason_other').hide();
    });

    $('input[name="pets_property"][value="Yes"]').on('click', function() {
      $('.pets_property_yes_details').show();
    });
    $('input[name="pets_property"][value="No"]').on('click', function() {
      $('.pets_property_yes_details').hide();
    });


    $('input[name="living_situation"][value="Other"]').on('click', function() {
      $('.living_situation_other').show();
    });
    $('input[name="living_situation"]').not('[value="Other"]').on('click', function() {
      $('.living_situation_other').hide();
    });

    $('input[name="details_of_property"][value="Other"]').on('click', function() {
      $('.details_of_property_other').show();
    });
    $('input[name="details_of_property"]').not('[value="Other"]').on('click', function() {
      $('.details_of_property_other').hide();
    });

    $('input[name="property_belongs"][value="Other"]').on('click', function() {
      $('.property_belongs_other').show();
    });
    $('input[name="property_belongs"]').not('[value="Other"]').on('click', function() {
      $('.property_belongs_other').hide();
    });

    $('input[name="hearing_aid"][value="Yes"]').on('click', function() {
      $('.hearing_aid_other').show();
    });
    $('input[name="hearing_aid"]').not('[value="Yes"]').on('click', function() {
      $('.hearing_aid_other').hide();
    });

    $('input[name="property_access"][value="Key Safe"]').on('click', function() {
      $('.property_access_key_safe').show();
    });
    $('input[name="property_access"]').not('[value="Key Safe"]').on('click', function() {
      $('.property_access_key_safe').hide();
    });
    $('input[name="property_access"][value="Other"]').on('click', function() {
      $('.property_access_other').show();
    });
    $('input[name="property_access"]').not('[value="Other"]').on('click', function() {
      $('.property_access_other').hide();
    });

    $('input[name="bedroom_location"][value="Other"]').on('click', function() {
      $('.bedroom_location_other').show();
    });
    $('input[name="bedroom_location"]').not('[value="Other"]').on('click', function() {
      $('.bedroom_location_other').hide();
    });

  });
</script>
@endsection