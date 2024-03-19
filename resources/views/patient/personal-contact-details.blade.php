@extends('layouts.master')

@section('title') Patient Personal Contact Details @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Patient Personal Contact Details @endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection
<style>
    /* table, th, td {
        border: 1px solid black;
    }
    table{
        width: 100%;
    } */
    td, input[type='checkbox'] {
        text-align: center;
        margin-top: 10px;
    }
    td, input[type='text'] {
        width: -webkit-fill-available;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="createPersonalForm" action="{{route('storePersonalContact', $patient->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Citizen Name</label>
                                <input type="text" value="{{$patientDetails->citizen_name ?? ''}}" name="citizen_name" class="form-control" id="citizen_name" placeholder="Enter Citizen Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Preferred To Call</label>
                                <input type="text" value="{{$patientDetails->preferred_to_call ?? ''}}" name="preferred_to_call" class="form-control" id="preferred_to_call" placeholder="Enter Preferred To Call">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Address</label>
                                <textarea class="form-control" name="address" placeholder="" rows="2">{{$patientDetails->address ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Date of Birth</label>
                                <input type="date" value="{{$patientDetails->dob ?? ''}}" name="dob" class="form-control" id="dob" placeholder="Enter Date of Birth">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Current Gender:</label>
                                <input type="text" value="{{$patientDetails->current_gender ?? ''}}" name="current_gender" class="form-control" id="current_gender" placeholder="Enter Current Gender">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Ethnicity</label>
                                <input type="text" value="{{$patientDetails->ethnicity ?? ''}}" name="ethnicity" class="form-control" id="ethnicity" placeholder="Enter Ethnicity">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Sex Assigned at Birth</label>
                                <input type="text" value="{{$patientDetails->sex_assigned_birth ?? ''}}" name="sex_assigned_birth" class="form-control" id="sex_assigned_birth" placeholder="Enter Sex Assigned at Birth">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Language Known</label>
                                <input type="text" value="{{$patientDetails->language_know ?? ''}}" name="language_know" class="form-control" id="language_know" placeholder="Enter Language Known">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Landline</label>
                                <input type="text" value="{{$patientDetails->landline ?? ''}}" name="landline" class="form-control" id="landline" placeholder="Enter Landline">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Mobile</label>
                                <input type="number" min="0" value="{{$patientDetails->mobile ?? ''}}" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">General Practitioner (GP) Details</label>
                                <input type="text" value="{{$patientDetails->general_practitioner ?? ''}}" name="general_practitioner" class="form-control" id="general_practitioner" placeholder="Enter General Practitioner (GP) Details">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Pharmacy Details</label>
                                <input type="text" value="{{$patientDetails->pharmacy_details ?? ''}}" name="pharmacy_details" class="form-control" id="pharmacy_details" placeholder="Enter Pharmacy Details">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Next of Kin / Emergency Contact Details</label><br>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Contact 1</th>
                                            <th>Contact 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td><input type="text" value="{{$patientDetails->contact1_name ?? ''}}" class="form-control" name="contact1_name" autocomplete="off"></td>
                                            <td><input type="text" value="{{$patientDetails->contact2_name ?? ''}}" class="form-control" name="contact2_name" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <td>Relationship With Citizen</td>
                                            <td><input type="text" value="{{$patientDetails->contact1_relationship_citizen ?? ''}}" class="form-control" name="contact1_relationship_citizen" autocomplete="off"></td>
                                            <td><input type="text" value="{{$patientDetails->contact2_relationship_citizen ?? ''}}" class="form-control" name="contact2_relationship_citizen" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td><input type="text" value="{{$patientDetails->contact1_address ?? ''}}" class="form-control" name="contact1_address" autocomplete="off"></td>
                                            <td><input type="text" value="{{$patientDetails->contact2_address ?? ''}}" class="form-control" name="contact2_address" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number</td>
                                            <td><input type="number" value="{{$patientDetails->contact1_contact_number ?? ''}}" class="form-control" name="contact1_contact_number" autocomplete="off"></td>
                                            <td><input type="number" value="{{$patientDetails->contact2_contact_number ?? ''}}" class="form-control" name="contact2_contact_number" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <td>Email Address</td>
                                            <td><input type="email" value="{{$patientDetails->contact1_email ?? ''}}" class="form-control" name="contact1_email" autocomplete="off"></td>
                                            <td><input type="email" value="{{$patientDetails->contact2_email ?? ''}}" class="form-control" name="contact2_email" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <td>Wish To Be Contact Day Or Night</td>
                                            <td><input type="text" value="{{$patientDetails->contact1_contact_day_or_night ?? ''}}" class="form-control" name="contact1_contact_day_or_night" autocomplete="off"></td>
                                            <td><input type="text" value="{{$patientDetails->contact2_contact_day_or_night ?? ''}}" class="form-control" name="contact2_contact_day_or_night" autocomplete="off"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <label for="basicpill-firstname-input"><b>Social Services Details</b></label>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Name</label>
                                <input type="text" value="{{$patientDetails->social_name ?? ''}}" class="form-control" name="social_name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Contact No</label>
                                <input type="number" value="{{$patientDetails->social_contact ?? ''}}" class="form-control" name="social_contact">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Email</label>
                                <input type="text" value="{{$patientDetails->social_email ?? ''}}" class="form-control" name="social_email">
                            </div>
                        </div>
                    </div>
                    <br>
                    <label for="basicpill-firstname-input"><b>Community Health Professionals</b></label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">District Nurse</label>
                                <input type="text" value="{{$patientDetails->district_nurse ?? ''}}" class="form-control" name="district_nurse">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                                <label for="basicpill-firstname-input">Person / Care First ID</label>
                                <input type="text" value="{{$patientDetails->person_care_first_id ?? ''}}" name="person_care_first_id" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">NHS No</label>
                                <input type="text" value="{{$patientDetails->nhs_no ?? ''}}" name="nhs_no" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Care Service Start Date</label>
                                <input type="date" value="{{$patientDetails->care_service_start_date ?? ''}}" name="care_service_start_date" class="form-control">
                            </div>
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