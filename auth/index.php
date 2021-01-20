<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form",
	".default",
	Array(
		"AUTH_FORGOT_PASSWORD_URL" => "",
		"AUTH_REGISTER_URL" => "/registration/",
		"AUTH_SUCCESS_URL" => "/auth/",
		"COMPONENT_TEMPLATE" => ".default"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>