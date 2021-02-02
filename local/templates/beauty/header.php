<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
    <!DOCTYPE html>
    <html lang="<?=LANGUAGE_ID?>">
    <head>
        <meta charset="<?= SITE_CHARSET ?>">
        <title><?$APPLICATION->ShowTitle() ?></title>
        <?php
        $APPLICATION->ShowMeta("robots");
        $APPLICATION->ShowMeta("description");
        $APPLICATION->ShowMeta("title");
        if ($USER->IsAdmin() || strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') == false) {
            $APPLICATION->ShowHeadStrings();
            $APPLICATION->ShowHeadScripts();
            $GLOBALS["APPLICATION"]->MoveJSToBody('main');
            $APPLICATION->ShowBodyScripts();
            $APPLICATION->ShowCSS(true);
        }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/assets/images/apple-touch-icon.png" type="image/x-icon">
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/scripts/swiper/swiper.min.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/scripts/lightgallery/css/lightgallery.min.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/app.min.css");?>
    </head>
    <body>
<?
    $APPLICATION->ShowPanel();
?>
    <div class="wrapper">
        <div class="uphead">
            <div class="mycontainer">
                <nav class="uphead-menu"><a class="uphead-menu__link uphead-menu__link_active" href="/about_pay">Оплата и доставка</a></nav>
            </div>
        </div>
        <header class="header">
            <div class="mycontainer">
                <a class="header__logo" href="/"><img src=<?=SITE_TEMPLATE_PATH ."/assets/images/logo.png"?> alt="Logo"></a>
                <button class="header__toggle">
                    <span class="header__toggle-middle"></span>
                </button>

                <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                ),
                    false
                );?>
                <div class="header-menu--mobile">
                    <div class="header-menu-item header-menu-item_active"><a class="header-menu-item__link" href="#">О нас</a></div>
                    <div class="header-menu-item header-menu-item_fillers"><a class="header-menu-item__link" href="#">Филлеры</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Цены</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Акции</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Контакты</a></div>
                </div>
                <div class="header-info"><a class="header-info__mail" href="mailto:admin@beatu-guard.ru">admin@beatu-guard.ru</a>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "cart",
                        Array(
                            "HIDE_ON_BASKET_PAGES" => "Y",
                            "PATH_TO_AUTHORIZE" => "",
                            "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                            "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                            "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                            "PATH_TO_PROFILE" => SITE_DIR."personal/",
                            "PATH_TO_REGISTER" => SITE_DIR."login/",
                            "POSITION_FIXED" => "N",
                            "SHOW_AUTHOR" => "N",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "SHOW_PERSONAL_LINK" => "Y",
                            "SHOW_PRODUCTS" => "N",
                            "SHOW_REGISTRATION" => "Y",
                            "SHOW_TOTAL_PRICE" => "Y"
                        )
                    );?>
                    <a class="header-info__icon header-info__icon_search" href="#">


                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.3154 10.8016C13.7718 13.6005 15 15 15 15M6.8945 12.2014C3.63906 12.2014 1 9.69391 1 6.60072C1 3.50753 3.63906 1 6.8945 1C10.1499 1 12.789 3.50753 12.789 6.60072C12.789 9.69391 10.1499 12.2014 6.8945 12.2014Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a><a class="header-info__icon header-info__icon_lk header-info__icon_active" href="
                        <? if($USER->IsAuthorized()) echo '/personal/'; else echo '/auth/';?>">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 19V17C17 15.9391 16.5786 14.9217 15.8284 14.1716C15.0783 13.4214 14.0609 13 13 13H5C3.93913 13 2.92172 13.4214 2.17157 14.1716C1.42143 14.9217 1 15.9391 1 17V19M13 5C13 7.20914 11.2091 9 9 9C6.79086 9 5 7.20914 5 5C5 2.79086 6.79086 1 9 1C11.2091 1 13 2.79086 13 5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
            </div>
        </header>
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "beauty", Array(
            "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
        ),
            false
        );?>
        <div class="content">
