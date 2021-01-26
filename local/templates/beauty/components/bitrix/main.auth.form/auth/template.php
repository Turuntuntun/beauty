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
	echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
	return;
}
?>

<main class="lk lk-authorization margin-block">
    <div class="mycontainer">
        <div class="lk__info">Добро пожаловать!</div>
        <h1 class="h1title">Авторизация</h1>
        <div class="lk-navigation">
            <a class="lk-navigation__item active" href="">Войти</a>
            <a class="lk-navigation__item" href="<?=$arParams['AUTH_REGISTER_URL']?>">Регистрация</a>
        </div>
        <?if ($arResult['ERRORS']):?>
        <div class="alert alert-danger">
            <? foreach ($arResult['ERRORS'] as $error)
            {
                echo $error;
            }
            ?>
        </div>
        <?endif;?>
        <div class="lk-content">
            <div class="lk-content-row">
                <div class="lk-content-col">
                    <form class="general-form login" name="<?= $arResult['FORM_ID'];?>" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>">
                        <label class="general-itemInput general-itemInput_50">
                            <span><?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_LOGIN');?></span>
                                <input class="general-itemInput__input" type="email" data-required data-type="email" placeholder="Введите ваш email" name="<?= $arResult['FIELDS']['login'];?>" maxlength="255" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>" />
                        </label>
                        <?if ($arResult['SECURE_AUTH']):?>
                            <div class="bx-authform-psw-protected" id="bx_auth_secure" style="display:none">
                                <div class="bx-authform-psw-protected-desc"><span></span>
                                    <?= Loc::getMessage('MAIN_AUTH_FORM_SECURE_NOTE');?>
                                </div>
                            </div>
                            <script type="text/javascript">
                                document.getElementById('bx_auth_secure').style.display = '';
                            </script>
                        <?endif?>
                        <label class="general-itemInput general-itemInput_50"><span>Пароль</span>
                            <input name="<?= $arResult['FIELDS']['password'];?>" maxlength="255" autocomplete="off" class="general-itemInput__input" type="password" data-required placeholder="Введите ваш пароль">
                            <span class="input-pass"></span>
                            <?if ($arResult['AUTH_FORGOT_PASSWORD_URL']):?>
                                    <a class="recovery" href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL'];?>" rel="nofollow">
                                        <?= Loc::getMessage('MAIN_AUTH_FORM_URL_FORGOT_PASSWORD');?>
                                    </a>
                            <?endif;?>
                        </label>

                        <?if ($arResult['CAPTCHA_CODE']):?>
                            <input type="hidden" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" />
                            <div class="bx-authform-formgroup-container dbg_captha">
                                <div class="bx-authform-label-container">
                                    <?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_CAPTCHA');?>
                                </div>
                                <div class="bx-captcha"><img src="/bitrix/tools/captcha.php?captcha_sid=<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" width="180" height="40" alt="CAPTCHA" /></div>
                                <div class="bx-authform-input-container">
                                    <input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
                                </div>
                            </div>
                        <?endif;?>

                        <div class="general-bottomBlock">
                            <input class="general__btn btn-background" type="submit" name="<?= $arResult['FIELDS']['action'];?>" value="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_SUBMIT');?>" />
                        </div>
                    </form>
                    <?if ($arResult['AUTH_REGISTER_URL']):?>
                    <div class="lk-content-col">
                        <div class="lk-content__text">Нет аккаунта?<a href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
                                <?= Loc::getMessage('MAIN_AUTH_FORM_URL_REGISTER_URL');?>
                            </a>
                        </div>
                        <?endif;?>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
	<?if ($arResult['LAST_LOGIN'] != ''):?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_PASSWORD.focus();}catch(e){}
	<?else:?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_LOGIN.focus();}catch(e){}
	<?endif?>
</script>