$(document).ready(function(){
  
  $('.store-group__minus').on('click', function(){
    if($(this).parent().find('.store-group__units').val() > 1){
      $(this).parent().find('.store-group__units').val(parseInt($(this).parent().find('.store-group__units').val()) - 1)
    }
  });
  
  $('.store-group__plus').on('click', function(){
    if($(this).parent().find('.store-group__units').val() < 99){
      $(this).parent().find('.store-group__units').val(parseInt($(this).parent().find('.store-group__units').val()) + 1)
    }
  });
  
  $('.store-dropdown').on('click', function(){
    $(this).find('.store-dropdown__items').slideToggle();
  });
  
});