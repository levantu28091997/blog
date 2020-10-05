<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.elements.head')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('admin.elements.sidebar_title')
                <!-- sidebar menu -->
                @include('admin.elements.sidebar_menu')
                <!-- /sidebar menu -->
            </div>
        </div>
        <!-- top navigation -->
        @include('admin.elements.navigation')
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        <!-- footer -->
        @include('admin.elements.footer')
        <!-- /footer -->
    </div>
</div>
@include('admin.elements.javascript')
</body>
</html>