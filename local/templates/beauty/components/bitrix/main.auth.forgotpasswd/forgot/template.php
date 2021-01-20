<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_PWD_SUCCESS');
	return;
}

?>

<main class="lk margin-block">
    <div class="mycontainer">
        <h1 class="h1title"><?= Loc::getMessage('MAIN_AUTH_PWD_TITLE');?></h1>

	<?if ($arResult['ERRORS']):?>
	<div class="alert alert-danger">
		<? foreach ($arResult['ERRORS'] as $error)
		{
			echo $error;
		}
		?>
	</div>
	<?elseif ($arResult['SUCCESS']):?>
        <div class="lk__subtitle"><?= Loc::getMessage('MAIN_AUTH_PWD_SUCCESS');?></div>
        <a class="lk__back" href="<?=$arParams['AUTH_AUTH_URL']?>">
            <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.646446 4.35355C0.451185 4.15829 0.451185 3.84171 0.646446 3.64645L3.82843 0.464466C4.02369 0.269204 4.34027 0.269204 4.53553 0.464466C4.7308 0.659728 4.7308 0.976311 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53553L0.646446 4.35355ZM17 4.5H1V3.5H17V4.5Z" fill="#7D7D7D"/>
            </svg><?= Loc::getMessage('MAIN_AUTH_BACK');?>
        </a>
	<?else :?>

        <!--recovery-->
        <div class="lk__subtitle"><?= Loc::getMessage('MAIN_AUTH_PWD_DESCRIPTION');?></div>
        <div class="lk-content">
	<form  class="general-form recover" name="bform" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>">
        <label class="general-itemInput general-itemInput_50"><span><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_EMAIL');?></span>
            <input class="general-itemInput__input" type="email" data-required="" data-type="email" placeholder="Введите ваш email" type="text" name="<?= $arResult['FIELDS']['email'];?>" maxlength="255" value="" />
        </label>

		<?if ($arResult['CAPTCHA_CODE']):?>
			<input type="hidden" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" />
			<div class="bx-authform-formgroup-container dbg_captha">
				<div class="bx-authform-label-container">
					<?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_CAPTCHA');?>
				</div>
				<div class="bx-captcha"><img src="/bitrix/tools/captcha.php?captcha_sid=<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" width="180" height="40" alt="CAPTCHA" /></div>
				<div class="bx-authform-input-container">
					<input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
				</div>
			</div>
		<?endif;?>

		<div class="general-bottomBlock">
			<input type="submit"  class="general__btn btn-background" name="<?= $arResult['FIELDS']['action'];?>" value="<?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_SUBMIT');?>" />
		</div>

	</form>
            <a class="lk__back" href="<?=$arParams['AUTH_AUTH_URL']?>">
                <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.646446 4.35355C0.451185 4.15829 0.451185 3.84171 0.646446 3.64645L3.82843 0.464466C4.02369 0.269204 4.34027 0.269204 4.53553 0.464466C4.7308 0.659728 4.7308 0.976311 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53553L0.646446 4.35355ZM17 4.5H1V3.5H17V4.5Z" fill="#7D7D7D"/>
                </svg><?= Loc::getMessage('MAIN_AUTH_BACK');?>
            </a>
        </div>
    </div>
    <?endif;?>
</main>
<script type="text/javascript">
	document.bform.<?= $arResult['FIELDS']['login'];?>.focus();
</script>
