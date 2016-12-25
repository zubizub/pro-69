<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0):
?>

<div id="loft-table" class="section section--lofts is-colored">
 <!-- <img src="/local/templates/pro-69/distr/www/f/media/reserve.jpg" style="width:100%;"> -->
                    <div class="lots__list">
                      <div class="lots__inner">
                          <select class="lot-sort-mobile">
                              <option selected>Сортировать лоты</option>
                              <option data-sort="stage" data-direction="asc">Этаж</option>
                              <option data-sort="area" data-direction="asc">Площадь М2</option>
                              <option data-sort="price" data-direction="asc">Цена за М2</option>
                              <option data-sort="cost" data-direction="asc">Стоимость</option>
                          </select>
                        <div class="lot lot--header">
                          <div class="lot__value-0">
                              <a href="#" class="lot-sort" data-sort="number" data-direction="asc">N</a>
                          </div>
                          <div class="lot__value-1">
                              <a href="#" class="lot-sort" data-sort="wing" data-direction="asc">Кр.</a>
                          </div>
                          <div class="lot__value-2">
                              <a href="#" class="lot-sort" data-sort="type" data-direction="asc">Тип</a>
                          </div>
                          <div class="lot__value-3">
                              <a href="#" class="lot-sort" data-sort="stage" data-direction="asc">Эт.</a>
                          </div>
                          <div class="lot__value-4">
                              <a href="#" class="lot-sort" data-sort="area" data-direction="asc">Пл., М2</a>
                          </div>
                          <div class="lot__value-5">
                              <a href="#" class="lot-sort" data-sort="price" data-direction="asc">Цена за М2</a>
                          </div>
                          <div class="lot__value-6">
                              <a href="#" class="lot-sort" data-sort="cost" data-direction="asc">Стоимость</a>
                          </div>
                          <div class="lot__value-7">
                              <a href="#" class="lot-sort" data-sort="decor" data-direction="asc">Отд.</a>
                          </div>
                          <div class="lot__value-8">
                              <a href="#" class="lot-sort" data-sort="status" data-direction="asc">Статус</a>
                          </div>
                        </div>
<div class="lotItems">

<?
  $i = 0;
  $count = 0;
  $limit =20;
  $elements = count($arResult['ITEMS']);
  $totalPages = ceil ($elements/$limit);
  $page = 1;

  //print_r($totalPages);

  foreach ($arResult['ITEMS'] as $arItem):
?>
	<? //print_r('<pre>'); print_r($arItem['PROPS']); print_r('</pre>'); ?>
  <? unset ($additionClass);  if ($arItem['PROPS']['STATUS']['VALUE'] == 'Продано') { $additionClass = 'lot--disabled'; } ?>
  <? if ($count >= $limit || $count ==0) :?>

    <!-- <div class="lots__hidden"> -->
    <? //print_r($count); print_r($limit); ?>
    <div class="lots__page" page="<?=$page;?>">
      <?$page++;?>
  <? endif; ?>
  <? $count++; ?>
					<!-- href="<?=$arItem['DETAIL_URL']?>" -->
          <a 
          class="lot ajaxLotItem <?=$additionClass;?>" 
          href="javascript:void(0);" 
          el="<?=$arItem['ID'];?>"
          lot="<?=$arItem['PROPS']['LOT']['VALUE'];?>"
          object-id="<?=$arItem['PROPS']['SITE_ID']['VALUE'];?>">
                          <div class="lot__value-0" data-lot-value="Лот" ><?=$arItem['PROPS']['LOT']['VALUE'];?></div>
                          <!-- <div class="lot__value-1" data-lot-value="Кр" ><?=$arItem['PROPS']['LOT']['VALUE'];?></div> -->
                          <div class="lot__value-1" data-lot-value="Крыло" >Бол.</div>
                          <!-- <div class="lot__value-2" data-lot-value="Тип"><?=$arItem['PROPS']['TYPE']['VALUE'];?></div> -->
                          <div class="lot__value-2" data-lot-value="Тип">1-комн.</div>
                          <div class="lot__value-3" data-lot-value="Этаж"><?=$arItem['PROPS']['STAGE']['VALUE'];?></div>
                          <div class="lot__value-4" data-lot-value="Площадь, М2"><?=$arItem['PROPS']['AREA']['VALUE'];?></div>
                          <div class="lot__value-5" data-lot-value="Цена за М2"><?=$arItem['PROPS']['RATE']['VALUE'];?></div>
                          <div class="lot__value-6" data-lot-value="Стоимость"><?=$arItem['PROPS']['PRICE']['VALUE'];?></div>
                          <div class="lot__value-7" data-lot-value="Отделка"><?=$arItem['PROPS']['DECORATION']['VALUE'];?></div>
                          <div class="lot__value-8" data-lot-value="Статус"><?=$arItem['PROPS']['STATUS']['VALUE'];?></div>
                          
					</a>
<? if ($count >= $limit || $count ==0) :?>

 <? $count=0;?>
    </div>
  <?endif;?> 
 
<?
	endforeach;
?>
        </div>
                      </div>
<div class="lots__inner pagintaion-wrap">
              <!-- <div class="lots__control"><a class="more-items" href="#">Еще <span><?=$count;?></span></a></div> -->

              <ul class="pagination">
              <?

              for ($pager=1; $pager < $totalPages; $pager++) { ?>

              <li class="active"><a href="javascript:void(0);" page="<?=$pager;?>"><?=$pager;?></a></li>

              <? } ?>

              <? /*echo $pager;  } <? if ($pager=1) :?>

                <li class="active"><a href="javascript:void(0);"><?=$pager;?></a></li>
              <? else : ?>
                <li><a href="javascript:void(0);"><?=$pager;?></a>
              <?endif;?>

              <? } */?>


              </ul>
          </div>
      </div>
		</div>

<? 
endif;?>

<script type="text/javascript">

$('.pagination li a').click(function(){

   index = $(this).attr('page');
   console.log(index);
   $('.lots__page').hide();
   $('.lots__page').eq(index).show();
   $('html, body').animate({
        scrollTop: $(".lots__list").offset().top
    }, 1000);

});

</script>
</div>