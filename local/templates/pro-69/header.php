<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
       
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="Studio21">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link(rel='apple-touch-icon', href='apple-touch-icon.png')-->
    <?$APPLICATION->ShowHead()?>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <link href="<?=SITE_TEMPLATE_PATH?>/dist/css/main.css" rel="stylesheet" type="text/css">
    
    <!--<![endif]-->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/ajax.js" type="text/javascript"></script>
    
</head>



 
  <body class="home-page">
        <?$APPLICATION->ShowPanel();?>
    


