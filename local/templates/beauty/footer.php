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
                <div class="footer-col">
                    <div class="footer__title">Будьте всегда первыми в курсе всех наших акций и новостей</div>
                    <form class="footer-subscribe" action="#">
                        <input type="email" data-type="email" data-required placeholder="Введите ваш e-mail" required>
                        <button class="btn-background" type="submit">Подписаться</button>
                    </form>
                    <div class="footer__email">Наша почта: <a href="mailto:admin@beatu-guard.ru">admin@beatu-guard.ru</a></div>
                </div>
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