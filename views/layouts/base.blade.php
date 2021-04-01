<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывоз мусора Новосибирск</title>
    <link rel="stylesheet" href="/theme/css/style.min.css">

    @foreach($sliders as $slider)
        <link rel="preload" href="{{\Helper::phpThumb($slide['slider_image'], 'webp=1,w=840,h=560,zc=1')}}" as="image">
    @endforeach
</head>

<body>

@yield('content')
@include('partials.popup')

<script src="/theme/js/app.min.js"></script>
</body>

</html>
