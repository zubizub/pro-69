<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Заглавная страница"); ?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <title>Заглавная страница</title>
    
    <!--<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">-->
    <!-- <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/distr/www/f/min/global.css" media="all"> -->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH;?>/distr/www/f/min/global.css" media="all">
    <!-- <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/distr/www/f/min/global/main.css" media="all"> -->
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font1.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font2.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font3.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/fonts/font4.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/zz.css" media="all">
    <link rel="stylesheet" type="text/css" href="/local/templates/pro-69/css/vlad.css" media="all">
    <link rel="start" href="/">
  <?$APPLICATION->ShowHead()?>




</head> 
  <body class="home-page">
        <?$APPLICATION->ShowPanel();?>
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