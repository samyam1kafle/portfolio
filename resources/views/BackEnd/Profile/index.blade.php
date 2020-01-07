@extends('BackEnd.layers.master')
@section('section')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="{{asset('uploads/' . $user->image)}}"
                                         alt="User profile picture" width="150px" height="100">
                                </div>

                                <h3 class="profile-username text-center">{{$user->name}}</h3>

                                <p class="text-muted text-center">Software Developer</p>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fa fa-book mr-1"></i> Education</strong>

                                <p class="text-muted">
                                    B.S. in Computer Science from the University of Tennessee at Knoxville
                                </p>

                                <hr>

                                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong><br>
                                @foreach($contacts as $cont)
                                    <p class="text-muted">{{$cont->location_1}}</p>
                                    <p class="text-muted">{{$cont->location_2}}</p>
                                @endforeach
                                <hr>

                                <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                                <p class="text-muted">
                                    @foreach($skills as $skill)
                                        <span class="tag tag-danger">{{$skill->name}}</span>
                                    @endforeach
                                </p>

                                <hr>

                                <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                                <p class="text-muted">{{$user->introduction}}</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">

                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                                            data-toggle="tab">Settings</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal" action="{{route('profile.update',$user->id)}}"
                                              method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="PUT">
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name" id="inputName"
                                                           value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                           id="inputEmail"
                                                           value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Password" class="col-sm-2 control-label">Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password"
                                                           id="password"
                                                           placeholder="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="con_Password" class="col-sm-2 control-label">Confirm
                                                    Password</label>

                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control"
                                                           name="password_confirmation"
                                                           id="con_password"
                                                           placeholder="Confirm password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="introduction"
                                                       class="col-sm-2 control-label">Introduction</label>

                                                <textarea name="introduction" id="editor" cols="auto"
                                                          rows="auto">{{$user->introduction}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="image" class="col-sm-2 control-label">Image</label>

                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="image" name="image">
                                                    <hr>
                                                    @if($user->image != null)
                                                        <img src="{{asset('uploads/'.$user->image)}}" alt="user_image"
                                                             width="100" height="100">
                                                    @endif
                                                </div>
                                            </div>
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection