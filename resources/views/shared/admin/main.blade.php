<!doctype html>
<html lang="en">
<head>

    @include('shared.admin.head')

    @yield('head')

</head>

<body>

<div class="wrapper">

    @include('shared.admin.sidebar')

    <div class="main-panel">

        @include('shared.admin.navbar')

        @yield('content')

        @include('shared.admin.footer')

    </div>

</div>

</body>

@include('shared.admin.scripts')

@yield('scripts')

</html>