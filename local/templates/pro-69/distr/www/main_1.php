
<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <title>Заглавная страница</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, maximum-scale=3.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="cleartype" content="on">
    <!-- IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if IE]><meta http-equiv="imagetoolbar" content="no"/><meta http-equiv="MSThemeCompatible" content="no"/><![endif]-->
    <!-- End IE -->
    <!-- Windows Phone -->
    <meta name="application-name" content="Заглавная страница">
    <!-- End Windows Phone -->
    <title>Заглавная страница — </title>
    <meta name="author" content="Akado">
    <!--<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/distr/www/f/min/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font1.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font2.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font3.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font4.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/zz.css" media="all">
    <link rel="start" href="/">
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	
<style>
#mfPreviewBar{
	display: none;
}
</style>

</head>
<body id="home_page">
    <div id="wrapper" class="wrapper" style="max-width: 1441px;">
        <header id="header" class="header">
            <div class="header-column">
                <ul class="header-link__list">
                    <li class="header-link__item header-link__item_address header_link__item_first">
						Дом на профсоюзной, 69
                    </li>
					<li class="header-link__item">+7 495 780-40-40</li>
                    <li class="header-link__item call"><a class="header-link" href="#">Перезвонить</a></li>
					<li class="header-link__item write"><a class="header-link" href="#">Написать</a></li>
					<li class="header-link__item drive"><a class="header-link" href="#">Приехать</a></li>
					<li class="header-link__item choose" style=""><a class="header-link" href="#">Выбрать<br/>студию</a></li>
                </ul>
            </div>
        </header>
        <div role="main" id="content" class="content">
            <div class="logo"><img class="" src="/local/templates/pro-69/distr/www/f/media/logo.jpg" alt="#"></div>
            <div class="slider content__item">
                <div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide1.png" alt="#"></div>
                <div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide1.png" alt="#"></div>
            </div>
			<div class="content__item block studios mobile">
                <div class="slide blue sblock">
                    <span class="fp fs36">Дом<br/>на Профсоюзной<br/>ждет вас!</span>
                    <span class="fp fs29">Профсоюзная, 69 -<br/>это светлые, удобные<br/>студии</span>
                    <div class="rel">
                        <span class="fg upper studioText">студии</span>
                        <span class="blockIcon1 fontIcon orange">e</span>
                    </div>

                </div>
                
            </div>
			<div class="content__item block compact">
                <div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide3_1.jpg" alt="#"></div>
                <div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide3_2.jpg" alt="#"></div>
            </div>
			<div class="content__item block block-double mobile">
                <div class="content__item five-persent">
                    <div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide4_1.jpg" alt="#"></div>
                    <div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide4_2.jpg" alt="#"></div>
                </div>
				<div class="content__item">
                    
                </div>
            </div>
			<div class="content__item block_white ready">
                <img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide5_1.jpg" alt="#">
            </div>
			
			<div class="content-block">
				<div class="content-block__col_left rel">
					
					<!--./ DYNAMIC LOF TABLE WITH POPUP -->


  <?$APPLICATION->IncludeComponent(
  "bitrix:dw.catalog.index", 
  ".default", 
  array(
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000",
    "CACHE_TYPE" => "A",
    "IBLOCK_BINDING" => "element",
    "IBLOCK_ID" => "5",
    "LIMIT" => "50",
    "IBLOCK_TYPE" => "quarters",
    "COMPONENT_TEMPLATE" => ".default"
  ),
  false
);?>
                    <!--./ END ^-->

				</div>
				<div class="content-block__col_right">
					
				</div>
			</div>
        </div>
    </div>
    <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/libs.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/global.min.js"></script>
<script>
/*$('.slider').slick({
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
});*/
</script>
</body>
</html>
