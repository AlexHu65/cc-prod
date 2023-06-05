require('./bootstrap');
require('./bootstrap.min.js');
require('./jquery-3.4.1.js');
require('./jquery-ui.min.js');
require('./jquery.validationEngine.js');
require('./jquery.validationEngine-es.js');
require('./select2.min.js');
require('./owl.carousel.min.js');
require('./uikit.min.js');
require('./uikit-icons.min.js');
require('./jquery.fancybox.min.js');
require('./jquery.countTo.js');

window.$ = jQuery;

window.scroll({
  behavior: 'smooth'
});

$(document).ready(function(){
  if(!sessionStorage.getItem("modal")){
    $('#welcomeModal').modal('show');
    sessionStorage.setItem("modal", true);
  }

});

$('.closeModal').on('click', function(e){
  e.preventDefault();
  $('#welcomeModal').modal('hide');

});



// deprecated version
(function ($) {
  $.fn.extend({
    size: function () {
      return $(this).length;
    }
  });
})(jQuery);


$('.owl-banner').owlCarousel({
  loop:false,
  margin:0,
  items: 1,
  autoplay:true,
  autoplayTimeout:1000,
  autoplayHoverPause:true
});

$('.owl-timeline').owlCarousel({
  loop:true,
  margin:15,
  responsiveClass:true,
  navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
  responsive:{
    0:{
      items:1,
      nav:false,
      loop:true
    },
    600:{
      items:3,
      nav:true,
      loop:true
    },
    1000:{
      items:3,
      nav:true,
      loop:true
    }
  }
});



ajaxValidationCallback = function(status, form, json, options) {
  if (window.console) {
    console.log(status);
  }
  if (status === true) {

    $('#btnSubmit').hide(500);
    $(".loading").addClass('dn');
    $(".msg").removeClass('dn');
    $(".msg").html(json.msg);
    $(".msg").css({"color" : "black"});

  }else{
    $('#btnSubmit').show(500);
    $(".loading").addClass('dn');
    $(".msg").removeClass('dn');
    $(".msg").html(json.error);
    $(".msg").css({"color" : "red"});

  }
  return false;
};

ajaxValidationCallbackContacto = function(status, form, json, options) {
  if (window.console) {
    console.log(status);
  }
  if (status === true) {

    $('#btnSubmit2').hide(500);
    $(".loading2").addClass('dn');
    $(".msg2").removeClass('dn');
    $(".msg2").html(json.msg);
    $(".msg2").css({"color" : "black"});

  }else{
    $('#btnSubmit2').show(500);
    $(".loading2").addClass('dn');
    $(".msg2").removeClass('dn');
    $(".msg2").html(json.error);
    $(".msg2").css({"color" : "red"});

  }
  return false;
};

var validateForm = function() {
  jQuery("#frm-comentario").validationEngine('attach',{
    ajaxFormValidation: true,
    ajaxFormValidationMethod: 'post',
    onAjaxFormComplete: ajaxValidationCallback,
    onFailure: function(status, form, json, options){
      console.log("status:" , status);
      console.log("form:" , form);
      console.log("json:" , json);
      console.log("option:" , options);
    }
  });
  return false;
};

var validateFormContacto = function() {
  jQuery("#frm-contacto").validationEngine('attach',{
    ajaxFormValidation: true,
    ajaxFormValidationMethod: 'post',
    onAjaxFormComplete: ajaxValidationCallbackContacto,
    onFailure: function(status, form, json, options){
      console.log("status:" , status);
      console.log("form:" , form);
      console.log("json:" , json);
      console.log("option:" , options);
    }
  });
  return false;
};

var denunciar = function() {
  $('.btn-denunciar').on('click', function(){
    var id = $(this).attr('data-com');
    $.ajax({
      type: "POST",
      url: url + "/denuncia",
      data: {'id' : id},
      headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
        'X-Requested-With':'XMLHttpRequest'
      },
      success: function (data) {
        if (data.msg) {
          $(".msg").removeClass('dn');
          $(".msg").html(data.msg);
          $(".msg").css({"color" : "red"});
          location.reload();

        } else if (data.error) {
          $(".msg").removeClass('dn');
          $(".msg").html(data.error);
          $(".msg").css({"color" : "red"});
          location.reload();
        }
      },
      error: function(e){
        console.log("Error en ajax request: ",e);
      }
    });

  });
};

validateForm();
validateFormContacto();
denunciar();

$('.btn-volver').on('click' , function(){
  window.history.back();
});

$("#txtFecha").datepicker();
$('.timer').countTo();
$("#btnSubmit2").on('click', function(){
  $(this).show();
});
$("#btnSubmit").on('click', function(){
  $(this).show();

});

$(".subject-btn").on('click', function(e){
  e.preventDefault();



  var value =  $(this).attr('data-subject');
  var form  = $(this).attr('data-form');

  $.ajax({
    type: "POST",
    url: url + "/form-type",
    data: {'form' : form},
    headers: {
      'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
      'X-Requested-With':'XMLHttpRequest'
    },
    success: function (data) {

      if(data){
        $("#formContent").html(data);
      }

    },
    error: function(e){
      console.log("Error en ajax request: ",e);
    }
  });
  $("#showAsunto").val(value);
  $("#txtAsunto").val(value);

  $(".subject-btn").each(function(){
    $(this).removeClass('uk-button-primary');
    $(this).addClass('uk-button-default');
  });
  $(this).addClass('uk-button-primary');



});

AOS.init();
