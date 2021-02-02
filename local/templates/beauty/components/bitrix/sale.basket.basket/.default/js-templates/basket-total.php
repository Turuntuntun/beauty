<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>

<script id="basket-total-template" type="text/html">
	<div class="cart__info cart-info"  data-entity="basket-checkout-aligner">
        <h4 class="cart-info__title">Ваш заказ</h4>
		<?
		if ($arParams['HIDE_COUPON'] !== 'Y')
		{
			?>
            <form class="cart-info__form" action="#" method="get">
                <input class="cart-info__input" type="text" placeholder="<?=Loc::getMessage('SBB_COUPON_ENTER')?>" data-required="" data-entity="basket-coupon-input">
                <button class="cart-info__btn" type="submit">Применить</button>
            </form>
			<?
		}
		?>
        <ul class="cart-info__list">
            <li class="cart-info__item">
                <p class="cart-info__col"><?=Loc::getMessage('SBB_COUNT')?></p>
                <span class="cart-info__col">{{{QUANTITY}}} шт.</span>
            </li>
            <li class="cart-info__item">
                <p class="cart-info__col"><?=Loc::getMessage('SBB_PRICE')?></p>
                <span class="cart-info__col cart-info__col--bold">{{{PRICE_FORMATED}}}</span>
            </li>
            <li class="cart-info__item">
                <p class="cart-info__col"><?=Loc::getMessage('SBB_COUPON')?></p>
                <span class="cart-info__col cart-info__col--sale">– {{{DISCOUNT_PRICE_FORMATED}}}</span>
            </li>
            <li class="cart-info__item">
                <p class="cart-info__col"><?=Loc::getMessage('SBB_DELIVERY')?></p>
                <span class="cart-info__col">0 ₽</span>
            </li>
        </ul>
        <ul class="cart-info__total">
            <li class="cart-info__item">
                <p class="cart-info__col"><?=Loc::getMessage('SBB_TOTAL')?></p>
                <span class="cart-info__col cart-info__col--bold" data-entity="basket-total-price">{{{PRICE_FORMATED}}}</span>
            </li>
            <li class="cart-info__item">
                <a class="cart-info__link btn-background" href="<?=$arParams['PATH_TO_ORDER']?>">Перейти к оформлению</a>
            </li>
        </ul>

		<?
		if ($arParams['HIDE_COUPON'] !== 'Y')
		{
		?>
			<div class="basket-coupon-alert-section">
				<div class="basket-coupon-alert-inner">
					{{#COUPON_LIST}}
					<div class="basket-coupon-alert text-{{CLASS}}">
						<span class="basket-coupon-text">
							<strong>{{COUPON}}</strong> - <?=Loc::getMessage('SBB_COUPON')?> {{JS_CHECK_CODE}}
							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}
						</span>
						<span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
							<?=Loc::getMessage('SBB_DELETE')?>
						</span>
					</div>
					{{/COUPON_LIST}}
				</div>
			</div>
			<?
		}
		?>
	</div>
</script>