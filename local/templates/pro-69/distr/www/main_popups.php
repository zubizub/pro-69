<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Заглавная страница"); ?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<!DOCTYPE html>
<html lang="ru-RU">

<head>
  <title>Заглавная страница</title><?$APPLICATION->IncludeComponent(
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