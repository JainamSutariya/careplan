@extends('layouts.master')
@section('title') Continence Care @endsection
@section('content')
@php
use App\Helpers\CheckboxHelper;
@endphp
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Continence Care @endslot
@endcomponent
@section('css')
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}" />
<style>
   .border-table tr,
   th,
   td {
      border: 1px solid #e1e1e1 !important;
      padding: 10px;
   }
   input[type="checkbox"] {
      margin-left: 0px;
      margin-right: -3px;
   }
   input[type="text"] {
      border: 1;
   }
   input#topics_communication_avoid {
      margin-left: 10px;
      margin-right: 6px;
   }
   input[type='checkbox'] {
      text-align: center;
      margin-top: 10px;
   }
</style>
@endsection
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="post" id="createPatientForm" action="{{route('storeContinenceCare', $patient->id)}}">
               @csrf
               <h5>What care and support needs do I currently have?</h5>
               <p>I would like to maintain my hygiene by,</p>
               <table class="w-100 d-block d-md-table" style="overflow-x: auto;">
                  <tr>
                     <td>
                        <input class="form-check-input" name="using_toilet" type="checkbox" style="margin-top: 2px;" id="using_toilet" {{ old('using_toilet', optional($continenceCare)->using_toilet) == 'on' ? 'checked' : '' }}/>
                        <label>Using the Toilet</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="using_the_commode" type="checkbox" style="margin-top: 2px;" id="using_the_commode" {{ old('using_the_commode', optional($continenceCare)->using_the_commode) == 'on' ? 'checked' : '' }}/>
                        <label>Using the Commode</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="changing_incontinence" type="checkbox" style="margin-top: 2px;" id="changing_incontinence" {{ old('changing_incontinence', optional($continenceCare)->changing_incontinence) == 'on' ? 'checked' : '' }}/>
                        <label>Changing the Incontinence Pads </label>
                     </td>
                  </tr>
               </table>
               <br />
               <h5>Strength</h5>
               <table class="w-100 d-block d-md-table" style="overflow-x: auto;">
                  <tr>
                     <th>Upper Body Strength</th>
                     <td>
                        <input class="form-check-input" name="hold_the_bed_rails" type="checkbox" style="margin-top: 2px;" id="hold_the_bed_rails" {{ old('hold_the_bed_rails', optional($continenceCare)->hold_the_bed_rails) == 'on' ? 'checked' : '' }}/>
                        <label>Hold the Bed Rails </label>
                     </td>
                     <td>
                        <input class="form-check-input" name="stand_up_from_the_bed" type="checkbox" style="margin-top: 2px;" id="stand_up_from_the_bed" {{ old('stand_up_from_the_bed', optional($continenceCare)->stand_up_from_the_bed) == 'on' ? 'checked' : '' }}/>
                        <label>Stand up from the Bed / Chair </label>
                     </td>
                  </tr>
                  <tr>
                     <th rowspan="2">Lower Body Strength</th>
                     <td>
                        <input class="form-check-input" name="lift_both_legs" type="checkbox" style="margin-top: 2px;" id="lift_both_legs" {{ old('lift_both_legs', optional($continenceCare)->lift_both_legs) == 'on' ? 'checked' : '' }}/>
                        <label>Lift Both Legs Step by Step </label>
                     </td>
                     <td>
                        <input class="form-check-input" name="go_to_bathroom" type="checkbox" style="margin-top: 2px;" id="go_to_bathroom" {{ old('go_to_bathroom', optional($continenceCare)->go_to_bathroom) == 'on' ? 'checked' : '' }}/>
                        <label>Go to the Bathroom </label>
                        <br />
                        <input class="form-check-input" name="use_the_commode" type="checkbox" style="margin-top: 2px;" id="use_the_commode" {{ old('use_the_commode', optional($continenceCare)->use_the_commode) == 'on' ? 'checked' : '' }}/>
                        <label>Use the Commode</label>
                     </td>
                  </tr>
               </table>
               <br />
               <h5>What are my desired outcomes?</h5>
               <table class="w-100 d-block d-md-table border-table-2" style="overflow-x: auto;">
                  <tr>
                     <td><input type="checkbox" name="maintain_health_condition" {{ old('maintain_health_condition', optional($continenceCare)->maintain_health_condition) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>I desire to maintain my health conditions</label></td>
                     <td><input type="checkbox" name="skin_remain_health" {{ old('skin_remain_health', optional($continenceCare)->skin_remain_health) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>For my skin to remain healthy and not to get any sore</label></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="maximize_independence" {{ old('maximize_independence', optional($continenceCare)->maximize_independence) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>To maximize my independence</label></td>
                     <td><input type="checkbox" name="desire_not_have_fall" {{ old('desire_not_have_fall', optional($continenceCare)->desire_not_have_fall) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>I desire not to have a fall</label></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="maintain_dignity_privacy" {{ old('maintain_dignity_privacy', optional($continenceCare)->maintain_dignity_privacy) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>To maintain my dignity and privacy.</label></td>
                     <td><input type="checkbox" name="desire_avoid_unnecessary" {{ old('desire_avoid_unnecessary', optional($continenceCare)->desire_avoid_unnecessary) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>I desire to avoid unnecessary dentist appointment. </label></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="clean_smart_looking" {{ old('clean_smart_looking', optional($continenceCare)->clean_smart_looking) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>I desire to be a clean and smart as I always prefer to be smart looking.</label></td>
                     <td><input type="checkbox" name="maintain_healthey_lifestyle" {{ old('maintain_healthey_lifestyle', optional($continenceCare)->maintain_healthey_lifestyle) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>To maintain my healthey lifestyle. </label></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="unnecessary_hospital_admission" {{ old('unnecessary_hospital_admission', optional($continenceCare)->unnecessary_hospital_admission) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>To avoid unnecessary hospital admission.</label></td>
                     <td><input type="checkbox" name="maintain_good_relationship" {{ old('maintain_good_relationship', optional($continenceCare)->maintain_good_relationship) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>I prefer to maintain a good relationship with my family</label></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="improve_quality_life" {{ old('improve_quality_life', optional($continenceCare)->improve_quality_life) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>To improve my quality of life</label></td>
                     <td><input type="checkbox" name="malnutrition_dehydration" {{ old('malnutrition_dehydration', optional($continenceCare)->malnutrition_dehydration) == 'on' ? 'checked' : '' }}/></td>
                     <td><label>To prevent malnutrition and dehydration</label></td>
                  </tr>
               </table>
               <br />
               @php
                    $text1 = '';
                    $text2 = '';
                    $text3 = '';
                    $text4 = '';
                    $otherOutcomesText = $continenceCare->other_outcomes_text ?? null;
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
               <p>Other Outcome (if they have any) :</p>
               <table class="w-100 d-block d-md-table border-table-2" style="overflow-x: auto;">
                  <tr>
                     <td><input type="checkbox" name="other_outcomes_check_1" {{ old('other_outcomes_check_1', optional($continenceCare)->other_outcomes_check_1) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text1}}"/></td>
                     <td><input type="checkbox" name="other_outcomes_check_2" {{ old('other_outcomes_check_2', optional($continenceCare)->other_outcomes_check_2) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text2}}"/></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" name="other_outcomes_check_3" {{ old('other_outcomes_check_3', optional($continenceCare)->other_outcomes_check_3) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text3}}"/></td>
                     <td><input type="checkbox" name="other_outcomes_check_4" {{ old('other_outcomes_check_4', optional($continenceCare)->other_outcomes_check_4) == 'on' ? 'checked' : '' }}/></td>
                     <td><input type="text" class="form-control" name="other_outcomes_text[]" value="{{$text4}}"/></td>
                  </tr>
               </table>
               <br />
               <h5>How do I want staff to support me to achieve my desired outcomes?</h5>
               <p>I prefer to get the consent before care (refer communication section for more details).</p>
               <p>I prefer the care staff to maintain my privacy and dignity (refer privacy and dignity section for more detail) I would like to have support from,</p>
               <table class="w-100 d-block d-md-table border-table-2" style="overflow-x: auto;">
                  <tr>
                     <td>
                        <input class="form-check-input" name="desired_outcomes" type="radio" id="desired_outcomes" value="1 Carer" {{ old('desired_outcomes', optional($continenceCare)->desired_outcomes) == '1 Carer' ? 'checked' : '' }}/>
                        <label>1 Carer</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="desired_outcomes" type="radio" id="desired_outcomes" value="2 Carer" {{ old('desired_outcomes', optional($continenceCare)->desired_outcomes) == '2 Carer' ? 'checked' : '' }}/>
                        <label>2 Carer</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="desired_outcomes" type="radio" id="desired_outcomes" value="Independent" {{ old('desired_outcomes', optional($continenceCare)->desired_outcomes) == 'Independent' ? 'checked' : '' }}/>
                        <label>Independent </label>
                     </td>
                     <td>
                        <input class="form-check-input" name="desired_outcomes" type="radio" id="desired_outcomes" value="Supervision Only" {{ old('desired_outcomes', optional($continenceCare)->desired_outcomes) == 'Supervision Only' ? 'checked' : '' }}/>
                        <label>Supervision Only </label>
                     </td>
                     <td>
                        <input class="form-check-input" name="desired_outcomes" type="radio" id="desired_outcomes" value="Other" {{ old('desired_outcomes', optional($continenceCare)->desired_outcomes) == 'Other' ? 'checked' : '' }}/>
                        <label>Other</label>
                        <input type="text" class="form-control" name="desired_outcomes_other_text" value="{{$continenceCare->desired_outcomes_other_text ?? ''}}"/>
                     </td>
                  </tr>
               </table>
               <br />
               <p>I would like to have support with</p>
               <table class="w-100 d-block d-md-table border-table-2" style="overflow-x: auto;">
                  <tr>
                     <th>Change / Use</th>
                     <th>Location</th>
                     <th>Morning</th>
                     <th>Lunch</th>
                     <th>Tea</th>
                     <th>Bed</th>
                  </tr>
                  <tr>
                     <th>Incontinence Pad</th>
                     <td>
                        <label>Location of Incontinence pad / wet wipes : </label>
                        <input type="text" class="form-control" name="location_incontinence_pad" value="{{$continenceCare->location_incontinence_pad ?? ''}}"/>
                     </td>
                     <td>
                        <input class="form-check-input" name="check_soiled_morning" type="checkbox" style="margin-top: 2px;" id="check_soiled_morning" {{ old('check_soiled_morning', optional($continenceCare)->check_soiled_morning) == 'on' ? 'checked' : '' }}/>
                        <label>Check – If it’s soiled – change it</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="check_soiled_lunch" type="checkbox" style="margin-top: 2px;" id="check_soiled_lunch" {{ old('check_soiled_lunch', optional($continenceCare)->check_soiled_lunch) == 'on' ? 'checked' : '' }}/>
                        <label>Check – If it’s soiled – change it</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="check_soiled_tea" type="checkbox" style="margin-top: 2px;" id="check_soiled_tea" {{ old('check_soiled_tea', optional($continenceCare)->check_soiled_tea) == 'on' ? 'checked' : '' }}/>
                        <label>Check – If it’s soiled – change it</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="check_soiled_bed" type="checkbox" style="margin-top: 2px;" id="check_soiled_bed" {{ old('check_soiled_bed', optional($continenceCare)->check_soiled_bed) == 'on' ? 'checked' : '' }}/>
                        <label>Check – If it’s soiled – change it</label>
                     </td>
                  </tr>
                  <tr>
                     <th>Commode</th>
                     <td>
                        <label>Where the Commode Kept : </label>
                        <input type="text" class="form-control" name="commode_text" value="{{$continenceCare->commode_text ?? ''}}"/>
                     </td>
                     <td>
                        <input class="form-check-input" name="commode_morning" type="checkbox" style="margin-top: 2px;" id="commode_morning" {{ old('commode_morning', optional($continenceCare)->commode_morning) == 'on' ? 'checked' : '' }}/>
                        <label>Support to use it – empty in toilet and wash it hygienically</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="commode_lunch" type="checkbox" style="margin-top: 2px;" id="commode_lunch" {{ old('commode_lunch', optional($continenceCare)->commode_lunch) == 'on' ? 'checked' : '' }}/>
                        <label>Support to use it – empty in toilet and wash it hygienically</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="commode_tea" type="checkbox" style="margin-top: 2px;" id="commode_tea" {{ old('commode_tea', optional($continenceCare)->commode_tea) == 'on' ? 'checked' : '' }}/>
                        <label>Support to use it – empty in toilet and wash it hygienically</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="commode_bed" type="checkbox" style="margin-top: 2px;" id="commode_bed" {{ old('commode_bed', optional($continenceCare)->commode_bed) == 'on' ? 'checked' : '' }}/>
                        <label>Support to use it – empty in toilet and wash it hygienically</label>
                     </td>
                  </tr>
                  <tr>
                     <th>Toilet</th>
                     <td>
                        <label>Location of Toilet : </label><br />
                        <input class="form-check-input" name="toilet_location_upstairs" type="radio" id="toilet_location_upstairs" {{ old('toilet_location_upstairs', optional($continenceCare)->toilet_location_upstairs) == 'on' ? 'checked' : '' }}/>
                        <label>Upstairs</label><br />
                        <input class="form-check-input" name="toilet_location_downstairs" type="radio" id="toilet_location_downstairs" {{ old('toilet_location_downstairs', optional($continenceCare)->toilet_location_downstairs) == 'on' ? 'checked' : '' }}>
                        <label>Downstairs</label><br />
                        <input class="form-check-input" name="toilet_location_same_floor" type="radio" id="toilet_location_same_floor" {{ old('toilet_location_same_floor', optional($continenceCare)->toilet_location_same_floor) == 'on' ? 'checked' : '' }}/>
                        <label>On the Same Floor</label>
                     </td>
                     <td><input type="text" class="form-control" name="toilet_morning" value="{{$continenceCare->toilet_morning ?? ''}}"/></td>
                     <td><input type="text" class="form-control" name="toilet_lunch" value="{{$continenceCare->toilet_lunch ?? ''}}"/></td>
                     <td><input type="text" class="form-control" name="toilet_tea" value="{{$continenceCare->toilet_tea ?? ''}}"/></td>
                     <td><input type="text" class="form-control" name="toilet_bed" value="{{$continenceCare->toilet_bed ?? ''}}"/></td>
                  </tr>
                  <tr>
                     <th>Catheter</th>
                     <td>
                        <label>Leg Bag / Night Bag </label><br />
                        <label>Where it kept : </label>
                        <input type="text" class="form-control" name="leg_bag_text" value="{{$continenceCare->leg_bag_text ?? ''}}"/><br />
                        <p><b>Frequency to change Leg Bag :</b></p>
                        <input type="text" class="form-control" name="frequency_change_text" value="{{$continenceCare->frequency_change_text ?? ''}}"/><br />
                        <label>Every Day / </label><input type="text" class="form-control" name="every_day_text" value="{{$continenceCare->every_day_text ?? ''}}"/><br />
                        <p>Seven Days or Earlier if Change in Colour</p>
                     </td>
                     <td>
                        <input class="form-check-input" name="remove_night_beg" type="radio" id="remove_night_beg" {{ old('remove_night_beg', optional($continenceCare)->remove_night_beg) == 'on' ? 'checked' : '' }}/>
                        <label>Remove Night Bag – Leg Bag Empty it</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="empty_leg_bag_lunch" type="radio" id="empty_leg_bag_lunch" {{ old('empty_leg_bag_lunch', optional($continenceCare)->empty_leg_bag_lunch) == 'on' ? 'checked' : '' }}/>
                        <label>Empty Leg Bag</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="empty_leg_bag_tea" type="radio" id="empty_leg_bag_tea" {{ old('empty_leg_bag_tea', optional($continenceCare)->empty_leg_bag_tea) == 'on' ? 'checked' : '' }}/>
                        <label>Empty Leg Bag</label>
                     </td>
                     <td>
                        <input class="form-check-input" name="empty_leg_bag_bed" type="radio" id="empty_leg_bag_bed" {{ old('empty_leg_bag_bed', optional($continenceCare)->empty_leg_bag_bed) == 'on' ? 'checked' : '' }}/>
                        <label>Empty Leg Bag – Attach Night Bag</label>
                     </td>
                  </tr>
               </table>
               <br />
               <p>If the Incontinence pads in place,</p>
               <table class="w-100 d-block d-md-table border-table-2" style="overflow-x: auto;">
                  <tr>
                     <th>Manage the ordering Incontinence Pads</th>
                     <th>Size of Incontinence Pads</th>
                     <th>Frequency of Incontinence Pads Delivery</th>
                  </tr>
                  <tr>
                     <th>Family / DN / Incontinence Team</th>
                     <td>
                        <input class="form-check-input" name="family_size" type="radio" id="family_size" value="S" {{ old('family_size', optional($continenceCare)->family_size) == 'S' ? 'checked' : '' }}/>
                        <label>S / </label>
                        <input class="form-check-input" name="family_size" type="radio" id="family_size" value="M" {{ old('family_size', optional($continenceCare)->family_size) == 'M' ? 'checked' : '' }}/>
                        <label>M / </label>
                        <input class="form-check-input" name="family_size" type="radio" id="family_size" value="L" {{ old('family_size', optional($continenceCare)->family_size) == 'L' ? 'checked' : '' }}/>
                        <label>L / </label>
                        <input class="form-check-input" name="family_size" type="radio" id="family_size" value="XL" {{ old('family_size', optional($continenceCare)->family_size) == 'XL' ? 'checked' : '' }}/>
                        <label>XL / </label>
                        <input class="form-check-input" name="family_size" type="radio" id="family_size" value="2XL" {{ old('family_size', optional($continenceCare)->family_size) == '2XL' ? 'checked' : '' }}/>
                        <label>2XL / </label>
                        <input class="form-check-input" name="family_size" type="radio" id="family_size" value="Other" {{ old('family_size', optional($continenceCare)->family_size) == 'Other' ? 'checked' : '' }}/>
                        <label>Other : </label>
                        <input type="text" class="form-control" name="family_size_other" value="{{$continenceCare->family_size_other ?? ''}}"/>
                     </td>
                     <td>
                        <input class="form-check-input" name="incontinence_pads" type="radio" id="incontinence_pads" value="1 Week" {{ old('incontinence_pads', optional($continenceCare)->incontinence_pads) == '1 Week' ? 'checked' : '' }}/>
                        <label>1 Week / </label>
                        <input class="form-check-input" name="incontinence_pads" type="radio" id="incontinence_pads" value="2 Week" {{ old('incontinence_pads', optional($continenceCare)->incontinence_pads) == '2 Week' ? 'checked' : '' }}/>
                        <label>2 Week / </label>
                        <input class="form-check-input" name="incontinence_pads" type="radio" id="incontinence_pads" value="4 Week" {{ old('incontinence_pads', optional($continenceCare)->incontinence_pads) == '4 Week' ? 'checked' : '' }}/>
                        <label>4 Week / </label>
                        <input class="form-check-input" name="incontinence_pads" type="radio" id="incontinence_pads" value="Other" {{ old('incontinence_pads', optional($continenceCare)->incontinence_pads) == 'Other' ? 'checked' : '' }}/>
                        <label>Other : </label>
                        <input type="text" class="form-control" name="incontinence_pads_other" value="{{$continenceCare->incontinence_pads_other ?? ''}}"/>
                     </td>
                  </tr>
                  <tr>
                     <th>
                        Location of Refuse Bag Kept :
                        <input type="text" class="form-control" name="refuse_bag" value="{{$continenceCare->refuse_bag ?? ''}}"/>
                     </th>
                     <th>
                        Dispose of the Incontinence Pads :
                        <input type="text" class="form-control" name="dispose_pads" value="{{$continenceCare->dispose_pads ?? ''}}"/>
                     </th>
                  </tr>
               </table>
               <br />
               <p>If the catheter in place</p>
               <table class="w-100 d-block d-md-table border-table-2" style="overflow-x: auto;">
                  <tr>
                     <th>Manage the ordering the catheter bags</th>
                     <td>
                        <input class="form-check-input" name="ordering_catheter_bags[]" type="checkbox" id="ordering_catheter_bags" style="margin-top: 2px;" value="Family" {{ CheckboxHelper::isChecked('Family', $checkedValues) ? 'checked' : '' }}/> <label>Family / </label>
                        <input class="form-check-input" name="ordering_catheter_bags[]" type="checkbox" id="ordering_catheter_bags" style="margin-top: 2px;" value="DN" {{ CheckboxHelper::isChecked('DN', $checkedValues) ? 'checked' : '' }}/> <label>DN / </label>
                        <input class="form-check-input" name="ordering_catheter_bags[]" type="checkbox" id="ordering_catheter_bags" style="margin-top: 2px;" value="Carer Support" {{ CheckboxHelper::isChecked('Carer Support', $checkedValues) ? 'checked' : '' }}/> <label>Carer Support / </label>
                        <input class="form-check-input" name="ordering_catheter_bags[]" type="checkbox" id="ordering_catheter_bags" style="margin-top: 2px;" value="Other" {{ CheckboxHelper::isChecked('Other', $checkedValues) ? 'checked' : '' }}/><label class="ms-2">Other : </label>
                        <input type="text" class="form-control" name="ordering_catheter_bags_other" value="{{$continenceCare->ordering_catheter_bags_other ?? ''}}"/>
                     </td>
                  </tr>
               </table>
               <br />
               <table class="w-100 d-block d-md-table border-table-2" style="overflow-x: auto;">
                  <tr>
                     <td><input type="checkbox" name="prefer_care_staff" {{ old('prefer_care_staff', optional($continenceCare)->prefer_care_staff) == 'on' ? 'checked' : '' }}/><label>&nbsp;&nbsp;I prefer the care staff to encourage me to reposition me as I can able to re-position independently. </label></td>
                  </tr>
                  <tr>
                     <td>
                        <input type="checkbox" name="prefer_care_monitor_check" {{ old('prefer_care_monitor_check', optional($continenceCare)->prefer_care_monitor_check) == 'on' ? 'checked' : '' }}/><label>&nbsp;&nbsp;I prefer the care staff to monitor my skin integrity and if any concern, I prefer to get the consent from me and report to the </label><br />
                        <input class="form-check-input" name="prefer_care_monitor" type="radio" id="prefer_care_monitor" value="Family" {{ old('prefer_care_monitor', optional($continenceCare)->prefer_care_monitor) == 'Family' ? 'checked' : '' }}/> <label>Family </label>
                        <input class="form-check-input" name="prefer_care_monitor" type="radio" id="prefer_care_monitor" value="To the Office" {{ old('prefer_care_monitor', optional($continenceCare)->prefer_care_monitor) == 'To the Office' ? 'checked' : '' }}/> <label>To the Office </label>
                        <input class="form-check-input" name="prefer_care_monitor" type="radio" id="prefer_care_monitor" value="District Nurse Team" {{ old('prefer_care_monitor', optional($continenceCare)->prefer_care_monitor) == 'District Nurse Team' ? 'checked' : '' }}/> <label>District Nurse Team </label>
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
@endsection @section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<script></script>
@endsection
