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
  <?$APPLICATION->ShowHead()?>
</head>

<body id="home_page">
<?$APPLICATION->ShowPanel();?>
    

         <?/*$APPLICATION->IncludeComponent(
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
);*/?>
    </body>
  </html>