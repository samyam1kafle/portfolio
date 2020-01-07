@extends('BackEnd.layers.master')
@section('section')
    <div class="content-wrapper" style="min-height: 600px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact-Info</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contacts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                               role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending"
                                                    style="width: 161px;">ID
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Primary Location
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Mobile
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Primary Email
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending"
                                                    style="width: 197px;">Created At
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending"
                                                    style="width: 135px;">Updated At
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Update: activate to sort column ascending"
                                                    style="width: 135px;">Update
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Delete: activate to sort column ascending"
                                                    style="width: 135px;">Delete
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($details as $detail)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$detail->id}}</td>
                                                    <td>{{$detail->location_1}}</td>
                                                    <td>{{$detail->mobile}}</td>
                                                    <td>{{$detail->primary_email}}</td>
                                                    <td>{{$detail->created_at}}</td>
                                                    <td>{{$detail->updated_at}}</td>
                                                    <td>
                                                        <form action="{{route('contact-info.edit',$detail->id)}}"
                                                              method="GET">
                                                            {{method_field('PUT')}}
                                                            {{csrf_field()}}
                                                            <button type="submit" class="bg-success"><span
                                                                        class="fa fa-pencil"></span>

                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('contact-info.destroy',$detail->id)}}"
                                                              method="POST">
                                                            {{method_field('DELETE')}}
                                                            {{csrf_field()}}
                                                            <button type="submit" class="bg-danger">
                                                                <span class="fa fa-trash-o"></span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">ID</th>
                                                <th rowspan="1" colspan="1">Primary Location</th>
                                                <th rowspan="1" colspan="1">Mobile</th>
                                                <th rowspan="1" colspan="1">Primary Email</th>
                                                <th rowspan="1" colspan="1">Created At</th>
                                                <th rowspan="1" colspan="1">Updated At</th>
                                                <th rowspan="1" colspan="1">Update</th>
                                                <th rowspan="1" colspan="1">Delete</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


@endsection