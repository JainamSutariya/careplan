@extends('layouts.master')

@section('title') Emergency Action Plan @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Emergency Action Plan
@endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
<style>
#gainingNowSign{
    background: #FBFAE2;
    border: 1px solid black;
}
#representativeNowSign{
    background: #FBFAE2;
    border: 1px solid black;
}
#serviceNowSign{
    background: #FBFAE2;
    border: 1px solid black;
}
#signImage{
    width: 100% !important;
    height: 44px;
    border: 1px solid black;
}
#signImage-signature {
  width: 100% !important;
  height: 44px;
  border: 1px solid black;
}
#signImage-representative {
  width: 100% !important;
  height: 44px;
  border: 1px solid black;
}
</style>
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPatientForm" action="{{route('storeEmergencyActionPlan', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Emergency Situation:</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">In case of an emergency situation (Flood, Heavy Snow, Road Closure, COVID-19 Lockdown, etc.) where care staff unable to attend a call, in that situation who will support for a Service User.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Personal Care</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="personal_care_emergency" type="radio" id="personal_care_emergency" value="Carer Support" {{ old('personal_care_emergency', optional($emergencyActionPlan)->personal_care_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="personal_care_emergency" type="radio" id="personal_care_emergency" value="Independent" {{ old('personal_care_emergency', optional($emergencyActionPlan)->personal_care_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="personal_care_emergency" type="radio" id="personal_care_emergency" value="Family Support" {{ old('personal_care_emergency', optional($emergencyActionPlan)->personal_care_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="personal_care_emergency" type="radio" id="personal_care_emergency" value="NOK" {{ old('personal_care_emergency', optional($emergencyActionPlan)->personal_care_emergency) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Dietary Support</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="dietary_emergency" type="radio" id="dietary_emergency" value="Carer Support" {{ old('dietary_emergency', optional($emergencyActionPlan)->dietary_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="dietary_emergency" type="radio" id="dietary_emergency" value="Independent" {{ old('dietary_emergency', optional($emergencyActionPlan)->dietary_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="dietary_emergency" type="radio" id="dietary_emergency" value="Family Support" {{ old('dietary_emergency', optional($emergencyActionPlan)->dietary_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="dietary_emergency" type="radio" id="dietary_emergency" value="NOK" {{ old('dietary_emergency', optional($emergencyActionPlan)->dietary_emergency) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Medication</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="medication_emergency" type="radio" id="medication_emergency" value="Carer Support" {{ old('medication_emergency', optional($emergencyActionPlan)->medication_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="medication_emergency" type="radio" id="medication_emergency" value="Independent" {{ old('medication_emergency', optional($emergencyActionPlan)->medication_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="medication_emergency" type="radio" id="medication_emergency" value="Family Support" {{ old('medication_emergency', optional($emergencyActionPlan)->medication_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="medication_emergency" type="radio" id="medication_emergency" value="NOK" {{ old('medication_emergency', optional($emergencyActionPlan)->medication_emergency) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Transfer</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="transfer_emergency" type="radio" id="transfer_emergency" value="Carer Support" {{ old('transfer_emergency', optional($emergencyActionPlan)->transfer_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="transfer_emergency" type="radio" id="transfer_emergency" value="Independent" {{ old('transfer_emergency', optional($emergencyActionPlan)->transfer_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="transfer_emergency" type="radio" id="transfer_emergency" value="Family Support" {{ old('transfer_emergency', optional($emergencyActionPlan)->transfer_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="transfer_emergency" type="radio" id="transfer_emergency" value="NOK" {{ old('transfer_emergency', optional($emergencyActionPlan)->transfer_emergency) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Change Position in Bed</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="bed_position_emergency" type="radio" id="bed_position_emergency" value="Carer Support" {{ old('bed_position_emergency', optional($emergencyActionPlan)->bed_position_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="bed_position_emergency" type="radio" id="bed_position_emergency" value="Independent" {{ old('bed_position_emergency', optional($emergencyActionPlan)->bed_position_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="bed_position_emergency" type="radio" id="bed_position_emergency" value="Family Support" {{ old('bed_position_emergency', optional($emergencyActionPlan)->bed_position_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="bed_position_emergency" type="radio" id="bed_position_emergency" value="NOK" {{ old('bed_position_emergency', optional($emergencyActionPlan)->bed_position_emergency4a) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Shopping</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="shopping_emergency" type="radio" id="shopping_emergency" value="Carer Support" {{ old('shopping_emergency', optional($emergencyActionPlan)->shopping_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="shopping_emergency" type="radio" id="shopping_emergency" value="Independent" {{ old('shopping_emergency', optional($emergencyActionPlan)->shopping_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="shopping_emergency" type="radio" id="shopping_emergency" value="Family Support" {{ old('shopping_emergency', optional($emergencyActionPlan)->shopping_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="shopping_emergency" type="radio" id="shopping_emergency" value="NOK" {{ old('shopping_emergency', optional($emergencyActionPlan)->shopping_emergency) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Banking</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="banking_emergency" type="radio" id="banking_emergency" value="Carer Support" {{ old('banking_emergency', optional($emergencyActionPlan)->banking_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="banking_emergency" type="radio" id="banking_emergency" value="Independent" {{ old('banking_emergency', optional($emergencyActionPlan)->banking_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="banking_emergency" type="radio" id="banking_emergency" value="Family Support" {{ old('banking_emergency', optional($emergencyActionPlan)->banking_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="banking_emergency" type="radio" id="banking_emergency" value="NOK" {{ old('banking_emergency', optional($emergencyActionPlan)->banking_emergency) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>If Service User requires emergency support (accident/incident) who will be the responsible person to stay with them?</b></label>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-2">
                          <input class="form-check-input" name="accident_emergency" type="radio" id="accident_emergency" value="Carer Support" {{ old('accident_emergency', optional($emergencyActionPlan)->accident_emergency) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="accident_emergency" type="radio" id="accident_emergency" value="Independent" {{ old('accident_emergency', optional($emergencyActionPlan)->accident_emergency) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="accident_emergency" type="radio" id="accident_emergency" value="Family Support" {{ old('accident_emergency', optional($emergencyActionPlan)->accident_emergency) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="accident_emergency" type="radio" id="accident_emergency" value="NOK" {{ old('accident_emergency', optional($emergencyActionPlan)->accident_emergency) == 'NOK' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            NOK
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Other Important Information</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="other_info_details" rows="3">{{$emergencyActionPlan->other_info_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>SERVICE USER AGREEMENT:</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">NDH Care Ltd offer a comprehensive range of personal practical care services to empower you to continue living at home and to maintain the lifestyle of your own choosing with independence, respect whilst maintaining your safety and respect.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">We encourage you to keep direct lines of communication with us and it is important for us that you feel you are able to express yourself in an honest and open way, without fearing prejudice or discrimination.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Your care will be delivered according to national regulations such as the Care Act 2014.Whom Assessment Plan has been agreed by</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I verify that I have been consulted and have directed the assessment process according to desired level of care and outcomes. I can confirm that this assessment plan has been put together to provide specific tasks which will assist me in living more independently and to my fullest potential:</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What to do if I am unhappy about the services and how to complain</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Important contact numbers</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What to do when I want to change my care plan</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What to do when I wish to cancel a planned care visit</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What to do if my care worker has not arrived within 30 minutes of the care visit</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>What my agreed care plan contains and what I should expect from my carers</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>My Service User Guide and the term and conditions of my service</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>How the company and its staff will safeguard me from including gaining access to my home if I am unable to answer the door Any charges</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Data Consent</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I understand that inspectors from the Care Quality Commission / Leicester City Council may access service user records for the purpose of inspection. I am also aware that staff of the Accreditation Unit of the local authorities may ask to interview service users and view their files.</label>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-1 col-form-label"></label>
                      <div class="col-md-11">⦁ I do consent to staff of the local authority Accreditation Unit viewing the file held by NDH Care Limited which relates to the services received from them.</div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-1 col-form-label"></label>
                      <div class="col-md-11">⦁ I do consent to being interviewed by staff of the local authority CQC / LCC regarding the service received from NDH Care Limited.</div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-1 col-form-label"></label>
                      <div class="col-md-11">⦁ I understand that if I agree to an interview with staff of the CQC / LCC, social services then a friend, relative or advocate can be present during the interview.</div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-1 col-form-label"></label>
                      <div class="col-md-11">⦁ I do consent to NDH Care Limited retaining a file for the purposes of inspection after my service from NDH Care Limited has ceased.</div>
                    </div>
                    <div class="mb-3 row">
                      <label for="example-text-input" class="col-md-1 col-form-label"></label>
                      <div class="col-md-11">⦁ I or my advocate has read my care plan and believe it to be a true and accurate appraisal of my care needs, and that any risk assessments within my care plan are accurate.</div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Access and Key Safe</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I do consent to allow NDH Care Limited access to key safe code as necessary.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Electronic Call Monitoring</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">NDH Care Limited operates a call monitoring system which allows us to monitor our care staff in line with our lone working policy and to maintain our high standards of care delivery. The QR code on the front of your home file is designed for us to monitor call attendance and duration.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Thank you for accepting services offered by our organization.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">I confirm that we have carried out an assessment of your needs, and that we are able to provide the service which you require.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">NDH Care Limited will provide a copy of our service user's handbook which we are required to give you under Statutory Regulations, combined with some useful information about our service. The two copies of the Service User Agreement have been signed by a representative of NDH Care Limited.</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Please sign the providers copy</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                <thead>
                                  <tr>
                                    <td style="background-color:#74788d;color:#eff2f7;">Service User Name</td>
                                    <td style="background-color:#74788d;color:#eff2f7;">Date</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><input type="text" class="form-control" name="sevice_user_name" value="{{$emergencyActionPlan->sevice_user_name ?? ''}}"></td>
                                    <td><input type="date" class="form-control" name="date" value="{{$emergencyActionPlan->date ?? ''}}"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <h6>
                          <div class="text">Signature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary waves-effect waves-light" id="clear2">Clear</span></div>
                          <div class="sign signbox">
                            <div id="signImage-signature" style="width: 450px;height:160px; @if($emergencyActionPlan['signature'] == null) display:none; @else display:block; @endif">
                              <img src="{{ $emergencyActionPlan['signature'] }}" alt="Customer Signature">
                            </div>
                            <canvas id="serviceNowSign" width="450" height="150" style="@if($emergencyActionPlan['signature'] == null) display:block; @else display:none; @endif"></canvas>
                            <textarea id="signature" name="signature" style="display: none"></textarea>
                          </div>
                        </h6>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>(If a citizen cannot be able to sign then citizen’s representative can give their consent behalf of the citizen. Must have valid reason/document (Mental capacity confirmation report or power of attorney / Confirmation from the social worker or other professional) to conform that citizen’s representative can give consent behalf of the citizen.)</b></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Reason:</label>
                        <div class="col-md-10">
                          <textarea class="form-control" name="reason" rows="2">{{$emergencyActionPlan->reason ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                <thead>
                                  <tr>
                                    <td style="background-color:#74788d;color:#eff2f7;">Representative Name</td>
                                    <td style="background-color:#74788d;color:#eff2f7;">Relationship with Service User</td>
                                    <td style="background-color:#74788d;color:#eff2f7;">Date</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><input type="text" class="form-control" name="representative_name" value="{{$emergencyActionPlan->representative_name ?? ''}}"></td>
                                    <td><input type="text" class="form-control" name="relationship_with_user" value="{{$emergencyActionPlan->relationship_with_user ?? ''}}"></td>
                                    <td><input type="date" class="form-control" name="representative_date" value="{{$emergencyActionPlan->representative_date ?? ''}}"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <h6>
                          <div class="text">Signature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary waves-effect waves-light" id="clear1">Clear</span></div>
                          <div class="sign signbox">
                            <div id="signImage-representative" style="width: 450px; height: 160px; @if($emergencyActionPlan['representative_signature'] == null) display:none; @else display:block; @endif">
                              <img src="{{ $emergencyActionPlan['representative_signature'] }}" alt="Customer Signature">
                            </div>
                            <canvas id="representativeNowSign" width="450" height="150" style="@if($emergencyActionPlan['representative_signature'] == null) display:block; @else display:none; @endif"></canvas>
                            <textarea id="representative_signature" name="representative_signature" style="display: none"></textarea>
                          </div>
                        </h6>
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-12 col-form-label"><b>Details of a person gaining consent (behalf of the NDH Care Ltd)</b></label>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                <thead>
                                  <tr>
                                    <td style="background-color:#74788d;color:#eff2f7;">Staff Name</td>
                                    <td style="background-color:#74788d;color:#eff2f7;">Date</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><input type="text" class="form-control" name="gaining_name" value="{{$emergencyActionPlan->gaining_name ?? ''}}"></td>
                                    <td><input type="date" class="form-control" name="gaining_date" value="{{$emergencyActionPlan->gaining_date ?? ''}}"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <h6>
                          <div class="text">Signature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary waves-effect waves-light" id="clear">Clear</span></div>
                          <div class="sign signbox">
                            <div id="signImage" style="width: 450px;height:160px; @if($emergencyActionPlan['gaining_signature'] == null) display:none; @else display:block; @endif">
                              <img src="{{ $emergencyActionPlan['gaining_signature'] }}" alt="Customer Signature">
                            </div>
                            <canvas id="gainingNowSign" width="450" height="150" style="@if($emergencyActionPlan['gaining_signature'] == null) display:block; @else display:none; @endif"></canvas>
                            <textarea id="gaining_signature" name="gaining_signature" style="display: none"></textarea>
                          </div>
                        </h6>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
      var canvas = document.getElementById("gainingNowSign");

      var signaturePad = new SignaturePad(canvas, {
        backgroundColor: "white",
        penColor: "black",
        minWidth: 2,
        maxWidth: 4,
      });

      $('#clear').click(function(e) {
        e.preventDefault();
        signaturePad.clear();
        $('#signImage').hide();
        $('#gainingNowSign').show();
      });

      var canvas1 = document.getElementById("representativeNowSign");
      var signaturePad1 = new SignaturePad(canvas1, {
        backgroundColor: "white",
        penColor: "black",
        minWidth: 2,
        maxWidth: 4,
      });

      $('#clear1').click(function(e) {
        e.preventDefault();
        signaturePad1.clear();
        $('#signImage-representative').hide();
        $('#representativeNowSign').show();
      });

      var canvas2 = document.getElementById("serviceNowSign");
      var signaturePad2 = new SignaturePad(canvas2, {
        backgroundColor: "white",
        penColor: "black",
        minWidth: 2,
        maxWidth: 4,
      });

      $('#clear2').click(function(e) {
        e.preventDefault();
        signaturePad2.clear();
        $('#signImage-signature').hide();
        $('#serviceNowSign').show();
      });

      $('form').submit(function(e) {
          e.preventDefault();
          var payNowSignDataUrl = signaturePad.isEmpty() ? null : signaturePad.toDataURL();
          $('#gaining_signature').val(payNowSignDataUrl);

          var representativeSignDataUrl = signaturePad1.isEmpty() ? null : signaturePad1.toDataURL();
          $('#representative_signature').val(representativeSignDataUrl);

          var SignDataUrl = signaturePad2.isEmpty() ? null : signaturePad2.toDataURL();
          $('#signature').val(SignDataUrl);

          this.submit();
      });
    });
</script>
@endsection