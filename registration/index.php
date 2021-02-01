<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"registration",
	Array(
		"AUTH" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"REQUIRED_FIELDS" => array(0=>"EMAIL",1=>"NAME",2=>"LAST_NAME",3=>"PERSONAL_PHONE",),
		"SET_TITLE" => "N",
		"SHOW_FIELDS" => array(0=>"EMAIL",1=>"NAME",2=>"LAST_NAME",3=>"PERSONAL_PHONE",),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => "",
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>