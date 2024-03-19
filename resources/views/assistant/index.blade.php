@extends('layouts.master')

@section('title') Assistant List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title') Assistant List @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <!--<th>Action</th>-->
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
            ajax: "{{ route('getAssistant') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'formatted_date', name: 'formatted_date'},
                // {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        function setDelete(id) {
            var con=confirm("Are you sure you want to delete?");
            if(con){
                $.ajax({
                    type:'DELETE',
                    url:'/patient/'+ id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success:function(data) {
                        $('.yajra-datatable').DataTable().ajax.reload();
                    },
                    error: function (msg) {
                      console.log(msg);
                    }
                });
            }
        }
    </script>
@endsection
