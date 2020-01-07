@extends('BackEnd.layers.master')
@section('section')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Contact Info</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin-index')}}">Home</a></li>
                            <li class="breadcrumb-item active">contact-info</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        {{Session::flash('Error',$error)}}
                    @endforeach
                @endif
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Info</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('contact-info.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Primary Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="primary_email"
                                               placeholder="xxx@email.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Secondary Email address (Optional)</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="xxx@email.com" name="secondary_email">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                               placeholder="4879516243" name="mobile">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Landine (Optional)</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                               placeholder="1254879548" name="landline">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Primary Location</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Kadaghari" name="location_1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Secondary Location (Optional)</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Thimi" name="location_2">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection