@extends('layouts.master')

@section('title') Mobility and Transfer Risk Assessment @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Mobility and Transfer Risk Assessment
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
                <form method="post" id="createPatientForm" action="{{route('storeMobilityTransferRisk', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/1.png')}}">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/2.png')}}">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/3.png')}}">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/4.png')}}">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/5.png')}}">
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="image" value="1" @if($mobilityTransferRisk && $mobilityTransferRisk->image && $mobilityTransferRisk->image == '1') checked @endif>
                        </div>
                        <div class="col-md-2">
                        <input type="radio" name="image" value="2" @if($mobilityTransferRisk && $mobilityTransferRisk->image && $mobilityTransferRisk->image == '2') checked @endif>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="image" value="3" @if($mobilityTransferRisk && $mobilityTransferRisk->image && $mobilityTransferRisk->image == '3') checked @endif>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="image" value="4" @if($mobilityTransferRisk && $mobilityTransferRisk->image && $mobilityTransferRisk->image == '4') checked @endif>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="image" value="5" @if($mobilityTransferRisk && $mobilityTransferRisk->image && $mobilityTransferRisk->image == '5') checked @endif>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <thead>
                                        <tr>
                                            <td>Type of Activity / Support Need</td>
                                            <td>Independent</td>
                                            <td>SuperVised</td>
                                            <td>Carer 1</td>
                                            <td>Carer 2</td>
                                            <td>Equipment / Other Aid Use</td>
                                            <td>Fear</td>
                                            <td>Pain</td>
                                            <td>Risk (H/M/L)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Inside the Home</td>
                                            <td><input type="checkbox" name="inside_independent" {{ old('inside_independent', optional($mobilityTransferRisk)->inside_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="inside_super_visad" {{ old('inside_super_visad', optional($mobilityTransferRisk)->inside_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="inside_carer_1" {{ old('inside_carer_1', optional($mobilityTransferRisk)->inside_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="inside_carer_2" {{ old('inside_carer_2', optional($mobilityTransferRisk)->inside_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="inside_equipment" value="{{ $mobilityTransferRisk->inside_equipment ?? '' }}"></td>
                                            <td><input type="checkbox" name="inside_fear" {{ old('inside_fear', optional($mobilityTransferRisk)->inside_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="inside_pain" {{ old('inside_pain', optional($mobilityTransferRisk)->inside_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="inside_risk" value="H" {{ old('inside_risk', optional($mobilityTransferRisk)->inside_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="inside_risk" value="M" {{ old('inside_risk', optional($mobilityTransferRisk)->inside_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="inside_risk" value="L" {{ old('inside_risk', optional($mobilityTransferRisk)->inside_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Outside the Home</td>
                                            <td><input type="checkbox" name="outside_independent" {{ old('outside_independent', optional($mobilityTransferRisk)->outside_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="outside_super_visad" {{ old('outside_super_visad', optional($mobilityTransferRisk)->outside_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="outside_carer_1" {{ old('outside_carer_1', optional($mobilityTransferRisk)->outside_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="outside_carer_2" {{ old('outside_carer_2', optional($mobilityTransferRisk)->outside_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="outside_equipment" value="{{ $mobilityTransferRisk->outside_equipment ?? '' }}"></td>
                                            <td><input type="checkbox" name="outside_fear" {{ old('outside_fear', optional($mobilityTransferRisk)->outside_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="outside_pain" {{ old('outside_pain', optional($mobilityTransferRisk)->outside_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="outside_risk" value="H" {{ old('outside_risk', optional($mobilityTransferRisk)->outside_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="outside_risk" value="M" {{ old('outside_risk', optional($mobilityTransferRisk)->outside_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="outside_risk" value="L" {{ old('outside_risk', optional($mobilityTransferRisk)->outside_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>In and Out from the Bed</td>
                                            <td><input type="checkbox" name="out_bed_independent" {{ old('out_bed_independent', optional($mobilityTransferRisk)->out_bed_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="out_bed_super_visad" {{ old('out_bed_super_visad', optional($mobilityTransferRisk)->out_bed_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="out_bed_carer_1" {{ old('out_bed_carer_1', optional($mobilityTransferRisk)->out_bed_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="out_bed_carer_2" {{ old('out_bed_carer_2', optional($mobilityTransferRisk)->out_bed_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="out_bed_equipment" value="{{ $mobilityTransferRisk->out_bed_equipment ?? '' }}"></td>
                                            <td><input type="checkbox" name="out_bed_fear" {{ old('inside_independent', optional($mobilityTransferRisk)->inside_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="out_bed_pain" {{ old('inside_independent', optional($mobilityTransferRisk)->inside_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="out_bed_risk" value="H" {{ old('inside_independent', optional($mobilityTransferRisk)->inside_independent) == 'H' ? 'checked' : '' }}>H<input type="radio" name="out_bed_risk" value="M" {{ old('inside_independent', optional($mobilityTransferRisk)->inside_independent) == 'M' ? 'checked' : '' }}>M<input type="radio" name="out_bed_risk" value="L" {{ old('inside_independent', optional($mobilityTransferRisk)->inside_independent) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Moving / Repositioning in the Bed</td>
                                            <td><input type="checkbox" name="moving_independent" {{ old('moving_independent', optional($mobilityTransferRisk)->moving_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="moving_super_visad" {{ old('moving_super_visad', optional($mobilityTransferRisk)->moving_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="moving_carer_1" {{ old('moving_carer_1', optional($mobilityTransferRisk)->moving_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="moving_carer_2" {{ old('moving_carer_2', optional($mobilityTransferRisk)->moving_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="moving_equipment" value="{{ $mobilityTransferRisk->moving_equipment ?? '' }}"></td>
                                            <td><input type="checkbox" name="moving_fear" {{ old('moving_fear', optional($mobilityTransferRisk)->moving_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="moving_pain" {{ old('moving_pain', optional($mobilityTransferRisk)->moving_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="moving_risk" value="H" {{ old('moving_risk', optional($mobilityTransferRisk)->moving_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="moving_risk" value="M" {{ old('moving_risk', optional($mobilityTransferRisk)->moving_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="moving_risk" value="L" {{ old('moving_risk', optional($mobilityTransferRisk)->moving_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Using Toilet / Commode</td>
                                            <td><input type="checkbox" name="toilet_independent" {{ old('toilet_independent', optional($mobilityTransferRisk)->toilet_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="toilet_super_visad" {{ old('toilet_super_visad', optional($mobilityTransferRisk)->toilet_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="toilet_carer_1" {{ old('toilet_carer_1', optional($mobilityTransferRisk)->toilet_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="toilet_carer_2" {{ old('toilet_carer_2', optional($mobilityTransferRisk)->toilet_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="toilet_equipment" value="{{$mobilityTransferRisk->toilet_equipment ?? ''}}"></td>
                                            <td><input type="checkbox" name="toilet_fear" {{ old('toilet_fear', optional($mobilityTransferRisk)->toilet_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="toilet_pain" {{ old('toilet_pain', optional($mobilityTransferRisk)->toilet_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="toilet_risk" value="H" {{ old('toilet_risk', optional($mobilityTransferRisk)->toilet_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="toilet_risk" value="M" {{ old('toilet_risk', optional($mobilityTransferRisk)->toilet_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="toilet_risk" value="L" {{ old('toilet_risk', optional($mobilityTransferRisk)->toilet_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Transfer Bed to Chair / Chair to Bed</td>
                                            <td><input type="checkbox" name="transfer_independent" {{ old('transfer_independent', optional($mobilityTransferRisk)->transfer_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="transfer_super_visad" {{ old('transfer_super_visad', optional($mobilityTransferRisk)->transfer_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="transfer_carer_1" {{ old('transfer_carer_1', optional($mobilityTransferRisk)->transfer_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="transfer_carer_2" {{ old('transfer_carer_2', optional($mobilityTransferRisk)->transfer_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="transfer_equipment" value="{{$mobilityTransferRisk->transfer_equipment ?? ''}}"></td>
                                            <td><input type="checkbox" name="transfer_fear" {{ old('transfer_fear', optional($mobilityTransferRisk)->transfer_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="transfer_pain" {{ old('transfer_pain', optional($mobilityTransferRisk)->transfer_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="transfer_risk" value="H" {{ old('transfer_risk', optional($mobilityTransferRisk)->transfer_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="transfer_risk" value="M" {{ old('transfer_risk', optional($mobilityTransferRisk)->transfer_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="transfer_risk" value="L" {{ old('transfer_risk', optional($mobilityTransferRisk)->transfer_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Sit / stand</td>
                                            <td><input type="checkbox" name="stand_independent" {{ old('stand_independent', optional($mobilityTransferRisk)->stand_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stand_super_visad" {{ old('stand_super_visad', optional($mobilityTransferRisk)->stand_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stand_carer_1" {{ old('stand_carer_1', optional($mobilityTransferRisk)->stand_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stand_carer_2" {{ old('stand_carer_2', optional($mobilityTransferRisk)->stand_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="stand_equipment" value="{{$mobilityTransferRisk->stand_equipment ?? ''}}"></td>
                                            <td><input type="checkbox" name="stand_fear" {{ old('stand_fear', optional($mobilityTransferRisk)->stand_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stand_pain" {{ old('stand_pain', optional($mobilityTransferRisk)->stand_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="stand_risk" value="H" {{ old('stand_risk', optional($mobilityTransferRisk)->stand_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="stand_risk" value="M" {{ old('stand_risk', optional($mobilityTransferRisk)->stand_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="stand_risk" value="L" {{ old('stand_risk', optional($mobilityTransferRisk)->stand_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Bathing / Washing & Dressing</td>
                                            <td><input type="checkbox" name="bathing_independent" {{ old('bathing_independent', optional($mobilityTransferRisk)->bathing_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="bathing_super_visad" {{ old('bathing_super_visad', optional($mobilityTransferRisk)->bathing_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="bathing_carer_1" {{ old('bathing_carer_1', optional($mobilityTransferRisk)->bathing_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="bathing_carer_2" {{ old('bathing_carer_2', optional($mobilityTransferRisk)->bathing_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="bathing_equipment" value="{{$mobilityTransferRisk->bathing_equipment ?? ''}}"></td>
                                            <td><input type="checkbox" name="bathing_fear" {{ old('bathing_fear', optional($mobilityTransferRisk)->bathing_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="bathing_pain" {{ old('bathing_pain', optional($mobilityTransferRisk)->bathing_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="bathing_risk" value="H" {{ old('bathing_risk', optional($mobilityTransferRisk)->bathing_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="bathing_risk" value="M" {{ old('bathing_risk', optional($mobilityTransferRisk)->bathing_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="bathing_risk" value="L" {{ old('bathing_risk', optional($mobilityTransferRisk)->bathing_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Stair Case</td>
                                            <td><input type="checkbox" name="stair_independent" {{ old('stair_independent', optional($mobilityTransferRisk)->stair_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stair_super_visad" {{ old('stair_super_visad', optional($mobilityTransferRisk)->stair_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stair_carer_1" {{ old('stair_carer_1', optional($mobilityTransferRisk)->stair_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stair_carer_2" {{ old('stair_carer_2', optional($mobilityTransferRisk)->stair_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="stair_equipment" value="{{$mobilityTransferRisk->stair_equipment ?? ''}}"></td>
                                            <td><input type="checkbox" name="stair_fear" {{ old('stair_fear', optional($mobilityTransferRisk)->stair_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="stair_pain" {{ old('stair_pain', optional($mobilityTransferRisk)->stair_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="stair_risk" value="H" {{ old('stair_risk', optional($mobilityTransferRisk)->stair_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="stair_risk" value="M" {{ old('stair_risk', optional($mobilityTransferRisk)->stair_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="stair_risk" value="L" {{ old('stair_risk', optional($mobilityTransferRisk)->stair_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                        <tr>
                                            <td>Emergency Situation</td>
                                            <td><input type="checkbox" name="emergency_independent" {{ old('emergency_independent', optional($mobilityTransferRisk)->emergency_independent) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="emergency_super_visad" {{ old('emergency_super_visad', optional($mobilityTransferRisk)->emergency_super_visad) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="emergency_carer_1" {{ old('emergency_carer_1', optional($mobilityTransferRisk)->emergency_carer_1) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="emergency_carer_2" {{ old('emergency_carer_2', optional($mobilityTransferRisk)->emergency_carer_2) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="text" class="form-control" name="emergency_equipment" value="{{$mobilityTransferRisk->emergency_equipment ?? ''}}"></td>
                                            <td><input type="checkbox" name="emergency_fear" {{ old('emergency_fear', optional($mobilityTransferRisk)->emergency_fear) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="checkbox" name="emergency_pain" {{ old('emergency_pain', optional($mobilityTransferRisk)->emergency_pain) == 'on' ? 'checked' : '' }}></td>
                                            <td><input type="radio" name="emergency_risk" value="H" {{ old('emergency_risk', optional($mobilityTransferRisk)->emergency_risk) == 'H' ? 'checked' : '' }}>H<input type="radio" name="emergency_risk" value="M" {{ old('emergency_risk', optional($mobilityTransferRisk)->emergency_risk) == 'M' ? 'checked' : '' }}>M<input type="radio" name="emergency_risk" value="L" {{ old('emergency_risk', optional($mobilityTransferRisk)->emergency_risk) == 'L' ? 'checked' : '' }}>L</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Any Physical Problem (e.g. Weakness, poor balance, weight-bearing, non-weight bearing etc.):</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="physical_problem" rows="5">{{ $mobilityTransferRisk->physical_problem ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Communication/ Comprehension (e.g. deafness; confusion etc.):</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="communication" rows="5">{{ $mobilityTransferRisk->communication ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Behaviour-which may affect moving and handling (e.g. Loss of confidence; aggression; unpredictable, etc.):</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="behaviour" rows="5">{{ $mobilityTransferRisk->behaviour ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-4 col-form-label">Details of safe transfer:</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="safe_transfer_details" rows="5">{{ $mobilityTransferRisk->safe_transfer_details ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Risk Level</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="Low" @if($mobilityTransferRisk && $mobilityTransferRisk->risk_level && $mobilityTransferRisk->risk_level == 'Low') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Low
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="Medium" @if($mobilityTransferRisk && $mobilityTransferRisk->risk_level && $mobilityTransferRisk->risk_level == 'Medium') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            Medium
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="risk_level" type="radio" id="risk_level" value="High" @if($mobilityTransferRisk && $mobilityTransferRisk->risk_level && $mobilityTransferRisk->risk_level == 'High') checked @endif>
                          <label class="form-check-label" for="toast-type-radio1">
                            High
                          </label>
                        </div>
                    </div>
                    <br>
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