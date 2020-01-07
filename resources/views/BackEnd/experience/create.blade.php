@extends('BackEnd.layers.master')
@section('section')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Experience Info</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin-index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Experience-info</li>
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
                                <h3 class="card-title">Add Experience Info</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('experience.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Exp Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                               placeholder="javaScript,Fullstack Developer,etc">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Worked For</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="Company name : GCN , NextNepal ,etc" name="worked_for">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Worked From</label>
                                        <input type="date" class="form-control" id="fdt"
                                               placeholder="dd-mm-yyyy" name="worked_from">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Worked to</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1"
                                               placeholder="mm-dd-yyyy" name="worked_to">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="eg : Sr developer,mid-level developer,etc" name="position">
                                    </div>

                                    <div class="form-group">
                                        <label for="editor">Experience Descriptions</label>

                                        <textarea name="description" id="editor" cols="auto" rows="auto"
                                                  placeholder="Experience Specification Here"></textarea>
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