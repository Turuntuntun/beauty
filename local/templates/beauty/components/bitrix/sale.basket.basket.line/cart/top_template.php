<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<a class="header-info__icon header-info__icon_basket" href="<?=$arParams['PATH_TO_BASKET']?>">
    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1H4.27273L6.46545 11.8395C6.54027 12.2122 6.7452 12.547 7.04436 12.7853C7.34351 13.0236 7.71784 13.1501 8.10182 13.1428H16.0545C16.4385 13.1501 16.8129 13.0236 17.112 12.7853C17.4112 12.547 17.6161 12.2122 17.6909 11.8395L19 5.04762H5.09091M8.36363 17.1905C8.36363 17.6376 7.99732 18 7.54545 18C7.09358 18 6.72727 17.6376 6.72727 17.1905C6.72727 16.7434 7.09358 16.381 7.54545 16.381C7.99732 16.381 8.36363 16.7434 8.36363 17.1905ZM17.3636 17.1905C17.3636 17.6376 16.9973 18 16.5455 18C16.0936 18 15.7273 17.6376 15.7273 17.1905C15.7273 16.7434 16.0936 16.381 16.5455 16.381C16.9973 16.381 17.3636 16.7434 17.3636 17.1905Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span><?=$arResult['NUM_PRODUCTS']?></span>
</a>