<form id="frm-contacto" method="post" action="{{route('send.contacto')}}">
  @csrf
  <div class="form-group">
    <label for="txtAsunto"><strong>Asunto:</strong></label>
    <input disabled type="text" id="showAsunto" class="form-control validate[required] disabled" value="Cita">
    <input type="hidden" id="txtAsunto" name="txtAsunto" value="Cita">
  </div>
  <div class="form-group">
    <input type="text" class="form-control validate[required, custom[onlyLetterNumber]]" id="txtNombre" name="txtNombre" placeholder="Nombre*">
  </div>
  <div class="form-group">
    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtNombreOrganizacion" name="txtNombreOrganizacion" placeholder="Nombre de tu organizacion">
  </div>
  <div class="form-group">
    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtDescOrganizacion" name="txtDescOrganizacion" placeholder="¿A que se dedica tu organización?">
  </div>
  <div class="form-group">
    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtEvento" name="txtEvento" placeholder="Nombre del evento">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="txtFecha" name="txtFecha" placeholder="Fecha">
  </div>
  <div class="form-group">
    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtMunicipio" name="txtMunicipio" placeholder="Municipio">
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <input type="email" class="form-control validate[required, custom[email]]" id="txtEmail" name="txtEmail" placeholder="Email*">
    </div>
  </div>
  <div class="form-group">
    <textarea name="txtComentario" class="form-control validate[custom[onlyLetterNumber]]" rows="8" cols="80" placeholder="Comentario"></textarea>
  </div>
  <button id="btnSubmit2" type="submit" class="btn">ENVIAR MENSAJE</button>
  <span class="co loading2 dn deep-blue"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO...</span>
  <div class="msg2 bebas-book font-weight-bold main-color"></div>
</form>
