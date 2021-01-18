<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetTitle("Главная")
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
 </section>
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