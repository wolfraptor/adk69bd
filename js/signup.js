$(document).ready(function(){
  $('.button-1').on("click", function(e){
    e.preventDefault();
    $('.step-1').hide();
    $('.step-2').show();
  });
  $('.button-2').on("click", function(e){
    e.preventDefault();
    $('.step-1').show();
    $('.step-2').hide();
  });
  
  $(".optional-group").hide();
  $('.login-button--active').on('click', function(){
        $(this).toggleClass("sended");
        $(".optional-group").toggle();
        if ($(this).hasClass("sended")) {
            $(this).html("Click to resend o.t.p");
        } else {
            $(this).html("Request O.T.P.");
        }
  });
  
  $(".open-form a").on("click", function(){
    $(".login").fadeIn();
    $(".nav-bar").hide();
  });
  
  $(".login__close").on("click", function(){
      $(".login").fadeOut();
      $(".nav-bar").show();
  });
});