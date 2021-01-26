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

$themes = [
        'black' => [
                'theme' => 'stock-item--bg',
                'color' => '#B8C1D3'
        ],
        'silver' => [
                'theme' => 'stock-item--op',
                'color' => '#E0E2E9'
        ]
]
?>

<main class="stock margin-block">
    <div class="mycontainer">
        <div class="h1title"><?=$arResult['NAME']?></div>
        <div class="stock-items">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <a class="stock-item stock-item <?=$themes[$arItem['DISPLAY_PROPERTIES']['UF_THEME']['VALUE']]['theme']?>" href="" id="<?=$this->GetEditAreaId($arItem['ID']);?> " style="background-color: <?=$themes[$arItem['DISPLAY_PROPERTIES']['UF_THEME']['VALUE']]['color']?>">
                <div class="stock-item-info">
                    <div class="stock-item__title"><?=$arItem['NAME']?></div>
                    <div class="stock-item__date"><?=$arItem['DISPLAY_PROPERTIES']['UF_DATES']['VALUE']?></div>
                <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
                <?endif?>

                    <div class="stock-item__btn btn-background">Подробнее</div>
                </div>
                <div class="stock-item-img"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"></div>
            </a>
<?endforeach;?>
        </div>
    </div>
</main>
