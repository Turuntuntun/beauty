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
<section class="about-block">
    <div class="mycontainer">
        <div class="about-block-col">
            <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                <span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
            <?endif;?>
            <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
                <h1 class="h1title"><?=$arResult["NAME"]?></h1>
            <?endif;?>
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
                <p class="about-block__subtitle">
                    <?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?>
                </p>
            <?endif;?>
            <?if($arResult["NAV_RESULT"]):?>
                <?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
                <?echo $arResult["NAV_TEXT"];?>
                <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
            <?elseif($arResult["DETAIL_TEXT"] <> ''):?>
                <p class="about-block__text">
                    <?=$arResult["DETAIL_TEXT"];?>
                </p>
            <?else:?>
                <?echo $arResult["PREVIEW_TEXT"];?>
            <?endif?>
        </div>
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
        <div class="about-block-col"><img

                    border="0"
                    src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                    width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                    height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                    alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                    title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
            />
        </div>
        <?endif?>
    </div>
</section>
<section class="certificates margin-block">
    <div class="mycontainer">
        <h2 class="h1title"><?=$arResult["DISPLAY_PROPERTIES"]['UF_SERTIFICATE_NAME']['VALUE']?></h2>
        <p class="certificates__text">
            <?=$arResult["DISPLAY_PROPERTIES"]['UF_SERTIFICATE_DESCRIPTION']['VALUE']?>
        </p>
        <div class="certificates-slider swiper-container">
            <div class="certificates-slider-wrap swiper-wrapper lightgallery">
                <?foreach ($arResult["DISPLAY_PROPERTIES"]['UF_SERTIFICATE_IMAGES']['FILE_VALUE'] as $key => $file) :?>
                    <a class="certificates-slider-item swiper-slide" href="<?=$file['SRC']?>">
                        <img src="<?=$file['SRC']?>" alt="Сертификат <?=$key?>">
                    </a>
                <?endforeach;?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
