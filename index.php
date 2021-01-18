<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetTitle("Главная")
?><?$APPLICATION->IncludeComponent("bitrix:news.list", "main_banner", Array(
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