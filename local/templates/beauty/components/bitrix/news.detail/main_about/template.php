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
<section class="about margin-block">
    <div class="mycontainer">

	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<div class="h2title"><?=$arResult["NAME"]?></div>
	<?endif;?>
        <div class="about-content">
            <div class="about__img">
                <img
                        src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
                        width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
                        height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
                        alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
                />
            </div>
            <div class="about-info">
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
                <div class="about-info__title"><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></div>
            <?endif;?>
                <div class="about-info__text"><?=$arResult["DETAIL_TEXT"];?>
                    <a class="about-info__btn" href="/about">
                        <?=GetMessage('NAME_BUTTON')?>><svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5303 6.53375C14.8232 6.24085 14.8232 5.76598 14.5303 5.47309L9.75736 0.700117C9.46447 0.407224 8.98959 0.407224 8.6967 0.700117C8.40381 0.993011 8.40381 1.46788 8.6967 1.76078L12.9393 6.00342L8.6967 10.2461C8.40381 10.539 8.40381 11.0138 8.6967 11.3067C8.98959 11.5996 9.46447 11.5996 9.75736 11.3067L14.5303 6.53375ZM0 6.75342H14V5.25342H0V6.75342Z" fill="#496DC8"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>