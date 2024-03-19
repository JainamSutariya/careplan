@extends('layouts.master')

@section('title') Patient Details @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Forms @endslot
@slot('title') Edit Patient @endslot
@endcomponent
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="editPatientForm" action="{{route('patient.update', $patient->id)}}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="basicpill-firstname-input" placeholder="Enter Your First Name" autocomplete="off" value="{{$patient->first_name}}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="basicpill-firstname-input" placeholder="Enter Your Last Name" autocomplete="off" value="{{$patient->last_name}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Mobile Number</label>
                                <input type="number" name="mobile_no" class="form-control" id="basicpill-firstname-input" placeholder="Enter Your Mobile Number" autocomplete="off" value="{{$patient->mobile_no}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Email</label>
                                <input type="email" name="email" class="form-control" id="basicpill-firstname-input" placeholder="Enter Your Email" autocomplete="off" required value="{{$patient->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Address</label>
                                <textarea class="form-control" name="address" id="example-text-input" required>{{$patient->address}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3" id="datepicker1">
                                <label for="basicpill-firstname-input">Date Of Birth</label>
                                <input type="text" name="dob" class="form-control" id="dob" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-provide="datepicker" data-date-autoclose="true" autocomplete="off" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $patient->dob)->format('d-m-Y') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-checkbox-input" class="col-md-2 col-form-label">Status</label>
                        <div class="col-md-10">
                            <input type="checkbox" id="switch1" value="{{ $patient->status }}" name="status" class="status" switch="none"{{@$patient->status ? "checked" : ''}}/>
                            <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="basicpill-firstname-input">Assign To Assistant</label>
                                 <select class="form-control form-select" name="user_id" id="user_id">
                                    <option value="">Please select Assistant</option>
                                    @foreach ($assistantList as $val)
                                    <option value="{{$val->id}}" @if ($val->id == $patient->user_id) selected @endif>{{$val->name}}</option>
                                    @endforeach
                                </select>
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
    $("#editPatientForm").validate({
        rules: {
            mobile_no: {
                minlength: 11,
                maxlength: 11
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>
@endsection