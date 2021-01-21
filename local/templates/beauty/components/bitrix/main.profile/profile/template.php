<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>

<main class="lk lk-personal margin-block">
    <div class="mycontainer">
        <div class="lk__info"><?=$arResult["arUser"]["NAME"]?> <?=$arResult["arUser"]["LAST_NAME"]?></div>
        <h1 class="h1title">Персональные данные</h1>
        <div class="lk-navigation"><a class="lk-navigation__item" href="/history/">История заказов</a>
            <a class="lk-navigation__item active" href="">Персональные данные</a></div>
        <div class="lk-content">
            <div class="lk-content-row">
                <div class="lk-content-col">
        <?ShowError($arResult["strProfileError"]);?>
<?
if($arResult["SHOW_SMS_FIELD"] == true):?>

<form method="post" action="<?=$arResult["FORM_TARGET"]?>">
<?=$arResult["BX_SESSION_CHECK"]?>
<input type="hidden" name="lang" value="<?=LANG?>" />
<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
<input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />
<table class="profile-table data-table">
	<tbody>
		<tr>
			<td><?echo GetMessage("main_profile_code")?><span class="starrequired">*</span></td>
			<td><input size="30" type="text" name="SMS_CODE" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>" autocomplete="off" /></td>
		</tr>
	</tbody>
</table>

<p><input type="submit" name="code_submit_button" value="<?echo GetMessage("main_profile_send")?>" /></p>

</form>

<script>
new BX.PhoneAuth({
	containerId: 'bx_profile_resend',
	errorContainerId: 'bx_profile_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?=CUtil::PhpToJSObject([
			'signedData' => $arResult["SIGNED_DATA"],
		])?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_profile_error');
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

<div id="bx_profile_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_profile_resend"></div>

<?else:?>
    <script type="text/javascript">
    <!--
    var opened_sections = [<?
    $arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"]."_user_profile_open"];
    $arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
    if ($arResult["opened"] <> '')
    {
        echo "'".implode("', '", explode(",", $arResult["opened"]))."'";
    }
    else
    {
        $arResult["opened"] = "reg";
        echo "'reg'";
    }
    ?>];
//-->

var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
</script>

    <form  class="general-form" method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
    <?=$arResult["BX_SESSION_CHECK"]?>
    <input type="hidden" name="lang" value="<?=LANG?>" />
    <input type="hidden" name="ID" value=<?=$arResult["ID"]?> />

        <label class="general-itemInput general-itemInput_50"><span><?=GetMessage('NAME')?></span>
            <input class="general-itemInput__input" type="text" data-required placeholder="Введите ваше имя" name="NAME" maxlength="50" value="<?=$arResult["arUser"]["NAME"]?>" />
        </label>
        <label class="general-itemInput general-itemInput_50"><span><?=GetMessage('LAST_NAME')?></span>
            <input class="general-itemInput__input" type="text" placeholder="Введите вашу фамилию" name="LAST_NAME" maxlength="50" value="<?=$arResult["arUser"]["LAST_NAME"]?>" /></td>
        </label>
        <label class="general-itemInput general-itemInput_50"><span><?echo GetMessage("main_profile_phone_number")?></span>
            <input class="general-itemInput__input" type="tel" data-type="tel" data-required placeholder="Введите ваш телефон" name="PERSONAL_PHONE" maxlength="50" value="<? echo $arResult["arUser"]["PERSONAL_PHONE"]?>" />
        </label>
        <label class="general-itemInput general-itemInput_50"><span><?=GetMessage('EMAIL')?></span>
            <input class="general-itemInput__input" type="email" data-required data-type="email" placeholder="Введите ваш email" name="EMAIL" maxlength="50" value="<? echo $arResult["arUser"]["EMAIL"]?>">
        </label>

    <?if($arResult["TIME_ZONE_ENABLED"] == true):?>
        <tr>
            <td colspan="2" class="profile-header"><?echo GetMessage("main_profile_time_zones")?></td>
        </tr>
        <tr>
            <td><?echo GetMessage("main_profile_time_zones_auto")?></td>
            <td>
                <select name="AUTO_TIME_ZONE" onchange="this.form.TIME_ZONE.disabled=(this.value != 'N')">
                    <option value=""><?echo GetMessage("main_profile_time_zones_auto_def")?></option>
                    <option value="Y"<?=($arResult["arUser"]["AUTO_TIME_ZONE"] == "Y"? ' SELECTED="SELECTED"' : '')?>><?echo GetMessage("main_profile_time_zones_auto_yes")?></option>
                    <option value="N"<?=($arResult["arUser"]["AUTO_TIME_ZONE"] == "N"? ' SELECTED="SELECTED"' : '')?>><?echo GetMessage("main_profile_time_zones_auto_no")?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td><?echo GetMessage("main_profile_time_zones_zones")?></td>
            <td>
                <select name="TIME_ZONE"<?if($arResult["arUser"]["AUTO_TIME_ZONE"] <> "N") echo ' disabled="disabled"'?>>
    <?foreach($arResult["TIME_ZONE_LIST"] as $tz=>$tz_name):?>
                    <option value="<?=htmlspecialcharsbx($tz)?>"<?=($arResult["arUser"]["TIME_ZONE"] == $tz? ' SELECTED="SELECTED"' : '')?>><?=htmlspecialcharsbx($tz_name)?></option>
    <?endforeach?>
                </select>
            </td>
        </tr>
    <?endif?>

<?
	if ($arResult["INCLUDE_LEARNING"] == "Y"):?>
	<div class="profile-link profile-user-div-link"><a title="<?=GetMessage("USER_SHOW_HIDE")?>" href="javascript:void(0)" onclick="SectionClick('learning')"><?=GetMessage("learning_INFO")?></a></div>
	<div id="user_div_learning" class="profile-block-<?= mb_strpos($arResult["opened"], "learning") === false ? "hidden" : "shown"?>">
	<table class="data-table profile-table">
		<thead>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?=GetMessage("learning_PUBLIC_PROFILE");?>:</td>
				<td><input type="hidden" name="student_PUBLIC_PROFILE" value="N" /><input type="checkbox" name="student_PUBLIC_PROFILE" value="Y" <?if ($arResult["arStudent"]["PUBLIC_PROFILE"]=="Y") echo "checked=\"checked\"";?> /></td>
			</tr>
			<tr>
				<td><?=GetMessage("learning_RESUME");?>:</td>
				<td><textarea cols="30" rows="5" name="student_RESUME"><?=$arResult["arStudent"]["RESUME"]; ?></textarea></td>
			</tr>

			<tr>
				<td><?=GetMessage("learning_TRANSCRIPT");?>:</td>
				<td><?=$arResult["arStudent"]["TRANSCRIPT"];?>-<?=$arResult["ID"]?></td>
			</tr>
		</tbody>
	</table>
	</div>
	<?endif;?>

	<?// ********************* User properties ***************************************************?>
	<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<div class="profile-link profile-user-div-link"><a title="<?=GetMessage("USER_SHOW_HIDE")?>" href="javascript:void(0)" onclick="SectionClick('user_properties')"><?=trim($arParams["USER_PROPERTY_NAME"]) <> '' ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></a></div>
	<div id="user_div_user_properties" class="profile-block-<?= mb_strpos($arResult["opened"], "user_properties") === false ? "hidden" : "shown"?>">
	<table class="data-table profile-table">
		<thead>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
		</thead>
		<tbody>
		<?$first = true;?>
		<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
		<tr><td class="field-name">
			<?if ($arUserField["MANDATORY"]=="Y"):?>
				<span class="starrequired">*</span>
			<?endif;?>
			<?=$arUserField["EDIT_FORM_LABEL"]?>:</td><td class="field-value">
				<?$APPLICATION->IncludeComponent(
					"bitrix:system.field.edit",
					$arUserField["USER_TYPE"]["USER_TYPE_ID"],
					array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?></td></tr>
		<?endforeach;?>
		</tbody>
	</table>
	</div>
	<?endif;?>
	<?// ******************** /User properties ***************************************************?>

        <div class="general-bottomBlock">
            <input class="general__btn btn-background" type="submit" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?>">&nbsp;&nbsp;
        </div>
</form>
    <form class="general-form" method="post" name="form2" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
        <?if($arResult['CAN_EDIT_PASSWORD']):?>
            <label class="general-itemInput general-itemInput_50"><span><?=GetMessage('PASSWORD')?></span>
                <input class="general-itemInput__input" type="password" data-required placeholder="Введите ваш пароль" name="NEW_PASSWORD" maxlength="50" value="" autocomplete="off" />
                <span class="input-pass"></span>
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
            <label class="general-itemInput general-itemInput_50"><span><?=GetMessage('PASSWORD_CONFIRM')?></span>
                <input class="general-itemInput__input" type="password" data-required placeholder="Подтвердите пароль" name="NEW_PASSWORD_CONFIRM" maxlength="50" value="" autocomplete="off" />
                <span class="input-pass"></span>
            </label>

        <?endif?>
        <div class="general-bottomBlock">
            <input class="general__btn btn-background" type="submit" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?>">&nbsp;&nbsp;
        </div>
    </form>

<?endif?>
                </div>
                <div class="lk-content-col"></div>
            </div>
        </div>
    </div>
</main>