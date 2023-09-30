<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Разработчик онлайн-сервисов №1 в России");
?>
    <main class="main-page">
    <section class="main-header wrapper">
        <div class="main-header__about">
            <h1 class="main-header__header">Создаем эстетичный и удобный дизайн для вашего бизнеса</h1>
            <p class="main-header__subtitle">Интернет-магазины под ключ, разработка корпоративных порталов, посадочные страницы - это наша зона ответственности</p>
        </div>
        <div class="main-header__order"><span class="arr-btn" href="" data-modal="callback">
                  <p>Заказать проект</p>
                  <svg width="43px" height="43px">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arr-r"></use>
                  </svg><span class="arr-btn-circle"></span></span>
        </div>
    </section>
    <div class="subheader">
        <div class="subheader--inner wrapper">
            <p>Digital agency</p>
            <p>Since 2017</p>
        </div>
    </div>
    <div class="main-video">
        <div class="main-video--inner">
            <video src="<?=SITE_TEMPLATE_PATH?>/video/reel.mp4" autoplay="autoplay" muted="muted" loop="loop"></video>
        </div>
    </div>

            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"partners", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "partners"
	),
	false
);?>

    <div class="mob-header__order wrapper"><span class="arr-btn" href="" data-modal="callback">
                <p>Заказать проект</p>
                <svg width="43px" height="43px">
                  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arr-r"></use>
                </svg><span class="arr-btn-circle"></span></span>
    </div>
    <section class="main-about">
        <div class="side-info wrapper">
            <h3 class="side-info__title">Компетенции</h3>
            <div class="side-info__content">
                <div class="side-info__text">Разработка web-проектов начиная от набросков до полного запуска и продвижения в интернете</div>
                <div class="side-info__btn dt"><a class="arr-btn">
                        <p>О КОМПАНИИ</p>
                        <svg width="43px" height="43px">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arr-r"></use>
                        </svg><span class="arr-btn-circle"></span></a>
                </div>
            </div>
        </div>
        <div class="side-info wrapper">
            <h3 class="side-info__title dt">Почему выбирают нас</h3>
            <div class="side-info__content">
                <div class="nums">
                    <div class="nums__left">
                        <div class="nums__item">
                            <div class="nums__num big-num">500+</div>
                            <div class="nums__text">Проектов реализовано</div>
                        </div>
                    </div>
                    <div class="nums__right">
                        <div class="nums__item">
                            <div class="nums__num">6+</div>
                            <div class="nums__text">Лет на рынке</div>
                        </div>
                        <div class="nums__item">
                            <div class="nums__num">73+</div>
                            <div class="nums__text">Дополнительных услуг</div>
                        </div>
                        <div class="nums__item">
                            <div class="nums__num">90+</div>
                            <div class="nums__text">Гос. заказов</div>
                        </div>
                        <div class="nums__item">
                            <div class="nums__num">26 млн+</div>
                            <div class="nums__text">Прибыль заказчиков</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="side-info__btn mob"><a class="arr-btn">
                    <p>О КОМПАНИИ</p>
                    <svg width="43px" height="43px">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arr-r"></use>
                    </svg><span class="arr-btn-circle"></span></a>
            </div>
        </div>
    </section>







 <section class="cases">
    <div class="wrapper">
        <h2 class="section-title">Реализованные кейсы</h2>
    </div>
     <?$APPLICATION->IncludeComponent(
         "bitrix:news.list",
         "cases",
         array(
             "ACTIVE_DATE_FORMAT" => "d.m.Y",
             "ADD_SECTIONS_CHAIN" => "Y",
             "AJAX_MODE" => "N",
             "AJAX_OPTION_ADDITIONAL" => "",
             "AJAX_OPTION_HISTORY" => "N",
             "AJAX_OPTION_JUMP" => "N",
             "AJAX_OPTION_STYLE" => "Y",
             "CACHE_FILTER" => "N",
             "CACHE_GROUPS" => "Y",
             "CACHE_TIME" => "36000000",
             "CACHE_TYPE" => "A",
             "CHECK_DATES" => "Y",
             "DETAIL_URL" => "",
             "DISPLAY_BOTTOM_PAGER" => "Y",
             "DISPLAY_DATE" => "Y",
             "DISPLAY_NAME" => "Y",
             "DISPLAY_PICTURE" => "Y",
             "DISPLAY_PREVIEW_TEXT" => "Y",
             "DISPLAY_TOP_PAGER" => "N",
             "DETAIL_URL" => "/portfolio/detail.php?ID=#ELEMENT_ID#",
             "FIELD_CODE" => array(
                 0 => "CODE",
                 1 => "",
             ),
             "FILTER_NAME" => "",
             "HIDE_LINK_WHEN_NO_DETAIL" => "N",
             "IBLOCK_ID" => "3",
             "IBLOCK_TYPE" => "content",
             "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
             "INCLUDE_SUBSECTIONS" => "Y",
             "MESSAGE_404" => "",
             "NEWS_COUNT" => "20",
             "PAGER_BASE_LINK_ENABLE" => "N",
             "PAGER_DESC_NUMBERING" => "N",
             "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
             "PAGER_SHOW_ALL" => "N",
             "PAGER_SHOW_ALWAYS" => "N",
             "PAGER_TEMPLATE" => ".default",
             "PAGER_TITLE" => "Новости",
             "PARENT_SECTION" => "",
             "PARENT_SECTION_CODE" => "",
             "PREVIEW_TRUNCATE_LEN" => "",
             "PROPERTY_CODE" => array(
                 0 => "",
                 1 => "",
             ),
             "SET_BROWSER_TITLE" => "Y",
             "SET_LAST_MODIFIED" => "N",
             "SET_META_DESCRIPTION" => "Y",
             "SET_META_KEYWORDS" => "Y",
             "SET_STATUS_404" => "N",
             "SET_TITLE" => "Y",
             "SHOW_404" => "N",
             "SORT_BY1" => "ACTIVE_FROM",
             "SORT_BY2" => "SORT",
             "SORT_ORDER1" => "DESC",
             "SORT_ORDER2" => "ASC",
             "STRICT_SECTION_CHECK" => "N",
             "COMPONENT_TEMPLATE" => "cases"
         ),
         false
     );?>
<div class="cases__btn wrapper">
 <a class="arr-btn" href="/cases.html">
	<p>
		 Другие проекты
	</p>
 <span class="arr-btn-circle"></span></a>
</div>
 </section> <section class="news wrapper">
<h2 class="section-title">Новости компании</h2>
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"cases", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "CODE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<div class="news__tiles">
	<div class="news__tile">
		<div class="news__info">
			<div class="news__date">
				 20.11.2022
			</div>
			 <a class="news__title" data-crop="40" >Почему переезд с CMS на 1С-Битрикс Управление сайтом - важный шаг для вашего бизнеса?</a>
			<div class="news__preview" data-crop="100">
				 Переход на 1С-Битрикс Управление сайтом – прорыв в онлайн-бизнесе. У платформы 400 функций, куда входит аналитика, управление контентом, маркетинг, встроенная CRM и не только
			</div>
		</div>
		<div class="news__more">
 <a class="more" href="#">
			<p>
				 Узнать больше
			</p>
 </a>
		</div>
	</div>
	<div class="news__tile">
		<div class="news__info">
			<div class="news__date">
				 20.11.2022
			</div>
			 <a class="news__title" data-crop="40" >Интеграции веб-формы и CRM Битрикс24: особенности, тонкости, пошаговая настройка</a>
			<div class="news__preview" data-crop="100">
				 Мы настраивали отправку данных из веб-форм в CRM Битрикс24 и столкнулись со следующей проблемой. Сначала веб-форма не отправляет данные в Битрикс24, а потом "веб-форма на найдена" при клике на кнопки форм интернет магазина на АСПРО Максимум.
			</div>
		</div>
		<div class="news__more">
 <a class="more" href="#">
			<p>
				 Узнать больше
			</p>
 </a>
		</div>
	</div>
	<div class="news__tile">
		<div class="news__info">
			<div class="news__date">
				 02.10.2022
			</div>
			 <a class="news__title" data-crop="40" >«Помнить» о клиентах все, чтобы был и сервис высокий показать</a>
			<div class="news__preview" data-crop="100">
				 «Помнить» о клиентах все, чтобы и сервис высокий показать, и заработать больше :) Показательные примеры сфер бизнеса: продажа товаров или услуг для домашних животных; автомобильные запчасти или сервис.
			</div>
		</div>
		<div class="news__more">
 <a class="more" href="#">
			<p>
				 Узнать больше
			</p>
 </a>
		</div>
	</div>
	<div class="news__tile">
		<div class="news__info">
			<div class="news__date">
				 25.09.2022
			</div>
			 <a class="news__title" data-crop="40" >Как прогревать базу клиентов? Часть 2 </a>
			<div class="news__preview" data-crop="100">
				 Как говорили в предыдущей статье, не всегда клиенты готовы купить сразу: чем дороже, сложнее товар или услуга, – тем больше нужно времени для принятия решения. Далее рассмотрели как можно использовать эти знания и автоматизировать прогрев, теперь же мы поговорим о касаниях с клиентом.
			</div>
		</div>
		<div class="news__more">
 <a class="more" href="#">
			<p>
				 Узнать больше
			</p>
 </a>
		</div>
	</div>
	<div class="news__tile">
		<div class="news__info">
			<div class="news__date">
				 25.09.2022
			</div>
			 <a class="news__title" data-crop="40" >Как прогревать базу клиентов? Часть 1</a>
			<div class="news__preview" data-crop="100">
				 Не всегда клиенты готовы купить сразу: чем дороже, сложнее товар или услуга, – тем больше нужно времени для принятия решения.
			</div>
		</div>
		<div class="news__more">
 <a class="more" href="#">
			<p>
				 Узнать больше
			</p>
 </a>
		</div>
	</div>
	<div class="news__tile">
		<div class="news__info">
			<div class="news__date">
				 20.09.2022
			</div>
			 <a class="news__title" data-crop="40" >Контроль сроков</a>
			<div class="news__preview" data-crop="100">
				 Работайте с клиентами быстро! Начнем с базовых, но полезных настроек. Решая задачи компании, разберем основы настроек роботов и триггеров! Итак, что же будем решать?
			</div>
		</div>
		<div class="news__more">
 <a class="more" href="#">
			<p>
				 Узнать больше
			</p>
 </a>
		</div>
	</div>
</div>
<div class="news__btn">
	 <a class="arr-btn" >
                    <p>ЧИТАТЬ ВСЕ НОВОСТИ</p>
                    <span class="arr-btn-circle"></span></a>
</div>
 </section> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>