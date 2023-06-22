<!DOCTYPE html>
<html lang="en">

<head>


    <title>NoteApps</title>

    {{--* bootstrap css *--}}
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel=" stylesheet">
    {{--* End Bootstrap Css *--}}

    {{--* bootstrap js *--}}
    <link href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    {{--* End Bootstrap Js *--}}
    <!-- Link FontAwesome -->
    <script src="https://kit.fontawesome.com/41bd9938f4.js" crossorigin="anonymous"></script>
    <!-- end FontAwesome -->



</head>

<body>

    @include('layouts.app.header')

    <div class="container my-4"><img src="" alt="">

        @yield('content')

    </div>

    @include('layouts.app.footer')


</body>

</html>