$(document).ready(function(){
  
  $('.profile-tabs span').on('click', function(e){
    e.preventDefault();
    $('.profile-tabs span').removeClass('active')
    $(this).addClass('active');
    var tab = $(this).data('profile-tab');
    $('.profile-tab').removeClass('active');
    $('.profile-tab[data-profile-tab=' + tab + ']').addClass('active');
  });

  $('.profile-header-line').hover(function() {
  	$('.profile-edit-value').toggleClass('active');
  	$('.profile-edit').toggleClass('active');
  });
  $('.profile-header-line').click(function(e) {
  	e.stopPropagation();
  	$('.profile-edit-input').removeClass('active');
  	$(this).find('.profile-edit-input').val($(this).find('span').html());
  	$(this).find('.profile-edit-input').addClass('active'); 	
  });
  $('.profile-edit-input').click(function(e) {
  	e.stopPropagation();
  })
  $('.profile-edit-input').change(function() {
    if($(this).val() !== ''){
      $(this).parent().find('span').html($(this).val());
    } else {
      $(this).parent().find('span').html('Enter value');
    }
  	$(this).removeClass('active');
  });
  $('.profile-edit-input').focusout(function() {
  	if($(this).val() !== ''){
      $(this).parent().find('span').html($(this).val());
    } else {
      $(this).parent().find('span').html('Enter value');
    }
    $(this).removeClass('active');
  });
  $('body').click(function() {
  	if($('.profile-edit-input').hasClass('active')){
  		$('.profile-edit-input').removeClass('active');
  	}
  });


  $('.prof-info-button').click(function(e) {
  	e.preventDefault();
  	$('.prof-info-value li').toggleClass('active');
  	$('.prof-info-value li.active').click(function(e) {
  		e.stopPropagation();
  		if ($(this).hasClass('active')){
		  	$('.prof-info-input').removeClass('active');
		  	$(this).find('.prof-info-input').val($(this).find('span').html());
		  	$(this).find('.prof-info-input').addClass('active'); 	
	  	}
	  	
	  });
  });

  $('.prof-info-input').change(function() {
    if($(this).val() !== ''){
      $(this).parent().find('span').html($(this).val());
    } else {
      $(this).parent().find('span').html('Enter value');
    }
    $(this).removeClass('active');
  });
  $('.prof-info-input').focusout(function() {
  	if($(this).val() !== ''){
      $(this).parent().find('span').html($(this).val());
    } else {
      $(this).parent().find('span').html('Enter value');
    }
    $(this).removeClass('active');
  });
  $('body').click(function() {
  	if($('.prof-info-input').hasClass('active')){
  		$('.prof-info-input').removeClass('active');
  	}
  });

  
});