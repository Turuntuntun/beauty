<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php


if (!empty($arResult)):?>
    <div class="header-menu--mobile">
        <?foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["PARAMS"])
        continue;
        ?>
        <?if($arItem["SELECTED"]):?>
        <div class="header-menu-item header-menu-item_active">
            <a class="header-menu-item__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        </div>
        <?else:?>
        <div class="header-menu-item">
            <a class="header-menu-item__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        </div>
        <?endif?>

        <?endforeach?>
    </div>
<?endif?>


