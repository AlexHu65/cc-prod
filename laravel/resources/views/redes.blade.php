<!doctype html>
<html lang="en">
<head>
  <meta name="google-site-verification" content="{{setting('site.google-site-verification')}}" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="{{setting('site.description')}}">
  <meta name="keywords" content="{{ setting('site.keywords')}}">
  <meta name="author" content="Difraxion">
  <meta name="robots" content="all">
  <meta name="geo.region" content="MX-GUA">
  <meta name="geo.placename" content="México">
  <meta name="DC.title" content="{{setting('site.title')}}">
  <meta property="og:image:alt" content="{{setting('site.title')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{(isset($tituloNota) ? $tituloNota : setting('site.title'))}}">
  <meta property="og:description" content="{{(isset($descripcion) ? $descripcion : setting('site.description'))}}">
  <meta property="og:image" content="{{(isset($imgInt) ? asset('storage/') .'/'. $imgInt : setting('site.description'))}}">
  <meta property="og:image:alt" content="{{setting('site.title')}}">
  <meta property="og:site_name" content="{{setting('site.title')}}">
  <meta property="og:url" content="{{setting('site.url')}}">
  <meta name="twitter:title" content="{{(isset($tituloNota) ? $tituloNota : setting('site.title'))}}">
  <meta name="twitter:description" content="{{(isset($descripcion) ? $descripcion : setting('site.description'))}}">
  <meta name="twitter:image" content="{{(isset($imgInt) ? asset('storage/') .'/'. $imgInt : setting('site.description'))}}">
  <meta name="robots" content="all">
  <meta name="copyright" content="Copyright (c) 2020">
  @include('partials.assets')
  <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">

  <link rel='shortcut icon' type='image/x-icon' href='{{asset('images/logo.png')}}'/>
  <title> {{setting('site.title')}} - @yield('title') {{ setting('site.keywords')}}</title>
  <!--
  Este sitio ha sido desarrollado por Difraxion Group.
  Tel. +52 01 (477) 198 09 65
  E-mail: ventas@reed.com.mx
  www.difraxion.com
  León, Guanajuato
-->
<!-- analytics de google -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{setting('site.google_analytics_tracking_id')}}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '{{setting('site.google_analytics_tracking_id')}}');
</script>
</head>
<body>
  <div id="app">
    @yield('content')

    <!-- Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">



          </div>
          <div class="modal-footer">
            <button class="uk-button uk-button-primary closeModal">Ir al sitio</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="pt-2 pb-4">
      @include('partials.footer')
    </footer>
  </div>
  @include('partials.scripts')
</body>
</html>
