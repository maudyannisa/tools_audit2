<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="fixed-left">
    <div id="wrapper">
        <div class="topbar">
            @include('includes.topbar')
        </div>
        <div class="left side-menu">
            @include('includes.leftsidebar')
        </div>
        <div class="content-page">
            @yield('content')
            <footer class="footer text-right">
                2016 © Moltran.
            </footer>
        </div>
        <div class="side-bar right-bar nicescroll">
            @include('includes.rightsidebar')
        </div>
    </div>
    @include('includes.script')
    @stack('script')
</body>
</html>
