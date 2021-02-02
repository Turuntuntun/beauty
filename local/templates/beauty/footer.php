<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>
    </div>
    <footer class="footer">
        <div class="mycontainer">
            <div class="footer-row">
                <div class="footer-col"><a class="footer__title" href="#">Филлеры</a>
                    <div class="footer-links"><a class="footer__link" href="#">Arawia</a><a class="footer__link" href="#">Aloha</a><a class="footer__link" href="#">Hawaiiana</a><a class="footer__link" href="#">Supertan</a><a class="footer__link" href="#">Soleo</a><a class="footer__link" href="#">Hawaiiana</a><a class="footer__link" href="#">Все</a></div>
                </div>
                <div class="footer-col"><a class="footer__title" href="#">Каталог</a>
                    <div class="footer-links"><a class="footer__link" href="#">Средства индивидуальной защиты</a><a class="footer__link" href="#">Шапочки одноразовые</a><a class="footer__link" href="#">Халаты одноразовые</a><a class="footer__link" href="#">Перчатки одноразовые</a><a class="footer__link" href="#">Маски одноразовые</a><a class="footer__link" href="#">Антисептики и дезинфекторы</a><a class="footer__link" href="#">Бахилы</a></div>
                </div>
                <div class="footer-col"><a class="footer__title" href="#">О нас</a><a class="footer__title" href="#">Контакты</a><a class="footer__title" href="#">Цены</a><a class="footer__title" href="#">Акции</a></div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:sender.subscribe",
                    "main_subscribe",
                    array(
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "CONFIRMATION" => "Y",
                        "HIDE_MAILINGS" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_HIDDEN" => "N",
                        "USER_CONSENT" => "N",
                        "USER_CONSENT_ID" => "0",
                        "USER_CONSENT_IS_CHECKED" => "Y",
                        "USER_CONSENT_IS_LOADED" => "N",
                        "USE_PERSONALIZATION" => "Y",
                        "COMPONENT_TEMPLATE" => "main_subscribe"
                    ),
                    false
                );?>
            </div>
            <div class="footer-row">
                <div class="footer__text">Beauty Guard. © 2020</div>
                <div class="footer__text">Сделано в <a href="https://ra-studio.ru/">RA-Studio</a></div>
            </div>
        </div>
    </footer>
    </div>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/scripts/swiper/swiper.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/scripts/lightgallery/js/lightgallery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/scripts/lightgallery/js/lightgallery-pager.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/scripts/imask.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/scripts/validation.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/scripts/script.js"></script>
    </body>
    </html>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>