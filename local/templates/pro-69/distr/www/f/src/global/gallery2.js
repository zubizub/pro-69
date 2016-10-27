$(document).ready(function() {

	$('.slider2').slick({
				    dots: false,
				    infinite: true,
				    speed: 500,
				    fade: true,
				    cssEase: 'linear'
				});

    $('.gallery2Switch .switch a').click(function(){


    		var group = $(this).attr('data-switch');

    		console.log(group);

    		$('.gallery2Switch .switch').removeClass('active');
    		$(this).parent().addClass('active');

    		$('.galleryGroup').hide();
    		$('.group'+group).show();
    		$('.slider'+group).slick({
				    dots: false,
				    infinite: true,
				    speed: 500,
				    fade: true,
				    cssEase: 'linear'
				});


    });
});
