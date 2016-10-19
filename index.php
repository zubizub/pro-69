<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Studio12");
?>

 
              <div id="wrapper" class="wrapper" style="max-width: 1441px;">
        <header id="header" class="header">
            <div class="header-column">
                <ul class="header-link__list">
                    <li class="header-link__item header-link__item_address header_link__item_first">
						Дом на профсоюзной, 69
                    </li>
					<li class="header-link__item">+7 495 780-40-40</li>
                    <li class="header-link__item call" style="font-family: 'Posterizer KG';"><a class="header-link" href="#">Перезвонить</a></li>
					<li class="header-link__item write"><a class="header-link" href="#">Написать</a></li>
					<li class="header-link__item drive"><a class="header-link" href="#">Приехать</a></li>
					<li class="header-link__item choose" style=""><a class="header-link" href="#">Выбрать<br/>студию</a></li>
                </ul>
            </div>
        </header>
        <div role="main" id="content" class="content">
            <div class="slider content__item">
                <div class=""><img class="metro-place__img" src="f/media/slide1.png" alt="#"></div>
                <div class=""><img class="metro-place__img" src="f/media/slide1.png" alt="#"></div>
            </div>
			<div class="content__item block studios mobile">
                <div class=""><img class="metro-place__img" src="f/media/slide2_1.jpg" alt="#"></div>
                <div class=""><img class="metro-place__img" src="f/media/slide2_2.jpg" alt="#"></div>
            </div>
			<div class="content__item block compact">
                <div class=""><img class="metro-place__img" src="f/media/slide3_1.jpg" alt="#"></div>
                <div class=""><img class="metro-place__img" src="f/media/slide3_2.jpg" alt="#"></div>
            </div>
			<div class="content__item block block-double mobile">
                <div class="content__item five-persent">
                    <div class=""><img class="metro-place__img" src="f/media/slide4_1.jpg" alt="#"></div>
                    <div class=""><img class="metro-place__img" src="f/media/slide4_2.jpg" alt="#"></div>
                </div>
				<div class="content__item">
                    
                </div>
            </div>
			<div class="content__item block_white ready">
                <img class="metro-place__img" src="f/media/slide5_1.jpg" alt="#">
            </div>
			<div class="content__item block metro">
                <div class=""><img class="metro-place__img" src="f/media/slide6_1.jpg" alt="#"></div>
                <div class=""><img class="metro-place__img" src="f/media/slide6_2.jpg" alt="#"></div>
            </div>
			<div class="content__item block_white map mobile">
                <div class=""><img class="metro-place__img" src="f/media/map.jpg" alt="#"></div>
            </div>
			<div class="content__item block block-double block-double__inline ">
                <div class="content__item"><img class="metro-place__img" src="f/media/ug-zapad.png" alt="#"></div>
				<div class="content__item mobile"><img class="metro-place__img" src="f/media/nearbyhouse.jpg" alt="#"></div>
            </div>
			<div class="content-block">
				<div class="content-block__col_left">
					<div class="content__item block">
						<div class=""><img class="metro-place__img" src="f/media/slide7_1.jpg" alt="#"></div>
					</div>
					<div class="content__item block_white">
						<div class="" style="display: inline;"><img style="height: 100%;
    display: inline-block;" class="metro-place__img" src="f/media/table.jpg" alt="#"></div>
					</div>
				</div>
				<div class="content-block__col_right">
					<div class="content__item block_white">
						<div class=""></div>
					</div>
					<div class="content__item block">
						<div class=""></div>
					</div>
                    <div class="content__item block_grey">
                        <div class=""></div>
                    </div>
				</div>
			</div>
        </div>
    </div>
    <script type="text/javascript" charset="UTF-8" src="f/min/libs.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="f/min/global.min.js"></script>
<script>
$('.slider').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

$('.studios').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false
});

$('.compact').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false
});
$('.five-persent').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false
});

$('.metro').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false
});
</script>
      
               

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>