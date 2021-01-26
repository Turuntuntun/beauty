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
<main class="payment margin-block">
    <div class="mycontainer">
        <div class="payment__subtitle"><h1><?=$arResult['PREVIEW_TEXT']?> </h1></div>
        <h2 class="h1title"><?=$arResult['DISPLAY_PROPERTIES']['UF_PAYMENT_TITLE']['VALUE']?></h2>
        <div class="payment-row">
            <?foreach ($arResult['DISPLAY_PROPERTIES']['UF_PAYMENT_SVG_DESCRIPTION']['VALUE'] as $key => $value) :?>
            <div class="payment-item">
                <svg width="35" height="23" viewBox="0 0 35 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <?=htmlspecialchars_decode($arResult['DISPLAY_PROPERTIES']['UF_PAYMENT_SVG']['VALUE'][$key]['TEXT'])?>
                </svg>
                <span><?=$value?></span>
            </div>
            <?endforeach;?>
        </div>
        <p class="payment__text"><?=$arResult['DISPLAY_PROPERTIES']['UF_PAYMENT_DESCRIPTION']['VALUE']?></p>

        <h2 class="h1title"><?=$arResult['DISPLAY_PROPERTIES']['UF_DILIEVIRY_TITLE']['VALUE']?></h2>
        <div class="payment-row">
            <?foreach ($arResult['DISPLAY_PROPERTIES']['UF_DILIEVIRY_SVG_DESCRIPTION']['VALUE'] as $key => $value) :?>
                <div class="payment-item">
                    <svg width="31" height="36" viewBox="0 0 31 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <?=htmlspecialchars_decode($arResult['DISPLAY_PROPERTIES']['UF_DILIEVIRY_SVG']['VALUE'][$key]['TEXT'])?>
                    </svg>
                    <span><?=$value?></span>
                </div>
            <?endforeach;?>
        </div>
        <p class="payment__text"><?=$arResult['DISPLAY_PROPERTIES']['UF_DILIEVIRY_DESCRIPTION']['VALUE']?></p>
    </div>
</main>