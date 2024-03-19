@extends('layouts.master')

@section('title') Extra Needs @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Care Plan @endslot
@slot('title') Extra Needs
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
                <form method="post" id="createPatientForm" action="{{route('storeExtraNeed', $patient->id)}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Shopping</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="shopping_details" rows="3">{{$extraNeed->shopping_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Support Required:</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="shopping_support" type="radio" id="shopping_support" value="Independent" {{ old('shopping_support', optional($extraNeed)->shopping_support) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="shopping_support" type="radio" id="shopping_support" value="Family Support" {{ old('shopping_support', optional($extraNeed)->shopping_support) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="shopping_support" type="radio" id="shopping_support" value="Carer Support" {{ old('shopping_support', optional($extraNeed)->shopping_support) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="shopping_support" type="radio" id="shopping_support" value="Required carer supervision" {{ old('shopping_support', optional($extraNeed)->shopping_support) == 'Required carer supervision' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Required carer supervision
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Weekly Limit of Shopping</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="weekly_shopping_limit" value="{{$extraNeed->weekly_shopping_limit ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Who will pay for Shopping?</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="who_shopping_pay" value="{{$extraNeed->who_shopping_pay ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Where to keep the receipt?</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="shopping_receipt" value="{{$extraNeed->shopping_receipt ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Laundry</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="laundry_details" rows="2">{{$extraNeed->laundry_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Support Required:</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="laundry_support" type="radio" id="laundry_support" value="Independent" {{ old('laundry_support', optional($extraNeed)->laundry_support) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="laundry_support" type="radio" id="laundry_support" value="Family Support" {{ old('laundry_support', optional($extraNeed)->laundry_support) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="laundry_support" type="radio" id="laundry_support" value="Carer Support" {{ old('laundry_support', optional($extraNeed)->laundry_support) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="laundry_support" type="radio" id="laundry_support" value="Required carer supervision" {{ old('laundry_support', optional($extraNeed)->laundry_support) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Required carer supervision
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Washing Machine Location:</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="washing_machine_location" value="{{$extraNeed->washing_machine_location ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Do you need support to take the laundry outside?</label>
                        <div class="col-md-3">
                          <input class="form-check-input" name="laundry_outside" type="radio" id="laundry_outside" value="Yes" {{ old('laundry_outside', optional($extraNeed)->laundry_outside) == 'Yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Yes
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="laundry_outside" type="radio" id="laundry_outside" value="No" {{ old('laundry_outside', optional($extraNeed)->laundry_outside) == 'No' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            No
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Closest Location of Laundry</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="closest_location_laundry" value="{{$extraNeed->closest_location_laundry ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Who will pay for laundry?</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="pay_laundry" value="{{$extraNeed->pay_laundry ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Where to keep the laundry receipt?</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="laundry_receipt" value="{{$extraNeed->laundry_receipt ?? ''}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Cleaning</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="cleaning_details" rows="3">{{$extraNeed->cleaning_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Support Required:</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="cleaning_support" type="radio" id="cleaning_support" value="Independent" {{ old('cleaning_support', optional($extraNeed)->cleaning_support) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="cleaning_support" type="radio" id="cleaning_support" value="Family Support" {{ old('cleaning_support', optional($extraNeed)->cleaning_support) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="cleaning_support" type="radio" id="cleaning_support" value="Carer Support" {{ old('cleaning_support', optional($extraNeed)->cleaning_support) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="cleaning_support" type="radio" id="cleaning_support" value="Required carer supervision" {{ old('cleaning_support', optional($extraNeed)->cleaning_support) == 'Required carer supervision' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Required carer supervision
                          </label>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Other Details:</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="other_details" rows="2">{{$extraNeed->other_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Banking Support Requirement:</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="banking_support_details" rows="3">{{$extraNeed->banking_support_details ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Support Required:</label>
                        <div class="col-md-2">
                          <input class="form-check-input" name="banking_support" type="radio" id="banking_support" value="Independent" {{ old('banking_support', optional($extraNeed)->banking_support) == 'Independent' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Independent
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="banking_support" type="radio" id="banking_support" value="Family Support" {{ old('banking_support', optional($extraNeed)->banking_support) == 'Family Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Family Support
                          </label>
                        </div>
                        <div class="col-md-2">
                          <input class="form-check-input" name="banking_support" type="radio" id="banking_support" value="Carer Support" {{ old('banking_support', optional($extraNeed)->banking_support) == 'Carer Support' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Carer Support
                          </label>
                        </div>
                        <div class="col-md-3">
                          <input class="form-check-input" name="banking_support" type="radio" id="banking_support" value="Required carer supervision" {{ old('banking_support', optional($extraNeed)->banking_support) == 'Required carer supervision' ? 'checked' : '' }}>
                          <label class="form-check-label" for="toast-type-radio1">
                            Required carer supervision
                          </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Please take more information and give details to the office:</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="information_details_office" rows="3">{{$extraNeed->information_details_office ?? ''}}</textarea>
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