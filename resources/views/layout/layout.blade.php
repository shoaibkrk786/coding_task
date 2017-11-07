<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('css/index.css') }}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
    <title>Task</title>
</head>

<body >
@include('layout.header')

@yield('contant')

@yield('custom_js')

</body>

</html>
