<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
?>
<?$APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "forgot", Array(
    "AUTH_AUTH_URL" => "/auth/",	// Страница для авторизации
    "AUTH_REGISTER_URL" => "/registration/",	// Страница для регистрации
),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>