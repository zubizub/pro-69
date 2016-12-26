<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetPageProperty("description", "Дом на Профсоюзной, 69 -  это светлые и удобные студии!");
$APPLICATION->SetPageProperty("keywords", "Дом на Профсоюзной, 69  - это светлые и удобные студии!");
$APPLICATION->SetPageProperty("title", "Дом на Профсоюзной, 69");
$APPLICATION->SetTitle("Дом на Профсоюзной, 69"); ?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="cleartype" content="on">
    <!-- IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if IE]>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta http-equiv="MSThemeCompatible" content="no"/><![endif]-->
    <!-- End IE -->
    <!-- Windows Phone -->
    <meta name="application-name" content="Заглавная страница">
    <!-- End Windows Phone -->
    <title><?=$APPLICATION->ShowTitle()?></title>
    <meta name="author" content="Akado">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/select2.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/vlad_sasha.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/distr/www/f/min/global.css" media="all">
    <!--<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font1.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font2.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font3.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font4.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/popup.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/js/bx/jquery.bxslider.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/js/fancy/jquery.fancybox.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/template_styles.css" media="all">
    <link rel="start" href="/">
    <script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/jquery-3.1.1.min.js"></script>

    <style>

        #svg {
            width 80%;
            stroke-width: 2;
        }

        #svg * {
            fill: #ffffff;
            fill-opacity: 0;
            transition: fill-opacity 1s;
        }

        #svg.finished * {
            fill-opacity: 1;
        }

        .fancybox-skin {
            padding: 0 !important;
        }

        .galleryGroup {
            overflow: hidden;
        }

    </style>
    <?$APPLICATION->ShowHead()?>

    <script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "u0pg8kOvRIvqObWccVyAQDruqDaNgLVL"]);
__cs.push(["setCsHost", "//server.comagic.ru/comagic"]);
</script>
<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>
<script type="text/javascript" async src="//smartcallback.ru/api/SmartCallBack.js?t=T8ql5x2sti3y4XPWXXh1" charset="utf-8"></script>
</head>
<body id="home_page">
<?$APPLICATION->ShowPanel()?>
<div id="popupBg" style="z-index: 400; display: none;"></div>



<div id="ajaxPopupCallBack" style="display:none;">

    <div class="popup popup--callback" style="display:block; z-index: 400000;">
        <div class="popup__inner">
            <div class="popup__title">Обратная связь</div>
            <div class="popup__desc">Укажите свой контактный телефон, и наш специалист свяжется с вами в удобное для вас
                время.
            </div>
            <form class="form" id="callbackForm" action="#">
                <input type="hidden" name="action" id="callBackAction">
                <input type="hidden" name="lot" id="callBackLot">
                <div class="form__group">
                    <div class="form__col">
                        <div class="form__field">
                            <input class="form__input" type="text" name="name" placeholder="Как Вас зовут" required>
                        </div>
                        <div class="form__field">
                            <input class="form__input js-phone-mask" type="text" name="phone"
                                   placeholder="+7 (___) ___-__-__" required>
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
                            <textarea class="form__textarea" name="comments" placeholder="Комментарий"
                                      required></textarea>
                        </div>
                        <div class="form__field">
                            <input class="form__submit btn btn--md btn--yellow" type="submit" value="Отправить">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <button id="popupClose2">X</button>
    </div>

</div>









<!-- <div id="ajaxPopups" style="position:fixed; z-index: 400000; display: none;"> -->
<div id="ajaxPopups">
    <button id="popupClose">X</button>

    <div id="cardLoft">
        <div style="width:40%;position:relatative;display:inline-block;float:left;">
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
                        <p class="phone">+7 (495) 229-01-51</p>
                        <a class="btn-callback" href="#">Заказать звонок</a>

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
</div>
<div id="wrapper" class="wrapper">
    <header id="header" class="header">
        <div class="header-column">
            <img class="logo-mobile" src="/local/templates/pro-69/img/logo-mobile.jpg" alt="PRO-69.RU">
            <ul class="header-link__list">
                <li class="header-link__item header-link__item_address header_link__item_first">
                    Дом на профсоюзной, 69
                </li>
                <li class="header-link__item header-link header-link-middle">
                    <a href="#loft-table" class="header-link-choose">Выбрать <span class="fg header-link__text">Квартиру</span></a>
                </li>
                <li class="header-link__item header-link header-phone-text">+7 (495) 229-01-51</li>
                <li class="header-link__item call header-link-call">
                    <a class="header-link" href="mailto:INFO@PRO-69.RU">INFO@PRO-69.RU</a>
                    <a class="header-icon header-call-icon btn-callback-header" href="#"></a>
                </li>
                <li class="header-link__item call header-link-mail">
                    <a class="btn-callback-header" href="#">Обратный звонок</a>
                    <a class="header-icon header-mail-icon" href="mailto:INFO@PRO-69.RU"></a>
                </li>
            </ul>
        </div>
    </header>
    <div role="main" id="content" class="content">
        <div class="logo"><img class="" src="/local/templates/pro-69/distr/www/f/media/logo.jpg" alt="#"></div>
        <div class="slider_wrapper content__item">
            <div class="slider slider--large">
                <div class="">
                    <a class="fancybox" rel="gallery1"
                       href="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_3.jpg" title="">
                        <img src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_3.jpg"
                             alt=""/>
                    </a>
                </div>

                <div class="">
                    <a class="fancybox" rel="gallery1"
                       href="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_1.jpg" title="">
                        <img src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_1.jpg"
                             alt=""/>
                    </a>
                </div>

                <div class="">
                    <a class="fancybox" rel="gallery1"
                       href="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_2.jpg" title="">
                        <img src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_2.jpg"
                             alt=""/>
                    </a>
                </div>

            </div>
        </div>

        <!-- bx -->
        <!--  <ul class="bx slider--large ">
             <li><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_1.jpg" alt="#"></li>
             <li><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_2.jpg" alt="#"></li>
             <li><img class="metro-place__img" src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_3.jpg" alt="#"></li>
         </ul> -->


        <div class="content__item block studios">
            <div class="slide blue sblock">
                <span class="fp fs53" style="line-height: 1.1">Дом на <br/>Профсоюзной<br/>ждет вас!</span>
                <span class="fp fs29">Профсоюзная, 69 -<br/>это светлые, удобные</span>

                <div class="rel">
                    <span class="fg upper studioText text-doms">Квартиры</span>
                    <span class="blockIcon1 fontIcon orange">e</span>
                </div>

            </div>

        </div>
        <!-- <div class="clear clearfix"></div> -->
        <div class="content__item block compact hide-for-4">
            <div class="slide">
                <!-- <span class="fp fs53">Просторные<br>двухкомнатные<br>студии</span> -->

                <span class="fp fs53">1-комнатная квартира<br>с отделкой</span>
                <span class="fg upper studioPrice">от<span>5,9</span></span>
                <span class="fg upper fs37">миллионов рублей</span>
            </div>
        </div>
        <!-- 			<div class="content__item five-persent">
                        <div class="block_white">
                            <div class="slide">
                                <p>
                                    <span>В Октябре скидка на покупку студии!</span>
                                    Прочное готовое здание реновируется и переформатируется с помощью. строительных технологий последнего поколения в уникальный жилой комплекс европейского
                                </p>
                                <p>-5%</p>
                            </div>
                        </div>
                        <div class="block">

                        </div>
                    </div> -->
        <div class="content__item block block-double">
            <div class="content__item five-persent">
                <?$APPLICATION->IncludeComponent(
                "bitrix:news",
                "main_offers",
                array(
                "ADD_ELEMENT_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "main_offers",
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_FIELD_CODE" => array(
                0 => "",
                1 => "",
                ),
                "DETAIL_PAGER_SHOW_ALL" => "Y",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PROPERTY_CODE" => array(
                0 => "",
                1 => "AUTHOR_LINK",
                2 => "",
                ),
                "DETAIL_SET_CANONICAL_URL" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FILTER_FIELD_CODE" => array(
                0 => "",
                1 => "",
                ),
                "FILTER_NAME" => "",
                "FILTER_PROPERTY_CODE" => array(
                0 => "",
                1 => "AUTHOR_LINK",
                2 => "SECTION",
                3 => "",
                ),
                "FORUM_ID" => "1",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "news",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => array(
                0 => "",
                1 => "",
                ),
                "LIST_PROPERTY_CODE" => array(
                0 => "",
                1 => "AUTHOR_LINK",
                2 => "",
                ),
                "MESSAGES_PER_PAGE" => "10",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "NEWS_COUNT" => "10",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
                "PREVIEW_TRUNCATE_LEN" => "",
                "REVIEW_AJAX_POST" => "Y",
                "SEF_FOLDER" => "/blog/",
                "SEF_MODE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_STATUS_404" => "Y",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SHOW_LINK_TO_FORUM" => "Y",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "URL_TEMPLATES_READ" => "",
                "USE_CAPTCHA" => "Y",
                "USE_CATEGORIES" => "N",
                "USE_FILTER" => "Y",
                "USE_PERMISSIONS" => "N",
                "USE_RATING" => "N",
                "USE_REVIEW" => "N",
                "USE_RSS" => "N",
                "USE_SEARCH" => "N",
                "USE_SHARE" => "N",
                "VARIABLE_ALIASES" => array(
                "SECTION_ID" => "SECTION_ID",
                "ELEMENT_ID" => "ELEMENT_ID",
                )
                ),
                false
                );?>


            </div>
            <div class="content__item block_dark-blue registration">
                <div class="fp title">Мечтаете о собственном жилье?</div>
                <p class="fp text">Комфортные квартиры<br>
                    c пропиской в Москве.</p>

                <p class="fg brush"><span>+П</span>рописка</div>
        </div>
        <div class="content__item block_white ready">
            <div class="slide rel">
                <span class="fp fs53">Готовность — <br>80%</span>
                <span class="fp fs29" style="margin-top:30px; line-height: 1.3">Готовая квартира — <br>в середине 2017</span>
                <span class="fg upper studioPrice z1000">2017</span>
            </div>
        </div>
        <div class="content__item block_white metro">
            <div class="slide">
                <span class="fp fs53">10 минут<br>пешком!</span>
                <span class="fp fs29">В пешей доступности <br>м.Калужская и м.Беляево</span>
                <span class="fg upper">метро</span>
            </div>
        </div>
        <div class="content__item map">
            <div class="slide">
                <img src="/local/templates/pro-69/distr/www/f/media/69_map.jpg" alt="#">
            </div>
        </div>
        <!--<div class="content__item block area mobile-show autoHeight">-->
            <!--<div class="slide blue sblock">-->
                <!--<span class="fp fs38">Компактные<br> и светлые <br/>студии</span>-->
                            <!--<span class="fg upper studioText area">-->
                                <!--<span class="fl lhCond fs77">от<br/>м<sup>2</sup></span>-->
                                <!--<span class="fl fs177 mTopMarg10">17</span></span>-->

                <!--<div class="clear clearfix"></div>-->
                <!--<div class="rel">-->
                    <!--<a href="javascript:void(0);" class=""><img-->
                            <!--src="/local/templates/pro-69/distr/www/f/media/plans/plan1.png">-->
                        <!--&lt;!&ndash;   <span class="fp fs26 blockSelect"></span> &ndash;&gt;-->
                    <!--</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->

        <div class="content__item block_white area2 mobile-show autoHeight">
            <div class="slide blue sblock">
               <!--  <span class="fp fs38 tBlue">Просторные<br>двухкомнатные<br>студии</span> -->
                <span class="fp fs38 tBlue" style="line-height: 1.1;">1-комнатная квартира<br>с отделкой</span>

                <div class="clear clearfix"></div>
                <div class="rel area2">

                    <img src="/local/templates/pro-69/distr/www/f/media/plans/plan2.png"/>
                                 <span class="fg upper studioText area2">
                                <span class="fl fs50 lhCond tBlue">от<br/>м<sup>2</sup></span>
                                <span class="fl fs100 mTopMarg10 tBlue">33</span>
                            </span>
                </div>
            </div>
        </div>
        <div class="content__item block_white mobile-show overflowBlock">
            <div class="slide blue sblock ">
                    <span class="fp fs36 tBlue">
                    Офис-продаж<br>
                    на Профсоюзной,<br>
                    69
                    </span>
                    <span class="fp fs20 tBlue mb50i text-week">
                        Пн-Вс с 11 до 20<br/>
                        <!-- Вс и пн – выходной<br/> -->
                        2 этаж, офис 201
                    </span>

                <div class="rel">
                    <span class="fg upper studioText--showroom">Show-<br>room</span>

                </div>

            </div>

        </div>
        <div class="content__item block readyBlock mobile-show overflowBlock">
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

        <div class="content__item west">
            <div class="slide block-double">
                <div class="block">
                    <div>
                        <span class="fp fs29smaller">Жить в престижном районе.</span>

                        <p class="fg upper">юго-запад <span>москвы</span></p>
                    </div>
                </div>
                <div class="block block_white">
                    <div>
                        <span class="fp fs28">Вблизи Дома на Профсоюзной<br>находится: </span>

                        <div>
                            <ul class="fp fs20">
                                <li>Три супермаркета</li>
                                <li>Два торговых центра</li>
                                <li>Кафе и рестораны</li>
                                <li>Школы и детские сады</li>
                            </ul>
                            <ul class="fp fs20">
                                <li>Медицинские учреждения</li>
                                <li>Институты МГФЮА и РГАИС</li>
                                <li>Отделения банков</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="content__item west block-double">
             <div class="block">
                 <div>
                     <span class="fp fs29">Жить в престижном районе.</span>
                     <p class="fg upper">юго-запад <span>москвы</span></p>
                 </div>
             </div>
             <div class="block_white">
                 <div>
                     <span class="fp fs29">Вблизи Дома на Профсоюзной<br>находится: </span>
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
</div>  -->
        <div class="content-block">
            <div class="content-block__col_left">

                <!--                                 <div class="flip-container slider_wrapper content__item"> -->

                <!-- ВТОРОЙ РАЗ ИДИ НАХУЙ СО СВОИМ CONTENT_ITEM -->
                <div class="content__item_ rel">


                    <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "g2",
                    array(
                    "IBLOCK_TYPE" => "info",
                    "IBLOCK_ID" => "7",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ID",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER2" => "ASC",
                    "FIELD_CODE" => array(
                    0 => "",
                    1 => $arParams["LIST_FIELD_CODE"],
                    2 => "",
                    ),
                    "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                    2 => "",
                    ),
                    "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                    "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                    "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                    "SET_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "MESSAGE_404" => $arParams["MESSAGE_404"],
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "FILE_404" => $arParams["FILE_404"],
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                    "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                    "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                    "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                    "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "CHECK_DATES" => "N",
                    "COMPONENT_TEMPLATE" => "g2",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y"
                    ),
                    $component
                    );?>


                </div>


                <div class="row row4">

                    <? $APPLICATION->IncludeComponent(
                    "bitrix:dw.catalog.index",
                    "popup-card",
                    Array(
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000",
                    "CACHE_TYPE" => "N",
                    "IBLOCK_BINDING" => "element",
                    "IBLOCK_ID" => "5",
                    "IBLOCK_TYPE" => "quarters",
                    "LIMIT" => "100"
                    )
                    );?>

                    <!--  <div class="content__item block_white mobile overflowBlock">
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

                              </div>-->

                </div>
            </div>
            <div class="content-block__col_right">


                <!--&lt;!&ndash;- ИДИ ТЫ НА ХУЙ СО СВОИМ content__item с фиксированной высотой &ndash;&gt;-->
                <!--<div class="content__item block area autoHeight">-->
                    <!--<div class="slide blue sblock">-->
                        <!--<span class="fp fs38">Компактные<br> и светлые <br/>студии</span>-->
                            <!--<span class="fg upper studioText area">-->
                                <!--<span class="fl lhCond fs77">от<br/>м2</span>-->
                                <!--<span class="fl fs177 mTopMarg10">17</span></span>-->

                        <!--<div class="clear clearfix"></div>-->
                        <!--<div class="rel">-->
                            <!--<a href="javascript:void(0);" class="">-->
                                <!--<img src="/local/templates/pro-69/distr/www/f/media/plans/plan1.png">-->
                                <!--&lt;!&ndash;   <span class="fp fs26 blockSelect"></span> &ndash;&gt;-->
                            <!--</a>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="content__item block_white area2 autoHeight">
                    <div class="slide blue sblock">
                        <span class="fp fs38 tBlue" style="line-height: 1;">1-комнатная квартира<br>с отделкой</span>

                        <div class="clear clearfix"></div>
                        <div class="rel area2">

                            <img src="/local/templates/pro-69/distr/www/f/media/plans/plan2.png"/>
                                 <span class="fg upper studioText area2">
                                <span class="fl fs50 lhCond tBlue">от<br/>м2</span>
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

                <div class="content__item block_white mobile overflowBlock show-room">
                    <div class="slide blue sblock ">
                    <span class="fp fs36 tBlue">
                    Офис-продаж<br>
                    на Профсоюзной,<br>
                    69
                    </span>
                    <span class="fp fs20 tBlue mb50i">
                        Пн-Вс с 11 до 20<br/>
                        <!-- Вс и пн – выходной<br/> -->
                        2 этаж, офис 201
                    </span>

                        <div class="rel">
                            <span class="fg upper studioText--showroom">Show-<br>room</span>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</div>

<!--<a href="#loft-table" class="choose-mobile">-->
    <!--<img src="/local/templates/pro-69/img/choose-mobile.png">-->
<!--</a>-->


<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/libs.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/global.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/src/global/gallery2.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/src/global/popupLoft.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/src/global/callBack.js"></script>
<!--<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/ajax.js"></script>-->
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/ajax-upload.js"></script>

<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/bx/jquery.bxslider.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/fancy/jquery.fancybox.pack.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/jquery.maskedinput.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/select2.full.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/jspdf.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/scripts.js"></script>
<script>


    $('.bx').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: true
    });

    /*$(document).ready(function() {
     $('.flip-container').addClass('flippp');
     });
     */
    $(function () {                // сработает, когда документ загрузится
        $('.logo').delay(1000) // пауза в 3 сек.
                .show(1000); // появление элемента в течении 1 сек.
    });

    $(document).ready(function () {

        $('.slider0').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });

    });

    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: 'none',
            closeEffect: 'none'
        });
    });

    $(function () {
        var height = $('body').innerHeight();
        var width = $('body').innerWidth();
        if (width < 640) {
            $('.content__item').height($('.content__item').width());
            $('.slider img').height($('.content__item').height());
            $('.slider').height($('.content__item').height());
            $('.block-double .content__item').height($('.content__item').height() / 2 - 30);
            $('.west').height($('.content__item').height());
            $('.west .block').height($('.content__item').height() / 2);
            $('.west .white_block').height($('.content__item').height() / 2);
        }
        else if (width < 991) {
            $('.content__item').height($('.content__item').width());
            $('.slider img').height($('.content__item').height());
            $('.slider').height($('.content__item').height());
            $('.block-double .content__item').height($('.content__item').height() / 2 - 60);
            $('.west').height($('.content__item').height());
            $('.west .block').height($('.content__item').height() / 2);
            $('.west .white_block').height($('.content__item').height() / 2);

        } else {
            $('.content__item').height($('.content__item').width() / 2);
            $('.slider img').height($('.content__item').height());
            $('.slider').height($('.content__item').height());
            $('.block-double .content__item').height($('.content__item').height() / 2 - 60);
            $('.west .block').height($('.content__item').height() / 2);
            $('.west .white_block').height($('.content__item').height() / 2);
            $('.slider0').height($('.content__item').height() * 1.5);

        }

        $(window).resize(function () {
            var height = $('body').innerHeight();
            var width = $('body').innerWidth();
            if (width < 640) {
                $('.content__item').height($('.content__item').width());
                $('.slider img').height($('.content__item').height());
                $('.slider').height($('.content__item').height());
                $('.block-double .content__item').height($('.content__item').height() / 2 - 30);
                $('.west').height($('.content__item').height());
                $('.west .block').height($('.content__item').height() / 2);
                $('.west .white_block').height($('.content__item').height() / 2);
            } else if (width < 991) {
                $('.content__item').height($('.content__item').width());
                $('.slider img').height($('.content__item').height());
                $('.slider').height($('.content__item').height());
                $('.block-double .content__item').height($('.content__item').height() / 2 - 60);
                $('.west').height($('.content__item').height());
                $('.west .block').height($('.content__item').height() / 2);
                $('.west .white_block').height($('.content__item').height() / 2);
            } else {
                $('.content__item').height($('.content__item').width() / 2);
                $('.slider img').height($('.content__item').height());
                $('.slider').height($('.content__item').height());
                $('.block-double .content__item').height($('.content__item').height() / 2 - 60);
                $('.west .block').height($('.content__item').height() / 2);
                $('.west .white_block').height($('.content__item').height() / 2);
                $('.slider0').height($('.content__item').height() * 1.5);
            }
        });
    });

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73821457-4', 'auto');
  ga('send', 'pageview');

</script>

            
            <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40652559 = new Ya.Metrika({
                    id:40652559,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40652559" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
