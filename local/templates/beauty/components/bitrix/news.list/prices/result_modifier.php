<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $key => $value) {
    $price = CPrice::GetBasePrice($value['ID']);
    $arResult['ITEMS'][$key]['PRICE'] = $price['PRICE'];
    $arResult['ITEMS'][$key]['CURRENCY'] = $price['CURRENCY'];
}