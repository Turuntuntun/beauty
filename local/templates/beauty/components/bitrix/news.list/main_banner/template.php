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
<section class="slider-banner swiper-container">
    <div class="slider-banner-wrap swiper-wrapper">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="slider-banner-item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
        <div class="mycontainer">
            <div class="slider-banner-item__title"><?=$arItem['PREVIEW_TEXT']?></div>
            <div class="slider-banner-item__text"><?=$arItem['DETAIL_TEXT']?></div>
            <a class="slider-banner-item__btn btn-background" href="<?=$arItem['PROPERTIES']['UF_LINK']['VALUE']?>"><?=GetMessage("NAME_BUTTON");?></a>
        </div>
	</div>
<?endforeach;?>
    </div>
    <div class="swiper-pagination"></div>
</section>
