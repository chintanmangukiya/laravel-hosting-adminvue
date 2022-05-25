@extends('layouts.main')


<style>
    .btn-bgcol {
        background-color: #03a9f3;
        border: #03a9f3;
    }

    .btn-col {
        color: aliceblue;
    }

</style>

@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">User</h4>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    {{-- <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p> --}}
                    {{-- <button class="btn btn-primary pull-right btn-bgcol">
                        <a href="{{ route('users.create') }}" class="btn-col"> Create </a>
                    </button> --}}
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    {{-- <th>First Name</th>
                                    <th>Last Name</th> --}}
                                    <th>Type</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listUser as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        {{-- <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td> --}}
                                        <td>
                                            <span
                                                class="label label-success">{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</span>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                });
                // Order by the grouping
                // $('#example tbody').on('click', 'tr.group', function() {
                //     var currentOrder = table.order()[0];
                //     if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                //         table.order([2, 'desc']).draw();
                //     } else {
                //         table.order([2, 'asc']).draw();
                //     }
                // });
            });
        });
    </script>
@endsection
