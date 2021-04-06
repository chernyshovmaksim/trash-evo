<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывоз мусора Новосибирск</title>
    <link type="image/webp" rel="icon" href="{{ \Helper::phpThumb('/theme/img/logo.webp', 'w=16,h=16,webp=1') }}">
    <link rel="stylesheet" href="/theme/css/style.min.css">
    @if($seo['keyw'])
        <meta name="keywords" content="{{$seo['keyw']}}">
    @endif
    @if($seo['descr'])
        <meta name="description" content="{{$seo['descr']}}">
    @endif

    @foreach($sliders as $slider)
        <link rel="preload" href="{{\Helper::phpThumb($slide['slider_image'], 'webp=1,w=840,h=560,zc=1')}}" as="image">
    @endforeach
</head>

<body>

@yield('content')

<div class="popup">
    @include('partials.form')
</div>

<script src="/theme/js/app.min.js"></script>
</body>

</html>
