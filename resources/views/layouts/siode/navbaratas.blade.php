<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.siode.styles')
    @stack('styles')
</head>
@php
    $desa = App\Models\Tabel\Desa::findOrFail(1);
@endphp

<body class="layout-top-nav">
    {{-- <div class="wrapper"> --}}

        @include('layouts.siode.navbar')
        @yield('content')
        {{-- @include('layouts.siode.sidebar') --}}



        {{-- <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside> --}}

        {{--  <form id="logoutform" action="{!! route('logout') !!}" method="POST" style="display: none;">
            {!! csrf_field() !!}
        </form>  --}}

        {{-- <footer class="main-footer text-sm">
            <div class="d-none d-sm-inline float-right">
                Anything you want
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer> --}}
    {{-- </div> --}}

    @include('layouts.siode.scripts')
    @stack('scripts')

</body>

</html>
