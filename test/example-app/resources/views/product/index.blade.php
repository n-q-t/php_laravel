<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>đây là trang index</h1>
{{--<p>{{$title}}</p>--}}
{{--<p>{{$name}}</p>--}}
@foreach($product as $item)
    <p>{{$item}}</p>
@endforeach
</body>
</html>
