@section('slider')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        {{--<a href="index3.html" class="brand-link">--}}
            {{--<img src="{{asset('BackEnd/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"--}}
                 {{--class="brand-image img-circle elevation-3"--}}
                 {{--style="opacity: .8">--}}
            {{--<span class="brand-text font-weight-light">AdminLTE 3</span>--}}
        {{--</a>--}}

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('uploads/'.Auth::user()->image)}}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{route('admin-index')}}" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-address-card"></i>
                            <p>
                                Contact info
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('contact-info.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>View Info</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('contact-info.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Info</p>
                                </a>
                            </li>

                        </ul>



                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-registered"></i>
                            <p>
                                Roles info
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('roles.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>View roles</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('roles.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add roles</p>
                                </a>
                            </li>

                        </ul>



                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-certificate"></i>
                            <p>
                                Skills info
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('skills.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>View skills</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('skills.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add skills</p>
                                </a>
                            </li>

                        </ul>



                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-briefcase"></i>
                            <p>
                                Works info
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('works.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>View Works</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('works.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Work Links</p>
                                </a>
                            </li>

                        </ul>



                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-briefcase"></i>
                            <p>
                                Experiences
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('experience.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>View Experiences</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('experience.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Experiences</p>
                                </a>
                            </li>

                        </ul>



                    </li>

                    {{--<li class="nav-header">Date</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a href="pages/calendar.html" class="nav-link">--}}
                            {{--<i class="nav-icon fa fa-calendar"></i>--}}
                            {{--<p>--}}
                                {{--Calendar--}}
                                {{--<span class="badge badge-info right">2</span>--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection