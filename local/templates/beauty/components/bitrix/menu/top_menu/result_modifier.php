<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
$parent = 0;

foreach ($arResult as $key => $item) {
    if ($item['DEPTH_LEVEL'] == 1) {
        $parent = $key;
        $arResult['ITEMS'][$parent] = $item;
    } else {
        $arResult['ITEMS'][$parent]['CHILDS'][] = $item;
    }
}
