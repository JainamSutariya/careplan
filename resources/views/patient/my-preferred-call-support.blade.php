<style>
   .border-table tr,
   th,
   td {
   border: 1px solid #e1e1e1 !important;
   padding: 5px;
   }
   .border-table input {
   width: 70px;
   height: 20px;
   }
   th {
   font-size: 13px;
   text-align: center !important;
   }
   td {
   font-size: 12px;
   }
</style>
@extends('layouts.master')
@section('title') My Preferred Call Time & Support Needs @endsection
@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') My Preferred Call Time & Support Needs @endslot
@endcomponent
@section('css')
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="post" id="createPatientForm" action="{{route('storePreferredCallSupport', $patient->id)}}">
               @csrf
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Morning Call</th>
                     <th> <input type="text" name="morning_call_text" class="form-control" value="{{$preferredCallSupport->morning_call_text ?? ''}}"/> </th>
                     <th>Requested Time</th>
                     <th> <input type="text" name="morning_call_requested" class="form-control" value="{{$preferredCallSupport->morning_call_requested ?? ''}}"/> </th>
                     <th>Duration</th>
                     <th> <input type="text" name="morning_call_duration" class="form-control" value="{{$preferredCallSupport->morning_call_duration ?? ''}}"/> </th>
                     <th>Carers </th>
                     <th> <input type="text" name="morning_call_carers" class="form-control" value="{{$preferredCallSupport->morning_call_carers ?? ''}}"/> </th>
                  </tr>
                  <tr>
                     <td>Personal Care</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="morning_call_personal_care[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="morning_call_personal_care[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="morning_call_personal_care[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="morning_call_personal_care[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Transfer </td>
                     <td colspan="4">
                        <input type="checkbox" name="morning_call_transfer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues1) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="morning_call_transfer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues1) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="morning_call_transfer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues1) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="morning_call_transfer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues1) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="morning_call_food[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues2) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="morning_call_food[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues2) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="morning_call_food[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues2) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="morning_call_food[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues2) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="4">
                        <input type="checkbox" name="morning_call_stoma_care[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues3) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="morning_call_stoma_care[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues3) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="morning_call_stoma_care[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues3) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="morning_call_stoma_care[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues3) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="morning_call_medication[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues4) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="morning_call_medication[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues4) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="morning_call_medication[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues4) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="morning_call_medication[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues4) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Change Position in Bed </td>
                     <td colspan="4">
                        <input type="checkbox" name="morning_call_change_bed[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues5) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="morning_call_change_bed[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues5) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="morning_call_change_bed[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues5) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="morning_call_change_bed[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues5) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
               </table>
               <br />
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Lunch Call</th>
                     <th> <input type="text" name="lunch_call_text" class="form-control" value="{{$preferredCallSupport->lunch_call_text ?? ''}}"/> </th>
                     <th>Requested Time</th>
                     <th> <input type="text" name="lunch_call_request_time" class="form-control" value="{{$preferredCallSupport->lunch_call_request_time ?? ''}}"/> </th>
                     <th>Duration</th>
                     <th> <input type="text" name="lunch_call_duration" class="form-control" value="{{$preferredCallSupport->lunch_call_duration ?? ''}}"/> </th>
                     <th>Carers</th>
                     <th> <input type="text" name="lunch_call_carers" class="form-control" value="{{$preferredCallSupport->lunch_call_carers ?? ''}}"/> </th>
                  </tr>
                  <tr>
                     <td>Personal Care</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="lunch_call_personal_care[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues6) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="lunch_call_personal_care[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues6) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="lunch_call_personal_care[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues6) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="lunch_call_personal_care[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues6) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Transfer </td>
                     <td colspan="4">
                        <input type="checkbox" name="lunch_call_transfer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues7) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="lunch_call_transfer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues7) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="lunch_call_transfer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues7) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="lunch_call_transfer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues7) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="lunch_call_food[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues8) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="lunch_call_food[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues8) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="lunch_call_food[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues8) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="lunch_call_food[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues8) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="4">
                        <input type="checkbox" name="lunch_call_stoma_care[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues9) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="lunch_call_stoma_care[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues9) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="lunch_call_stoma_care[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues9) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="lunch_call_stoma_care[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues9) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="lunch_call_medication[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues10) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="lunch_call_medication[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues10) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="lunch_call_medication[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues10) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="lunch_call_medication[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues10) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Change Position in Bed </td>
                     <td colspan="4">
                        <input type="checkbox" name="lunch_call_change_bed[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues11) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="lunch_call_change_bed[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues11) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="lunch_call_change_bed[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues11) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="lunch_call_change_bed[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues11) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
               </table>
               <br />
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Tea Call</th>
                     <th> <input type="text" name="tea_call_text" class="form-control" value="{{$preferredCallSupport->tea_call_text ?? ''}}"/> </th>
                     <th>Requested Time</th>
                     <th> <input type="text" name="tea_call_requested" class="form-control" value="{{$preferredCallSupport->tea_call_requested ?? ''}}"/> </th>
                     <th>Duration</th>
                     <th> <input type="text" name="tea_call_duration" class="form-control" value="{{$preferredCallSupport->tea_call_duration ?? ''}}"/> </th>
                     <th>Carers</th>
                     <th> <input type="text" name="tea_carers_text" class="form-control" value="{{$preferredCallSupport->tea_carers_text ?? ''}}"/> </th>
                  </tr>
                  <tr>
                     <td>Personal Care</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="tea_call_personal_care[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues12) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tea_call_personal_care[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues12) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tea_call_personal_care[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues12) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tea_call_personal_care[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues12) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Transfer </td>
                     <td colspan="4">
                        <input type="checkbox" name="tea_call_transfer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues13) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tea_call_transfer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues13) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tea_call_transfer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues13) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tea_call_transfer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues13) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="tea_call_food[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues14) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tea_call_food[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues14) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tea_call_food[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues14) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tea_call_food[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues14) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="4">
                        <input type="checkbox" name="tea_call_stoma[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues15) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tea_call_stoma[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues15) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tea_call_stoma[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues15) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tea_call_stoma[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues15) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="tea_medication[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues16) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tea_medication[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues16) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tea_medication[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues16) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tea_medication[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues16) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Change Position in Bed </td>
                     <td colspan="4">
                        <input type="checkbox" name="tea_change_bed_text[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues17) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tea_change_bed_text[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues17) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tea_change_bed_text[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues17) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tea_change_bed_text[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues17) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
               </table>
               <br />
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Tuck in Call</th>
                     <th> <input type="text" name="tuck_call_text" class="form-control" value="{{$preferredCallSupport->tuck_call_text ?? ''}}"/> </th>
                     <th>Requested Time</th>
                     <th> <input type="text" name="tuck_call_requested_time" class="form-control" value="{{$preferredCallSupport->tuck_call_requested_time ?? ''}}"/> </th>
                     <th>Duration</th>
                     <th> <input type="text" name="tuck_call_duration_text" class="form-control" value="{{$preferredCallSupport->tuck_call_duration_text ?? ''}}"/> </th>
                     <th>Carers</th>
                     <th> <input type="text" name="tuck_call_carers_text" class="form-control" value="{{$preferredCallSupport->tuck_call_carers_text ?? ''}}"/> </th>
                  </tr>
                  <tr>
                     <td>Personal Care</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="tuck_call_personal_care_carer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues18) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tuck_call_personal_care_carer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues18) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tuck_call_personal_care_carer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues18) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tuck_call_personal_care_carer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues18) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Transfer </td>
                     <td colspan="4">
                        <input type="checkbox" name="tuck_call_transfer_carer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues19) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tuck_call_transfer_carer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues19) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tuck_call_transfer_carer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues19) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tuck_call_transfer_carer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues19) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="tuck_call_food_carer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues20) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tuck_call_food_carer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues20) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tuck_call_food_carer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues20) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tuck_call_food_carer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues20) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="4">
                        <input type="checkbox" name="tuck_call_stoma_care_carer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues21) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tuck_call_stoma_care_carer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues21) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tuck_call_stoma_care_carer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues21) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tuck_call_stoma_care_carer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues21) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td colspan="2" style="height: 50px;">
                        <input type="checkbox" name="tuck_call_medication_carer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues22) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tuck_call_medication_carer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues22) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tuck_call_medication_carer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues22) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tuck_call_medication_carer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues22) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                     <td> Change Position in Bed </td>
                     <td colspan="4">
                        <input type="checkbox" name="tuck_call_change_carer[]" class="form-check-input" value="Carer" {{ CheckboxHelper::isChecked('Carer', $checkedValues23) ? 'checked' : '' }}/> Carer&nbsp;
                        <input type="checkbox" name="tuck_call_change_carer[]" class="form-check-input" value="Independent" {{ CheckboxHelper::isChecked('Independent', $checkedValues23) ? 'checked' : '' }}/> Independent&nbsp;
                        <input type="checkbox" name="tuck_call_change_carer[]" class="form-check-input" value="Family Support" {{ CheckboxHelper::isChecked('Family Support', $checkedValues23) ? 'checked' : '' }}/> Family Support&nbsp;
                        <input type="checkbox" name="tuck_call_change_carer[]" class="form-check-input" value="NOK" {{ CheckboxHelper::isChecked('NOK', $checkedValues23) ? 'checked' : '' }}/> NOK&nbsp;
                     </td>
                  </tr>
               </table>
               <div class="row">
                  <label for="example-password-input" class="col-md-2 col-form-label"></label>
                  <div style="display: flex;justify-content: center;align-items: center;">
                     <button type="submit" class="btn btn-primary w-md">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- end col -->
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