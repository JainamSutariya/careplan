<style>
   .border-table tr,
   th,
   td {
   border: 1px solid #e1e1e1!important;
   padding: 10px;
   }
   /* .border-table input {
   width: 160px;
   } */
   th {
   font-size: 14px;
   /*text-align: center !important;*/
   }
   td {
   font-size: 12px;
   }
   input[type="checkbox"] {
   width: 14px;
   margin-left: 0px;
   margin-right: -3px;
   }
   /* input[type="text"] {
   border: 0;
   transition: width .35s ease-in-out;
   } */
   input[type="text"]:focus-visible {
   outline: none;
   }
   input#topics_communication_avoid {
   margin-left: 6px;
   margin-right: 6px;
   }
   .position-2 {
   position: relative;
   }
   .position-2 input#topics_communication_avoid {
   width: 8px;
   }
   .Position-37 {
   position: absolute;
   top: 31px;
   left: 30.3%;
   }
   .Position-38 {
   position: absolute;
   top: 49px;
   left: 30.3%;
   }
   .Position-39 {
   position: absolute;
   top: 61px;
   left: 30%;
   }
   .Position-40 {
   position: absolute;
   top: 71px;
   left: 30%;
   }
   .Position-41 {
   position: absolute;
   top: 81px;
   left: 30%;
   }
   .Position-42 {
   position: absolute;
   top: 91px;
   left: 30%;
   }
   .Position-43 {
   position: absolute;
   top: 101px;
   left: 30%;
   }
   .Position-44 {
   position: absolute;
   top: 109px;
   left: 30%;
   }
   .Position-45 {
   position: absolute;
   top: 118px;
   left: 30%;
   }
   .Position-46 {
   position: absolute;
   top: 126px;
   left: 30%;
   }
   .Position-47 {
   position: absolute;
   top: 134px;
   left: 30%;
   }
   .Position-48 {
   position: absolute;
   top: 144px;
   left: 30%;
   }
   .Position-49 {
   position: absolute;
   top: 118px;
   left: 34%;
   }
   .Position-50 {
   position: absolute;
   top: 115px;
   left: 26.4%;
   }
   .Position-51 {
   position: absolute;
   bottom: 26px;
   left: 29%;
   }
   .Position-52 {
   position: absolute;
   bottom: 26px;
   left: 30.7%;
   }
   .Position-53 {
   position: absolute;
   top: 68px;
   left: 27.3%;
   }
   .Position-54 {
   position: absolute;
   top: 71px;
   left: 33.3%;
   }
   @media only screen and (max-width: 600px) {
   .Position-37 {
   position: absolute;
   top: 31px;
   left: 37.1%;
   }
   .Position-38 {
   position: absolute;
   top: 44px;
   left: 37.1%;
   }
   .Position-39 {
   position: absolute;
   top: 53px;
   left: 37.1%;
   }
   .Position-40 {
   position: absolute;
   top: 62px;
   left: 37.1%;
   }
   .Position-41 {
   position: absolute;
   top: 71px;
   left: 37.1%;
   }
   .Position-42 {
   position: absolute;
   top: 80px;
   left: 37.1%;
   }
   .Position-43 {
   position: absolute;
   top: 89px;
   left: 37.1%;
   }
   .Position-44 {
   position: absolute;
   top: 98px;
   left: 37.1%;
   }
   .Position-45 {
   position: absolute;
   top: 107px;
   left: 37.1%;
   }
   .Position-46 {
   position: absolute;
   top: 117px;
   left: 37.1%;
   }
   .Position-47 {
   position: absolute;
   top: 126px;
   left: 37.1%;
   }
   .Position-48 {
   position: absolute;
   top: 135px;
   left: 37.1%;
   }
   .Position-49 {
   position: absolute;
   top: 118px;
   left: 42%;
   }
   .Position-50 {
   position: absolute;
   top: 115px;
   left: 32.4%;
   }
   .Position-51 {
   position: absolute;
   bottom: 26px;
   left: 35.4%;
   }
   .Position-52 {
   position: absolute;
   bottom: 26px;
   left: 37.6%;
   }
   .Position-53 {
   position: absolute;
   top: 68px;
   left: 33.7%;
   }
   .Position-54 {
   position: absolute;
   top: 71px;
   left: 40.9%;
   }
   }
</style>
@extends('layouts.master')
@section('title') Medication @endsection
@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Medication
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
            <form method="post" id="createPatientForm" action="{{route('storeMedication',  $patient->id)}}">
               @csrf
               <h5>What care and support needs do I currently have?</h5>
               <p>I would like to maintain my health condition by taking my regular medication and applying the prescribed cream if
                  I have any with the support of,
               </p>
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <td>
                        <input class="form-check-input" name="care_support_need" type="radio" id="care_support_need" value="Family Support" {{ old('care_support_need', optional($medication)->care_support_need) == 'Family Support' ? 'checked' : '' }}>
                                        <label>Family Support</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="care_support_need" type="radio" id="care_support_need" value="Carer Support" {{ old('care_support_need', optional($medication)->care_support_need) == 'Carer Support' ? 'checked' : '' }}>
                                        <label>Carer Support</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="care_support_need" type="radio" id="care_support_need" value="Independent" {{ old('care_support_need', optional($medication)->care_support_need) == 'Independent' ? 'checked' : '' }}>
                                        <label>Independent</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="care_support_need" type="radio" id="care_support_need" value="Other" {{ old('care_support_need', optional($medication)->care_support_need) == 'Other' ? 'checked' : '' }}>
                        <label>Other : </label>
                        <input type="text" class="form-control" name="care_support_need_other_text" value="{{$medication->care_support_need_other_text ?? ''}}">
                     </td>
                  </tr>
               </table>
               <br />
               <h5>Strength</h5>
               <table class=" w-100 d-block d-md-table border-table" style="overflow-x:auto;">
                  <tr>
                     <th>Strength </th>
                     <th>Able To </th>
                     <th>Support with </th>
                  </tr>
                  <tr>
                     <td>Open the Dosage Box</td>
                     <td><input type="checkbox" class="form-check-input" name="dosage_able_to" {{ old('dosage_able_to', optional($medication)->dosage_able_to) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="checkbox" class="form-check-input" name="dosage_support_to" {{ old('dosage_support_to', optional($medication)->dosage_support_to) == 'on' ? 'checked' : '' }}/></td>
                  </tr>
                  <tr>
                     <td>Put medication pot in my hand and take my medication</td>
                     <td><input type="checkbox" class="form-check-input" name="medication_able_to" {{ old('medication_able_to', optional($medication)->medication_able_to) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="checkbox" class="form-check-input" name="medication_support_to" {{ old('medication_support_to', optional($medication)->medication_support_to) == 'on' ? 'checked' : '' }}/></td>
                  </tr>
                  <tr>
                     <td>Hold the glass and drink enough fluid</td>
                     <td><input type="checkbox" class="form-check-input" name="drink_able_to" {{ old('drink_able_to', optional($medication)->drink_able_to) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="checkbox" class="form-check-input" name="drink_support_to" {{ old('drink_support_to', optional($medication)->drink_support_to) == 'on' ? 'checked' : '' }}/></td>
                  </tr>
                  <tr>
                     <td>Take the medication out from the original box</td>
                     <td><input type="checkbox" class="form-check-input" name="original_able_to" {{ old('original_able_to', optional($medication)->original_able_to) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="checkbox" class="form-check-input" name="original_support_to" {{ old('original_support_to', optional($medication)->original_support_to) == 'on' ? 'checked' : '' }}/></td>
                  </tr>
                  <tr>
                     <td>Administer the Inhaler</td>
                     <td><input type="checkbox" class="form-check-input" name="administer_able_to" {{ old('administer_able_to', optional($medication)->administer_able_to) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="checkbox" class="form-check-input" name="administer_support_to" {{ old('administer_support_to', optional($medication)->administer_support_to) == 'on' ? 'checked' : '' }}/></td>
                  </tr>
               </table>
               <br />
               <h5>What are my desired outcomes?</h5>
               <table class=" w-100 d-block d-md-table border-table-2" style="overflow-x:auto;">
                  <tr>
                     <td> <input type="checkbox" name="maintain_health_conditions" {{ old('maintain_health_conditions', optional($medication)->maintain_health_conditions) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>I desire to maintain my health conditions</label> </td>
                     <td> <input type="checkbox" name="skin_remain_healthy" {{ old('skin_remain_healthy', optional($medication)->skin_remain_healthy) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>For my skin to remain healthy and not to get any sore</label> </td>
                  </tr>
                  <tr>
                     <td> <input type="checkbox" name="maximize_independence" {{ old('maximize_independence', optional($medication)->maximize_independence) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>To maximize my independence</label> </td>
                     <td> <input type="checkbox" name="desire_not_fall" {{ old('desire_not_fall', optional($medication)->desire_not_fall) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>I desire not to have a fall</label> </td>
                  </tr>
                  <tr>
                     <td> <input type="checkbox" name="maintain_dignity" {{ old('maintain_dignity', optional($medication)->maintain_dignity) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>To maintain my dignity and privacy.</label> </td>
                     <td> <input type="checkbox" name="avoid_unnecessary_dentist" {{ old('avoid_unnecessary_dentist', optional($medication)->avoid_unnecessary_dentist) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>I desire to avoid unnecessary dentist appointment. </label> </td>
                  </tr>
                  <tr>
                     <td> <input type="checkbox" name="desire_clean_smart" {{ old('desire_clean_smart', optional($medication)->desire_clean_smart) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>I desire to be a clean and smart as I always prefer to be smart looking.</label> </td>
                     <td> <input type="checkbox" name="maintain_healthey_lifestyle" {{ old('maintain_healthey_lifestyle', optional($medication)->maintain_healthey_lifestyle) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>To maintain my healthey lifestyle. </label> </td>
                  </tr>
                  <tr>
                     <td> <input type="checkbox" name="unnecessary_hospital" {{ old('unnecessary_hospital', optional($medication)->unnecessary_hospital) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>To avoid unnecessary hospital admission.</label> </td>
                     <td> <input type="checkbox" name="maintain_good_relation" {{ old('maintain_good_relation', optional($medication)->maintain_good_relation) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>I prefer to maintain a good relationship with my family</label> </td>
                  </tr>
                  <tr>
                     <td> <input type="checkbox" name="quality_life" {{ old('quality_life', optional($medication)->quality_life) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>To improve my quality of life</label> </td>
                     <td> <input type="checkbox" name="malnutrition_dehydration" {{ old('malnutrition_dehydration', optional($medication)->malnutrition_dehydration) == 'on' ? 'checked' : '' }}/> </td>
                     <td> <label>To prevent malnutrition and dehydration</label> </td>
                  </tr>
               </table>
               <br/>
               <h5>How do I want staff to support me to achieve my desired outcomes?</h5>
               <p>I prefer to get the consent before care (refer communication section for more details).</p>
               <p>I prefer the care staff to maintain my privacy and dignity (refer privacy and dignity section for more detail) I have the medication during,</p>
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <input class="form-check-input" name="medication_during" type="radio" id="medication_during" value="Morning" {{ old('medication_during', optional($medication)->medication_during) == 'Morning' ? 'checked' : '' }}>
                             <label>Morning</label>

                     <input class="form-check-input" name="medication_during" type="radio" id="medication_during" value="Lunch" {{ old('medication_during', optional($medication)->medication_during) == 'Lunch' ? 'checked' : '' }}>
                             <label>Lunch</label>

                     <input class="form-check-input" name="medication_during" type="radio" id="medication_during" value="Tea" {{ old('medication_during', optional($medication)->medication_during) == 'Tea' ? 'checked' : '' }}>
                             <label>Tea</label>
                     <input class="form-check-input" name="medication_during" type="radio" id="medication_during" value="Bed" {{ old('medication_during', optional($medication)->medication_during) == 'Bed' ? 'checked' : '' }}>
                             <label>Bed</label>
                  </tr>
               </table>
               <p>I would like to take my medication from, </p>
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <input class="form-check-input" name="medication_from" type="radio" id="medication_from" value="Dosage Box" {{ old('medication_from', optional($medication)->medication_from) == 'Dosage Box' ? 'checked' : '' }}>
                             <label>Dosage Box</label>
                     <input class="form-check-input" name="medication_from" type="radio" id="medication_from" value="Electronic Dosage Box" {{ old('medication_from', optional($medication)->medication_from) == 'Electronic Dosage Box' ? 'checked' : '' }}>
                             <label>Electronic Dosage Box</label>
                     <input class="form-check-input" name="medication_from" type="radio" id="medication_from" value="Self – Blister (Family Made)" {{ old('medication_from', optional($medication)->medication_from) == 'Self – Blister (Family Made)' ? 'checked' : '' }}>
                             <label>Self – Blister (Family Made)</label>
                     <input class="form-check-input" name="medication_from" type="radio" id="medication_from" value="Original Box" {{ old('medication_from', optional($medication)->medication_from) == 'Original Box' ? 'checked' : '' }}>
                             <label>Original Box</label>
                     <input class="form-check-input" name="medication_from" type="radio" id="medication_from" value="No Medication" {{ old('medication_from', optional($medication)->medication_from) == 'No Medication' ? 'checked' : '' }}>
                             <label>No Medication</label>
                  </tr>
               </table>
               <p>I need support to take my medication from,</p>
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <input class="form-check-input" name="take_my_medication" type="radio" id="take_my_medication" value="Family" {{ old('take_my_medication', optional($medication)->take_my_medication) == 'Family' ? 'checked' : '' }}>
                             <label>Family</label>
                     <input class="form-check-input" name="take_my_medication" type="radio" id="take_my_medication" value="Carer" {{ old('take_my_medication', optional($medication)->take_my_medication) == 'Carer' ? 'checked' : '' }}>
                             <label>Carer</label>
                     <input class="form-check-input" name="take_my_medication" type="radio" id="take_my_medication" value="Independent" {{ old('take_my_medication', optional($medication)->take_my_medication) == 'Independent' ? 'checked' : '' }}>
                             <label>Independent</label>
                     <input class="form-check-input" name="take_my_medication" type="radio" id="take_my_medication" value="District Nurse" {{ old('take_my_medication', optional($medication)->take_my_medication) == 'District Nurse' ? 'checked' : '' }}>
                             <label>District Nurse</label>
                     <input class="form-check-input" name="take_my_medication" type="radio" id="take_my_medication" value="Other" {{ old('take_my_medication', optional($medication)->take_my_medication) == 'Other' ? 'checked' : '' }}>
                             <label>Other</label>
                  </tr>
               </table>
               <textarea class="form-control take_my_medication_other" name="take_my_medication_other" style="@if($medication && $medication->take_my_medication && $medication->take_my_medication == 'Other') display: block; @else display: none; @endif" rows="2">{{$medication->take_my_medication_other ?? ''}}</textarea>
               <br>
               <p>I would like to be, </p>
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Verbal Prompt Only</th>
                     <th>Prompt Medication</th>
                     <th>Administer Medication</th>
                     <th>Assisting with</th>
                  </tr>
                  <tr>
                     <td> <input type="checkbox" class="ms-3" name="verbally_remind" {{ old('verbally_remind', optional($medication)->verbally_remind) == 'on' ? 'checked' : '' }}>
                     <label>Verbally remind the service user with the medication – no observed by the care staff</label>
                     </td>
                     <td>
                        <input type="checkbox" class="ms-5" name="medication_dosage" {{ old('medication_dosage', optional($medication)->medication_dosage) == 'on' ? 'checked' : '' }}>
                                    <label>Physically taking the medication from the dosage box / original box and observe the service user while taking the medication</label>
                     </td>
                     <td>
                        <input type="checkbox" class="ms-5" name="administer_includes" {{ old('administer_includes', optional($medication)->administer_includes) == 'on' ? 'checked' : '' }}>
                                    <label>Administer only includes, Eye / Ear Drops, Patches, Prescribed Creams.</label>
                     </td>
                     <td>
                        <input type="checkbox" class="ms-5" name="physically_taking" {{ old('physically_taking', optional($medication)->physically_taking) == 'on' ? 'checked' : '' }}>
                                    <label>Physically taking the medication from the dosage box / original box and leave medication next to the service user.</label>
                     </td>
                  </tr>
               </table>
               <br/>
               <p>I have the following medication, (if service user does not have the following medication – leave it blank) </p>
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Questions</th>
                     <th>Eye / Ear Drops</th>
                     <th>Patches</th>
                     <th>Prescribed Cream</th>
                     <th>Inhaler</th>
                  </tr>
                  <tr>
                     <th>What kind of medication in place<br /> <small> (include the name and type of medication)</small> </th>
                     <td> <input type="text" class="form-control" name="medication_eye" value="{{$medication->medication_eye ?? ''}}"/> </td>
                     <td> <input type="text" class="form-control" name="medication_patches" value="{{$medication->medication_patches ?? ''}}"/> </td>
                     <td> <input type="text" class="form-control" name="medication_prescribed_cream" value="{{$medication->medication_prescribed_cream ?? ''}}"/> </td>
                     <td> <input type="text" class="form-control" name="medication_inhaler" value="{{$medication->medication_inhaler ?? ''}}"/> </td>
                  </tr>
                  <tr>
                     <th>Who Support with Medication<br /> <small> DN: District Nurse<br />
                        F: Family<br />
                        NC: NDH Carer Staff<br />
                        SU: Service User
                        </small>
                     </th>
                     <td>
                        <input class="form-check-input" name="who_support_medication_eye[]" type="checkbox" id="who_support_medication_eye" value="DN" {{ CheckboxHelper::isChecked('DN', $checkedValues) ? 'checked' : '' }}><label>&nbsp;DN</label>
                        <input class="form-check-input" name="who_support_medication_eye[]" type="checkbox" id="who_support_medication_eye" value="F" {{ CheckboxHelper::isChecked('F', $checkedValues) ? 'checked' : '' }}><label>&nbsp;F</label><br />
                        <input class="form-check-input" name="who_support_medication_eye[]" type="checkbox" id="who_support_medication_eye" value="NC" {{ CheckboxHelper::isChecked('NC', $checkedValues) ? 'checked' : '' }}><label>&nbsp;NC</label>
                        <input class="form-check-input" name="who_support_medication_eye[]" type="checkbox" id="who_support_medication_eye" value="SU" {{ CheckboxHelper::isChecked('SU', $checkedValues) ? 'checked' : '' }}><label>&nbsp;NC</label><br />
                        <label>Other : </label><input type="text" class="form-control" name="who_support_medication_eye_other_text" value="{{$medication->who_support_medication_eye_other_text ?? ''}}"/>
                     </td>
                     <td>
                        <input class="form-check-input" name="who_support_medication_patches[]" type="checkbox" id="who_support_medication_patches" value="DN" {{ CheckboxHelper::isChecked('DN', $checkedValues1) ? 'checked' : '' }}><label>&nbsp;DN</label>
                        <input class="form-check-input" name="who_support_medication_patches[]" type="checkbox" id="who_support_medication_patches" value="F" {{ CheckboxHelper::isChecked('F', $checkedValues1) ? 'checked' : '' }}><label>&nbsp;F</label><br />
                        <input class="form-check-input" name="who_support_medication_patches[]" type="checkbox" id="who_support_medication_patches" value="NC" {{ CheckboxHelper::isChecked('NC', $checkedValues1) ? 'checked' : '' }}><label>&nbsp;NC</label>
                        <input class="form-check-input" name="who_support_medication_patches[]" type="checkbox" id="who_support_medication_patches" value="SU" {{ CheckboxHelper::isChecked('SU', $checkedValues1) ? 'checked' : '' }}><label>&nbsp;SU</label><br />
                        <label>Other : </label><input type="text" class="form-control" name="who_support_medication_patches_other_text" value="{{$medication->who_support_medication_patches_other_text ?? ''}}"/>
                     </td>
                     <td>
                        <input class="form-check-input" name="who_support_medication_prescribed[]" type="checkbox" id="who_support_medication_prescribed" value="DN" {{ CheckboxHelper::isChecked('DN', $checkedValues2) ? 'checked' : '' }}><label>&nbsp;DN</label>
                        <input class="form-check-input" name="who_support_medication_prescribed[]" type="checkbox" id="who_support_medication_prescribed" value="F" {{ CheckboxHelper::isChecked('F', $checkedValues2) ? 'checked' : '' }}><label>&nbsp;F</label><br />
                        <input class="form-check-input" name="who_support_medication_prescribed[]" type="checkbox" id="who_support_medication_prescribed" value="NC" {{ CheckboxHelper::isChecked('NC', $checkedValues2) ? 'checked' : '' }}><label>&nbsp;NC</label>
                        <input class="form-check-input" name="who_support_medication_prescribed[]" type="checkbox" id="who_support_medication_prescribed" value="SU" {{ CheckboxHelper::isChecked('SU', $checkedValues2) ? 'checked' : '' }}><label>&nbsp;SU</label><br />
                        <label>Other : </label><input type="text" class="form-control" name="who_support_medication_prescribed_other_text" value="{{$medication->who_support_medication_prescribed_other_text ?? ''}}"/>
                     </td>
                     <td>
                        <input class="form-check-input" name="who_support_medication_inhaler[]" type="checkbox" id="who_support_medication_inhaler" value="DN" {{ CheckboxHelper::isChecked('DN', $checkedValues3) ? 'checked' : '' }}><label>&nbsp;DN</label>
                        <input class="form-check-input" name="who_support_medication_inhaler[]" type="checkbox" id="who_support_medication_inhaler" value="F" {{ CheckboxHelper::isChecked('F', $checkedValues3) ? 'checked' : '' }}><label>&nbsp;F</label><br />
                        <input class="form-check-input" name="who_support_medication_inhaler[]" type="checkbox" id="who_support_medication_inhaler" value="NC" {{ CheckboxHelper::isChecked('NC', $checkedValues3) ? 'checked' : '' }}><label>&nbsp;NC</label>
                        <input class="form-check-input" name="who_support_medication_inhaler[]" type="checkbox" id="who_support_medication_inhaler" value="SU" {{ CheckboxHelper::isChecked('SU', $checkedValues3) ? 'checked' : '' }}><label>&nbsp;SU</label><br />
                        <label>Other : </label><input type="text" class="form-control" name="who_support_medication_inhaler_other_text" value="{{$medication->who_support_medication_inhaler_other_text ?? ''}}"/>
                     </td>
                  </tr>
                  <tr>
                     <th>Frequency to Medication<br /> <small>M: Morning<br />
                        L: Lunch<br />
                        T: Tea<br />
                        B: Bed
                        </small>
                     </th>
                     <td>
                        <input class="form-check-input" name="frequency_medication_eye" type="radio" id="frequency_medication_eye" value="M" {{ old('frequency_medication_eye', optional($medication)->frequency_medication_eye) == 'M' ? 'checked' : '' }}><label>M</label>
                        <input class="form-check-input" name="frequency_medication_eye" type="radio" id="frequency_medication_eye" value="L" {{ old('frequency_medication_eye', optional($medication)->frequency_medication_eye) == 'L' ? 'checked' : '' }}><label>L</label><br />
                        <input class="form-check-input" name="frequency_medication_eye" type="radio" id="frequency_medication_eye" value="T" {{ old('frequency_medication_eye', optional($medication)->frequency_medication_eye) == 'T' ? 'checked' : '' }}><label>T</label>
                        <input class="form-check-input" name="frequency_medication_eye" type="radio" id="frequency_medication_eye" value="B" {{ old('frequency_medication_eye', optional($medication)->frequency_medication_eye) == 'B' ? 'checked' : '' }}><label>B</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="frequency_medication_patches" type="radio" id="frequency_medication_patches" value="Daily" {{ old('frequency_medication_patches', optional($medication)->frequency_medication_patches) == 'Daily' ? 'checked' : '' }}><label>Daily</label>
                        <input class="form-check-input" name="frequency_medication_patches" type="radio" id="frequency_medication_patches" value="1 Week" {{ old('frequency_medication_patches', optional($medication)->frequency_medication_patches) == '1 Week' ? 'checked' : '' }}><label>1 Week</label><br />
                        <input class="form-check-input" name="frequency_medication_patches" type="radio" id="frequency_medication_patches" value="2 Week" {{ old('frequency_medication_patches', optional($medication)->frequency_medication_patches) == '2 Week' ? 'checked' : '' }}><label>2 Week</label>
                        <input class="form-check-input" name="frequency_medication_patches" type="radio" id="frequency_medication_patches" value="4 Week" {{ old('frequency_medication_patches', optional($medication)->frequency_medication_patches) == '4 Week' ? 'checked' : '' }}><label>4 Week</label><br />
                        <label>When last patch was applied (Date):</label><input type="text" class="form-control" name="frequency_medication_patches_other_text" value="{{$medication->frequency_medication_patches_other_text ?? ''}}"/>
                     </td>
                     <td>
                     <input class="form-check-input" name="frequency_medication_prescribed" type="radio" id="frequency_medication_prescribed" value="M" {{ old('frequency_medication_prescribed', optional($medication)->frequency_medication_prescribed) == 'M' ? 'checked' : '' }}><label>M</label>
                        <input class="form-check-input" name="frequency_medication_prescribed" type="radio" id="frequency_medication_prescribed" value="L" {{ old('frequency_medication_prescribed', optional($medication)->frequency_medication_prescribed) == 'L' ? 'checked' : '' }}><label>L</label><br />
                        <input class="form-check-input" name="frequency_medication_prescribed" type="radio" id="frequency_medication_prescribed" value="T" {{ old('frequency_medication_prescribed', optional($medication)->frequency_medication_prescribed) == 'T' ? 'checked' : '' }}><label>T</label>
                        <input class="form-check-input" name="frequency_medication_prescribed" type="radio" id="frequency_medication_prescribed" value="B" {{ old('frequency_medication_prescribed', optional($medication)->frequency_medication_prescribed) == 'B' ? 'checked' : '' }}><label>B</label>
                     </td>
                     <td>
                     <input class="form-check-input" name="frequency_medication_inhaler" type="radio" id="frequency_medication_inhaler" value="M" {{ old('frequency_medication_inhaler', optional($medication)->frequency_medication_inhaler) == 'M' ? 'checked' : '' }}><label>M</label>
                        <input class="form-check-input" name="frequency_medication_inhaler" type="radio" id="frequency_medication_inhaler" value="L" {{ old('frequency_medication_inhaler', optional($medication)->frequency_medication_inhaler) == 'L' ? 'checked' : '' }}><label>L</label><br />
                        <input class="form-check-input" name="frequency_medication_inhaler" type="radio" id="frequency_medication_inhaler" value="T" {{ old('frequency_medication_inhaler', optional($medication)->frequency_medication_inhaler) == 'T' ? 'checked' : '' }}><label>T</label>
                        <input class="form-check-input" name="frequency_medication_inhaler" type="radio" id="frequency_medication_inhaler" value="B" {{ old('frequency_medication_inhaler', optional($medication)->frequency_medication_inhaler) == 'B' ? 'checked' : '' }}><label>B</label>
                     </td>
                  </tr>
                  <tr>
                     <th>Where to apply medication<br /> <small> (Include the location,
                        Where to apply eyedrops, patches, prescribed cream)
                        </small>
                     </th>
                     <td colspan="4" class="position-2">
                        <img src="https://uk.advancegroup.co.in/public/assets/images/123.png" />
                        <div>
                           <input class="Position-37" name="position_37" type="radio"
                              id="topics_communication_avoid" {{ old('position_37', optional($medication)->position_37) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-38" name="position_38" type="radio"
                              id="topics_communication_avoid" {{ old('position_38', optional($medication)->position_38) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-39" name="position_39" type="radio"
                              id="topics_communication_avoid" {{ old('position_39', optional($medication)->position_39) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-40" name="position_40" type="radio"
                              id="topics_communication_avoid" {{ old('position_40', optional($medication)->position_40) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-41" name="position_41" type="radio"
                              id="topics_communication_avoid" {{ old('position_41', optional($medication)->position_41) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-42" name="position_42" type="radio"
                              id="topics_communication_avoid" {{ old('position_42', optional($medication)->position_42) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-43" name="position_43" type="radio"
                              id="topics_communication_avoid" {{ old('position_43', optional($medication)->position_43) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-44" name="position_44" type="radio"
                              id="topics_communication_avoid" {{ old('position_44', optional($medication)->position_44) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-45" name="position_45" type="radio"
                              id="topics_communication_avoid" {{ old('position_45', optional($medication)->position_45) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-46" name="position_46" type="radio"
                              id="topics_communication_avoid" {{ old('position_46', optional($medication)->position_46) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-47" name="position_47" type="radio"
                              id="topics_communication_avoid" {{ old('position_47', optional($medication)->position_47) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-48" name="position_48" type="radio"
                              id="topics_communication_avoid" {{ old('position_48', optional($medication)->position_48) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-49" name="position_49" type="radio"
                              id="topics_communication_avoid" {{ old('position_49', optional($medication)->position_49) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-50" name="position_50" type="radio"
                              id="topics_communication_avoid" {{ old('position_50', optional($medication)->position_50) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-51" name="position_51" type="radio"
                              id="topics_communication_avoid" {{ old('position_51', optional($medication)->position_51) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-52" name="position_52" type="radio"
                              id="topics_communication_avoid" {{ old('position_52', optional($medication)->position_52) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-53" name="position_53" type="radio"
                              id="topics_communication_avoid" {{ old('position_53', optional($medication)->position_53) == 'on' ? 'checked' : '' }}>
                        </div>
                        <div>
                           <input class="Position-54" name="position_54" type="radio"
                              id="topics_communication_avoid" {{ old('position_54', optional($medication)->position_54) == 'on' ? 'checked' : '' }}>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <th>My Medication Kept<br /> <small> (in and where)</small></th>
                     <td><input class="form-check-input" name="medication_kept" type="radio" id="medication_kept" value="Bedroom" {{ old('medication_kept', optional($medication)->medication_kept) == 'Bedroom' ? 'checked' : '' }}><label>Bedroom</label> </td>
                     <td> <input class="form-check-input" name="medication_kept" type="radio" id="medication_kept" value="Living Room" {{ old('medication_kept', optional($medication)->medication_kept) == 'Living Room' ? 'checked' : '' }}><label>Living Room</label> </td>
                     <td> <input class="form-check-input" name="medication_kept" type="radio" id="medication_kept" value="Kitchen" {{ old('medication_kept', optional($medication)->medication_kept) == 'Kitchen' ? 'checked' : '' }}><label>Kitchen</label> </td>
                     <td><label>Other : </label><input type="text" class="form-control" name="medication_kept_other_text" value="{{$medication->medication_kept_other_text ?? ''}}"/></td>
                  </tr>
                  <tr>
                     <th>Support to order the medication<br /> <small> (contact number)</small></th>
                     <td> <input class="form-check-input" name="support_medication" type="radio" id="support_medication" value="Family Pickup" {{ old('support_medication', optional($medication)->support_medication) == 'Family Pickup' ? 'checked' : '' }}> <label>Family Pickup</label> </td>
                     <td> <input class="form-check-input" name="support_medication" type="radio" id="support_medication" value="Family Care" {{ old('support_medication', optional($medication)->support_medication) == 'Family Care' ? 'checked' : '' }}><label>Family Care</label> </td>
                     <td> <input class="form-check-input" name="support_medication" type="radio" id="support_medication" value="Service User" {{ old('support_medication', optional($medication)->support_medication) == 'Service User' ? 'checked' : '' }}><label>Service User</label> </td>
                     <td><label>Other : </label><input type="text" class="form-control" name="support_medication_other_text" value="{{$medication->support_medication_other_text ?? ''}}"/></td>
                  </tr>
                  <tr>
                     <th>Deliver the Medication By,<br /> <small> (contact number)</small></th>
                     <td> <input class="form-check-input" name="deliver_medication" type="radio" id="deliver_medication" value="Family / Friend / NOK" {{ old('deliver_medication', optional($medication)->deliver_medication) == 'Family / Friend / NOK' ? 'checked' : '' }}> <label>Family / Friend / NOK</label> </td>
                     <td> <input class="form-check-input" name="deliver_medication" type="radio" id="deliver_medication" value="NDH Care" {{ old('deliver_medication', optional($medication)->deliver_medication) == 'NDH Care' ? 'checked' : '' }}><label>NDH Care</label> </td>
                     <td> <input class="form-check-input" name="deliver_medication" type="radio" id="deliver_medication" value="Service User" {{ old('deliver_medication', optional($medication)->deliver_medication) == 'Service User' ? 'checked' : '' }}><label>Service User</label> </td>
                     <td> <input class="form-check-input" name="deliver_medication" type="radio" id="deliver_medication" value="Pharmacy Deliver" {{ old('deliver_medication', optional($medication)->deliver_medication) == 'Pharmacy Deliver' ? 'checked' : '' }}><label>Pharmacy Deliver</label>
                        <br /><label>Other : </label><input type="text" class="form-control" name="deliver_medication_other_text" value="{{$medication->deliver_medication_other_text ?? ''}}"/>
                     </td>
                  </tr>
                  <tr>
                     <th>Frequency of Medication Delivery</th>
                     <td> <input class="form-check-input" name="frequency_medication_delivery" type="radio" id="frequency_medication_delivery" value="1 Week" {{ old('frequency_medication_delivery', optional($medication)->frequency_medication_delivery) == '1 Week' ? 'checked' : '' }}> <label>1 Week</label> </td>
                     <td> <input class="form-check-input" name="frequency_medication_delivery" type="radio" id="frequency_medication_delivery" value="4 Week" {{ old('frequency_medication_delivery', optional($medication)->frequency_medication_delivery) == '4 Week' ? 'checked' : '' }}><label>4 Week</label> </td>
                     <td colspan="2"> <label>Other : </label><input type="text" class="form-control" name="frequency_medication_delivery_other_text" value="{{$medication->frequency_medication_delivery_other_text ?? ''}}"/></td>
                  </tr>
               </table>
               <br />
               <p>I need have the PRN (pro-re-nata) medication, which is in the original box and I need support from, </p>
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Support Required from</th>
                     <td> <input class="form-check-input" name="support_required_from" type="radio" id="support_required_from" value="Family" {{ old('support_required_from', optional($medication)->support_required_from) == 'Family' ? 'checked' : '' }}>
                          <label>Family</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="support_required_from" type="radio" id="support_required_from" value="NDH Care Staff" {{ old('support_required_from', optional($medication)->support_required_from) == 'NDH Care Staff' ? 'checked' : '' }}>
                          <label>NDH Care Staff</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="support_required_from" type="radio" id="support_required_from" value="Independent" {{ old('support_required_from', optional($medication)->support_required_from) == 'Independent' ? 'checked' : '' }}>
                          <label>Independent</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="support_required_from" type="radio" id="support_required_from" value="DN" {{ old('support_required_from', optional($medication)->support_required_from) == 'DN' ? 'checked' : '' }}>
                          <label>DN</label>
                     </td>
                     <td>
                        <label>Other : </label><input type="text" class="form-control" name="support_required_from_other_text" value="{{$medication->support_required_from_other_text ?? ''}}"/>
                     </td>
                  </tr>
               </table>
               <br />
               <table class=" w-100 d-block d-md-table" style="overflow-x:auto;">
                  <tr>
                     <th>Name of Medication</th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
                  <tr>
                     <th>Dose of Medication</th>
                     <td>
                        <input class="form-check-input" name="dose_medication_1" type="radio" id="dose_medication_1" value="1 Tablet" {{ old('dose_medication_1', optional($medication)->dose_medication_1) == '1 Tablet' ? 'checked' : '' }}><label>1 Tablet</label>
                        <br />
                        <input class="form-check-input" name="dose_medication_1" type="radio" id="dose_medication_1" value="2 Tablet" {{ old('dose_medication_1', optional($medication)->dose_medication_1) == '2 Tablet' ? 'checked' : '' }}><label>2 Tablet</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="dose_medication_2" type="radio" id="dose_medication_2" value="1 Tablet" {{ old('dose_medication_2', optional($medication)->dose_medication_2) == '1 Tablet' ? 'checked' : '' }}><label>1 Tablet</label>
                        <br />
                        <input class="form-check-input" name="dose_medication_2" type="radio" id="dose_medication_2" value="2 Tablet" {{ old('dose_medication_2', optional($medication)->dose_medication_2) == '2 Tablet' ? 'checked' : '' }}><label>2 Tablet</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="dose_medication_3" type="radio" id="dose_medication_3" value="1 Tablet" {{ old('dose_medication_3', optional($medication)->dose_medication_3) == '1 Tablet' ? 'checked' : '' }}><label>1 Tablet</label>
                        <br />
                        <input class="form-check-input" name="dose_medication_3" type="radio" id="dose_medication_3" value="2 Tablet" {{ old('dose_medication_3', optional($medication)->dose_medication_3) == '2 Tablet' ? 'checked' : '' }}><label>2 Tablet</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="dose_medication_4" type="radio" id="dose_medication_4" value="1 Tablet" {{ old('dose_medication_4', optional($medication)->dose_medication_1) == '1 Tablet' ? 'checked' : '' }}><label>1 Tablet</label>
                        <br />
                        <input class="form-check-input" name="dose_medication_4" type="radio" id="dose_medication_4" value="2 Tablet" {{ old('dose_medication_4', optional($medication)->dose_medication_1) == '2 Tablet' ? 'checked' : '' }}><label>2 Tablet</label>
                     </td>
                  </tr>
                  <tr>
                     <th>Minimum Interval</th>
                     <td>
                        <input class="form-check-input" name="minimum_1" type="radio" id="minimum_1" value="4 Hours" {{ old('minimum_1', optional($medication)->minimum_1) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                     <td>
                        <input class="form-check-input" name="minimum_2" type="radio" id="minimum_2" value="4 Hours" {{ old('minimum_2', optional($medication)->minimum_2) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                     <td>
                        <input class="form-check-input" name="minimum_3" type="radio" id="minimum_3" value="4 Hours" {{ old('minimum_3', optional($medication)->minimum_3) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                     <td>
                        <input class="form-check-input" name="minimum_4" type="radio" id="minimum_4" value="4 Hours" {{ old('minimum_4', optional($medication)->minimum_4) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                  </tr>
                  <tr>
                     <th>Why this medication needed <br/><small> (specify the reason – ex: pain in right leg) </small></th>
                     <td> <input type="text" class="form-control" name="why_medication_needed_1" value="{{$medication->why_medication_needed_1 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="why_medication_needed_2" value="{{$medication->why_medication_needed_2 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="why_medication_needed_3" value="{{$medication->why_medication_needed_3 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="why_medication_needed_4" value="{{$medication->why_medication_needed_4 ?? ''}}"> </td>
                  </tr>
                  <tr>
                     <th>Minimum Interval</th>
                     <td>
                        <input class="form-check-input" name="why_medication_needed_minimum_1" type="radio" id="why_medication_needed_minimum_1" value="4 Hours" {{ old('why_medication_needed_minimum_1', optional($medication)->why_medication_needed_minimum_1) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                     <td>
                        <input class="form-check-input" name="why_medication_needed_minimum_2" type="radio" id="why_medication_needed_minimum_2" value="4 Hours" {{ old('why_medication_needed_minimum_2', optional($medication)->why_medication_needed_minimum_2) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                     <td>
                        <input class="form-check-input" name="why_medication_needed_minimum_3" type="radio" id="why_medication_needed_minimum_3" value="4 Hours" {{ old('why_medication_needed_minimum_3', optional($medication)->why_medication_needed_minimum_3) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                     <td>
                        <input class="form-check-input" name="why_medication_needed_minimum_4" type="radio" id="why_medication_needed_minimum_4" value="4 Hours" {{ old('why_medication_needed_minimum_4', optional($medication)->why_medication_needed_minimum_4) == '4 Hours' ? 'checked' : '' }}><label>4 Hours / </label>
                        <br />
                     </td>
                  </tr>
                  <tr>
                     <th>Why this medication needed<br/><small> (specify the reason – ex: pain in right leg) </small></th>
                     <td> <input type="text" class="form-control" name="why_medication_second_1" value="{{$medication->why_medication_second_1 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="why_medication_second_2" value="{{$medication->why_medication_second_2 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="why_medication_second_3" value="{{$medication->why_medication_second_3 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="why_medication_second_4" value="{{$medication->why_medication_second_4 ?? ''}}"> </td>
                  </tr>
                  <tr>
                     <th>In which circumstances should this medicine be given?<br/><small> (any specific symptoms – please specify) </small></th>
                     <td> <input type="text" class="form-control" name="circumstances_medication_1" value="{{$medication->circumstances_medication_1 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="circumstances_medication_2" value="{{$medication->circumstances_medication_2 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="circumstances_medication_3" value="{{$medication->circumstances_medication_3 ?? ''}}"> </td>
                     <td> <input type="text" class="form-control" name="circumstances_medication_4" value="{{$medication->circumstances_medication_4 ?? ''}}"> </td>
                  </tr>
                  <tr >
                     <th rowspan="6">When to liaise with GP?</th>
                     <td> <input class="form-check-input" name="liaise_gp_persistent_1" type="radio" id="liaise_gp_persistent_1" value="Persistent need for upper dosage" {{ old('liaise_gp_persistent_1', optional($medication)->liaise_gp_persistent_1) == 'Persistent need for upper dosage' ? 'checked' : '' }}> <label>Persistent need for upper dosage</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_persistent_2" type="radio" id="liaise_gp_persistent_2" value="Persistent need for upper dosage" {{ old('liaise_gp_persistent_2', optional($medication)->liaise_gp_persistent_2) == 'Persistent need for upper dosage' ? 'checked' : '' }}> <label>Persistent need for upper dosage</label></td2>
                     <td> <input class="form-check-input" name="liaise_gp_persistent_3" type="radio" id="liaise_gp_persistent_3" value="Persistent need for upper dosage" {{ old('liaise_gp_persistent_3', optional($medication)->liaise_gp_persistent_3) == 'Persistent need for upper dosage' ? 'checked' : '' }}> <label>Persistent need for upper dosage</label></td2>
                     <td><input class="form-check-input" name="liaise_gp_persistent_4" type="radio" id="liaise_gp_persistent_4" value="Persistent need for upper dosage" {{ old('liaise_gp_persistent_4', optional($medication)->liaise_gp_persistent_4) == 'Persistent need for upper dosage' ? 'checked' : '' }}> <label>Persistent need for upper dosage</label></td>
                  </tr>
                  <tr>
                     <td> <input class="form-check-input" name="liaise_gp_no_desired_1" type="radio" id="liaise_gp_no_desired_1" value="No desired outcome" {{ old('liaise_gp_no_desired_1', optional($medication)->liaise_gp_no_desired_1) == 'No desired outcome' ? 'checked' : '' }}><label>No desired outcome</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_no_desired_2" type="radio" id="liaise_gp_no_desired_2" value="No desired outcome" {{ old('liaise_gp_no_desired_2', optional($medication)->liaise_gp_no_desired_2) == 'No desired outcome' ? 'checked' : '' }}> <label>No desired outcome</label></td>
                     <td><input class="form-check-input" name="liaise_gp_no_desired_3" type="radio" id="liaise_gp_no_desired_3" value="No desired outcome" {{ old('liaise_gp_no_desired_3', optional($medication)->liaise_gp_no_desired_3) == 'No desired outcome' ? 'checked' : '' }}><label>No desired outcome</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_no_desired_4" type="radio" id="liaise_gp_no_desired_4" value="No desired outcome" {{ old('liaise_gp_no_desired_4', optional($medication)->liaise_gp_no_desired_4) == 'No desired outcome' ? 'checked' : '' }}><label>No desired outcome</label></td>
                  </tr>
                  <tr>
                     <td><input class="form-check-input" name="liaise_gp_requests_dosage_1" type="radio" id="liaise_gp_requests_dosage_1" value="Never requests dosage" {{ old('liaise_gp_requests_dosage_1', optional($medication)->liaise_gp_requests_dosage_1) == 'Never requests dosage' ? 'checked' : '' }}><label>Never requests dosage</label></td>
                     <td><input class="form-check-input" name="liaise_gp_requests_dosage_2" type="radio" id="liaise_gp_requests_dosage_2" value="Never requests dosage" {{ old('liaise_gp_requests_dosage_2', optional($medication)->liaise_gp_requests_dosage_2) == 'Never requests dosage' ? 'checked' : '' }}><label>Never requests dosage</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_requests_dosage_3" type="radio" id="liaise_gp_requests_dosage_3" value="Never requests dosage" {{ old('liaise_gp_requests_dosage_3', optional($medication)->liaise_gp_requests_dosage_3) == 'Never requests dosage' ? 'checked' : '' }}> <label>Never requests dosage</label></td>
                     <td><input class="form-check-input" name="liaise_gp_requests_dosage_4" type="radio" id="liaise_gp_requests_dosage_4" value="Never requests dosage" {{ old('liaise_gp_requests_dosage_4', optional($medication)->liaise_gp_requests_dosage_4) == 'Never requests dosage' ? 'checked' : '' }}> <label>Never requests dosage</label></td>
                  </tr>
                  <tr>
                     <td> <input class="form-check-input" name="liaise_gp_requests_too_1" type="radio" id="liaise_gp_requests_too_1" value="Requesting too often" {{ old('liaise_gp_requests_too_1', optional($medication)->liaise_gp_requests_too_1) == 'Requesting too often' ? 'checked' : '' }}><label>Requesting too often</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_requests_too_2" type="radio" id="liaise_gp_requests_too_2" value="Requesting too often" {{ old('liaise_gp_requests_too_2', optional($medication)->liaise_gp_requests_too_2) == 'Requesting too often' ? 'checked' : '' }}> <label>Requesting too often</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_requests_too_3" type="radio" id="liaise_gp_requests_too_3" value="Requesting too often" {{ old('liaise_gp_requests_too_3', optional($medication)->liaise_gp_requests_too_3) == 'Requesting too often' ? 'checked' : '' }}> <label>Requesting too often</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_requests_too_4" type="radio" id="liaise_gp_requests_too_4" value="Requesting too often" {{ old('liaise_gp_requests_too_4', optional($medication)->liaise_gp_requests_too_4) == 'Requesting too often' ? 'checked' : '' }}> <label>Requesting too often</label></td>
                  </tr>
                  <tr>
                     <td> <input class="form-check-input" name="liaise_gp_side_effects_1" type="radio" id="liaise_gp_side_effects_1" value="Side effects / Adverse reaction" {{ old('liaise_gp_side_effects_1', optional($medication)->liaise_gp_side_effects_1) == 'Side effects / Adverse reaction' ? 'checked' : '' }}> <label>Side effects / Adverse reaction</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_side_effects_2" type="radio" id="liaise_gp_side_effects_2" value="Side effects / Adverse reaction" {{ old('liaise_gp_side_effects_2', optional($medication)->liaise_gp_side_effects_2) == 'Side effects / Adverse reaction' ? 'checked' : '' }}> <label>Side effects / Adverse reaction</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_side_effects_3" type="radio" id="liaise_gp_side_effects_3" value="Side effects / Adverse reaction" {{ old('liaise_gp_side_effects_3', optional($medication)->liaise_gp_side_effects_3) == 'Side effects / Adverse reaction' ? 'checked' : '' }}><label>Side effects / Adverse reaction</label></td>
                     <td> <input class="form-check-input" name="liaise_gp_side_effects_4" type="radio" id="liaise_gp_side_effects_4" value="Side effects / Adverse reaction" {{ old('liaise_gp_side_effects_4', optional($medication)->liaise_gp_side_effects_4) == 'Side effects / Adverse reaction' ? 'checked' : '' }}> <label>Side effects / Adverse reaction</label></td>
                  </tr>
                  <tr>
                     <td> <label>Other : </label> <input type="text" class="form-control" name="liaise_gp_other_1" value="{{$medication->liaise_gp_other_1 ?? ''}}"/> </td>
                     <td> <label>Other : </label> <input type="text" class="form-control" name="liaise_gp_other_2" value="{{$medication->liaise_gp_other_2 ?? ''}}"/> </td>
                     <td> <label>Other : </label> <input type="text" class="form-control" name="liaise_gp_other_3" value="{{$medication->liaise_gp_other_3 ?? ''}}"/> </td>
                     <td> <label>Other : </label> <input type="text" class="form-control" name="liaise_gp_other_4" value="{{$medication->liaise_gp_other_4 ?? ''}}"/> </td>
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
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<script>
   $(document).ready(function() {
      $('input[name="take_my_medication"][value="Other"]').on('click', function() {
         $('.take_my_medication_other').show();
      });
      $('input[name="take_my_medication"]').not('[value="Other"]').on('click', function() {
         $('.take_my_medication_other').hide();
      });
   });
</script>
@endsection