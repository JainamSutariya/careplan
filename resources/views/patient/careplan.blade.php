@extends('layouts.master')

@section('title') Patient Care Plan Form @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1')  @endslot
@slot('title')
  About {{ucwords($patient->first_name)}} {{ucwords($patient->last_name)}}<br>
  <span style="font-size: 13px;font-weight: 400;">Capture basic information about <b>{{ucwords($patient->first_name)}}</b>, including their likes and preferences.</span>
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<div class="row">
   <div class="col-lg-4">
    <a href="{{route('patient.edit', $patient->id)}}">
      <div class="card bg-primary text-white-50">
         <div class="card-body">
            <h5 class="mb-4 text-white"><i class="mdi mdi-bullseye-arrow me-3"></i> About Me</h5>
            <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->updated_at)) }}</p>
         </div>
      </div>
    </a>
   </div>
</div>
<br>
<span style="font-size: 20px;"><b>Initial Assessments</b></span><br>
<span style="font-size: 14px;font-weight: 400;">Carry out a holistic initial assessments across eight key areas of care.</span><br><br>
<div class="row">
  <div class="col-lg-4">
    <a href="{{route('personalContact', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Personal Contact Details</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->personalContactDetails->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('myInformation', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>My Information</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->myInformation->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('enviromentalRisk', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Environmental Risk Assessment Tool</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime( $patient->enviromentalRisk->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('fireSefatyRisk', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Fire Safety Risk Assessment Tool</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->fireSafetyRisk->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('myHealth', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>My Health</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->myHealth->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('covid19', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>COVID-19</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->covidTest->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('allergies', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Allergies</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->allergies->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('communication', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Communication</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->communication->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('myLifeStyle', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>My Lifestyle / Choices</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->myLifeStyle->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('mobility', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Mobility</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->mobility->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('mobilityTransferRisk', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Mobility and Transfer Risk Assessment</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->mobilityAndTransferRisk->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('fallsRisk', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Falls Risk Assessment Tool</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->fallsRisk->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('personalCare', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Personal Care Oral Care</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->personalCare->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('washAndShower', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Wash and Shower</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->washAndShower->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('dressingSupport', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Dressing Support</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->dressingSupport->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <a href="{{route('skinCare', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Skin Care</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->skinCare->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('adaptedWalsallCare', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Adapted Walsall Score Pressure Ulcer Risk Assessment Tool</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->adaptedWalsallScore->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('pressureUlcerRecordTool', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Pressure Ulcer / Skin Marks / Bruising Record Tool</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->pressureUlcerRecordTool->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <a href="{{route('continenceCare', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Continence Care</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->continenceCare->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('nutritionHydration', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Nutrition and Hydration</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->nutritionHydration->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('dietaryRisk', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Dietary Risk Assessment Tool</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->dietaryRisk->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('medication', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Medication</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->medication->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('medicationRisk', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Medication Risk Assessment Tool</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->medicationRisk->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('restraintRisk', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Restraint Risk Assessment</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->restraintRisk->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('endLife', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>End of Life</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->endLife->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('socialInterest', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Social Interest and Activities</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->socialInterestActivities->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('generalTidy', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>General Tidy Up</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->generalTidyUp->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('extraNeed', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Extra Needs</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->extraNeed->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('preferredCallSupport', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>My Preferred Call Time & Support Needs</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->preferredCallSupport->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4">
    <a href="{{route('emergencyActionPlan', $patient->id)}}">
      <div class="card bg-info text-white-50">
        <div class="card-body">
          <h5 class="mb-4 text-white"><i class="mdi mdi-alert-circle-outline me-3"></i>Emergency Action Plan</h5>
          <p class="card-text">Updated {{ date('d, M Y', strtotime($patient->emergencyActionPlan->updated_at ?? $patient->updated_at)) }}</p>
        </div>
      </div>
    </a>
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