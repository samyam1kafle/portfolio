@extends('BackEnd.layers.master')
@section('section')
    <div class="content-wrapper" style="min-height: 600px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Experience Data Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Experience</li>
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
                            <h3 class="card-title">Experiences</h3>
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
                                                    style="width: 212px;">Experience Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Worked For
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Worked from
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Worked To
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Description
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 212px;">Position
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

                                            @foreach($experiences as $exp)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$exp->id}}</td>
                                                    <td>{{$exp->name}}</td>
                                                    <td>{{$exp->worked_for}}</td>
                                                    <td>{{$exp->worked_from}}</td>
                                                    <td>{{$exp->worked_to}}</td>
                                                    <td>{!!str_limit($exp->description,300)!!}</td>
                                                    <td>{{$exp->position}}</td>

                                                    <td>
                                                        <form action="{{route('experience.edit',$exp->id)}}"
                                                              method="GET">
                                                            {{method_field('PUT')}}
                                                            {{csrf_field()}}
                                                            <button type="submit" class="bg-success"><span
                                                                        class="fa fa-pencil"></span>

                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('experience.destroy',$exp->id)}}"
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
                                                <th rowspan="1" colspan="1">Experience Name</th>
                                                <th rowspan="1" colspan="1">Worked For</th>
                                                <th rowspan="1" colspan="1">Worked From</th>
                                                <th rowspan="1" colspan="1">Worked To</th>
                                                <th rowspan="1" colspan="1">Description</th>
                                                <th rowspan="1" colspan="1">Position</th>
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