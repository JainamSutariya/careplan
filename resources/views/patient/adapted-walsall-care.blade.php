@extends('layouts.master')

@section('title') Adapted Walsall Score Pressure Ulcer Risk Assessment Tool @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Adapted Walsall Score Pressure Ulcer Risk Assessment Tool
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
<style>
    .border-table tr, th, td {
        border: 1px solid #e1e1e1 !important;
        padding: 5px;
    }
    th {
        font-size: 15px;
        text-align: center !important;
    }
    td {
    font-size: 13px;
    }
</style>
@endsection
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="post" id="createPatientForm" action="{{route('storeAdaptedWalsallCare', $patient->id)}}">
               <table class=" w-100 d-block d-md-table border-none"  style="overflow-x:auto;">
                  @csrf
                  <tbody>
                     <tr>
                        <th rowspan="2" style="width: 226px;">Risk Categories</th>
                        <td>Date</td>
                        <!--<td style="width: 14%;">
                           <input type="date" class="form-control" name="risk_date" value="{{$adaptedWalsallCare->risk_date ?? ''}}"/>
                        </td>-->
                        <td style="width: 12%;">
                           <input type="date" class="form-control" name="risk_date_1" value="{{$adaptedWalsallCare->risk_date_1 ?? ''}}"/>
                        </td>
                        <td style="width: 12%;">
                           <input type="date" class="form-control" name="risk_date_2" value="{{$adaptedWalsallCare->risk_date_2 ?? ''}}"/>
                        </td>
                        <td style="width: 12%;">
                           <input type="date" class="form-control" name="risk_date_3" value="{{$adaptedWalsallCare->risk_date_3 ?? ''}}"/>
                        </td>
                        <td style="width: 12%;">
                           <input type="date" class="form-control" name="risk_date_4" value="{{$adaptedWalsallCare->risk_date_4 ?? ''}}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Time</td>
                        <!--<td style="width: 14%;">
                           <input type="text" class="form-control" name="risk_time" value="{{$adaptedWalsallCare->risk_time ?? ''}}"/>
                        </td>-->
                        <td style="width: 12%;">
                           <input type="text" class="form-control" name="risk_time_1" value="{{$adaptedWalsallCare->risk_time_1 ?? ''}}"/>
                        </td>
                        <td style="width: 12%;">
                           <input type="text" class="form-control" name="risk_time_2" value="{{$adaptedWalsallCare->risk_time_2 ?? ''}}"/>
                        </td>
                        <td style="width: 12%;">
                           <input type="text" class="form-control" name="risk_time_3" value="{{$adaptedWalsallCare->risk_time_3 ?? ''}}"/>
                        </td>
                        <td style="width: 12%;">
                           <input type="text" class="form-control" name="risk_time_4" value="{{$adaptedWalsallCare->risk_time_4 ?? ''}}"/>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <br />
               <table class=" w-100 d-block d-md-table border-table" style="overflow-x:auto;">
                  <tbody>
                     <tr>
                        <th colspan="2">
                           <b>See over the category guidance</b>
                        </th>
                        <th>Score</th>
                        <th>Score</th>
                        <th>Score</th>
                        <th>Score</th>
                        <th>Score</th>
                        <th>Score</th>
                     </tr>
                     <tr>
                        <th rowspan="2">Awareness</th>
                        <td>No Deficit</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_deficit[]" value="{{ $adaptedWalsallCare->no_deficit[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_deficit[]" value="{{ $adaptedWalsallCare->no_deficit[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_deficit[]" value="{{ $adaptedWalsallCare->no_deficit[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_deficit[]" value="{{ $adaptedWalsallCare->no_deficit[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_deficit[]" value="{{ $adaptedWalsallCare->no_deficit[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Deficit</td>
                        <td>
                           <input type="text" class="form-control" value="3" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="deficit[]" value="{{ $adaptedWalsallCare->deficit[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="deficit[]" value="{{ $adaptedWalsallCare->deficit[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="deficit[]" value="{{ $adaptedWalsallCare->deficit[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="deficit[]" value="{{ $adaptedWalsallCare->deficit[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="deficit[]" value="{{ $adaptedWalsallCare->deficit[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <th rowspan="3">Mobility</th>
                        <td>Walks Independently</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_independently[]" value="{{ $adaptedWalsallCare->walk_independently[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_independently[]" value="{{ $adaptedWalsallCare->walk_independently[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_independently[]" value="{{ $adaptedWalsallCare->walk_independently[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_independently[]" value="{{ $adaptedWalsallCare->walk_independently[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_independently[]" value="{{ $adaptedWalsallCare->walk_independently[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Walks with the assistance of an aid</td>
                        <td>
                           <input type="text" class="form-control" value="3" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_assistance[]" value="{{ $adaptedWalsallCare->walk_assistance[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_assistance[]" value="{{ $adaptedWalsallCare->walk_assistance[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_assistance[]" value="{{ $adaptedWalsallCare->walk_assistance[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_assistance[]" value="{{ $adaptedWalsallCare->walk_assistance[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="walk_assistance[]" value="{{ $adaptedWalsallCare->walk_assistance[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Unable to walk or dependent on care</td>
                        <td>
                           <input type="text" class="form-control" value="8" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="unable_walk[]" value="{{ $adaptedWalsallCare->unable_walk[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="unable_walk[]" value="{{ $adaptedWalsallCare->unable_walk[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="unable_walk[]" value="{{ $adaptedWalsallCare->unable_walk[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="unable_walk[]" value="{{ $adaptedWalsallCare->unable_walk[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="unable_walk[]" value="{{ $adaptedWalsallCare->unable_walk[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <th rowspan="4">Skin Condition of Bony Prominences</th>
                        <td>Healthy</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_condition[]" value="{{ $adaptedWalsallCare->skin_condition[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_condition[]" value="{{ $adaptedWalsallCare->skin_condition[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_condition[]" value="{{ $adaptedWalsallCare->skin_condition[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_condition[]" value="{{ $adaptedWalsallCare->skin_condition[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_condition[]" value="{{ $adaptedWalsallCare->skin_condition[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Skin Changes</td>
                        <td>
                           <input type="text" class="form-control" value="2" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_change[]" value="{{ $adaptedWalsallCare->skin_change[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_change[]" value="{{ $adaptedWalsallCare->skin_change[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_change[]" value="{{ $adaptedWalsallCare->skin_change[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_change[]" value="{{ $adaptedWalsallCare->skin_change[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="skin_change[]" value="{{ $adaptedWalsallCare->skin_change[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr style="background-color: #ea7171;">
                        <td>Significant skinchanges or pressure ulcer</td>
                        <td>
                           <input type="text" class="form-control" value="4" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="pressure_ulcer[]" value="{{ $adaptedWalsallCare->pressure_ulcer[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="pressure_ulcer[]" value="{{ $adaptedWalsallCare->pressure_ulcer[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="pressure_ulcer[]" value="{{ $adaptedWalsallCare->pressure_ulcer[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="pressure_ulcer[]" value="{{ $adaptedWalsallCare->pressure_ulcer[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="pressure_ulcer[]" value="{{ $adaptedWalsallCare->pressure_ulcer[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr style="background-color: #80acde;">
                        <td>Verbal (VB) or Visual (VC) check?</td>
                        <td>
                           <input type="text" class="form-control" value="VB / VC" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="verbal[]" value="{{ $adaptedWalsallCare->verbal[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="verbal[]" value="{{ $adaptedWalsallCare->verbal[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="verbal[]" value="{{ $adaptedWalsallCare->verbal[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="verbal[]" value="{{ $adaptedWalsallCare->verbal[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="verbal[]" value="{{ $adaptedWalsallCare->verbal[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <th rowspan="2">Nutritional Status</th>
                        <td>No dietary issue</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_dietary[]" value="{{ $adaptedWalsallCare->no_dietary[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_dietary[]" value="{{ $adaptedWalsallCare->no_dietary[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_dietary[]" value="{{ $adaptedWalsallCare->no_dietary[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_dietary[]" value="{{ $adaptedWalsallCare->no_dietary[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="no_dietary[]" value="{{ $adaptedWalsallCare->no_dietary[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Dietary issue</td>
                        <td>
                           <input type="text" class="form-control" value="4" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="dietary[]" value="{{ $adaptedWalsallCare->dietary[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="dietary[]" value="{{ $adaptedWalsallCare->dietary[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="dietary[]" value="{{ $adaptedWalsallCare->dietary[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="dietary[]" value="{{ $adaptedWalsallCare->dietary[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="dietary[]" value="{{ $adaptedWalsallCare->dietary[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <th rowspan="3">Bladder Incontinence</th>
                        <td>None</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="none[]" value="{{ $adaptedWalsallCare->none[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="none[]" value="{{ $adaptedWalsallCare->none[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="none[]" value="{{ $adaptedWalsallCare->none[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="none[]" value="{{ $adaptedWalsallCare->none[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="none[]" value="{{ $adaptedWalsallCare->none[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Occasional</td>
                        <td>
                           <input type="text" class="form-control" value="1" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="occasional[]" value="{{ $adaptedWalsallCare->occasional[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="occasional[]" value="{{ $adaptedWalsallCare->occasional[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="occasional[]" value="{{ $adaptedWalsallCare->occasional[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="occasional[]" value="{{ $adaptedWalsallCare->occasional[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="occasional[]" value="{{ $adaptedWalsallCare->occasional[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Frequent</td>
                        <td>
                           <input type="text" class="form-control" value="4" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="frequent[]" value="{{ $adaptedWalsallCare->frequent[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="frequent[]" value="{{ $adaptedWalsallCare->frequent[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="frequent[]" value="{{ $adaptedWalsallCare->frequent[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="frequent[]" value="{{ $adaptedWalsallCare->frequent[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="frequent[]" value="{{ $adaptedWalsallCare->frequent[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <th rowspan="3">Bowel Incontinence</th>
                        <td>None</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_none[]" value="{{ $adaptedWalsallCare->bowel_none[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_none[]" value="{{ $adaptedWalsallCare->bowel_none[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_none[]" value="{{ $adaptedWalsallCare->bowel_none[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_none[]" value="{{ $adaptedWalsallCare->bowel_none[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_none[]" value="{{ $adaptedWalsallCare->bowel_none[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Occasional</td>
                        <td>
                           <input type="text" class="form-control" value="4" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_occasional[]" value="{{ $adaptedWalsallCare->bowel_occasional[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_occasional[]" value="{{ $adaptedWalsallCare->bowel_occasional[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_occasional[]" value="{{ $adaptedWalsallCare->bowel_occasional[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_occasional[]" value="{{ $adaptedWalsallCare->bowel_occasional[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_occasional[]" value="{{ $adaptedWalsallCare->bowel_occasional[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Frequent</td>
                        <td>
                           <input type="text" class="form-control" value="6" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_frequent[]" value="{{ $adaptedWalsallCare->bowel_frequent[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_frequent[]" value="{{ $adaptedWalsallCare->bowel_frequent[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_frequent[]" value="{{ $adaptedWalsallCare->bowel_frequent[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_frequent[]" value="{{ $adaptedWalsallCare->bowel_frequent[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="bowel_frequent[]" value="{{ $adaptedWalsallCare->bowel_frequent[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <th rowspan="3">Care Input</th>
                        <td>No Carer</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_no_carer[]" value="{{ $adaptedWalsallCare->care_no_carer[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_no_carer[]" value="{{ $adaptedWalsallCare->care_no_carer[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_no_carer[]" value="{{ $adaptedWalsallCare->care_no_carer[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_no_carer[]" value="{{ $adaptedWalsallCare->care_no_carer[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_no_carer[]" value="{{ $adaptedWalsallCare->care_no_carer[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Active Carer</td>
                        <td>
                           <input type="text" class="form-control" value="0" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_active_carer[]" value="{{ $adaptedWalsallCare->care_active_carer[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_active_carer[]" value="{{ $adaptedWalsallCare->care_active_carer[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_active_carer[]" value="{{ $adaptedWalsallCare->care_active_carer[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_active_carer[]" value="{{ $adaptedWalsallCare->care_active_carer[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_active_carer[]" value="{{ $adaptedWalsallCare->care_active_carer[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr>
                        <td>Intermittent Carer</td>
                        <td>
                           <input type="text" class="form-control" value="2" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_intermittent_carer[]" value="{{ $adaptedWalsallCare->care_intermittent_carer[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_intermittent_carer[]" value="{{ $adaptedWalsallCare->care_intermittent_carer[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_intermittent_carer[]" value="{{ $adaptedWalsallCare->care_intermittent_carer[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_intermittent_carer[]" value="{{ $adaptedWalsallCare->care_intermittent_carer[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" name="care_intermittent_carer[]" value="{{ $adaptedWalsallCare->care_intermittent_carer[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr style="background-color: #bcd2ea;">
                        <th rowspan="4">Total Score (State Number) </th>
                        <td>0-3 Score (1 yearly check)</td>
                        <td>
                           <input type="text" class="form-control" value="No-Risk" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="zero_three_score_0" name="zero_three_score[]" value="{{ $adaptedWalsallCare->zero_three_score[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="zero_three_score_1" name="zero_three_score[]" value="{{ $adaptedWalsallCare->zero_three_score[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="zero_three_score_2" name="zero_three_score[]" value="{{ $adaptedWalsallCare->zero_three_score[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="zero_three_score_3" name="zero_three_score[]" value="{{ $adaptedWalsallCare->zero_three_score[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="zero_three_score_4" name="zero_three_score[]" value="{{ $adaptedWalsallCare->zero_three_score[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr style="background-color: #80acde;">
                        <td>4-9 (3 monthly checks)</td>
                        <td>
                           <input type="text" class="form-control" value="Low Risk" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="four_nine_score_0" name="four_nine_score[]" value="{{ $adaptedWalsallCare->four_nine_score[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="four_nine_score_1" name="four_nine_score[]" value="{{ $adaptedWalsallCare->four_nine_score[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="four_nine_score_2" name="four_nine_score[]" value="{{ $adaptedWalsallCare->four_nine_score[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="four_nine_score_3" name="four_nine_score[]" value="{{ $adaptedWalsallCare->four_nine_score[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="four_nine_score_4" name="four_nine_score[]" value="{{ $adaptedWalsallCare->four_nine_score[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr style="background-color: #e3d35e;">
                        <td>10-14 (alternate monthly checks)</td>
                        <td>
                           <input type="text" class="form-control" value="Medium Risk" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="ten_fourteen_score_0" name="ten_fourteen_score[]" value="{{ $adaptedWalsallCare->ten_fourteen_score[0] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="ten_fourteen_score_1" name="ten_fourteen_score[]" value="{{ $adaptedWalsallCare->ten_fourteen_score[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="ten_fourteen_score_2" name="ten_fourteen_score[]" value="{{ $adaptedWalsallCare->ten_fourteen_score[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="ten_fourteen_score_3" name="ten_fourteen_score[]" value="{{ $adaptedWalsallCare->ten_fourteen_score[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="ten_fourteen_score_4" name="ten_fourteen_score[]" value="{{ $adaptedWalsallCare->ten_fourteen_score[4] ?? '' }}"/>
                        </td>
                     </tr>
                     <tr style="background-color: #ea7171;">
                        <td>15 or above (monthly checks)</td>
                        <td>
                           <input type="text" class="form-control" value="High Risk" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="fifteen_above_score_0" name="fifteen_above_score[]" value="{{ $adaptedWalsallCare->fifteen_above_score[0] ?? '' }}" readonly/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="fifteen_above_score_1" name="fifteen_above_score[]" value="{{ $adaptedWalsallCare->fifteen_above_score[1] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="fifteen_above_score_2" name="fifteen_above_score[]" value="{{ $adaptedWalsallCare->fifteen_above_score[2] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="fifteen_above_score_3" name="fifteen_above_score[]" value="{{ $adaptedWalsallCare->fifteen_above_score[3] ?? '' }}"/>
                        </td>
                        <td>
                           <input type="text" class="form-control" id="fifteen_above_score_4" name="fifteen_above_score[]" value="{{ $adaptedWalsallCare->fifteen_above_score[4] ?? '' }}"/>
                        </td>
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
   calculateTotal();
   var totalForIndex0 = 0;
   var totalForIndex1 = 0;
   var totalForIndex2 = 0;
   var totalForIndex3 = 0;
   var totalForIndex4 = 0;
   $('input[name^="no_deficit"], input[name^="deficit"], input[name^="walk_independently"], input[name^="walk_assistance"], input[name^="unable_walk"], input[name^="skin_condition"], input[name^="skin_change"], input[name^="pressure_ulcer"], input[name^="verbal"], input[name^="no_dietary"], input[name^="dietary"], input[name^="none"], input[name^="occasional"], input[name^="frequent"], input[name^="bowel_none"], input[name^="bowel_occasional"], input[name^="bowel_frequent"], input[name^="care_no_carer"], input[name^="care_active_carer"], input[name^="care_intermittent_carer"]').on('input', function() {
      calculateTotal();
   });

   function calculateTotal() {
      totalForIndex0 = 0;
      totalForIndex1 = 0;
      totalForIndex2 = 0;
      totalForIndex3 = 0;
      totalForIndex4 = 0;
      var columns = ['no_deficit', 'deficit', 'walk_independently', 'walk_assistance', 'unable_walk', 'skin_condition', 'skin_change', 'pressure_ulcer', 'no_dietary', 'dietary', 'none', 'occasional', 'frequent', 'bowel_none', 'bowel_occasional', 'bowel_frequent', 'care_no_carer', 'care_active_carer', 'care_intermittent_carer'];
      for (var i = 0; i < columns.length; i++) {
         calculateColumnSum(columns[i], i);
      }
   }

   function calculateColumnSum(columnName) {
      $('input[name^="' + columnName + '"]').each(function(index) {
         if (index == 0) {
            var value = parseInt($(this).val()) || 0;
            totalForIndex0 += value;
            console.log(columnName, index, value);
         }
         if (index == 1) {
            var value = parseInt($(this).val()) || 0;
            totalForIndex1 += value;
         }
         if (index == 2) {
            var value = parseInt($(this).val()) || 0;
            totalForIndex2 += value;
         }
         if (index == 3) {
            var value = parseInt($(this).val()) || 0;
            totalForIndex3 += value;
         }
         if (index == 4) {
            var value = parseInt($(this).val()) || 0;
            totalForIndex4 += value;
         }
      });
      console.log(totalForIndex0);
      if (totalForIndex0 > 0) {
         if (totalForIndex0 >= 0 && totalForIndex0 <= 3) {
            $("#zero_three_score_0").val('No-Risk');
            $("#four_nine_score_0").val('');
            $("#ten_fourteen_score_0").val('');
            $("#fifteen_above_score_0").val('');
         } else if (totalForIndex0 >= 4 && totalForIndex0 <= 9) {
            $("#zero_three_score_0").val('');
            $("#four_nine_score_0").val('Low Risk');
            $("#ten_fourteen_score_0").val('');
            $("#fifteen_above_score_0").val('');
         } else if (totalForIndex0 >= 10 && totalForIndex0 <= 14) {
            $("#zero_three_score_0").val('');
            $("#four_nine_score_0").val('');
            $("#ten_fourteen_score_0").val('Medium Risk');
            $("#fifteen_above_score_0").val('');
         } else if (totalForIndex0 >= 15) {
            $("#zero_three_score_0").val('');
            $("#four_nine_score_0").val('');
            $("#ten_fourteen_score_0").val('');
            $("#fifteen_above_score_0").val('High Risk');
         }
      }
      if (totalForIndex1 > 0) {
         if (totalForIndex1 >= 0 && totalForIndex1 <= 3) {
            $("#zero_three_score_1").val('No-Risk');
            $("#four_nine_score_1").val('');
            $("#ten_fourteen_score_1").val('');
            $("#fifteen_above_score_1").val('');
         } else if (totalForIndex1 >= 4 && totalForIndex1 <= 9) {
            $("#zero_three_score_1").val('');
            $("#four_nine_score_1").val('Low Risk');
            $("#ten_fourteen_score_1").val('');
            $("#fifteen_above_score_1").val('');
         } else if (totalForIndex1 >= 10 && totalForIndex1 <= 14) {
            $("#zero_three_score_1").val('');
            $("#four_nine_score_1").val('');
            $("#ten_fourteen_score_1").val('Medium Risk');
            $("#fifteen_above_score_1").val('');
         } else if (totalForIndex1 >= 15) {
            $("#zero_three_score_1").val('');
            $("#four_nine_score_1").val('');
            $("#ten_fourteen_score_1").val('');
            $("#fifteen_above_score_1").val('High Risk');
         }
      }

      if (totalForIndex2 > 0) {
         if (totalForIndex2 >= 0 && totalForIndex2 <= 3) {
            $("#zero_three_score_2").val('No-Risk');
            $("#four_nine_score_2").val('');
            $("#ten_fourteen_score_2").val('');
            $("#fifteen_above_score_2").val('');
         } else if (totalForIndex2 >= 4 && totalForIndex2 <= 9) {
            $("#zero_three_score_2").val('');
            $("#four_nine_score_2").val('Low Risk');
            $("#ten_fourteen_score_2").val('');
            $("#fifteen_above_score_2").val('');
         } else if (totalForIndex2 >= 10 && totalForIndex2 <= 14) {
            $("#zero_three_score_2").val('');
            $("#four_nine_score_2").val('');
            $("#ten_fourteen_score_2").val('Medium Risk');
            $("#fifteen_above_score_2").val('');
         } else if (totalForIndex2 >= 15) {
            $("#zero_three_score_2").val('');
            $("#four_nine_score_2").val('');
            $("#ten_fourteen_score_2").val('');
            $("#fifteen_above_score_2").val('High Risk');
         }
      }

      if (totalForIndex3 > 0) {
         if (totalForIndex3 >= 0 && totalForIndex3 <= 3) {
            $("#zero_three_score_3").val('No-Risk');
            $("#four_nine_score_3").val('');
            $("#ten_fourteen_score_3").val('');
            $("#fifteen_above_score_3").val('');
         } else if (totalForIndex3 >= 4 && totalForIndex3 <= 9) {
            $("#zero_three_score_3").val('');
            $("#four_nine_score_3").val('Low Risk');
            $("#ten_fourteen_score_3").val('');
            $("#fifteen_above_score_3").val('');
         } else if (totalForIndex3 >= 10 && totalForIndex3 <= 14) {
            $("#zero_three_score_3").val('');
            $("#four_nine_score_3").val('');
            $("#ten_fourteen_score_3").val('Medium Risk');
            $("#fifteen_above_score_3").val('');
         } else if (totalForIndex3 >= 15) {
            $("#zero_three_score_3").val('');
            $("#four_nine_score_3").val('');
            $("#ten_fourteen_score_3").val('');
            $("#fifteen_above_score_3").val('High Risk');
         }
      }

      if (totalForIndex4 > 0) {
         if (totalForIndex4 >= 0 && totalForIndex4 <= 3) {
            $("#zero_three_score_4").val('No-Risk');
            $("#four_nine_score_4").val('');
            $("#ten_fourteen_score_4").val('');
            $("#fifteen_above_score_4").val('');
         } else if (totalForIndex4 >= 4 && totalForIndex4 <= 9) {
            $("#zero_three_score_4").val('');
            $("#four_nine_score_4").val('Low Risk');
            $("#ten_fourteen_score_4").val('');
            $("#fifteen_above_score_4").val('');
         } else if (totalForIndex4 >= 10 && totalForIndex4 <= 14) {
            $("#zero_three_score_4").val('');
            $("#four_nine_score_4").val('');
            $("#ten_fourteen_score_4").val('Medium Risk');
            $("#fifteen_above_score_4").val('');
         } else if (totalForIndex4 >= 15) {
            $("#zero_three_score_4").val('');
            $("#four_nine_score_4").val('');
            $("#ten_fourteen_score_4").val('');
            $("#fifteen_above_score_4").val('High Risk');
         }
      }
   }
});
</script>
@endsection