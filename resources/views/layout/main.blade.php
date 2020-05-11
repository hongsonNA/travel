<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>travel</title>
    @include('layout/path_header')
</head>

<body>
    <!--::header part start::-->
    @include('layout/header')
    <!-- Header part end-->

    <!-- banner part start-->
    @yield('main')

    <!--::footer_part start::-->
    @include('layout/footer')

    <!--::footer_part end::-->
    @include('layout/path_footer')
</body>

</html>