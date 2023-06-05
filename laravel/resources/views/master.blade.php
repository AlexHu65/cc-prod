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
<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  
  })(window,document,'script','dataLayer','GTM-P7QTG6P');</script>
  
  <!-- End Google Tag Manager -->
<!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
  var options = {
    whatsapp: "{{setting('site.whatsapp')}}", // WhatsApp number
    call_to_action: "Escríbeme", // Call to action
    position: "right", // Position may be 'right' or 'left'
  };
  var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
  s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
  var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget -->
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ef38db25b8ee064"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170976030-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170976030-1');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '709427083184941');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=709427083184941&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7QTG6P"

  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  
  <!-- End Google Tag Manager (noscript) -->
  <style media="screen">
  .card-body p{
    text-align: justify !important;
  }
</style>
<div id="app">
  <header id="header">
    <div class="container">
      <a id="buttonModal" class="uk-button uk-button-default fire dn" href="#welcomeModal" uk-toggle>Open</a>

<div id="welcomeModal" class="uk-modal-container uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
        <button id="closeModalHome" class="uk-modal-close-default" type="button" uk-close></button>
          <div class="text-center">
            <img style="width: 100%;" src="{{asset('images/bg_pop.png')}}" alt="" uk-img>    
          </div>
        </div>
</div>
      <div class="mov" id="cssmenu">
        <ul>
          @include('partials.menu')
        </ul>
      </div>
      <div class="desk desk-menu pt-4 pb-4">
        <div class="container">
          <div class="row">
            @include('partials.deskmenu')
          </div>
        </div>
      </div>

    </div>
  </header>
  @yield('content')

  

  <!-- Modal -->
  {{-- <div class="modal fade d-flex justify-content-center align-items-center" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModal" aria-hidden="true">
    <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-close-outside">Outside</button>

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">



        </div>        
      </div>
    </div>
  </div> --}}
  <style>
    #encuestas {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      z-index: 1500;
      height: 40px;
      overflow: hidden;
      -webkit-box-shadow: -1px -1px 20px -8px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px -1px 20px -8px rgba(0,0,0,0.75);
      box-shadow: -1px -1px 20px -8px rgba(0,0,0,0.75);
      transition: .5s ease all;
      }
      .hide-poll{
        right: 355px;
        padding: 15px;
        top: -55px;
        width: 158px;
      }
  </style>
  @if (!empty($encuestas))
  
  <div id="encuestas" class="bg-light">
    <div class="conatainer">
      <div class="row pt-5 pb-5">
        <div class="col">
        <iframe src="https://docs.google.com/forms/d/e/{{$encuestas['codigo']}}/viewform?embedded=true" width="640" height="500" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
        <div class="col">
          <div class="description pt-5">
            <h1 class="main-title">{{$encuestas['titulo']}}</h1>
            <p>
              ¡Participa! Tu opinión es importante y quiero escucharte.
            </p>
            <div class="text">
              {!! $encuestas['descripcion'] !!}
            </div>
          </div>
          
        </div>
        <div class="position-relative">
          <div class="animated infinite pulse hide-poll bg-info position-absolute">
            <a class="text-light">
              <i class="fas fa-arrow-up"></i> VER ENCUESTA
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>      
  @endif
  
  <script>
      var toggleE = false;

    $('.hide-poll').on('click' , function(){
      console.log('show encuestas');
      if(!toggleE){
        $("#encuestas").css({'height':'500px'});
        toggleE = true;
      }else{
        $("#encuestas").css({'height':'40px'});
        toggleE = false;
      }
      
    });
    
  </script>

  <footer class="pt-2 pb-4">
    @include('partials.footer')
  </footer>
</div>
@include('partials.scripts')
<input id="hiddenFacebook" type="hidden" value="{{setting('site.facebook')}}">
<input id="hiddenInstagram" type="hidden" value="{{setting('site.instagram')}}">
<input id="hiddenTwitter" type="hidden" value="{{setting('site.twitter')}}">
<input id="hiddenTelegram" type="hidden" value="https://t.me/{{setting('site.telegramUser')}}">
<script>
    document.addEventListener('copy', (event) => {
    
      var facebook = $("#hiddenFacebook").val();
      var instagram = $("#hiddenInstagram").val();
      var twitter = $("#hiddenTwitter").val();
      var telegram = $("#hiddenTwitter").val();

      var txtFacebook = 'Facebook';
      var urlFb = facebook;
        
        const pagelink = `\n\nRecuerda ponerte en contacto a través de ${txtFacebook.link(urlFb)} , Twitter: ${twitter} , Instagram: ${twitter} o Telegram: ${telegram} . Texto extraido de : ${document.location.href} Todos los derechos reservados 2020`;
        event.clipboardData.setData('text',  pagelink);
        event.preventDefault();
    });
</script>
@if(isset($form))
  <script> 

$('#{{$form}}Form').trigger( "click" );


  $('#{{$form}}Form').on('click' ,function(e){
    console.log('ok');
  });


  </script>  
  @endif
</body>
</html>
