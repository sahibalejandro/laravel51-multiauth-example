@extends('layout')

@section('type')
    <body class="skin-blue-light">
    <div class="wrapper">

        <!-- Main header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <!-- Mini logo for sidebar mini -->
                <span class="logo-mini">AD</span>

                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Admin Dashboard</span>
            </a>

            <!-- Header navbar -->
            <nav class="navbar navbar-static-top" role="navigation">

                <!-- Sidebar toggle button -->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <!-- Navbar Right menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="hidden-xs">{{ Session::get('adminfullname') }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{asset('/assets/img/placeholder-person.jpg')}}" class="img-circle" alt="User Image" />
                                    <p>
                                        {{ Session::get('adminfullname')  }} - Administrator
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div>
                                        <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat center-block">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side navigation -->
        <aside class="main-sidebar">
            <section class="sidebar">

                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('assets/img/placeholder-person.jpg')}}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>{{ Session::get('adminfullname') }}</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar menu -->
                <ul class="sidebar-menu">
                    <li class="header">General</li>

                    <li class="item">
                        <a href="{{ route('admin.home') }}" >
                            <i class="fa fa-home"></i> <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('contentheader')
            @yield('content')
        </div>

        <!-- required JS scripts -->
        <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        @yield('javascripts');
    </div>
@endsection