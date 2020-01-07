@section('nav')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('fe-home')}}" class="nav-link">Home</a>
            </li>

        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-user-secret"></i>
                    {{--<span class="badge badge-warning navbar-badge">2</span>--}}
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">settings</span>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('profile.index')}}" class="dropdown-item">
                        <i class="fa fa-id-card mr-2"></i>Visit Profile
                        {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{route('log-out')}}" class="dropdown-item">
                        <i class="fa fa-sign-out mr-2"></i>Sign out
                        {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
                    </a>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->



    @endsection