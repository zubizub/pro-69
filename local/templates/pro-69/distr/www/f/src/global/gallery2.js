$(document).ready(function() {

	$('.slider1').slick({
				    dots: false,
				    infinite: true,
				    speed: 500,
				    fade: true,
				    cssEase: 'linear'
				});

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

			$(".slider0").slick('setPosition');
			$(".slider1").slick('setPosition');
			$(".slider2").slick('setPosition');

    });
});