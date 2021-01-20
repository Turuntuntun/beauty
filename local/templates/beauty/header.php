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
        <link rel="shortcut icon" href="assets/images/apple-touch-icon.png" type="image/x-icon">
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
                <nav class="uphead-menu"><a class="uphead-menu__link uphead-menu__link_active" href="#">Оплата и доставка</a></nav>
            </div>
        </div>
        <header class="header">
            <div class="mycontainer">
                <a class="header__logo" href="/"><img src=<?=SITE_TEMPLATE_PATH ."/assets/images/logo.png"?> alt="Logo"></a>
                <button class="header__toggle">
                    <span class="header__toggle-middle"></span>
                </button>
                <nav class="header-menu">
                    <div class="header-menu-item header-menu-item_wrap header-menu-item_catalog"><a class="header-menu-item__link" href="#">
                            Каталог<svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 4L4 1L1 4" stroke="black"/>
                            </svg></a>
                        <div class="header-menu-item-list">
                            <div class="header-menu-item-list-links"><a class="header-menu-item-list-links__link" href="#">Средства индивидуальной защиты</a><a class="header-menu-item-list-links__link" href="#">Шапочки одноразовые</a><a class="header-menu-item-list-links__link" href="#">Антисептики и дезинфекторы</a><a class="header-menu-item-list-links__link" href="#">Халаты одноразовые</a><a class="header-menu-item-list-links__link" href="#">Маски одноразовые</a><a class="header-menu-item-list-links__link" href="#">Бахилы</a><a class="header-menu-item-list-links__link" href="#">Перчатки одноразовые</a><a class="header-menu-item-list-links__link" href="#" style="font-weight:600">Посмотреть все</a></div>
                            <div class="header-menu-item-list-best">
                                <div class="header-menu-item-list-best__img"><img src="assets/images/filler1.png" alt=""></div>
                                <div class="header-menu-item-list-best-info">
                                    <div class="header-menu-item-list-best-info__title">Филлер PRINCESS Rich</div>
                                    <div class="header-menu-item-list-best-info__price">4 900<span class="rub__icon">руб.</span></div><a class="header-menu-item-list-best-info__btn btn-background" href="#">Добавить в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-menu-item header-menu-item_active"><a class="header-menu-item__link" href="#">О нас</a></div>
                    <div class="header-menu-item header-menu-item_fillers"><a class="header-menu-item__link" href="#">
                            Филлеры<svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 4L4 1L1 4" stroke="#46854D"/>
                            </svg></a>
                        <div class="header-menu-item-list">
                            <div class="header-menu-item-list-links"><a class="header-menu-item-list-links__link" href="#">Средства индивидуальной защиты</a><a class="header-menu-item-list-links__link" href="#">Шапочки одноразовые</a><a class="header-menu-item-list-links__link" href="#">Антисептики и дезинфекторы</a><a class="header-menu-item-list-links__link" href="#">Халаты одноразовые</a><a class="header-menu-item-list-links__link" href="#">Маски одноразовые</a><a class="header-menu-item-list-links__link" href="#">Бахилы</a><a class="header-menu-item-list-links__link" href="#">Перчатки одноразовые</a><a class="header-menu-item-list-links__link" href="#" style="font-weight:600">Посмотреть все</a></div>
                            <div class="header-menu-item-list-best">
                                <div class="header-menu-item-list-best__img"><img src="assets/images/filler1.png" alt=""></div>
                                <div class="header-menu-item-list-best-info">
                                    <div class="header-menu-item-list-best-info__title">Филлер PRINCESS Rich</div>
                                    <div class="header-menu-item-list-best-info__price">4 900<span class="rub__icon">руб.</span></div><a class="header-menu-item-list-best-info__btn btn-background" href="#">Добавить в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Цены</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Акции</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Контакты</a></div>
                </nav>
                <div class="header-menu--mobile">
                    <div class="header-menu-item header-menu-item_active"><a class="header-menu-item__link" href="#">О нас</a></div>
                    <div class="header-menu-item header-menu-item_fillers"><a class="header-menu-item__link" href="#">Филлеры</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Цены</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Акции</a></div>
                    <div class="header-menu-item"><a class="header-menu-item__link" href="#">Контакты</a></div>
                </div>
                <div class="header-info"><a class="header-info__mail" href="mailto:admin@beatu-guard.ru"><?=COption::GetOptionString('main','email_from');?></a><a class="header-info__icon header-info__icon_basket" href="#">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H4.27273L6.46545 11.8395C6.54027 12.2122 6.7452 12.547 7.04436 12.7853C7.34351 13.0236 7.71784 13.1501 8.10182 13.1428H16.0545C16.4385 13.1501 16.8129 13.0236 17.112 12.7853C17.4112 12.547 17.6161 12.2122 17.6909 11.8395L19 5.04762H5.09091M8.36363 17.1905C8.36363 17.6376 7.99732 18 7.54545 18C7.09358 18 6.72727 17.6376 6.72727 17.1905C6.72727 16.7434 7.09358 16.381 7.54545 16.381C7.99732 16.381 8.36363 16.7434 8.36363 17.1905ZM17.3636 17.1905C17.3636 17.6376 16.9973 18 16.5455 18C16.0936 18 15.7273 17.6376 15.7273 17.1905C15.7273 16.7434 16.0936 16.381 16.5455 16.381C16.9973 16.381 17.3636 16.7434 17.3636 17.1905Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg><span>3</span></a><a class="header-info__icon header-info__icon_search" href="#">
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
