@extends('BackEnd.layers.master')
@section('section')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin-index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">



                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->


                    <div class="col-md-4">
                        <!-- Info Boxes Style 2 -->
                        <div class="info-box mb-3 bg-warning">
                            <span class="info-box-icon"><i class="fa fa-bomb"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Contact Info</span>
                                <span class="info-box-number">Total Info : {{$contact}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-success">
                            <span class="info-box-icon"><i class="fa fa-bomb"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Roles Info</span>
                                <span class="info-box-number">Total Info : {{$role}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-danger">
                            <span class="info-box-icon"><i class="fa fa-bomb"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Skills Info</span>
                                <span class="info-box-number">Total Info : {{$skills}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-info">
                            <span class="info-box-icon"><i class="fa fa-bomb"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Works Info</span>
                                <span class="info-box-number">Total Info : {{$work}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>

                        <div class="info-box mb-3 bg-primary">
                            <span class="info-box-icon"><i class="fa fa-bomb"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Experience Info</span>
                                <span class="info-box-number">Total Info : {{$exp}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


@endsection




