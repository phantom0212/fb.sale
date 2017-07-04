<!DOCTYPE html>
<html>
<header>
    @include('partials.header')
    @yield('header')
</header>
<body class="box_green">
<div class="wrapper">
    @include('partials.dasboard')
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
    @include('partials.scripts')
    @yield('js')
</div>
</body>
</html>