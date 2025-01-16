<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="light">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Siakad POLIWANGI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    @include('layouts.head-css')
    @livewireStyles
</head>

@section('body')
    @include('layouts.body')
@show
<!-- Begin page -->
<div id="layout-wrapper">
    @include('layouts.topbar')
    @include('layouts.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('layouts.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
@livewireScripts
<!-- JAVASCRIPT -->
@include('layouts.vendor-scripts')
</body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


</html>
