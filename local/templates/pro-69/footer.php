<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>  

<img src='/img/index.jpg' style='width:100%;'>


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

  </body>
</html>

