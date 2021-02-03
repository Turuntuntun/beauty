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
$this->setFrameMode(true);

?>

<main class="good margin-block">
    <div class="mycontainer">
        <div class="good-row">
            <div class="good__img">
			<?if(is_array($arResult["PREVIEW_PICTURE"]) && is_array($arResult["DETAIL_PICTURE"])):?>
				<img
					border="0"
					src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
					id="image_<?=$arResult["PREVIEW_PICTURE"]["ID"]?>"
					style="display:block;cursor:pointer;cursor: hand;"
					OnClick="document.getElementById('image_<?=$arResult["PREVIEW_PICTURE"]["ID"]?>').style.display='none';document.getElementById('image_<?=$arResult["DETAIL_PICTURE"]["ID"]?>').style.display='block'"
					/>
				<img
					border="0"
					src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
					width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
					height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
					title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
					id="image_<?=$arResult["DETAIL_PICTURE"]["ID"]?>"
					style="display:none;cursor:pointer;cursor: hand;"
					OnClick="document.getElementById('image_<?=$arResult["DETAIL_PICTURE"]["ID"]?>').style.display='none';document.getElementById('image_<?=$arResult["PREVIEW_PICTURE"]["ID"]?>').style.display='block'"
					/>
			<?elseif(is_array($arResult["DETAIL_PICTURE"])):?>
				<img
					border="0"
					src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
					width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
					height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
					title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
					/>
			<?elseif(is_array($arResult["PREVIEW_PICTURE"])):?>
				<img
					border="0"
					src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
					/>
			<?endif?>
            </div>
            <div class="good-info">
                    <h1 class="h1title good-info__title"><?=$arResult['NAME']?></h1>
                    <div class="good-info__subtitle">Описание</div>
                    <div class="good-info__text"><?=$arResult['PREVIEW_TEXT']?></div>
                    <div class="good-info-row">
                        <a class="good-info__btn btn-background" href=<?echo $arResult["ADD_URL"]?>" rel="nofollow">В корзину</a>
                        <div class="good-info__newprice">
                            <?=$arResult['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?>
                        </div>
                    </div>
                </div>
            </div>
        <div class="good-content tabs">
            <div class="good-navigation">
                <a class="good-navigation__item active tabs-navigation-item" href="#tab1">Описание</a><a class="good-navigation__item tabs-navigation-item" href="#tab2">Доставка и оплата</a><a class="good-navigation__item tabs-navigation-item" href="#tab3">Отзывы</a></div>
            <div class="good-tab active tabs-tab" id="tab1">
                <div class="good-tab-col">
                    <div class="good-tab__title"><?=$arResult['PROPERTIES']['UF_DESCRIPTION1_TITLE']['VALUE']?></div>
                    <div class="good-tab__text">
                        <? foreach ($arResult['PROPERTIES']['UF_DESCRIPTION1_DETAIL']['VALUE'] as $key => $value):?>
                            <p><?=$value?></p>
                        <?endforeach;?>
                    </div>
                </div>
                <div class="good-tab-col">
                    <div class="good-tab__title"><?=$arResult['PROPERTIES']['UF_DESCRIPTION2_TITLE']['VALUE']?></div>
                    <div class="good-tab__text">
                        <? foreach ($arResult['PROPERTIES']['UF_DESCRIPTION2_DETAIL']['VALUE'] as $key => $value):?>
                            <p><?=$value?></p>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
            <div class="good-tab tabs-tab" id="tab2">
                <div class="good-tab-col">
                    <div class="good-tab__title">Доставка и оплата</div>
                </div>
            </div>
            <div class="good-tab tabs-tab" id="tab3">
                <div class="good-tab-reviews">
                    <div class="good-tab-reviews-item">
                        <div class="good-tab-reviews-item-info">
                            <div class="good-tab-reviews-item__rate" data-rate="5"></div>
                            <div class="good-tab-reviews-item__text">21.02.20</div>
                            <div class="good-tab-reviews-item__name">Анастасия</div>
                            <div class="good-tab-reviews-item__text">Москва</div>
                        </div>
                        <div class="good-tab-reviews-item__content">Для демакияжа и обезжиривания кожи перед аппаратными процедурами. Перед микронидлингом. Гипоаллергенный. Перед применением масок, в том числе альгинатных.</div>
                    </div>
                    <div class="good-tab-reviews-item">
                        <div class="good-tab-reviews-item-info">
                            <div class="good-tab-reviews-item__rate" data-rate="3"></div>
                            <div class="good-tab-reviews-item__text">21.02.20</div>
                            <div class="good-tab-reviews-item__name">Анастасия</div>
                            <div class="good-tab-reviews-item__text">Москва</div>
                        </div>
                        <div class="good-tab-reviews-item__content">Для демакияжа и обезжиривания кожи перед аппаратными процедурами. Перед микронидлингом. Гипоаллергенный. Перед применением масок, в том числе альгинатных.</div>
                    </div>
                    <div class="good-tab-reviews-more"> <a class="good-tab-reviews-more__btn" href="#">Показать ещё</a></div>
                </div>
            </div>
        </div>

    </div>
		<?if(is_array($arResult["PRICE_MATRIX"])):?>
			<table cellpadding="0" cellspacing="0" border="0" width="100%" class="data-table">
			<thead>
			<tr>
				<?if(count($arResult["PRICE_MATRIX"]["ROWS"]) >= 1 && ($arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
					<td><?= GetMessage("CATALOG_QUANTITY") ?></td>
				<?endif;?>
				<?foreach($arResult["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
					<td><?= $arType["NAME_LANG"] ?></td>
				<?endforeach?>
			</tr>
			</thead>
			<?foreach ($arResult["PRICE_MATRIX"]["ROWS"] as $ind => $arQuantity):?>
			<tr>
				<?if(count($arResult["PRICE_MATRIX"]["ROWS"]) > 1 || count($arResult["PRICE_MATRIX"]["ROWS"]) == 1 && ($arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
					<th nowrap>
						<?if(intval($arQuantity["QUANTITY_FROM"]) > 0 && intval($arQuantity["QUANTITY_TO"]) > 0)
							echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_FROM_TO")));
						elseif(intval($arQuantity["QUANTITY_FROM"]) > 0)
							echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], GetMessage("CATALOG_QUANTITY_FROM"));
						elseif(intval($arQuantity["QUANTITY_TO"]) > 0)
							echo str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_TO"));
						?>
					</th>
				<?endif;?>
				<?foreach($arResult["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
					<td>
						<?if($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"] < $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"])
							echo '<s>'.FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]).'</s> <span class="catalog-price">'.FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])."</span>";
						else
							echo '<span class="catalog-price">'.FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])."</span>";
						?>
					</td>
				<?endforeach?>
			</tr>
			<?endforeach?>
			</table>
			<?if($arParams["PRICE_VAT_SHOW_VALUE"]):?>
				<?if($arParams["PRICE_VAT_INCLUDE"]):?>
					<small><?=GetMessage('CATALOG_VAT_INCLUDED')?></small>
				<?else:?>
					<small><?=GetMessage('CATALOG_VAT_NOT_INCLUDED')?></small>
				<?endif?>
			<?endif;?><br />
		<?endif?>
		<?if($arResult["CAN_BUY"]):?>
			<?if($arParams["USE_PRODUCT_QUANTITY"] || count($arResult["PRODUCT_PROPERTIES"])):?>
				<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
				<table border="0" cellspacing="0" cellpadding="2">
				<?if($arParams["USE_PRODUCT_QUANTITY"]):?>
					<tr valign="top">
						<td><?echo GetMessage("CT_BCE_QUANTITY")?>:</td>
						<td>
							<input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5">
						</td>
					</tr>
				<?endif;?>
				<?foreach($arResult["PRODUCT_PROPERTIES"] as $pid => $product_property):?>
					<tr valign="top">
						<td><?echo $arResult["PROPERTIES"][$pid]["NAME"]?>:</td>
						<td>
						<?if(
							$arResult["PROPERTIES"][$pid]["PROPERTY_TYPE"] == "L"
							&& $arResult["PROPERTIES"][$pid]["LIST_TYPE"] == "C"
						):?>
							<?foreach($product_property["VALUES"] as $k => $v):?>
								<label><input type="radio" name="<?echo $arParams["PRODUCT_PROPS_VARIABLE"]?>[<?echo $pid?>]" value="<?echo $k?>" <?if($k == $product_property["SELECTED"]) echo '"checked"'?>><?echo $v?></label><br>
							<?endforeach;?>
						<?else:?>
							<select name="<?echo $arParams["PRODUCT_PROPS_VARIABLE"]?>[<?echo $pid?>]">
								<?foreach($product_property["VALUES"] as $k => $v):?>
									<option value="<?echo $k?>" <?if($k == $product_property["SELECTED"]) echo '"selected"'?>><?echo $v?></option>
								<?endforeach;?>
							</select>
						<?endif;?>
						</td>
					</tr>
				<?endforeach;?>
				</table>
				<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
				<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arResult["ID"]?>">
				<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>">
				<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD_TO_BASKET")?>">
				</form>
			<?endif;?>
		<?elseif((count($arResult["PRICES"]) > 0) || is_array($arResult["PRICE_MATRIX"])):?>
			<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
			<?$APPLICATION->IncludeComponent("bitrix:sale.notice.product", ".default", array(
				"NOTIFY_ID" => $arResult['ID'],
				"NOTIFY_URL" => htmlspecialcharsback($arResult["SUBSCRIBE_URL"]),
				"NOTIFY_USE_CAPTHA" => "N"
				),
				$component
			);?>
		<?endif?>
		<br />
	<?if(count($arResult["LINKED_ELEMENTS"])>0):?>
		<br /><b><?=$arResult["LINKED_ELEMENTS"][0]["IBLOCK_NAME"]?>:</b>
		<ul>
	<?foreach($arResult["LINKED_ELEMENTS"] as $arElement):?>
		<li><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></li>
	<?endforeach;?>
		</ul>
	<?endif?>
	<?
	// additional photos
	$LINE_ELEMENT_COUNT = 2; // number of elements in a row
	if(count($arResult["MORE_PHOTO"])>0):?>
		<a name="more_photo"></a>
		<?foreach($arResult["MORE_PHOTO"] as $PHOTO):?>
			<img border="0" src="<?=$PHOTO["SRC"]?>" width="<?=$PHOTO["WIDTH"]?>" height="<?=$PHOTO["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" /><br />
		<?endforeach?>
	<?endif?>

</div>
</main>
