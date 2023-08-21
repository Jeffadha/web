<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL::asset('images/logo.png') }}">

    <title>Admin</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ URL::asset('semidark/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ URL::asset('semidark/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('semidark/css/skin_color.css') }}">

    <style>
        /* .back-to-top{bottom:1.25rem;position:fixed;right:1.25rem;z-index:1032}.back-to-top:focus{box-shadow:none}pre{padding:.75rem}blockquote{background-color:#fff;border-left:.7rem solid #007bff;margin:1.5em .7rem;padding:.5em .7rem} */
        #button-home {
            z-index: 9998;
            position: relative;
        }

        #button-home #chat-circle {
            position: fixed;
            bottom: 50px;
            right: 50px;
            cursor: pointer;
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.2), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            transform: scale(1);
        }

        /* #button-home.show .chat-box {
   display: block; }
  #button-home.show #chat-circle {
   z-index: 0;
   transform: scale(0); } */
        /* table.dataTable tbody th,
        table.dataTable tbody td {
            padding: 4px 8px;
            /* e.g. change 8x to 4px here */
        /*} */

        /* Reduce vertical spacing */

        div.dataTables_wrapper div.dataTables_info {
            padding-top: 0px;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 4px 8px 4px 8px;
            font-size: 0.9em;
        }

        /* End Reduce vertical spacing */
    </style>
    @yield('css')
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#"
                    class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent text-white"
                    data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <span class="light-logo"><img src="{{ URL::asset('images/logo_umuka_light_little.png') }}"
                                alt="logo"></span>
                        <span class="dark-logo"><img src="{{ URL::asset('images/logo_umuka_dark_little.png') }}"
                                alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu"
                                role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown"
                                title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i>
                                        Profile</a>
                                    {{-- <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a> --}}
                                    {{-- <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a> --}}
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" onclick="logout();"><i
                                            class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            @if (Session::get('role_id') == 1)
                                @include('layouts.menu_superadmin')
                            @elseif (Session::get('role_id') == 2)
                                @include('layouts.menu_admin')
                            @endif

                        </ul>
                    </div>
                </div>
            </section>
            <div class="sidebar-footer">
                <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span
                        class="icon-Lock-overturning"><span class="path1"></span><span
                            class="path2"></span></span></a>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            &copy; 2023 <a href="https://www.umuka.ac.id">UMUKA</a>. All Rights Reserved.
        </footer>
    </div>
    <!-- ./wrapper -->



    {{-- <div id="button-home">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-30"><span class="path1"></span><span class="path2"></span></span>
		</div>
	</div> --}}


    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="{{ URL::asset('semidark/js/vendors.min.js') }}"></script>
    <script src="{{ URL::asset('semidark/js/pages/chat-popup.js') }}"></script>
    <script src="{{ URL::asset('assets/icons/feather-icons/feather.min.js') }}"></script>

    <script src="{{ URL::asset('assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>

    <script src="{{ URL::asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor_components/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
    <!-- EduAdmin App -->
    <script src="{{ URL::asset('semidark/js/template.js') }}"></script>
    {{-- <script src="{{ URL::asset('semidark/js/pages/dashboard.js') }}"></script> --}}
    <script src="{{ URL::asset('semidark/js/pages/calendar.js') }}"></script>
    <script src="{{ URL::asset('semidark/js/pages/editor.js') }}"></script>



    <script type="text/javascript">
        function logout() {
            $.ajax({
                url: "{{ route('logout') }}",
                method: "GET",
                dataType: "json",
                // headers: {
                //     "Authorization": 'Bearer ' + token,
                //     "username": userlogin
                // },
                success: function(result) {
                    document.location.href = "{{ url('/login') }}";
                }
            })
        }

        function showToastr(type, title, message) {
            let body;
            $.toast({
                heading: title,
                text: message,
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: type,
                hideAfter: 3500,
                stack: 6
            });
        }
        //Initialize Select2 Elements
        $('.select2').select2();

        $(document).ready(function() {

        });
    </script>

    @yield('script-master')

</body>

</html>
