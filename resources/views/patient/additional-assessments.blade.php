@extends('layouts.master')

@section('title') Patient Care Plan Form @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1')  @endslot
@slot('title')
  Additional Assessments<br>
  <span style="font-size: 13px;font-weight: 400;">Select additional assessments that are relevant to <b>{{ucwords($patient->first_name)}}'s</b>, needs and potential risks.</span>
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Mental Capacity</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Moving And Handling</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Waterlow</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Communication</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Financial</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Medication</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>End Of Life</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>COVID-19</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Environment And Fire</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Behaviour</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Seizures</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Control Of Substances Hazardous To Health (COSHH)</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Dysphagia</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Restrictive Practice</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-info text-white-50">
      <div class="card-body">
        <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Condition Specific</h5>
        <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
      </div>
    </div>
  </div>
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