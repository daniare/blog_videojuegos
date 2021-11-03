<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @include("layouts.partials.header")
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
    @include("layouts.partials.footer")
</body>
</html>