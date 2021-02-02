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
    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main_sid", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE_MOBILE" => array(
		),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "sid",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "main_sid"
	),
	false
);?>
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
    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main_sid", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE_MOBILE" => array(
		),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "fillers",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "main_sid"
	),
	false
);?>
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