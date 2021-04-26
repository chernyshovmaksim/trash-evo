<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$seo['site_name']}}</title>
    <link rel="icon" href="/theme/img/favicon.ico" type="image/ico">
{{--    <link type="image/webp" rel="icon" href="{{ \Helper::phpThumb($seo['logo'], 'w=16,h=16,webp=1') }}">--}}
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(74591512, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/74591512" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>
