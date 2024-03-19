
@extends('layouts.master')
@section('title') Pressure Ulcer / Skin Marks / Bruising Record Tool @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Pressure Ulcer / Skin Marks / Bruising Record Tool
@endslot
@endcomponent
@section('css')
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
<style>
   #topics_communication_avoid {
   accent-color: red;
   }
   .position {
   position: relative;
   }
   .parrot {
   position: absolute;
   margin-left: 257px;
   margin-top: -399px;
   }
   .blue {
   position: absolute;
   margin-left: 300px;
   margin-top: -353px;
   }
   .blue-2 {
   position: absolute;
   margin-left: 320px;
   margin-top: -301px;
   }
   .sky-blue {
   position: absolute;
   margin-left: 255px;
   margin-top: -348px;
   }
   .sky-blue-2 {
   position: absolute;
   margin-left: 248px;
   margin-top: -328px;
   }
   .sky-blue-3 {
   position: absolute;
   margin-left: 253px;
   margin-top: -308px;
   }
   .sky-blue-4 {
   position: absolute;
   margin-left: 260px;
   margin-top: -290px;
   }
   .sky-blue-5 {
   position: absolute;
   margin-left: 320px;
   margin-top: -301px;
   }
   .sky-blue-6 {
   position: absolute;
   margin-left: 268px;
   margin-top: -273px;
   }
   .sky-blue-7 {
   position: absolute;
   margin-left: 268px;
   margin-top: -255px;
   }
   .purple {
   position: absolute;
   margin-left: 289px;
   margin-top: -260px;
   }
   .red {
   position: absolute;
   margin-left: 257px;
   margin-top: -238px;
   }
   .red-2 {
   position: absolute;
   margin-left: 254px;
   margin-top: -221px;
   }
   .red-3 {
   position: absolute;
   margin-left: 257px;
   margin-top: -206px;
   }
   .red-4 {
   position: absolute;
   margin-left: 268px;
   margin-top: -193px;
   }
   .green {
   position: absolute;
   margin-left: 275px;
   margin-top: -223px;
   }
   .pink {
   position: absolute;
   margin-left: 315px;
   margin-top: -211px;
   }
   .pink-2 {
   position: absolute;
   margin-left: 285px;
   margin-top: -36px;
   }
   .orange {
   position: absolute;
   margin-left: 270px;
   margin-top:-27px;
   }
   .Position-19 {
   position: absolute;
   top: 23px;
   left: 49.9%;
   }
   .Position-20 {
   position: absolute;
   top: 58px;
   left: 50%;
   }
   .Position-21 {
   position: absolute;
   top: 76px;
   left: 50%;
   }
   .Position-22 {
   position: absolute;
   top: 92px;
   left: 50%;
   }
   .Position-23 {
   position: absolute;
   top: 109px;
   left: 50%;
   }
   .Position-24 {
   position: absolute;
   top: 125px;
   left: 50%;
   }
   .Position-25 {
   position: absolute;
   top: 140px;
   left: 50%;
   }
   .Position-26 {
   position: absolute;
   top: 155px;
   left: 50%;
   }
   .Position-27 {
   position: absolute;
   top: 170px;
   left: 50%;
   }
   .Position-28 {
   position: absolute;
   top: 184px;
   left: 50%;
   }
   .Position-29 {
   position: absolute;
   top: 199px;
   left: 50%;
   }
   .Position-30 {
   position: absolute;
   top: 213px;
   left: 50%;
   }
   .Position-31 {
   position: absolute;
   top: 178px;
   left: 56%;
   }
   .Position-32 {
   position: absolute;
   top: 171px;
   left: 44.1%;
   }
   .Position-33 {
   position: absolute;
   bottom: 13px;
   left: 49.4%;
   }
   .Position-34 {
   position: absolute;
   bottom: 15px;
   left: 51.4%;
   }
   .Position-35 {
   position: absolute;
   top: 88px;
   left: 45.4%;
   }
   .Position-36 {
   position: absolute;
   top: 89px;
   left: 55%;
   }
   @media only screen and (max-width: 600px) {
   .position img {
   width: 360px;
   }
   .parrot {
   position: absolute;
   margin-left: 155px;
   margin-top: -215px;
   width: 8px;
   }
   .blue {
   position: absolute;
   margin-left: 177px;
   margin-top: -189px;
   width: 8px;
   }
   .blue-2 {
   position: absolute;
   margin-left: 188px;
   margin-top: -163px;
   width: 8px;
   }
   .sky-blue {
   position: absolute;
   margin-left: 153px;
   margin-top: -187px;
   width: 8px;
   }
   .sky-blue-2 {
   position: absolute;
   margin-left: 150px;
   margin-top: -177px;
   width: 8px;
   }
   .sky-blue-3 {
   position: absolute;
   margin-left: 153px;
   margin-top: -166px;
   width: 8px;
   }
   .sky-blue-4 {
   position: absolute;
   margin-left: 155px;
   margin-top: -157px;
   width: 8px;
   }
   .sky-blue-6 {
   position: absolute;
   margin-left: 160px;
   margin-top: -148px;
   width: 8px;
   }
   .sky-blue-7 {
   position: absolute;
   margin-left: 160px;
   margin-top: -138px;
   width: 8px;
   }
   .purple {
   position: absolute;
   margin-left: 172px;
   margin-top: -142px;
   width: 8px;
   }
   .red {
   position: absolute;
   margin-left: 155px;
   margin-top: -129px;
   width: 8px;
   }
   .red-2 {
   position: absolute;
   margin-left: 153px;
   margin-top: -120px;
   width: 8px;
   }
   .green {
   position: absolute;
   margin-left: 164px;
   margin-top: -121px;
   width: 8px;
   }
   .pink {
   position: absolute;
   margin-left: 185px;
   width: 8px;
   margin-top: -115px;
   }
   .red-3 {
   position: absolute;
   margin-left: 154px;
   margin-top: -112px;
   width: 8px;
   }
   .red-4 {
   position: absolute;
   margin-left: 160px;
   margin-top: -104px;
   width: 8px;
   }
   .pink-2 {
   position: absolute;
   margin-left: 169px;
   margin-top: -22px;
   width: 8px;
   }
   .orange {
   position: absolute;
   margin-left: 162px;
   margin-top: -17px;
   width: 8px;
   }
   input#topics_communication_avoid {
   width: 8px;
   }
   .Position-19 {
   position: absolute;
   top: 6px;
   left: 55.7%;
   }
   .Position-20 {
   position: absolute;
   top: 23px;
   left: 56%;
   }
   .Position-21 {
   position: absolute;
   top: 33px;
   left: 56%;
   }
   .Position-22 {
   position: absolute;
   top: 43px;
   left: 56%;
   }
   .Position-23 {
   position: absolute;
   top: 53px;
   left: 56%;
   }
   .Position-24 {
   position: absolute;
   top: 63px;
   left: 56%;
   }
   .Position-25 {
   position: absolute;
   top: 72px;
   left: 56%;
   }
   .Position-26 {
   position: absolute;
   top: 81px;
   left: 56%;
   }
   .Position-27 {
   position: absolute;
   top: 90px;
   left: 56%;
   }
   .Position-28 {
   position: absolute;
   top: 99px;
   left: 56%;
   }
   .Position-29 {
   position: absolute;
   top: 107px;
   left: 56%;
   }
   .Position-30 {
   position: absolute;
   top: 115px;
   left: 56%;
   }
   .Position-35 {
   position: absolute;
   top: 46px;
   left: 47.4%;
   }
   .Position-36 {
   position: absolute;
   top: 49px;
   left: 65%;
   }
   .Position-32 {
   position: absolute;
   top: 88px;
   left: 46.1%;
   }
   .Position-31 {
   position: absolute;
   top: 87px;
   left: 66%;
   }
   .Position-34 {
   position: absolute;
   bottom: 4px;
   left: 58.4%;
   }
   .Position-33 {
   position: absolute;
   bottom: 4px;
   left: 54.4%;
   }
   }
</style>
@endsection
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="post" id="createPatientForm" action="{{route('storePressureUlcerRecordTool', $patient->id)}}">
               @csrf
               <div class="text-center position">
                  <img src="https://uk.advancegroup.co.in/public/assets/images/456.png" />
                  <div>
                     <input class="parrot" name="mark_skin_change_1" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_1', optional($pressureUlcerRecordTool)->mark_skin_change_1) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="blue" name="mark_skin_change_2" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_2', optional($pressureUlcerRecordTool)->mark_skin_change_2) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="sky-blue" name="mark_skin_change_3" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_3', optional($pressureUlcerRecordTool)->mark_skin_change_3) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="sky-blue-2" name="mark_skin_change_4" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_4', optional($pressureUlcerRecordTool)->mark_skin_change_4) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="sky-blue-3" name="mark_skin_change_5" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_5', optional($pressureUlcerRecordTool)->mark_skin_change_5) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="sky-blue-4" name="mark_skin_change_6" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_6', optional($pressureUlcerRecordTool)->mark_skin_change_6) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="blue-2" name="mark_skin_change_7" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_7', optional($pressureUlcerRecordTool)->mark_skin_change_7) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="sky-blue-6" name="mark_skin_change_8" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_8', optional($pressureUlcerRecordTool)->mark_skin_change_8) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="sky-blue-7" name="mark_skin_change_9" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_9', optional($pressureUlcerRecordTool)->mark_skin_change_9) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="purple" name="mark_skin_change_10" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_10', optional($pressureUlcerRecordTool)->mark_skin_change_10) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="red" name="mark_skin_change_11" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_11', optional($pressureUlcerRecordTool)->mark_skin_change_11) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="red-2" name="mark_skin_change_12" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_12', optional($pressureUlcerRecordTool)->mark_skin_change_12) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="green" name="mark_skin_change_13" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_13', optional($pressureUlcerRecordTool)->mark_skin_change_13) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="pink" name="mark_skin_change_14" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_14', optional($pressureUlcerRecordTool)->mark_skin_change_14) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="red-3" name="mark_skin_change_15" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_15', optional($pressureUlcerRecordTool)->mark_skin_change_15) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="red-4" name="mark_skin_change_16" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_16', optional($pressureUlcerRecordTool)->mark_skin_change_16) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="pink-2" name="mark_skin_change_17" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_17', optional($pressureUlcerRecordTool)->mark_skin_change_17) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="orange" name="mark_skin_change_18" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_18', optional($pressureUlcerRecordTool)->mark_skin_change_18) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-19" name="mark_skin_change_19" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_19', optional($pressureUlcerRecordTool)->mark_skin_change_19) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-20" name="mark_skin_change_20" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_20', optional($pressureUlcerRecordTool)->mark_skin_change_20) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-21" name="mark_skin_change_21" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_21', optional($pressureUlcerRecordTool)->mark_skin_change_21) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-22" name="mark_skin_change_22" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_22', optional($pressureUlcerRecordTool)->mark_skin_change_22) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-23" name="mark_skin_change_23" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_23', optional($pressureUlcerRecordTool)->mark_skin_change_23) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-24" name="mark_skin_change_24" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_24', optional($pressureUlcerRecordTool)->mark_skin_change_24) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-25" name="mark_skin_change_25" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_25', optional($pressureUlcerRecordTool)->mark_skin_change_25) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-26" name="mark_skin_change_26" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_26', optional($pressureUlcerRecordTool)->mark_skin_change_26) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-27" name="mark_skin_change_27" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_27', optional($pressureUlcerRecordTool)->mark_skin_change_27) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-28" name="mark_skin_change_28" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_28', optional($pressureUlcerRecordTool)->mark_skin_change_28) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-29" name="mark_skin_change_29" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_29', optional($pressureUlcerRecordTool)->mark_skin_change_29) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-30" name="mark_skin_change_30" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_30', optional($pressureUlcerRecordTool)->mark_skin_change_30) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-31" name="mark_skin_change_31" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_31', optional($pressureUlcerRecordTool)->mark_skin_change_31) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-32" name="mark_skin_change_32" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_32', optional($pressureUlcerRecordTool)->mark_skin_change_32) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-33" name="mark_skin_change_33" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_33', optional($pressureUlcerRecordTool)->mark_skin_change_33) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-34" name="mark_skin_change_34" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_34', optional($pressureUlcerRecordTool)->mark_skin_change_34) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-35" name="mark_skin_change_35" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_35', optional($pressureUlcerRecordTool)->mark_skin_change_35) == 'on' ? 'checked' : '' }}>
                  </div>
                  <div>
                     <input class="Position-36" name="mark_skin_change_36" type="radio" id="topics_communication_avoid" {{ old('mark_skin_change_36', optional($pressureUlcerRecordTool)->mark_skin_change_36) == 'on' ? 'checked' : '' }}>
                  </div>
               </div>
               <button id="clear-radio" class="btn btn-primary" style="float: right;">Clear</button><br>
               <p>**Mark the skin changes alphabetically (following below guidance) on the body chart.</p>
               <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                  <tr>
                     <th>A – Back of Head</th>
                     <th>D – Elbows</th>
                     <th>G – Groin Area</th>
                  </tr>
                  <tr>
                     <th>B – Along Spine</th>
                     <th>E – Hips</th>
                     <th>H – Ankles</th>
                  </tr>
                  <tr>
                     <th>C – Chest / Breast / Neck</th>
                     <th>F – Sacrum / Buttocks</th>
                     <th>I – Heels</th>
                  </tr>
               </table>
               <br/>
               <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                  <thead>
                     <tr>
                        <th> Pressure Sore Grade </th>
                        <th> Location Alphabet </th>
                        <th> Area Assessed </th>
                        <th> Reason for Assessment </th>
                        <th> Details </th>
                        <th> Name </th>
                        <th> Date </th>
                        <th> Sign </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[0] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[0] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[0] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[0] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]" value="{{ $pressureUlcerRecordTool->details[0] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[0] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[0] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[0] ?? '' }}"/></td>
                     </tr>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[1] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[1] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[1] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[1] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]" value="{{ $pressureUlcerRecordTool->details[1] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[1] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[1] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[0] ?? '' }}"/></td>
                     </tr>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[2] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[2] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[2] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[2] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]" value="{{ $pressureUlcerRecordTool->details[2] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[2] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[2] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[2] ?? '' }}"/></td>
                     </tr>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[3] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[3] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[3] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[3] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]" value="{{ $pressureUlcerRecordTool->details[3] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[3] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[3] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[3] ?? '' }}"/></td>
                     </tr>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[4] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[4] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[4] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[4] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]" value="{{ $pressureUlcerRecordTool->details[4] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[4] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[4] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[4] ?? '' }}"/></td>
                     </tr>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[5] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[5] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[5] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[5] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]"value="{{ $pressureUlcerRecordTool->details[5] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[5] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[5] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[5] ?? '' }}"/></td>
                     </tr>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[6] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[6] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[6] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[6] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]" value="{{ $pressureUlcerRecordTool->details[6] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[6] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[6] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[6] ?? '' }}"/></td>
                     </tr>
                     <tr>
                        <td><input type="text" class="form-control" name="pressure_sore[]" value="{{ $pressureUlcerRecordTool->pressure_sore[7] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="location[]" value="{{ $pressureUlcerRecordTool->location[7] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="area[]" value="{{ $pressureUlcerRecordTool->area[7] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="reason[]" value="{{ $pressureUlcerRecordTool->reason[7] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="details[]" value="{{ $pressureUlcerRecordTool->details[7] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="name[]" value="{{ $pressureUlcerRecordTool->name[7] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="date[]" value="{{ $pressureUlcerRecordTool->date[7] ?? '' }}"/></td>
                        <td><input type="text" class="form-control" name="sign[]" value="{{ $pressureUlcerRecordTool->sign[7] ?? '' }}"/></td>
                     </tr>
                  </tbody>
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
   $(document).ready(function() {
      $("#clear-radio").on("click", function(e) {
         e.preventDefault();
         $("input[type='radio']").prop("checked", false);
      });
   });
</script>
@endsection