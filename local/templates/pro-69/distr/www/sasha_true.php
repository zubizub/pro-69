<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Заглавная страница"); ?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<!DOCTYPE html>

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
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font1.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font2.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font3.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font4.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/ser.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/popup.css" media="all">
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/zz_true.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/vlad_true.css" media="all">
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/global-sasha.css" media="all">
    <link rel="start" href="/">
	<style>
		#ajaxPopup{
			display: none;
		}
		
	</style>
</head>
<body id="home_page">
	<div id="popupBg" style="z-index: 400; display: none;"></div>
    <div id="ajaxPopupCallBack" style=";">

         <div class="popup popup--callback">
        <div class="popup__inner">
                    <div class="popup__title">Обратный звонок</div>
                    <div class="popup__desc">Укажите свой контактный телефон, и наш специалист свяжется с вами в удобное для вас время.</div>
                    <form class="form" id="callbackForm" action="#">
                      <div class="form__group">
                        <div class="form__col">
                          <div class="form__field">http://dev12.korovets.ru/quarters/?bitrix_include_areas=Y&clear_cache_session=Y&clear_cache=Y
                            <input class="form__input" type="text" name="name" placeholder="Как Вас зовут" required>
                          </div>
                          <div class="form__field">
                            <input class="form__input js-phone-mask" type="text" name="phone" placeholder="+7 (___) ___-__-__" required>
                          </div>
                          <div class="form__group form__group--inner">
                            <div class="form__col">
                              <div class="form__field form__select-wrap">
                                <select class="form__select" name="fromClock" data-placeholder="С" required>
                                  <option value=""></option>
                                  <option value="0:00">0:00</option>
                                  <option value="1:00">1:00</option>
                                  <option value="2:00">2:00</option>
                                  <option value="3:00">3:00</option>
                                  <option value="4:00">4:00</option>
                                  <option value="5:00">5:00</option>
                                  <option value="6:00">6:00</option>
                                  <option value="7:00">7:00</option>
                                  <option value="8:00">8:00</option>
                                  <option value="9:00">9:00</option>
                                  <option value="10:00">10:00</option>
                                  <option value="11:00">11:00</option>
                                  <option value="12:00">12:00</option>
                                  <option value="13:00">13:00</option>
                                  <option value="14:00">14:00</option>
                                  <option value="15:00">15:00</option>
                                  <option value="16:00">16:00</option>
                                  <option value="17:00">17:00</option>
                                  <option value="18:00">18:00</option>
                                  <option value="19:00">19:00</option>
                                  <option value="20:00">20:00</option>
                                  <option value="21:00">21:00</option>
                                  <option value="22:00">22:00</option>
                                  <option value="23:00">23:00</option>
                                </select>
                              </div>
                            </div>
                            <div class="form__col">
                              <div class="form__field form__select-wrap">
                                <select class="form__select" name="toClock" data-placeholder="До" required>
                                  <option value=""></option>
                                  <option value="0:00">0:00</option>
                                  <option value="1:00">1:00</option>
                                  <option value="2:00">2:00</option>
                                  <option value="3:00">3:00</option>
                                  <option value="4:00">4:00</option>
                                  <option value="5:00">5:00</option>
                                  <option value="6:00">6:00</option>
                                  <option value="7:00">7:00</option>
                                  <option value="8:00">8:00</option>
                                  <option value="9:00">9:00</option>
                                  <option value="10:00">10:00</option>
                                  <option value="11:00">11:00</option>
                                  <option value="12:00">12:00</option>
                                  <option value="13:00">13:00</option>
                                  <option value="14:00">14:00</option>
                                  <option value="15:00">15:00</option>
                                  <option value="16:00">16:00</option>
                                  <option value="17:00">17:00</option>
                                  <option value="18:00">18:00</option>
                                  <option value="19:00">19:00</option>
                                  <option value="20:00">20:00</option>
                                  <option value="21:00">21:00</option>
                                  <option value="22:00">22:00</option>
                                  <option value="23:00">23:00</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form__col">
                          <div class="form__field">
                            <textarea class="form__textarea" name="comments" placeholder="Комментарий" required></textarea>
                          </div>
                          <div class="form__field">
                            <input class="form__submit btn btn--md btn--yellow" type="submit" value="Отправить">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <button class="popup__close"></button></div>
              </div>
			      <div id="ajaxPopups" style="position:fixed; z-index: 400000; display: none;">
        <div id="popupClose">X</div>
        <div style="width:40%;position:relatative;display:inline-block;float:left;" id="cardLoft">
            <div class="popupContent">
            
                <h2>Компактная и светлая <p>студия</p></h2>
                <div class="popupInfo">
                    <p>площадь</p>
                    <p class="item">33,50 м²</p>
                    <div class="kostyl"></div>
                    <p>за м²</p>
                    <p class="item">80 000,00 &#8381;</p>
                    <div class="kostyl"></div>
                    <p>общая цена</p>
                    <p class="item">4 200 000,00 &#8381;</p>
                    <div class="kostyl"></div>
                    <table>
                        <thead>
                            <tr>
                                <td><p>этаж</p></td>
                                <td><p>крыло</p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p class="item">1</p></td>
                                <td><p class="item">бол.</p></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="kostyl"></div>
                    <p>статус</p>
                    <p style="color: white;">свободно</p>
                    <button type="button" class="btn-def">Забронировать</button>
                    <div class="popupFooterLeft">
                        <p class="phone">+7 (495) 780-40-40</p>
                        <div class="kostyl"></div>
                        <ul>
                            <li><a href="#">заказать звонок</a></li>
                            <li><a href="#">отправить на почту</a></li>
                            <li><a href="#">скачать</a></li>
                        </ul>
                        <div class="kostyl"></div>
                        <p class="adress">дом на профсоюзной, 69</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="width:60%;position:relatative;display:inline-block;float:right;">
                <div class="plan">
                    
                </div>
                <div class="preview">
                </div>
            </div>
    </div>
    <div id="wrapper" class="wrapper" style="max-width: 1439px; min-width: 1439px;">
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
            <div class="logo" style="display: none;"><img class="" src="/local/templates/pro-69/distr/www/f/media/logo.jpg" alt="#"></div>
            <div class="flip-container slider_wrapper content__item">
				<div class="flipper">
					<div class="front" style="background: orange;">
			
					</div>
					<div class="back slider">
			                <div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide1.png" alt="#"></div>
							<div class=""><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slide1.png" alt="#"></div>
					</div>
				</div>
			</div>
			<div class="content__item studios mobile flip-container">
				<div class="flipper">
					<div class="front" style="background: orange;"></div>
					<div class="back slider block">
						<div class="slide blue sblock">
							<span class="fp fs36">Дом<br/>на Профсоюзной<br/>ждет вас!</span>
							<span class="fp fs29">Профсоюзная, 69 -<br/>это светлые, удобные<br/>студии</span>
							<div class="rel">
								<span class="fg upper studioText">студии</span>
								<span class="blockIcon1 fontIcon orange">e</span>
							</div>

						</div>
					</div>
				</div>
            </div>
			<div class="content__item compact flip-container block">
				<div class="flipper">
					<div class="front" style="background: orange;">
					</div>
					<div class="back">
						<div class="slide">
							<span class="fp fs53">Компактные<br> и светлые студии</span>
							<span class="fg upper studioPrice">от<span>2,9</span></span>
							<span class="fg upper fs31">миллионов рублей</span>
						</div>
					</div>
				</div>
            </div>
			<div class="content__item mobile flip-container">
				<div class="flipper">
					<div class="front" style="background: orange;">
					</div>
					<div class="back block block_white content__item block-double">
						<div class="content__item five-persent">
							<div class="five-persent__left-block" style="display: inline-block; width: 50%;">
								<div class="fp  title"  style="margin-bottom: 15px;"
>В Октябре скидка<br/> на покупку студии!</div>
								<div class="text">
									Прочное готовое здание реновируется и переформатируется с помощью
									строительных технологий последнего поколения в уникальный жилой комплекс
								</div>
							</div>
							<div class="five-persent__right-block" style="display: inline-block; width: 50%; margin-left: -5px;">
								<span class="fg orange">-5%</span>
							</div>
						</div>
						<div class="content__item block_dark-blue registration">
							<div class="fp title">Мечтаете о собственном жилье?</div>
							<p class="fp text">Комфортные студии<br>
							c пропиской в Москве.</p>
							<p class="fg brush"><span>+П</span>рописка</div>
						</div>
					</div>
				</div>
			<div class="content__item block_white ready flip-container">
				<div class="flipper">
					<div class="front" style="background: orange;">
					</div>
					<div class="back">
						<div class="slide">
							<span class="fp fs53">Готовность — <br>80%</span>
							<div class="font-wrapper" style="position: relative; margin-top: 20px; padding-top: 7px;">
								<span class="fontIcon">b</span>
								<span class="fp fs29 cardColorWhite">Сдача проекта — <br>уже в начале года:</span>
							</div>
							<span class="fg upper studioPrice">2017</span>
						</div>
					</div>
				</div>
            </div>
			<div class="content__item block_white metro flip-container">
				<div class="flipper">
					<div class="front" style="background: orange;">
					</div>
					<div class="back">
						<div class="slide">
							<span class="fp fs53">7 минут<br>пешком!</span>
							<span class="fp fs29">В пешей доступности <br>м.Калужская и м.Беляево</span>
							<span class="fg upper">метро</span>
						</div>
					</div>
				</div>
            </div>
			<div class="content__item map flip-container">
				<div class="flipper">
					<div class="front" style="background: orange;">
					</div>
					<div class="back">
						<div class="slide">
							<img src="/local/templates/pro-69/distr/www/f/media/69_map.jpg" alt="#">
						</div>
					</div>
				</div>
            </div>
			<div class="content__item west flip-container">
							<div class="flipper">
					<div class="front" style="background: orange;">
					</div>
					<div class="back">
						<div class="slide">
							                <div class="block">
                    <div>
                        <span class="fp fs29smaller">Жить в престижном районе.</span>
                        <p class="fg upper">юго-запад <span>москвы</span></p>
                    </div>
                </div>
                <div class="block_white">
                    <div>
                        <span class="fp fs28">Вблизи Дома на Профсоюзной<br>находится: </span>
                        <div>
                            <ul class="fp fs20">
                                <li>Супермаркеты</li>
                                <li>Торговые центры</li>
                                <li>Спортивные клубы</li>
                                <li>Аптеки, школы, дет. сады</li>
                            </ul>
                            <ul class="fp fs20">
                                <li>Институты МФЮА,РГАИС</li>
                                <li>Отделения банков</li>
                                <li>Кафе и рестораны</li>
									</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="content-block">
				<div class="content-block__col_left">

					<!--./ DYNAMIC LOF TABLE WITH POPUP -->
                                <div class="content__item_ rel">

                                  
                    <ul class="gallery2Switch">
                        <li class="switch">  
                            <a href="javascript:void(0);" data-switch="group1" class="fp fs20">Дом</a>
                        </li>
                        <li class="switch active">
                            <a href="javascript:void(0);" data-switch="group2" class="fp fs20">Вход</a>
                        </li>
                        <li class="switch">
                            <a href="javascript:void(0);" data-switch="group3" class="fp fs20">Студии</a>
                        </li>

                    </ul>
            
                   
                    <div class="group1 galleryGroup">
                            <div class=""><img class="" src="/local/templates/pro-69/distr/www/f/media/slider2/Pro-69_House_1.jpg" alt="#"></div>
                        
                    </div>
                      
                       <div class="group2 galleryGroup">
                            <div class=""><img class="" src="/local/templates/pro-69/distr/www/f/media/slider2/Pro-69_entrance_1.jpg" alt="#"></div>
                        
                    </div>
                        
                        <div class="group3 galleryGroup">
                            <div class=""><img class="" src="/local/templates/pro-69/distr/www/f/media/slider2/Pro-69_floor_1.jpg" alt="#"></div>
                        
                    </div>

                
                </div>
				 <?$APPLICATION->IncludeComponent(
    "bitrix:dw.catalog.index",
    "",
    Array(
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000",
        "CACHE_TYPE" => "N",
        "IBLOCK_BINDING" => "element",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "quarters",
        "LIMIT" => "100"
    )
);?><br>
				</div>
				<div class="content-block__col_right">
                    <div class="content__item block area autoHeight">
                         <div class="slide blue sblock">
                            <span class="fp fs38">Компактные<br> и светлые студии</span>
                            <span class="fg upper studioText area">
                                <span class="fl lhCond fs77">от<br/>м2</span>
                                <span class="fl fs177 mTopMarg10">17</span></span>
                            <div class="clear clearfix"></div>
                            <div class="rel">
                                <a href="javascript:void(0);" class=""><img src="/local/templates/pro-69/distr/www/f/media/plans/plan1.png">
                                <span class="fp fs26 blockSelect"></span></a>
                            </div>
                        </div>
                    </div>

                        <div class="content__item block_white area2 autoHeight">
                         <div class="slide blue sblock">
                            <span class="fp fs38 tBlue">Просторные<br>двухкомнатные<br>студии</span>
                            <div class="clear clearfix"></div>
                            <div class="rel area2">
                                
                                    <img src="/local/templates/pro-69/distr/www/f/media/plans/plan2.png"/>
                                 <span class="fg upper studioText area2">
                                <span class="fl fs50 lhCond tBlue" >от<br/>м2</span>
                                <span class="fl fs100 mTopMarg10 tBlue">33</span>
                            </span>
                            </div>
                        </div>
                     </div>

				  <div class="content__item block readyBlock mobile overflowBlock">
						<div class="slide blue sblock ">
							<span class="fp fs36">Готовая<br/>квартира<br/> с отделкой!</span>
							<span class="fp fs20">
								Предлагаем качественную<br/>
								отделку по минимальным ценам.<br/>
								"Завози мебель и живи!" </span>
							<div class="rel ">
								<span class="fg upper studioText--ready">готово</span>
								<span class="blockIcon2 fontIcon orange">f</span>
							</div>
						</div>
					</div>
					<div class="content__item block_white mobile overflowBlock">
						<div class="slide blue sblock ">
							<span class="fp fs36 tBlue">
							Офис-продаж<br>
							на Профсоюзной,<br>
							69
							</span>
							<span class="fp fs20 tBlue mb50i">
								10:00—19:00<br/>
								2 этаж, офис 201
							</span>
							<div class="rel overflowBlock">
								<span class="fg upper studioText--showroom">Show-<br>room</span>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			

			
			
        </div>
    </div>
    <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/libs.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/global.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="vivus.js"></script>
  <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/src/global/gallery2.js"></script>
  <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/src/global/popupLoft.js"></script>
  <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/src/global/callBack.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/ajax.js"></script>
	    <script>
        jQuery(document).ready(function($) {
            $('.slider-house').slick({
              dots: true,
              infinite: true,
              speed: 300,
              slidesToShow: 1,
              adaptiveHeight: true,
              prevArrow: '<button type="button" class="slick-prev"></button>'
            });           
        });
    </script>
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
});
*/
$(function(){
	var height = $('body').innerHeight();
	var width = $('body').innerWidth();
	//if (width < 991) {
	//	$('.content__item').height($('.content__item').width());
	//	$('.slider img').height($('.content__item').height());
	//	$('.slider').height($('.content__item').height());
	//	$('.block-double .content__item').height($('.content__item').height()/2);
	//} else {
		$('.content__item').height($('.content__item').width()/2);
		$('.slider img').height($('.content__item').height());
		$('.slider').height($('.content__item').height());
		$('.block-double .content__item').height($('.content__item').height()/2 - 60);
		$('.rel').height($('.content__item').height()/1.5);
//	}
	
	  $(window).resize(function(){
    	var height = $('body').innerHeight();
		var width = $('body').innerWidth();
		//if (width < 991) {
			//$('.content__item').height($('.content__item').width());
			//$('.slider img').height($('.content__item').height());
			//$('.slider').height($('.content__item').height());
			//$('.block-double .content__item').height($('.content__item').height()/2);
		//} else {
			$('.content__item').height($('.content__item').width()/2);
			$('.slider img').height($('.content__item').height());
			$('.slider').height($('.content__item').height());
			$('.block-double .content__item').height($('.content__item').height()/2 - 60);
		//}
	});
});
</script>
</body>
</html>
