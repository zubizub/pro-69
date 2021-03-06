<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Studio12");
?><div class="wrapper quarter-page">
	<div class="inner">
		<div class="header">
			<div class="header__inner">
				<div class="nav nav--light">
					<div class="nav__inner">
						<div class="nav__item nav__item--photos">
 <span class="nav__item-text"><a class="link nav__link" href="#">Фотографии</a> лофтов</span>
						</div>
						<div class="nav__item nav__item--queue">
 <span class="nav__item-text">1-ая очередь: <a class="link nav__link" href="#">Январь/2017 г.</a></span>
						</div>
						<div class="nav__item nav__item--shoowroom">
 <span class="nav__item-text">Shoowroom: <a class="link nav__link" href="#">Studio#8</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="head">
			<h1 class="heading"><span class="heading__line"><span class="heading__word invisible">Лофт</span></span><span class="heading__line"><span class="heading__word invisible">квартал</span>
			<div class="feature invisible">
				<div class="feature__inner">
					<div class="feature__top">
						<div class="feature__item">
							<div class="feature__term">
								 Свой лофт
							</div>
							<div class="feature__def">
								 от 30 м<sup>2</sup>
							</div>
						</div>
					</div>
					<div class="feature__bottom">
						<div class="feature__item">
							<div class="feature__term">
								 Окупаемость
							</div>
							<div class="feature__def">
								 менее <br>
								 7 лет!
8							</div>
						</div>
					</div>
				</div>
				<div class="feature__pointer">
				</div>
			</div>
 </span></h1>
		</div>
		<div class="concept">
			<div class="row">
				<div class="concept__col col-1-3">
					 <!-- <div class="concept__head">Концепция  квартала #Живи  и <a class="link" href="#">#Работай</a></div> -->
					<div class="concept__head">
						 Концепция квартала #Живи и <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"pagemenu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "pagemenu",
		"COMPONENT_TEMPLATE" => "pagemenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "pagemenu",
		"USE_EXT" => "N"
	)
);?>
					</div>
				</div>
				<div class="concept__col col-1-3">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "desc.php"
	)
);?>
				</div>
				<div class="concept__col col-1-3">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "desc2.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="loft-types">
		<div class="wrapper">
			<div class="inner">
				<div class="loft-types__inner">
					<div class="loft-types__content">
						<div class="loft-types__slide">
							<div class="loft-types__list">
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 1<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 2<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 3<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="loft-types__slide">
							<div class="loft-types__list">
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 1<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 2<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 3<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="loft-types__slide">
							<div class="loft-types__list">
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 1<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 2<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 3<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="loft-types__slide">
							<div class="loft-types__list">
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 1<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 2<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 3<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="loft-types__slide">
							<div class="loft-types__list">
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 1<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 2<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
								<div class="loft-types__item">
	 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
									<div class="loft-types__row">
										<div class="loft-types__caption">
											<div class="loft-types__title">
												 Все виды лофтов <br>
												 в одном вдохновляющем <br>
												 пространстве!
											</div>
											<div class="loft-types__page">
												 3<span class="yellow">–3</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="loft-types__desc">
					<div class="loft-types__tabs">
					
						
							 <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"loft-menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "loftmenu",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "loft-menu"
	),
	false
);?>
					</div>
 <a class="loft-types__act" href="#">
					<div class="loft-types__label">
						 Выбрать
					</div>
 <img src="/local/templates/studio12/dist/img/intro-offer.png" class="loft-types__icon" alt="#"></a>
				</div>
			</div>
		</div>
	</div>
</div>
          <div class="reasons">
            <div class="wrapper">
              <div class="inner">
                <div class="reasons__content">
                  <div class="reasons__title">5 причин #жить в&nbsp;своем лофте:</div>
                  <div class="reasons__row">
                    <div class="row">
                      
                <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"reasons", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "quarters",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "30",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "reasons"
	),
	false
);?>

                
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="metro-place">

          	  <?$APPLICATION->IncludeComponent(
	"bitrix:dw.catalog.index", 
	"mini-slider", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "element",
		"IBLOCK_ID" => "5",
		"LIMIT" => "50",
		"IBLOCK_TYPE" => "quarters",
		"COMPONENT_TEMPLATE" => "mini-slider"
	),
	false
);?>
        
            <div class="metro-place__item"><img class="metro-place__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img//metro-loc.png" alt="#"></div>
          </div>
          <div class="about-lofts quarter-page">
            <div class="wrapper">
              <div class="inner">
                <div class="about-lofts__row row">
                  <div class="col-1-3">
                    <div class="about-lofts__subtitle"> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-title.php"
	)
);?>
                    </div><div class="about-lofts__demo">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-img.php"
	)
);?></div>

                    <div class="about-lofts__access">
                    	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-desc.php"
	)
);?></div>
                  </div>
                  <div class="col-1-3">
                    <div class="about-lofts__subtitle">
                    	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-props-title.php"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-props.php"
	)
);?>
</div>
                  <a class="about-lofts__more" href="#">Презентация Studio#12</a>
                  </div>
                  <div class="col-1-3">
                    <div class="about-lofts__subtitle">Месторасположение <br> квартала:</div>
                    <div class="about-lofts__p">Москва, СВАО, <br><a class="link yellow" href="#">12-й пр. Марьиной Рощи 8 <br></a><small>10 мин. от метро “Марьина Роща”</small></div>
                    <div class="about-lofts__p">
                      <div class="about-lofts__pos">Комплекс апартаментов «Studio 12»  находится вблизи:</div>
                      <div class="about-lofts__in">→  1,5 км от ТТК</div>
                      <div class="about-lofts__in">→  ближайшие крупные автомагистрали Сущевский вал и Проспект Мира.</div>
                    </div>
                    <div class="about-lofts__p">
                      <div class="about-lofts__pos">Пассажиры общественного транспорта доедут от квартала:</div>
                      <div class="about-lofts__in">→  5-7 минут до станции  метро «Марьина Роща»</div>
                      <div class="about-lofts__in">→  за 20-25 минут – до Рижского или Савёловского вокзалов.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


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
          <? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>