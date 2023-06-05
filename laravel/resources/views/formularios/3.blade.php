
@csrf
<script type="text/javascript">
$(".submit").on('click' , (e) => {
  $(".submit").hide();
  $(".loading2").show();
});
</script>
<div class="form-group">
  <label for="txtAsunto"><strong>Asunto:</strong></label>
  <input disabled type="text" id="showAsunto" class="form-control validate[required] disabled" value="Gestión">
  <input type="hidden" id="txtAsunto" name="txtAsunto" value="Gestión">
</div>
<div class="form-group">
  <input type="text" class="form-control validate[required, custom[onlyLetterNumber]]" id="txtNombre" name="txtNombre" placeholder="Nombre*">
</div>
<div class="form-row">
  <div class="form-group col-md-12">
    <input type="email" class="form-control validate[required, custom[email]]" id="txtEmail" name="txtEmail" placeholder="Email*">
  </div>
</div>
<div class="form-group">
  <input type="text" class="form-control validate[required, custom[onlyLetterNumber, phone]]" id="txtTelefono" name="txtTelefono" placeholder="Teléfono*">
</div>
<div class="form-group">
  <textarea name="txtComentario" class="form-control validate[required custom[onlyLetterNumber]]" rows="8" cols="80" placeholder="Platícame de tu solicitud*"></textarea>
</div>


<button id="btnSubmit2" type="submit" class="btn submit">ENVIAR MENSAJE</button>
<span class="co loading2 dn deep-blue"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO...</span>
<div class="msg2 bebas-book font-weight-bold main-color"></div>
