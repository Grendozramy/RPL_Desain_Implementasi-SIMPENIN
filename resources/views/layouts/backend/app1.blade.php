<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard &mdash; SIMPENIN</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

</head>

<body style="background: #e2e8f0">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar"> 
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <div class="navbar-header mx-auto d-flex justify-content-center">
                    <a class="navbar-brand mx-auto" href="" style="color: #6777EF">
                        <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" height="50px">
                        SISTEM PENDATAAN IMUNISASI
                    </a>
                </div>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/kozak.jpg') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block " style="color: #6777EF">Hi, {{ auth()->user()->name }}</div>
                        </a>  
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('user.showAuthUser') }}" class="dropdown-item">
                                <i class="fas fa-fw fa-user mr-2"></i> Profile
                            </a>
                            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('admin.dashboard.index') }}" style="color: #6777EF">SIMPENIN</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ route('admin.dashboard.index') }}"><img src="{{ asset('assets/img/logo.jpg') }}" alt="" height="50px"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MAIN MENU</li>
                        <li class="{{ setActive('admin/dashboard') }}"><a class="nav-link"
                                href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a></li>
                        @can('anak.index')
                        <li class="{{ setActive('admin/anak') }}"><a class="nav-link"
                                href="{{ route('admin.anak.index') }}"><i class="fas fa-child"></i>
                                <span>Informasi Data Anak</span></a></li>
                        @endcan

                        @can('petugas.index')
                        <li class="{{ setActive('admin/petugas') }}"><a class="nav-link"
                                href="{{ route('admin.petugas.index') }}"><i class="fas fa-user-md"></i>
                                <span>Petugas</span></a></li>
                        @endcan

                        <li
                            class="dropdown {{ setActive('admin/posyandu'). setActive('admin/jadwal')}}">
                            @if(auth()->user()->can('posyandu.index') || auth()->user()->can('jadwal.index'))
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book-open"></i>
                                    <span>Data Imunisasi</span></a>
                            @endif

                            <ul class="dropdown-menu">
                                @can('posyandu.index')
                                    <li class="{{ setActive('admin/posyandu') }}"><a class="nav-link"
                                        href="{{ route('admin.posyandu.index') }}"><i class="fas fa-hospital"></i>Posyandu</a>
                                </li>
                                @endcan

                                @can('jadwal.index')
                                    <li class="{{ setActive('admin/jadwal') }}"><a class="nav-link"
                                    href="{{ route('admin.jadwal.index') }}"><i class="fas fa-calendar"></i>
                                    Jadwal Imunisasi</a></li>
                                @endcan
                            </ul>
                        </li>

                        @can('gizi.index')
                        <li class="{{ setActive('admin/gizi') }}"><a class="nav-link"
                                href="{{ route('admin.gizi.index') }}"><i class="fas fa-medkit"></i>
                                <span>Status Gizi</span></a></li>
                        @endcan

                        @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                        <li class="menu-header">PENGATURAN</li>
                        @endif

                        <li
                            class="dropdown {{ setActive('admin/role'). setActive('admin/permission'). setActive('admin/user') }}">
                            @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cogs"></i><span>Users
                                Management</span></a>
                            @endif

                            <ul class="dropdown-menu">
                                @can('roles.index')
                                    <li class="{{ setActive('admin/role') }}"><a class="nav-link"
                                        href="{{ route('admin.role.index') }}"><i class="fas fa-unlock"></i> Roles</a>
                                </li>
                                @endcan

                                @can('permissions.index')
                                    <li class="{{ setActive('admin/permission') }}"><a class="nav-link"
                                    href="{{ route('admin.permission.index') }}"><i class="fas fa-key"></i>
                                    Permissions</a></li>
                                @endcan

                                @can('users.index')
                                    <li class="{{ setActive('admin/user') }}"><a class="nav-link"
                                        href="{{ route('admin.user.index') }}"><i class="fas fa-users"></i> Users</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> SIMPENIN<div class="bullet"></div> All Rights
                    Reserved.
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        //active select2
        $(document).ready(function () {
            $('select').select2({
                theme: 'bootstrap4',
                width: 'style',
            });
        });

        //flash message
        @if(session()->has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()->has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
    </script>
</body>
</html>