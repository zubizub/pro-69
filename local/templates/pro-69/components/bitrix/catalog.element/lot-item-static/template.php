<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<!-- <pre>
<?// print_r($arResult);?>
</pre> -->



       <div class="popupContent">
      
        <h2>Компактная и светлая <p>студия</p></h2>
        <div class="popupInfo">
          <p>площадь</p>
          <p class="item"><?=$arResult['PROPERTIES']['AREA']['VALUE'];?> м²</p>
          <div class="kostyl"></div>
          <p>за м²</p>
          <p class="item"><?=$arResult['PROPERTIES']['RATE']['VALUE'];?> &#8381;</p>
          <div class="kostyl"></div>
          <p>общая цена</p>
          <p class="item"><?=$arResult['PROPERTIES']['PRICE']['VALUE'];?> &#8381;</p>
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
                <td><p class="item"><?=$arResult['PROPERTIES']['STAGE']['VALUE'];?></p></td>
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


