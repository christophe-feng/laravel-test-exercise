<html>

<head>
    <!-- @@yield為預留位置，並命名為'title' -->
    <title>App Name - @yield('title')</title>
</head>

<body>

    @section('sidebar')
    This is the master sidebar.
    @show

    <div class="container">
        <!-- @@yield為預留位置，並命名為'content' -->
        @yield('content')
    </div>
</body>

</html>