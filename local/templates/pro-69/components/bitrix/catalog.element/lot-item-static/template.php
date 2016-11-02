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


<div style="width:40%;position:relatative;display:inline-block;float:left;">
    <div class="popupContent">
        <h2>Компактная <br>и светлая <p class="studio">студия</p></h2>
        <div class="popupInfo">

            <div class="detail-wrap">
                <div class="detail">
                    <div class="detail__item">
                        <div class="detail__title"><p>площадь</p></div>
                        <div class="detail__desc"><p class="item"><?=$arResult['PROPERTIES']['AREA']['VALUE'];?> м²</p></div>
                    </div>
                </div>

                <div class="detail">
                    <div class="detail__item">
                        <div class="detail__title"><p>за м²</p></div>
                        <div class="detail__desc"><p class="item"><?=$arResult['PROPERTIES']['RATE']['VALUE'];?> &#8381;</p></div>
                    </div>
                </div>

                <div class="detail">
                    <div class="detail__item">
                        <div class="detail__title"><p>общая цена</p></div>
                        <div class="detail__desc"><p class="item"><?=$arResult['PROPERTIES']['PRICE']['VALUE'];?> &#8381;</p></div>
                    </div>
                </div>

                <div class="detail">
                    <div class="detail__item">
                        <div class="detail__line">
                            <div class="detail__title"><p>этаж</p></div>
                            <div class="detail__desc"><p class="item"><?=$arResult['PROPERTIES']['STAGE']['VALUE'];?></p></div>
                        </div>
                        <div class="detail__line">
                            <div class="detail__title"><p>крыло</p></div>
                            <div class="detail__desc"><p class="item">бол.</p></div>
                        </div>
                    </div>
                </div>

                <div class="detail">
                    <div class="detail__item">
                        <div class="detail__title"><p>статус</p></div>
                        <div class="detail__desc"><p class="item">свободно</p></div>
                    </div>
                </div>
            </div>


            <button type="button" class="btn-def">Забронировать</button>
            <div class="popupFooterLeft">
                <p class="phone">+7 (495) 229-01-51</p>
                <a class="btn-callback" href="#">Заказать звонок</a>

                <div class="kostyl"></div>

                <div class="kostyl"></div>
                <p class="adress">дом на профсоюзной, 69</p>
            </div>
        </div>
    </div>
</div>
<div style="width:60%;position:relatative;display:inline-block;float:right;">
    <div class="plan">
        <? if (intval($arResult['PROPERTIES']['AREA']['VALUE']) < 30) { $plan = 'plan1'; } else { $plan = 'plan2'; } ?>
        <div>
            <img src="/local/templates/pro-69/distr/www/f/media/plans/<?=$plan;?>.png">
        </div>
    </div>

    <div class="sliderCard slider--large content__item__">
        <div class=""><img class="metro-place__img"
                           src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_1.jpg" alt="#">
        </div>
        <div class=""><img class="metro-place__img"
                           src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_2.jpg" alt="#">
        </div>
        <div class=""><img class="metro-place__img"
                           src="/local/templates/pro-69/distr/www/f/media/slider1/Pro-69_studio_mini_3.jpg" alt="#">
        </div>
    </div>
    <div class="popupFooterLeft popupFooterLeft--mobile">
        <p class="phone">+7 (495) 229-01-51</p>
        <a class="btn-callback" href="#">Заказать звонок</a>

        <div class="kostyl"></div>

        <div class="kostyl"></div>
        <p class="adress">дом на профсоюзной, 69</p>
    </div>
    <script type="text/javascript">

        $(document).ready(function () {

            $('.sliderCard').slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: true,
                adaptiveHeight: true,
                cssEase: 'linear'
            });

        });

    </script>

</div>
