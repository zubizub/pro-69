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
	<!-- <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/distr/www/f/min/global.css" media="all"> -->
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH;?>/distr/www/f/min/global.css" media="all">
	<!-- <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/distr/www/f/min/global/main.css" media="all"> -->
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font1.css" media="all">
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font2.css" media="all">
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font3.css" media="all">
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font4.css" media="all">
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/zz.css" media="all">
	<!-- <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/vlad.css" media="all"> -->
	<link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/ser.css" media="all">
	<link rel="start" href="/">
	<style>
		#mfPreviewBar {
			display: none;
		}
	</style>
</head>

<body id="home_page">
	<div id="popupBg"></div>
	<div id="ajaxPopups">
		<div id="popupClose">X</div>
		<div style="width:40%;position:relatative;display:inline-block;float:left;">
			<div class="popupContent">
				<h2>Компактная <br>и светлая <p class="studio">студия</p></h2>
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
								<td>
									<p>этаж</p>
								</td>
								<td>
									<p>крыло</p>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p class="item">1</p>
								</td>
								<td>
									<p class="item">бол.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="kostyl"></div>
					<p>статус</p>
					<p style="color: white;">свободно</p>
					<button type="button" class="btn-def">Забронировать</button>
					<div class="popupFooterLeft">
						<p class="phone">+7 (495) 780-40-40</p>
						<br/>
						<div class="kostyl"></div>
						<ul>
							<li><a href="#">заказать звонок</a></li>
							<li><a href="#">отправить на почту</a></li>
							<li><a href="#">скачать</a></li>
						</ul>
						<br/>
						<div class="kostyl"></div>
						<p class="adress">дом на профсоюзной, 69</p>
					</div>
				</div>
			</div>
		</div>
		<div style="width:60%;position:relatative;display:inline-block;float:right;">
			<div class="plan"> <img src="/local/templates/pro-69/distr/www/img/plan.png"> </div>
			<div class="preview"> <img src="/local/templates/pro-69/distr/www/img/preview.png"> </div>
		</div>
	</div>
	<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/libs.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/distr/www/f/min/global.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="/local/templates/pro-69/js/ajax.js"></script>
</body>

</html>
<!--<div class="popup popup--callback">
	<div class="popup__inner">
		<div class="popup__title">Обратный звонок</div>
		<div class="popup__desc">Укажите свой контактный телефон, и наш специалист свяжется с вами в удобное для вас время.</div>
		<form class="form" id="callbackForm" action="#">
			<div class="form__group">
				<div class="form__col">
					<div class="form__field">
						<input class="form__input" type="text" name="name" placeholder="Как Вас зовут" required> </div>
					<div class="form__field">
						<input class="form__input js-phone-mask" type="text" name="phone" placeholder="+7 (___) ___-__-__" required> </div>
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
						<input class="form__submit btn btn--md btn--yellow" type="submit" value="Отправить"> </div>
				</div>
			</div>
		</form>
	</div>
	<button class="popup__close"></button>
</div>-->