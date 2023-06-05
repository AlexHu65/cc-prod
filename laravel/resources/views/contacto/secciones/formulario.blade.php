<section id="contacto" class="pt-5 pb-5">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="text-center animated bounce infinite">
          <img class="desk" style="transform: translateY(-145px);" src="{{asset('images/arrow-down.png')}}" alt="Conóceme">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">

        <div class="social-content desk">
          <h2 class="main-color m-0 bebas-book text-center">SÍGUEME EN:</h2>
          <div class="d-sm-flex justify-content-center align-items-center custom">
            <div class="icons-social d-sm-flex justify-content-center">
              <div class="item-flex  p-2">
                <a href="{{setting('site.facebook')}}">
                  <img src="{{asset('images/fbMain.png')}}" alt="Facebook">
                </a>
              </div>
              <div class="item-flex  p-2">
                <a href="{{setting('site.instagram')}}">
                  <img src="{{asset('images/IG.png')}}" alt="Instagram">
                </a>
              </div>
              <div class="item-flex p-2">
                <a href="{{setting('site.twitter')}}">
                  <img src="{{asset('images/TW.png')}}" alt="Twitter">
                </a>
              </div>
              <div class="item-flex p-2">
                <a href="{{setting('site.youtube')}}">
                  <img src="{{asset('images/yt2.png')}}" alt="YouTube">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="social-content mov">
          <h2 class="main-color m-0 bebas-book text-center">SÍGUEME EN:</h2>

          <div class="icons-social d-flex">
            <div style="width:25%;" class="item-flex  p-2">
              <a href="{{setting('site.facebook')}}">
                <img src="{{asset('images/fbMain.png')}}" alt="Facebook">
              </a>
            </div>
            <div style="width:25%;" class="item-flex  p-2">
              <a href="{{setting('site.instagram')}}">
                <img src="{{asset('images/IG.png')}}" alt="Instagram">
              </a>
            </div>
            <div style="width:25%;" class="item-flex p-2">
              <a href="{{setting('site.twitter')}}">
                <img src="{{asset('images/TW.png')}}" alt="Twitter">
              </a>
            </div>
            <div style="width:25%;" class="item-flex p-2">
              <a href="{{setting('site.youtube')}}">
                <img src="{{asset('images/yt2.png')}}" alt="YouTube">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
      </div>

    </div>
  </div>

  <div class="container">
    <h2 class="text-center main-title s30">CONTÁCTAME</h2>
    <h3 class="text-center main-title">Selecciona el motivo de tu consulta</h3>

    <div class="buttons-subject d-sm-flex justify-content-center">
      <button data-form="1" data-subject="Cita" class="subject-btn uk-button uk-button-primary m-2">Cita</button>
      <button data-form="2" data-subject="Invitación" class="subject-btn uk-button uk-button-default m-2">Invitación</button>
      <button data-form="3" data-subject="Gestión" class="subject-btn uk-button uk-button-default m-2">Gestión</button>
      <!-- <button data-form="4" data-subject="Sugerencia" class="subject-btn uk-button uk-button-default m-2">Sugerencia</button> -->
    </div>
    <p class="text-center text-muted">Agenda una cita o invita a Christian Cruz a participar y hablar en tu evento.</p>
    <div id="contentContacto" class="row">
      <div class="col-sm-12 col-md-6 pt-5">
        <script type="text/javascript">
        $(".icon-rrss").hover(
          function() {
            var urlAbs = url + '/images/';
            var icon = $(this).attr('data-icon');
            $(this).attr('src' , urlAbs + icon + '_hover.png');
          }, function() {
            var urlAbs =  url + '/images/';
            var icon = $(this).attr('data-icon');
            $(this).attr('src' , urlAbs + icon + '.png');
          }
        );
        </script>
        <div class="d-sm-flex justify-content-center flex-column">
          <div class="icon-red p-3"><a target="_blank" href="https://wa.me/+52{{setting('site.whatsapp')}}"><img data-icon="wa" class="icon-rrss m-2" src="{{asset('images/wa.png')}}" alt="WhatsApp">{{setting('site.whatsapp')}}</a></div>
          <div class="icon-red p-3"><a target="_blank" href="https://m.me/{{setting('site.facebookPage')}}"><img data-icon="ms" class="icon-rrss m-2" src="{{asset('images/ms.png')}}" alt="Messenger">Escríbeme</a></div>
          <div class="icon-red p-3"><a target="_blank" href="https://t.me/{{setting('site.telegramUser')}}"><img data-icon="tg" class="icon-rrss m-2" src="{{asset('images/tg.png')}}" alt="Telegram">{{setting('site.telegram')}}</a></div>
        </div>

      </div>
      <div id="formContent" class="col-sm-12 col-md-6 pt-5 d-sm-flex justify-content-center align-items-center flex-column">
        
        <h1 class="main-title m-0">GRACIAS POR PONERTE EN CONTACTO</h1>
            <h2 class="text-center main-title m-0">
            {{$msg}}
            <h2>
      </div>
    </div>


  </div>
</section>
