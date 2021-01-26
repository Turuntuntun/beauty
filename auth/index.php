<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form", 
	"auth", 
	array(
		"AUTH_FORGOT_PASSWORD_URL" => "/forgot/",
		"AUTH_REGISTER_URL" => "/registration/",
		"AUTH_SUCCESS_URL" => "/auth/",
		"COMPONENT_TEMPLATE" => "auth"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>