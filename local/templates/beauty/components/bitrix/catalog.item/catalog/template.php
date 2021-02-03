<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogProductsViewedComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
;
?>
<?php
if (isset($arResult['ITEM'])):?>
    <?php
    $this->AddEditAction($arResult['ITEM']['ID'], $arResult['ITEM']['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEM']["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arResult['ITEM']['ID'], $arResult['ITEM']['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEM']["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="cards-item"  id="<?=$this->GetEditAreaId($arResult['ITEM']['ID']);?>">
        <div class="cards-item-tags">
            <?if ($arResult['ITEM']['PROPERTIES']['UF_BEST']['VALUE']) : ?>
                <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span>
            <?endif;?>
            <? if ($arResult['ITEM']['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT']) : ?>
                <span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка <?=$arResult['ITEM']['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT']?>%</span>
            <?endif;?>
        </div>
        <a href="<?=$arResult['ITEM']['DETAIL_PAGE_URL'];?>" class="cards-item__img"><img src="<?=$arResult['ITEM']['PREVIEW_PICTURE']['SRC']?>" alt=""></a>
        <div class="cards-item__title"><?=$arResult['ITEM']['NAME']?></div>
        <div class="cards-item-bot">
            <div class="cards-item-bot__price"><?=$arResult['ITEM']['PRICES']['BASE']['PRINT_VALUE']?></span></div>
            <div class="cards-item-bot__btn btn-background">
                <a href="<?=$arResult['ITEM']['ADD_URL']?>">В корзину </a>
            </div>
        </div>
    </div>

<?php endif;?>