$(document).ready(function(){
  
  $('.button_viev').on('click', function(e){
    e.preventDefault();
    $(this).toggleClass('button_open');
    var offer = $(this).data('offer');
    $('.item__offers[data-offer=' + offer + ']').slideToggle();
  });
  
});