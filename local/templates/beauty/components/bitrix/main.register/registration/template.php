<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>
<main class="lk margin-block">
    <div class="mycontainer">

<?if($USER->IsAuthorized()):?>

<p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>
<?
if (count($arResult["ERRORS"]) > 0):
	foreach ($arResult["ERRORS"] as $key => $error)
		if (intval($key) == 0 && $key !== 0) 
			$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

	ShowError(implode("<br />", $arResult["ERRORS"]));

elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):
?>
<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
<?endif?>

<?if($arResult["SHOW_SMS_FIELD"] == true):?>

<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform">
<?
if($arResult["BACKURL"] <> ''):
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
endif;
?>
    <input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />
    <table>
        <tbody>
            <tr>
                <td><?echo GetMessage("main_register_sms")?><span class="starrequired">*</span></td>
                <td><input size="30" type="text" name="SMS_CODE" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>" autocomplete="off" /></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td><input type="submit" name="code_submit_button" value="<?echo GetMessage("main_register_sms_send")?>" /></td>
            </tr>
        </tfoot>
    </table>
</form>

<script>
new BX.PhoneAuth({
	containerId: 'bx_register_resend',
	errorContainerId: 'bx_register_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?=CUtil::PhpToJSObject([
			'signedData' => $arResult["SIGNED_DATA"],
		])?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_register_error');
			var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
			errorNode.innerHTML = '';
			for(var i = 0; i < response.errors.length; i++)
			{
				errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
			}
			errorDiv.style.display = '';
		}
});
</script>

<div id="bx_register_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_register_resend"></div>

<?else:?>
    <div class="lk__info">Добро пожаловать!</div>
    <h1 class="h1title">Регистрация </h1>
    <div class="lk-navigation">
        <a class="lk-navigation__item" href="/auth/">Войти</a>
        <a class="lk-navigation__item active" href="">Регистрация</a></div>
    <div class="lk-content">
        <div class="lk-content-row">
            <div class="lk-content-col">

    <form class="general-form" method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
    <?
    if($arResult["BACKURL"] <> ''):
    ?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
    <?
    endif;
    ?>

    <? foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
        <?if($FIELD == "AUTO_TIME_ZONE" && $arResult["TIME_ZONE_ENABLED"] == true):?>

                <?echo GetMessage("main_profile_time_zones_auto")?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?>

                    <select name="REGISTER[AUTO_TIME_ZONE]" onchange="this.form.elements['REGISTER[TIME_ZONE]'].disabled=(this.value != 'N')">
                        <option value=""><?echo GetMessage("main_profile_time_zones_auto_def")?></option>
                        <option value="Y"<?=$arResult["VALUES"][$FIELD] == "Y" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_yes")?></option>
                        <option value="N"<?=$arResult["VALUES"][$FIELD] == "N" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_no")?></option>
                    </select>

               <?echo GetMessage("main_profile_time_zones_zones")?>

                    <select name="REGISTER[TIME_ZONE]"<?if(!isset($_REQUEST["REGISTER"]["TIME_ZONE"])) echo 'disabled="disabled"'?>>
            <?foreach($arResult["TIME_ZONE_LIST"] as $tz=>$tz_name):?>
                        <option value="<?=htmlspecialcharsbx($tz)?>"<?=$arResult["VALUES"]["TIME_ZONE"] == $tz ? " selected=\"selected\"" : ""?>><?=htmlspecialcharsbx($tz_name)?></option>
            <?endforeach?>
                    </select>

        <?else:?><?
        switch ($FIELD)
        {
            case "PASSWORD":
                ?>
            <label class="general-itemInput general-itemInput_50"><span><?=GetMessage("REGISTER_FIELD_".$FIELD)?></span>
                <span class="input-pass"></span>
                <input size="30" class="general-itemInput__input" type="password" data-required placeholder="<?=GetMessage("REGISTER_PLACEHOLDER_".$FIELD)?>" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off" class="bx-auth-input" />
            </label>
    <?if($arResult["SECURE_AUTH"]):?>
                    <span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
                        <div class="bx-auth-secure-icon"></div>
                    </span>
                    <noscript>
                    <span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
                        <div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
                    </span>
                    </noscript>
    <script type="text/javascript">
    document.getElementById('bx_auth_secure').style.display = 'inline-block';
    </script>
    <?endif?>
    <?
                break;
            case "CONFIRM_PASSWORD":
                ?>
            <label class="general-itemInput general-itemInput_50"><span><?=GetMessage("REGISTER_FIELD_".$FIELD)?></span>
                <input class="general-itemInput__input" size="30" type="password" placeholder="<?=GetMessage("REGISTER_PLACEHOLDER_".$FIELD)?>" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off" />
            </label>
            <?
                break;
            default: ?>
            <label class="general-itemInput general-itemInput_50"><span><?=GetMessage("REGISTER_FIELD_".$FIELD)?></span>
                <input  class="general-itemInput__input" data-required placeholder="<?=GetMessage("REGISTER_PLACEHOLDER_".$FIELD)?>" size="30" type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" />
            </label>
        <?
        }?>

        <?endif?>
    <?endforeach?>
    <?
    /* CAPTCHA */
    if ($arResult["USE_CAPTCHA"] == "Y")
    {
        ?>
           <b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b>


                    <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />

                <?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span>
                <input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
        <?
    }
    /* !CAPTCHA */
    ?>

        <div class="general-bottomBlock">
            <input class="general__btn btn-background popup-btn" type="submit" data-modal="confirm-phone" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>" />
        </div>

    </form>
            </div>
            <div class="lk-content-col">
                <div class="lk-content__text">Уже есть аккаунт?<a href="/auth/">Войдите!</a></div>
            </div>
        </div>
    </div>

<?endif //$arResult["SHOW_SMS_FIELD"] == true ?>


<?endif?>
    </div>
</main>