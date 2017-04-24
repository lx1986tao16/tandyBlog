<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="_token" content="{{ csrf_token() }}"/>
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @include('admin.layouts._css')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('admin.layouts._header')
            @include('admin.layouts._sidebar')
            @yield('content')
            @include('admin.layouts._footer')
            <div class="control-sidebar-bg"></div>
            @include('admin.layouts._javascript')
        </div>
    </body>
</html>