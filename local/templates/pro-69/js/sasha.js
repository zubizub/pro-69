$(function(){
	var height = $('body').innerHeight();
	var width = $('body').innerWidth();
		if (width < 640) {
		$('.content__item').height($('.content__item').width());
		$('.slider img').height($('.content__item').height());
		$('.slider').height($('.content__item').height());
		$('.block-double .content__item').height($('.content__item').height()/2 - 30);
		$('.west').height($('.content__item').height()/2 );
		$('.west .block').height($('.content__item').height()/2 );
		$('.west .white_block').height($('.content__item').height()/2 );
	}
	else if (width < 991) {
		$('.content__item').height($('.content__item').width());
		$('.slider img').height($('.content__item').height());
		$('.slider').height($('.content__item').height());
		$('.block-double .content__item').height($('.content__item').height()/2 - 60);
		$('.west').height($('.content__item').height()/2 );
		$('.west .block').height($('.content__item').height()/2 );
		$('.west .white_block').height($('.content__item').height()/2 );
		
	} else {
		$('.content__item').height($('.content__item').width()/2);
		$('.slider img').height($('.content__item').height());
		$('.slider').height($('.content__item').height());
		$('.block-double .content__item').height($('.content__item').height()/2 - 60);
		$('.west .block').height($('.content__item').height()/2 );
		$('.west .white_block').height($('.content__item').height()/2 );
		
	}
	
	  $(window).resize(function(){
    	var height = $('body').innerHeight();
		var width = $('body').innerWidth();
		if (width < 640) {
		$('.content__item').height($('.content__item').width());
		$('.slider img').height($('.content__item').height());
		$('.slider').height($('.content__item').height());
		$('.block-double .content__item').height($('.content__item').height()/2 - 30);
		$('.west').height($('.content__item').height()/2 );
		$('.west .block').height($('.content__item').height()/2 );
		$('.west .white_block').height($('.content__item').height()/2 );
		}else if (width < 991) {
			$('.content__item').height($('.content__item').width());
			$('.slider img').height($('.content__item').height());
			$('.slider').height($('.content__item').height());
			$('.block-double .content__item').height($('.content__item').height()/2 - 60);
			$('.west').height($('.content__item').height()/2 );
			$('.west .block').height($('.content__item').height()/2 );
			$('.west .white_block').height($('.content__item').height()/2 );
		} else {
			$('.content__item').height($('.content__item').width()/2);
			$('.slider img').height($('.content__item').height());
			$('.slider').height($('.content__item').height());
			$('.block-double .content__item').height($('.content__item').height()/2 - 60);
			$('.west .block').height($('.content__item').height()/2 );
			$('.west .white_block').height($('.content__item').height()/2 );
		}
	});
});	