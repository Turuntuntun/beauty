<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
if (!empty($arResult['ITEMS'])):?>
    <nav class="header-menu">
        <?foreach ($arResult['ITEMS'] as $key => $item) :?>
            <div class="header-menu-item">
                <a class="header-menu-item__link <?if($item['SELECTED']) echo 'header-menu-item_active';?>" href="<?=$item['LINK']?>">
                    <?=$item['TEXT']?>
                </a>

            <?if ($item['CHILDS']):?>
                <div class="header-menu-item-list">
                    <div class="header-menu-item-list-links">
                    <?foreach ($item['CHILDS']as $id => $child) :?>
                        <a class="header-menu-item-list-links__link" href="<?=$child['LINK']?>">
                            <?=$child['TEXT']?>
                        </a>
                    <?endforeach;?>
                    </div>
                </div>
            <? endif;?>
            </div>
        <?endforeach;?>
    </nav>


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


