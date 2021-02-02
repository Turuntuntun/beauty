<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetTitle("Главная");?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_banner", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "9",	// Код информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "UF_LINK",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "main_category", Array(
    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
    "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
    "IBLOCK_ID" => "7",	// Инфоблок
    "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
    "SECTION_CODE" => "",	// Код раздела
    "SECTION_FIELDS" => array(	// Поля разделов
        0 => "",
        1 => "",
    ),
    "SECTION_ID" => "",	// ID раздела
    "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
    "SECTION_USER_FIELDS" => array(	// Свойства разделов
        0 => "",
        1 => "",
    ),
    "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
    "TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
    "VIEW_MODE" => "LINE",	// Вид списка подразделов
    "COMPONENT_TEMPLATE" => ".default"
),
    false
);?>
   <section class="cards margin-block slider4">
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

 </section><?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main_brands",
    array(
        "COMPONENT_TEMPLATE" => "main_brands",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "11",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "STRICT_SECTION_CHECK" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    ),
    false
);?>
<section class="cards margin-block slider4">
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
 <a class="banner__btn btn-background" href="/catalog">Подробнее</a>
	</div>
	<div class="banner-col">
 <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/banner2.png" alt="">
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_fakts", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "12",	// Код информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main_about", 
	array(
		"COMPONENT_TEMPLATE" => "main_about",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "10",
		"ELEMENT_ID" => "",
		"ELEMENT_CODE" => "about",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "UF_LINK",
			1 => "",
		),
		"IBLOCK_URL" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

