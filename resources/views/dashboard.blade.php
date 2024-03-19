@extends('layouts.master')

@section('title') @lang('translation.Saas') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboards @endslot
@slot('title') Dashboards @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <a href="dashboards?city=details">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-copy-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total City</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>6</h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"></span> <span class="ms-2 text-truncate"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <a href="dashboards?branch=details">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-copy-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Branch</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>7</h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"></span><span class="ms-2 text-truncate"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-archive-in"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Total User</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{$userCount}}</h4>
                            <div class="d-flex">
                                <span class="badge badge-soft-success font-size-12"></span><span class="ms-2 text-truncate"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-purchase-tag-alt"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Total Kit</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{$kitTotal}}</h4>
                            <div class="d-flex">
                                <span class="badge badge-soft-warning font-size-12"></span><span class="ms-2 text-truncate"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->
@if (count($cityDetails) > 0)
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">City</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                @foreach ($cityDetails as $details)
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-copy-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">{{$details->city}}</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>{{$details->count ?? 0}}</h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"></span> <span class="ms-2 text-truncate"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
    </div>
@endif
@if (count($branchDetails) > 0)
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Branch</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="row">
        @foreach ($branchDetails as $details)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-copy-alt"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">{{$details->branch}}</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{$details->count ?? 0}}</h4>
                            <div class="d-flex">
                                <span class="badge badge-soft-success font-size-12"></span> <span class="ms-2 text-truncate"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end row -->
    </div>
</div>
@endif
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Saas dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/saas-dashboard.init.js') }}"></script>
@endsection