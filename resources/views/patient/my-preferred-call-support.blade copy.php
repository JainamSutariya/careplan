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
                     <td> Carer : <input type="text" name="morning_call_personal_care" class="form-control" value="{{$preferredCallSupport->morning_call_personal_care ?? ''}}"/> </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Transfer </td>
                     <td colspan="2">Carer : <input type="text" name="morning_call_transfer" class="form-control" value="{{$preferredCallSupport->morning_call_transfer ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td> Carer : <input type="text" name="morning_call_food" class="form-control" value="{{$preferredCallSupport->morning_call_food ?? ''}}"/> </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="2">Carer : <input type="text" name="morning_call_stoma_care" class="form-control" value="{{$preferredCallSupport->morning_call_stoma_care ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td> Carer  : <input type="text" name="morning_call_medication" class="form-control" value="{{$preferredCallSupport->morning_call_medication ?? ''}}"/>  </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Change Position in Bed </td>
                     <td colspan="2">Carer : <input type="text" name="morning_call_change_bed" class="form-control" value="{{$preferredCallSupport->morning_call_change_bed ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
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
                     <td> Carer  : <input type="text" name="lunch_call_personal_care" class="form-control" value="{{$preferredCallSupport->lunch_call_personal_care ?? ''}}"/> </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Transfer </td>
                     <td colspan="4">Carer : <input type="text" name="lunch_call_transfer" class="form-control" value="{{$preferredCallSupport->lunch_call_transfer ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td> Carer : <input type="text" name="lunch_call_food" class="form-control" value="{{$preferredCallSupport->lunch_call_food ?? ''}}"/>  </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="2">Carer : <input type="text" name="lunch_call_stoma_care" class="form-control" value="{{$preferredCallSupport->lunch_call_stoma_care ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td> Carer  : <input type="text" name="lunch_call_medication" class="form-control" value="{{$preferredCallSupport->lunch_call_medication ?? ''}}"/> </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Change Position in Bed </td>
                     <td colspan="2">Carer : <input type="text" name="lunch_call_change_bed" class="form-control" value="{{$preferredCallSupport->lunch_call_change_bed ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
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
                     <td> Carer  : <input type="text" name="tea_call_personal_care" class="form-control" value="{{$preferredCallSupport->tea_call_personal_care ?? ''}}"/> </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Transfer </td>
                     <td colspan="2">Carer : <input type="text" name="tea_call_transfer" class="form-control" value="{{$preferredCallSupport->tea_call_transfer ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td> Carer  : <input type="text" name="tea_call_food" class="form-control" value="{{$preferredCallSupport->tea_call_food ?? ''}}"/> </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="2">Carer : <input type="text" name="tea_call_stoma" class="form-control" value="{{$preferredCallSupport->tea_call_stoma ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td> Carer : <input type="text" name="tea_medication" class="form-control" value="{{$preferredCallSupport->tea_medication ?? ''}}"/>  </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Change Position in Bed </td>
                     <td colspan="2">Carer : <input type="text" name="tea_change_bed_text" class="form-control" value="{{$preferredCallSupport->tea_change_bed_text ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
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
                     <td> Carer : <input type="text" name="tuck_call_personal_care_carer" class="form-control" value="{{$preferredCallSupport->tuck_call_personal_care_carer ?? ''}}"/>  </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Transfer </td>
                     <td colspan="2">Carer : <input type="text" name="tuck_call_transfer_carer" class="form-control" value="{{$preferredCallSupport->tuck_call_transfer_carer ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Food & Fluid Support</td>
                     <td> Carer  : <input type="text" name="tuck_call_food_carer" class="form-control" value="{{$preferredCallSupport->tuck_call_food_carer ?? ''}}"/> </td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Catheter Care / Stoma Care </td>
                     <td colspan="2">Carer : <input type="text" name="tuck_call_stoma_care_carer" class="form-control" value="{{$preferredCallSupport->tuck_call_stoma_care_carer ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
                  </tr>
                  <tr>
                     <td>Medication</td>
                     <td> Carer : <input type="text" name="tuck_call_medication_carer" class="form-control" value="{{$preferredCallSupport->tuck_call_medication_carer ?? ''}}"/></td>
                     <td>Independent / Family Support / NOK</td>
                     <td> Change Position in Bed </td>
                     <td colspan="2">Carer : <input type="text" name="tuck_call_change_carer" class="form-control" value="{{$preferredCallSupport->tuck_call_change_carer ?? ''}}"/> </td>
                     <td colspan="2"> Independent / Family Support / NOK </td>
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