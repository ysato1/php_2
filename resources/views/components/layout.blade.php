<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <title>{{$title}}</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>掲示板</title>
    <link rel="stylesheet" href="{{url("css/style.css")}}">
</head>

<body>
    <div class="container">
       {{ $slot }}
    </div>
</body>
</html>
