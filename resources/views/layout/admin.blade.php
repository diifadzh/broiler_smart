@section('body')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('layout.components.sidebar')
        <div class="body-wrapper">
            @include('layout.components.header')
            <div class="body-wrapper-inner">
                @yield('content')
                @yield('user')
                @yield('create')
                @yield('heater')
                @yield('lamp')
                @yield('device')
            </div>
        </div>
    </div>
@endsection('body')
@section('script')
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
@endsection('script')
