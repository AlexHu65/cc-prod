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
        
        <div class="float-social">
        <div class="icons-social d-flex flex-column">
            <div class="item-flex  pt-2 pb-2">
              <a href="{{setting('site.facebook')}}">
                <img src="{{asset('images/fb_blue.png')}}" alt="Facebook">
              </a>
            </div>
            <div  class="item-flex  pt-2 pb-2">
              <a href="{{setting('site.instagram')}}">
                <img src="{{asset('images/ig_blue.png')}}" alt="Instagram">
              </a>
            </div>
            <div  class="item-flex pt-2 pb-2">
              <a href="{{setting('site.twitter')}}">
                <img src="{{asset('images/TW.png')}}" alt="Twitter">
              </a>
            </div>
            <div class="item-flex pt-2 pb-2">
              <a href="{{setting('site.youtube')}}">
                <img src="{{asset('images/yt_blue.png')}}" alt="YouTube">
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
      <button id="citaForm" data-form="1" data-subject="Cita" class="subject-btn uk-button uk-button-primary m-2">Cita</button>
      <button id="invitacionForm" data-form="2" data-subject="Invitación" class="subject-btn uk-button uk-button-default m-2">Invitación</button>
      <button id="gestionForm" data-form="3" data-subject="Gestión" class="subject-btn uk-button uk-button-default m-2">Gestión</button>
      <!-- <button data-form="4" data-subject="Sugerencia" class="subject-btn uk-button uk-button-default m-2">Sugerencia</button> -->
    </div>
    <p class="text-center text-muted">Agenda una cita o invita a Christian Cruz a participar y hablar en tu evento.</p>
    <div id="contentContacto" class="row">
      <div class="col-sm-12 col-md-6 pt-5">        
        <div class="d-sm-flex justify-content-center flex-column">
          <div class="icon-red p-3"><a target="_blank" href="https://wa.me/{{setting('site.whatsapp')}}"><img data-icon="wa" class="icon-rrss m-2" src="{{asset('images/wa.png')}}" alt="WhatsApp">WhatsApp</a></div>
          <div class="icon-red p-3"><a target="_blank" href="https://m.me/{{setting('site.facebookPage')}}"><img data-icon="ms" class="icon-rrss m-2" src="{{asset('images/ms.png')}}" alt="Messenger">Messenger</a></div>
          <div class="icon-red p-3"><a target="_blank" href="https://t.me/{{setting('site.telegramUser')}}"><img data-icon="tg" class="icon-rrss m-2" src="{{asset('images/tg.png')}}" alt="Telegram">Telegram</a></div>
        </div>

      </div>
      <div id="formContent" class="col-sm-12 col-md-6 pt-5">
        <form id="frm-contacto" method="post" action="{{route('send.contacto')}}">
          @csrf
          <div class="form-group">
            <label for="txtAsunto"><strong>Asunto:</strong></label>
            <input disabled type="text" id="showAsunto" class="form-control disabled" value="Cita">
            <input type="hidden" id="txtAsunto" name="txtAsunto" value="Gestión">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre*">
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email*">
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Teléfono*">
          </div>
          <div id="gtxtNombreOrganizacion" class="form-group dn">
            <input type="text" class="form-control" id="txtNombreOrganizacion" name="txtNombreOrganizacion" placeholder="Nombre de tu organización">
          </div>
          <div id="gtxtEvento" class="form-group dn">
            <input type="text" class="form-control" id="txtEvento" name="txtEvento" placeholder="Nombre del evento*">
          </div>
          <div class="form-group">          
            <textarea id="txtComentario" name="txtComentario" class="form-control" rows="8" cols="80" placeholder="Cuéntame sobre tu cita"></textarea>
          </div>
          <button id="btnSubmit2" type="submit" class="btn">ENVIAR MENSAJE</button>
          <span class="co loading2 dn deep-blue"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO...</span>
          <div class="msg2 s20 text-success bebas-book font-weight-bold"></div>
        </form>

      </div>
    </div>


  </div>
</section>
