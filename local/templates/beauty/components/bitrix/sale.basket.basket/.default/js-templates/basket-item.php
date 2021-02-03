<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST']);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST']);

$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
	'left' => 'basket-item-label-left',
	'center' => 'basket-item-label-center',
	'right' => 'basket-item-label-right',
	'bottom' => 'basket-item-label-bottom',
	'middle' => 'basket-item-label-middle',
	'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>
<script id="basket-item-template" type="text/html">


<!--    <li class="cart__item">-->
<!--        <div class="cart__wrap"><img class="cart__img" src="assets/images/filler-1.png" alt="Филлер PRINCESS Rich"></div>-->
<!--        <div class="cart__wrap">-->
<!--            <h4 class="cart__title">Филлер PRINCESS Rich</h4>-->
<!--        </div>-->
<!--        <div class="cart__wrap cart__wrap--btns">-->
<!--            <button class="cart__btn cart__btn--del" type="button">-->
<!--                <svg width="10" height="1" viewBox="0 0 10 1" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <line x1="4.37113e-08" y1="0.5" x2="10" y2="0.500001" stroke="#7D7D7D" stroke-opacity="0.6"></line>-->
<!--                </svg>-->
<!--            </button><span class="cart__quantity">1</span>-->
<!--            <button class="cart__btn cart__btn--add" type="button"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M0 6H12M6 0L6 12" stroke="#7D7D7D"></path>-->
<!--                </svg>-->
<!--            </button>-->
<!--        </div>-->
<!--        <div class="cart__price-list">-->
<!--            <div class="cart__price-wrap"><span class="cart__price">4 900 ₽</span></div>-->
<!--            <div class="cart__price-wrap"><span class="cart__old-price">5 900 ₽</span></div>-->
<!--        </div>-->
<!--        <div class="cart__wrap">-->
<!--            <button class="cart__btn cart__btn--del-item" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M16 1L1 16M1 1L16 16" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                </svg>-->
<!--            </button>-->
<!--        </div>-->
<!--    </li>-->

	<li class="cart__item"
		id="basket-item-{{ID}}" data-entity="basket-item" data-id="{{ID}}">

		{{^SHOW_RESTORE}}
			<div class="cart__wrap">
                <img class="cart__img" alt="{{NAME}}" src="{{{IMAGE_URL}}}{{^IMAGE_URL}}<?=$templateFolder?>/images/no_photo.png{{/IMAGE_URL}}">

			</div>

        <div class="cart__wrap">
            <h4 class="cart__title">
                {{NAME}}
            </h4>

        </div>
			<?
			if ($usePriceInAdditionalColumn)
			{
				?>
				<div class="cart__wrap">
					<div class="basket-item-block-price">
						<div class="basket-item-price-current">
							<span class="basket-item-price-current-text" id="basket-item-price-{{ID}}">
								{{{PRICE_FORMATED}}}
							</span>
						</div>

						<div class="basket-item-price-title">
							<?=Loc::getMessage('SBB_BASKET_ITEM_PRICE_FOR')?> {{MEASURE_RATIO}} {{MEASURE_TEXT}}
						</div>
						{{#SHOW_LOADING}}
							<div class="basket-items-list-item-overlay"></div>
						{{/SHOW_LOADING}}
					</div>
				</div>
				<?
			}
			?>
			<div class="cart__wrap" data-entity="basket-item-quantity-block">
                <div class="cart__wrap cart__wrap--btns" >
                    <span class="cart__btn cart__btn--del" data-entity="basket-item-quantity-minus">
                        <svg width="10" height="1" viewBox="0 0 10 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4.37113e-08" y1="0.5" x2="10" y2="0.500001" stroke="#7D7D7D" stroke-opacity="0.6"></line>
                        </svg>
                    </span>
                    <span class="cart__quantity">{{QUANTITY}}</span>
                        <input type="hidden" value="{{QUANTITY}}"  data-entity="basket-item-quantity-field" id="basket-item-quantity-{{ID}}"  data-value="{{QUANTITY}}">
                    <span class="cart__btn cart__btn--add"  data-entity="basket-item-quantity-plus">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 6H12M6 0L6 12" stroke="#7D7D7D"></path>
                        </svg>
                    </span>
                </div>
			</div>
            <div class="cart__price-list">

                <div class="cart__price-wrap">
                    <span class="cart__price" id="basket-item-sum-price-{{ID}}">
								{{{SUM_PRICE_FORMATED}}}
                    </span>
                    {{#SHOW_LOADING}}
                    <div class="basket-items-list-item-overlay"></div>
                    {{/SHOW_LOADING}}
                </div>
                <div class="cart__price-wrap">
                    {{#SHOW_DISCOUNT_PRICE}}
								<span class="cart__old-price" id="basket-item-sum-price-old-{{ID}}">
									{{{SUM_FULL_PRICE_FORMATED}}}
								</span>
                    {{/SHOW_DISCOUNT_PRICE}}
                </div>
            </div>
            <div class="cart__wrap">
                <button data-entity="basket-item-delete" class="cart__btn cart__btn--del-item" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 1L1 16M1 1L16 16" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
		{{/SHOW_RESTORE}}
	</li>
</script>