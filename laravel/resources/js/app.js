const { swal } = require('./sweetalert.min');

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
    $('#buttonModal')[0].click();
    sessionStorage.setItem("modal", true);
  }

});


// if(sessionStorage.getItem("modal")){
//   $("#welcomeModal").remove();
// }


// deprecated version
(function ($) {
  $.fn.extend({
    size: function () {
      return $(this).length;
    }
  });
})(jQuery);


$('.owl-banner').owlCarousel({
  loop:true,
  margin:0,
  items: 1,
  autoplay:true,
  autoplayTimeout:6000,
  autoplayHoverPause:true
});

$('.owl-accion').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  nav:true,
  navText: ["<div class='nav-btn'><img class='leftImg' src='./images/b_left.png'></div>", "<div class='nav-btn'><img class='rightImg' src='./images/b_right.png'></div>"],
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

$('.owl-sintesis').owlCarousel({
  loop:true,
  margin:0,
  responsiveClass:true,
  nav:true,
  navText: ["<div class='nav-btn'><img class='leftImg' src='./images/b_left.png'></div>", "<div class='nav-btn'><img class='rightImg' src='./images/b_right.png'></div>"],
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

$('.owl-video').owlCarousel({
  loop:false,
  margin:0,
  responsiveClass:true,
  nav:true,
  navText: ["<div class='nav-btn'><img class='leftImg' src='./images/b_left.png'></div>", "<div class='nav-btn'><img class='rightImg' src='./images/b_right.png'></div>"],
  responsive:{
    0:{
      items:3,
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
      items:1,
      nav:true,
      loop:true
    },
    1000:{
      items:1,
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

    $('#btnSubmit2').hide(500);
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

$("#btnSubmit2").on('click' , (e) =>{
  $("#btnSubmit2").hide(500);
  $(".loading2").show(500);
});

ajaxValidationCallbackContacto = function(status, form, json, options) {
  if (window.console) {
    console.log(status);
  }
  if (status === true) {
    $("#frm-contacto").trigger("reset");
    $('#btnSubmit2').show(500);
    $(".loading2").hide(500);
    
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

$(".subject-btn").click(function(e){
  e.preventDefault();

  var value =  $(this).attr('data-subject');
  var form  = $(this).attr('data-form');
  var textArea = "Comentario";

  if(form == 1){
    textArea = "Cuentáme de tu cita";
    $("#gtxtNombreOrganizacion").hide(500);
    $("#gtxtEvento").hide(500);
  }

  if(form == 2){
    textArea = "Platícame de tu evento*";
    $("#gtxtNombreOrganizacion").show(500);
    $("#gtxtEvento").show(500);
  }

  if(form == 3){
    textArea = "Platícame de tu solicitud*";
    $("#gtxtNombreOrganizacion").hide(500);
    $("#gtxtEvento").hide(500);
  }

  $("#txtComentario").attr('placeholder' , textArea);
  $("#showAsunto").val(value);
  $("#txtAsunto").val(value);

  $(".subject-btn").each(function(){
    $(this).removeClass('uk-button-primary');
    $(this).addClass('uk-button-default');
  });
  $(this).addClass('uk-button-primary');

});

AOS.init();

setTimeout(function(){
  $('#closeModalHome')[0].click();  
}, 10000);


function nFormatter(num){
  if(num >= 1000000000){
    return (num/1000000000).toFixed(1).replace(/\.0$/,'') + 'G';
  }
  if(num >= 1000000){
    return (num/1000000).toFixed(1).replace(/\.0$/,'') + 'M';
  }
  if(num >= 1000){
    return (num/1000).toFixed(1).replace(/\.0$/,'') + 'K';
  }
  return num;
}

$.ajax({
  url:"https://www.instagram.com/christiancruzmx/?__a=1",
  type:'get',
  success:function(response){
    $(".profile-pic").attr('src',response.graphql.user.profile_pic_url);
    $(".name").html(response.graphql.user.full_name);
    $(".biography").html('<small>' + response.graphql.user.biography + '</small>');
    $(".username").html(response.graphql.user.username);
    $(".number-of-posts").html(response.graphql.user.edge_owner_to_timeline_media.count);
    $(".followers").html(nFormatter(response.graphql.user.edge_followed_by.count));
    $(".following").html(nFormatter(response.graphql.user.edge_follow.count));
    posts = response.graphql.user.edge_owner_to_timeline_media.edges;
    posts_html = '';
    for(var i=0;i<posts.length;i++){
      url = posts[i].node.display_url;
      likes = posts[i].node.edge_liked_by.count;
      comments = posts[i].node.edge_media_to_comment.count;
      posts_html += '<div class="col-md-4 equal-height"><img style="min-height:50px;background-color:#fff;width:100%" src="'+url+'"><div class="row like-comment"></div></div>';
    }
    $(".posts").html(posts_html);
  }
});