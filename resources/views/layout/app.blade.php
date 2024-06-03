<!doctype html>
<html lang="en">

@include('layout.skeleton.head')

<body>
    @yield('body')
    @include('layout.skeleton.script')
    @yield('script')
    @stack('js')
</body>

</html>
