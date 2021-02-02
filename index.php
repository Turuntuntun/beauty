<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");

?><section class="slider-banner swiper-container">
<div class="slider-banner-wrap swiper-wrapper">
	<div class="slider-banner-item swiper-slide" style="background-image: url(assets/images/banner.jpg)">
		<div class="mycontainer">
			<div class="slider-banner-item__title">
				 Приобретите антисептики по выгодным ценам!
			</div>
			<div class="slider-banner-item__text">
				 Нет времени на раздумья
			</div>
 <a class="slider-banner-item__btn btn-background" href="#">Подробнее</a>
		</div>
	</div>
	<div class="slider-banner-item swiper-slide" style="background-image: url(assets/images/banner.jpg)">
		<div class="mycontainer">
			<div class="slider-banner-item__title">
				 Приобретите антисептики!
			</div>
			<div class="slider-banner-item__text">
				 Нет времени на раздумья
			</div>
 <a class="slider-banner-item__btn btn-background" href="#">Подробнее</a>
		</div>
	</div>
	<div class="slider-banner-item swiper-slide" style="background-image: url(assets/images/banner.jpg)">
		<div class="mycontainer">
			<div class="slider-banner-item__title">
				 По выгодным ценам!
			</div>
			<div class="slider-banner-item__text">
				 Нет времени на раздумья
			</div>
 <a class="slider-banner-item__btn btn-background" href="#">Подробнее</a>
		</div>
	</div>
</div>
<div class="swiper-pagination">
</div>
 </section> <section class="categories margin-block">
<div class="mycontainer">
	<div class="h2title">
		 Категории
	</div>
	<div class="categories-items">
 <a class="categories-card" href="#" style="background-image: url(assets/images/category1.png)">
		<div class="categories-card__title">
			 Средства индивидуальной защиты
		</div>
 </a><a class="categories-card" href="#" style="background-image: url(assets/images/category2.png)">
		<div class="categories-card__title">
			 Бахилы
		</div>
 </a><a class="categories-card" href="#" style="background-image: url(assets/images/category3.png)">
		<div class="categories-card__title">
			 Халаты одноразовые
		</div>
 </a><a class="categories-card" href="#" style="background-image: url(assets/images/category4.png)">
		<div class="categories-card__title">
			 Перчатки одноразовые
		</div>
 </a><a class="categories-card" href="#" style="background-image: url(assets/images/category5.png)">
		<div class="categories-card__title">
			 Шапочки одноразовые
		</div>
 </a><a class="categories-card" href="#" style="background-image: url(assets/images/category6.png)">
		<div class="categories-card__title">
			 Маски одноразовые
		</div>
 </a><a class="categories-card" href="#" style="background-image: url(assets/images/category7.png)">
		<div class="categories-card__title">
			 Антисептики и&nbsp;дезинфекторы
		</div>
 </a>
	</div>
</div>
 </section> <section class="cards margin-block slider4">
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "main_sid", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
		"IBLOCK_ID" => "7",	// Инфоблок
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"LABEL_PROP" => "",	// Свойства меток товара
		"LAZY_LOAD" => "N",	// Показать кнопку ленивой загрузки Lazy Load
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"LOAD_ON_SCROLL" => "N",	// Подгружать товары при прокрутке до конца
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "18",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => "",	// Тип цены
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
		"PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
		"PROPERTY_CODE_MOBILE" => "",	// Свойства товаров, отображаемые на мобильных устройствах
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],	// Параметр ID продукта (для товарных рекомендаций)
		"RCM_TYPE" => "personal",	// Тип рекомендации
		"SECTION_CODE" => "sid",	// Код раздела
		"SECTION_ID" => "",	// ID раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
		"SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
		"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
		"SHOW_FROM_SECTION" => "N",	// Показывать товары из раздела
		"SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
		"SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
		"SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<div class="mycontainer">
	<div class="cards-top">
		<div class="h2title">
			 Филлеры
		</div>
 <a class="cards-top__link" href="#">
		Смотреть весь каталог</a>
	</div>
	<div class="cards-items-wrap">
		<div class="cards-items swiper-container">
			<div class="cards-wrap swiper-wrapper">
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
 </a>
					<div class="cards-item__img">
 <a class="cards-item" href="#"><img src="assets/images/filler1.png" alt=""></a><a class="cards-item" href="#">
                           </a>
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
			</div>
		</div>
		<div class="swiper-button-next">
		</div>
		<div class="swiper-button-prev">
		</div>
	</div>
</div>
 </section> <section class="brands margin-block">
<div class="mycontainer">
	<div class="h2title">
		 Бренды филлеров
	</div>
	<div class="brands-items">
		<div class="brands-item">
 <img src="assets/images/partner1.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner2.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner3.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner4.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner5.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner6.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner7.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner8.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner9.png" alt="">
		</div>
		<div class="brands-item">
 <img src="assets/images/partner10.png" alt="">
		</div>
	</div>
</div>
 </section> <section class="cards margin-block slider4">
<div class="mycontainer">
	<div class="cards-top">
		<div class="h2title">
			 Средства защиты
		</div>
 <a class="cards-top__link" href="#">
		Смотреть весь каталог</a>
	</div>
	<div class="cards-items-wrap">
		<div class="cards-items swiper-container">
			<div class="cards-wrap swiper-wrapper">
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
				<div class="cards-item-wrap swiper-slide">
 <a class="cards-item" href="#">
					<div class="cards-item-tags">
 <span class="cards-item-tags-tag cards-item-tags-tag_best">Бестселлер</span><span class="cards-item-tags-tag cards-item-tags-tag_action">Скидка 10%</span>
					</div>
					<div class="cards-item__img">
 <img src="assets/images/filler1.png" alt="">
					</div>
					<div class="cards-item__title">
						 Филлер PRINCESS Rich
					</div>
					<div class="cards-item-bot">
						<div class="cards-item-bot__price">
							 4 900<span class="rub__icon">руб.</span>
						</div>
						<div class="cards-item-bot__btn btn-background">
							 В корзину
						</div>
					</div>
 </a>
				</div>
			</div>
		</div>
		<div class="swiper-button-next">
		</div>
		<div class="swiper-button-prev">
		</div>
	</div>
</div>
 </section> <section class="banner margin-block">
<div class="mycontainer">
	<div class="banner-col">
		<div class="banner__title">
			 Новые товары из категории индивидуальных средств защиты
		</div>
 <a class="banner__btn btn-background" href="#">Подробнее</a>
	</div>
	<div class="banner-col">
 <img src="assets/images/banner2.png" alt="">
	</div>
</div>
 </section> <section class="facts margin-block">
<div class="mycontainer">
	<div class="h2title">
		 Факты о нас
	</div>
	<div class="facts-items">
		<div class="facts-item">
			<div class="facts-item__text">
				 Весь товар сертифицирован
			</div>
		</div>
		<div class="facts-item">
			<div class="facts-item__text">
				 Широкий ассортимент средств индивидуальной защиты и другого товара на медицинскую тематику
			</div>
		</div>
		<div class="facts-item">
			<div class="facts-item__text">
				 Максимально быстрая доставка по всей России
			</div>
		</div>
		<div class="facts-item">
			<div class="facts-item__text">
				 Техническая поддержка и медицинская консультация в вопросах выбора медицинских товаров
			</div>
		</div>
	</div>
</div>
 </section> <section class="about margin-block">
<div class="mycontainer">
	<div class="h2title">
		 О нашей деятельности
	</div>
	<div class="about-content">
		<div class="about__img">
 <img src="assets/images/about.jpg" alt="">
		</div>
		<div class="about-info">
			<div class="about-info__title">
				 О компании
			</div>
			<div class="about-info__text">
				 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione minus dolores assumenda velit voluptates itaque quasi modi aliquam nesciunt? Quisquam debitis molestiae suscipit placeat vitae dolorem tempora architecto voluptatem nihil quibusdam, ullam error? Vel hic voluptatum iure reprehenderit autem eaque! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, blanditiis.<br>
 <br>
				 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi soluta voluptate totam provident perferendis accusamus delectus nulla voluptatem temporibus. Exercitationem consectetur voluptatem a dolore incidunt, nulla, autem nam consequuntur, excepturi quasi atque. Quia, asperiores nesciunt mollitia, esse reprehenderit dolor, nam labore dolores molestias repellat magnam dolore sed vitae tenetur. Incidunt deleniti totam rem nobis eaque molestias fugiat magnam tempora commodi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nostrum dicta obcaecati quae ex illo reiciendis, consequatur eligendi quod earum!<br>
 <br>
				 Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium autem, quisquam aperiam soluta culpa incidunt provident, dignissimos temporibus esse officiis pariatur? Adipisci cum totam, qui aliquam perspiciatis ipsa delectus?
			</div>
 <a class="about-info__btn" href="#">
			Подробнее</a>
		</div>
	</div>
</div>
 </section> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>