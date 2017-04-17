jQuery.noConflict();
(function( $ ) {
  $(function() {
    	
  	$('img').removeAttr('width').removeAttr('height');


  	

	/*styles to min height for home page*/
	var windowHeight = $( window ).height();
	
	$("#main-hero").css("height", windowHeight + 'px');
	$("#welcome").css("min-height", windowHeight + 'px');

	$(window).scroll(function(){ 

		var a = 112;
		var pos = $(window).scrollTop();
		if(pos > a) {
		    $(".navbar-fixed-top").addClass('scroll-nav')
		}
		else {
		    $(".navbar-fixed-top").removeClass('scroll-nav')
		}
	});

	$(window).scroll(function(){ 

		var b = $( window ).height();;
		var posA = $(window).scrollTop();
		if(posA > b) {
		    $(".brand-name").slideUp('slow');
		}
		else {
		    $(".brand-name").slideDown('slow');
		}
	});


	$('.hide-menu').hide();

	$('#show-menu').on('click', function(){
		/*$('.hide-menu').toggleClass('show-menu');*/
		$('.hide-menu').slideToggle();
	});



	
 


  });
})(jQuery);

