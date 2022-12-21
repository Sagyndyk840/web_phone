<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/admin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.css') }}">
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.logout') }}">Logout</a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('template/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->login }}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item ">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : ''  }}">
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('admin.person.index') }}" class="nav-link {{ request()->routeIs('admin.person.index', 'admin.person.create') ? 'active' : ''  }}">
                            <p>
                                Peoples
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('admin.organization.index') }}" class="nav-link {{ request()->routeIs('admin.organization.index', 'admin.organization.create') ? 'active' : ''  }}">
                            <p>
                                Organizations
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('admin.subscription.index') }}" class="nav-link {{ request()->routeIs('admin.subscription.index', 'admin.subscription.create') ? 'active' : ''  }}">
                            <p>
                                Subscriptions
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
@livewireScripts
<script src="{{ asset('template/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<script src="{{ asset('template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ asset('template/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('template/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('template/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('template/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('template/admin/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('template/admin/dist/js/demo.js') }}"></script>
<script src="{{ asset('template/admin/dist/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
</body>
</html>
