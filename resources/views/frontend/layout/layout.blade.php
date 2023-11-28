<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('frontend.partial.head')
    @yield('css')
</head>

<body>

    @include('frontend.partial.header')

    @section('container')
    @show

    @include('frontend.partial.footer')
    @yield('js')
</body>

</html>