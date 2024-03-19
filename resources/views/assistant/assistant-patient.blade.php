@extends('layouts.master')

@section('title') Patient List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title') Patient List @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <!--<div class="card-body">
                    <a href="{{route('patient.create')}}" class="btn btn-primary w-md" style="float:right">Add New Patient Enquiry</a>
                </div>-->
                <div class="card-body">
                    <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Date Of Birth</th>
                                <th>Status</th>
                                <th>Care Plan</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
    <script>
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('getAssistantPatientList') }}",
            columns: [
                {data: 'first_name', name: 'first_name'},
                {data: 'mobile_no', name: 'mobile_no'},
                {data: 'email', name: 'email'},
                {data: 'dob', name: 'dob'},
                {data: 'status', name: 'status'},
                {data: 'button', name: 'button'},
            ]
        });
    </script>
@endsection
