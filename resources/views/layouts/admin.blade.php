@extends('layouts.base')

@push('css-plugin')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('plugin/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugin/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugin/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('app/css/admin-panel.min.css')}}">
    <!-- Google Font -->
    {{--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  --}}
@endpush

@section('body')
    <body class="hold-transition skin-green fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

        @include('admin-panel.header')

        @include('admin-panel.sidebar')

        <div class="content-wrapper">

            @yield('content')

        </div>

        @include('admin-panel.footer')

        </div>
        <!-- ./wrapper -->
    </body>
@endsection

@push('js-plugin')
<!-- jQuery 3 -->
<script src="{{asset('plugin/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('plugin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('plugin/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugin/fastclick/lib/fastclick.js')}}"></script>
<!-- Theme -->
<script src="{{asset('app/js/admin-panel.js')}}"></script>

@endpush

