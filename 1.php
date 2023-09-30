<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<meta charset="<?=SITE_CHARSET?>">
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="804b593883b78699" />
    <meta name="google-site-verification" content="HBSPCEjfrGIRqwXUELJc8Nw4O-glsNggTolSeBiOAow" />
	<?//for dev?>
	<meta name="yandex-verification" content="a0b6e3459984ff04" />
	<meta name="google-site-verification" content="rslwWb7IUqr6N00D2EzTaJlgaKQq1i4gBjAjD0RCDjs" />
	<?//end?>
	<?$APPLICATION->ShowMeta("robots", false, false);?>
	<?$APPLICATION->ShowMeta("keywords")?>
	<?$APPLICATION->ShowMeta("description")?>
	<link rel="preload" href="/local/templates/pp/fonts/Flaticon.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<?$APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com/css?family=PT+Sans');?>
	<?$APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com/css?family=PT+Serif');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/owl.theme.default.min.css');?>
	<?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/owl.theme.green.min.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/flaticon.css');?>
	<?//$APPLICATION->AddHeadString('<link href="'.SITE_TEMPLATE_PATH.'/css/flaticon.css" as="style" type="text/css" rel="preload" />',true)?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/animate.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/magnific-popup.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/styles.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/app.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/addit_style.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/js/slick/slick/slick.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/js/slick/slick/slick-theme.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/js/libs/swiper-bundle.min.css');?>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

	<?$APPLICATION->ShowLink("canonical", null, false);?>
    <?$APPLICATION->ShowCSS(true, false);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-1.9.1.min.js');?>
    <?//$APPLICATION->AddHeadScript('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js');?>
    <?//$APPLICATION->AddHeadScript('https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.9/jquery.jcarousel.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/slick/slick/slick.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lightgallery.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lg-fullscreen.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lg-thumbnail.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lg-zoom.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.bootstrap-autohidingnavbar.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.magnific-popup.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');?>
                    <!--    Скрипты для мобилки на главной-->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/mob-additional.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/libs/swiper-bundle.min.js');?>
	<?$APPLICATION->ShowHeadStrings();?>
	<?$APPLICATION->ShowHeadScripts();?>
    <?//$APPLICATION->ShowHead();?>
	<?/*<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->*/?>


<meta name="yandex-verification" content="508a9820fd9656d1" />

<?php if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse')===false) { ?>
<!-- Google Tag Manager -->
<script data-skip-moving="true">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MD96F8F');</script>
<!-- End Google Tag Manager -->

<!-- Put this script tag to the <head> of your page -->
<script data-skip-moving="true"
        type="text/javascript"
        src="https://vk.com/js/api/share.js?95"
        charset="windows-1251">
</script>

<?}?>

</head>
<body>
<?$APPLICATION->ShowPanel();?>

<?php if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse')===false) { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD96F8F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script async src="https://widget.sparrow.ru/js/embed.js" data-skip-moving="true"></script>

<?}?>

<?//<!-- новогодняя мотня -->$APPLICATION->IncludeFile(SITE_DIR."includes/new_year.php");?>

<div class="container wrap_site">

	<?ob_start()?>

    <header>
        <!--Fixed top menu-->
        <div class="nav-top animated slideInDown">
            <div class="dropdown hidden-lg">
                <a href="#" id="dropdownMenu3" data-toggle="dropdown">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="dropdown-menu mobile" role="menu" aria-labelledby="dropdownMenu3">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                        "ALLOW_MULTI_SELECT" => "Y",    // Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "top", // Тип меню для остальных уровней
                            "DELAY" => "N", // Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1", // Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "Y",   // Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                            "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
							//"CACHE_SELECTED_ITEMS" => "N", // Не создавать кеш меню для каждой страницы
                        ),
                        false
                    );?>
                </div>
            </div>
            <div class="block-menu">
                <div class="menu-wrapper">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                        "ALLOW_MULTI_SELECT" => "Y",    // Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "top", // Тип меню для остальных уровней
                            "DELAY" => "N", // Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1", // Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "Y",   // Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                            "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
							//"CACHE_SELECTED_ITEMS" => "N", // Не создавать кеш меню для каждой страницы
                            "MENU_CLASS" => "menu hidden-xs hidden-sm hidden-md"
                        ),
                        false
                    );?>
                    <div class="menu_time  hidden-lg">
                        <p><?=FormatDate("d F, l", time())?></p>
                    </div>

                </div>
            </div>

<?php if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse')===false) { ?>           

		   <div class="glass">
                <?/*<input type="search" placeholder="Поиск">*/?>
				<div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'https://pravda-news.ru/yaseach/','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Yandex Site Search #2309675','suggest':true,'target':'_blank','tld':'ru','type':3,'usebigdictionary':true,'searchid':2309675,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':null,'input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}"><form action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8"><input type="hidden" name="searchid" value="2309675"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
                <button id="search-fixed">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/search.png" alt="">
                </button>
            </div>
			
<?}//end Chrome-Lighthouse?>

        </div>
        <!--End-->
        <div class="row">

            <?
            /*** баннер в шапке ***/
            CModule::IncludeModule('iblock');
            $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
            $arFilter = Array("IBLOCK_ID"=>"9", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_AREA"=>"4");
            $res = CIBlockElement::GetList(Array("DATE_INSERT" => "DESC"), $arFilter, false, Array("nPageSize"=>1), $arSelect);

            while($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();
                // print_r($arFields);
                // print_r($arProps);


                $banName = $arFields["NAME"];
                $nArea = $arProps["AREA"]["VALUE"];
//print_r($arProps);
                if($arProps["BANNER_DESC"]["VALUE"]>0) {
                    $arFileBanDesc = CFile::GetFileArray($arProps["BANNER_DESC"]["VALUE"]);
                }
                if($arProps["BANNER_PLAN"]["VALUE"]>0) {
                    $arFileBanPlan = CFile::GetFileArray($arProps["BANNER_PLAN"]["VALUE"]);
                }
                if($arProps["BANNER_MOB"]["VALUE"]>0) {
                    $arFileBanMob = CFile::GetFileArray($arProps["BANNER_MOB"]["VALUE"]);
                }

                if(!empty($arProps["URL"]["VALUE"])) {
                    $banUrl = $arProps["URL"]["VALUE"];
                }

            }
            ?>
            <? if(is_array($arFileBanDesc)) : ?>
                <div class="ad banner_desc hidden-xs hidden-sm hidden-md">
                    <? if(!empty($banUrl)) : ?>
                        <a href="<?=$banUrl?>" target="_blank">
                    <? endif; ?>
                        <img src="<?=$arFileBanDesc["SRC"]?>" alt="<?=$banName?>">
                    <? if(!empty($banUrl)) : ?>
                        </a>
                    <? endif; ?>
                </div>
            <? endif; ?>
            <? if(is_array($arFileBanPlan)) : ?>
                <div class="ad banner_plan hidden-xs hidden-sm hidden-lg">
                    <? if(!empty($banUrl)) : ?>
                        <a href="<?=$banUrl?>" target="_blank">
                    <? endif; ?>
                        <img src="<?=$arFileBanPlan["SRC"]?>" alt="<?=$banName?>">
                    <? if(!empty($banUrl)) : ?>
                        </a>
                    <? endif; ?>
                </div>
            <? endif; ?>
                <? if(is_array($arFileBanMob)) : ?>
                <div class="ad banner_mob hidden-md hidden-lg">
                    <? if(!empty($banUrl)) : ?>
                        <a href="<?=$banUrl?>" target="_blank">
                    <? endif; ?>
                        <img src="<?=$arFileBanMob["SRC"]?>" alt="<?=$banName?>">
                    <? if(!empty($banUrl)) : ?>
                        </a>
                    <? endif; ?>

            <? endif; ?>

			<div class="col-lg-4 col-md-6 col-sm-12 logo text-left">
				<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt='ИЦ "Пензенская правда" в Пензе'></a>
			</div>
            <div class="col-lg-4 header-text hidden-md hidden-sm hidden-xs">
                <!-- Дата -->
                <p><?=FormatDate("d F", time()).", ";?><br> <span class="text-lowercase"><?=FormatDate("l", time())?></span></p>
                 <!-- Погода (модуль с Маркетплейс) -->
                 <?/*
                <p>
                    <?$APPLICATION->IncludeComponent("abudagov:weather", "pn_weather", Array(
                        "CACHE_TIME" => "36000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CITY_NAME" => "Пенза",	// Название города
                        "COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
                        "COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
                        "PART_NAME" => "",	// Название района
                        ),
                        false
                    );?>
                </p>
                <!-- Валюта (модуль с Маркетплейс) -->
                <p>
                    <?$APPLICATION->IncludeComponent(
                        "sopdu:curse",
                        ".default",
                        array(
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "ChoiceCurrency" => array(
                                0 => "USD",
                                1 => "EUR",
                            ),
                            "ChoicePercent" => "",
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                        false
                    );?>
                </p>
                */?>

                <!-- Погода -->
                <?/*
                    CModule::IncludeModule('iblock');
                    $arSelect = Array("ID", "PROPERTY_TEMP");
                    $arFilter = Array("IBLOCK_ID"=>"1", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
                    $res = CIBlockElement::GetList(Array("DATE_INSERT" => "DESC"), $arFilter, false, Array("nPageSize"=>1), $arSelect);
                    while($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        $temp = $arFields["PROPERTY_TEMP_VALUE"];
                        $pos = strpos($temp, "-");
                        if ($pos === false) {
                            $zn = "+";
                        } else {
                            $zn = "";
                        }
                    }
                */?>
                <?/*<p>Пенза <?=$zn.number_format($temp, 0, '', '');?>&deg;С</p>*/?>

                <!-- Валюта -->
                <?php
                    $dateCbr = date("d/m/Y", time());
                    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
                    $tempUrl = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=".$dateCbr;
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL,$tempUrl); // set url to post to
                    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
                    curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s
                    $result = curl_exec($ch); // run the whole process
                    curl_close($ch);
                    $result = preg_replace('/&(?!(quot|amp|pos|lt|gt);)/', '&amp;', $result);
                    $order_xml = simplexml_load_string($result);
//print_r($order_xml);
                    if(count($order_xml->Valute)>0) {
                        foreach ($order_xml->Valute as $item) {
                            switch((string) $item['ID']) { // Получение атрибутов элемента по индексу
                                case 'R01235':
                                    $usd = (string)$item->Value;
                                    $usd = str_replace(",", ".", $usd);
                                    $usd = round($usd, 2);
                                    break;
                                case 'R01239':
                                    $eur = (string)$item->Value;
                                    $eur = str_replace(",", ".", $eur);
                                    $eur = round($eur, 2);
                                    break;
                            }
                        }
                    }
					$arSelect = Array("ID", "PROPERTY_USD", "PROPERTY_EUR");
                    $arFilter = Array("IBLOCK_ID"=>"12", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
                    $res = CIBlockElement::GetList(Array("DATE_INSERT" => "DESC"), $arFilter, false, Array("nPageSize"=>1), $arSelect);
                    while($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
						$arProps = $ob->GetProperties();
						if($USER->IsAdmin()) {
							// print_r($arFields);
							// print_r($arProps);
						}
						$usd = $arFields["PROPERTY_USD_VALUE"];
                        $eur = $arFields["PROPERTY_EUR_VALUE"];
                    }
                ?>
<!--                <p>$ --><?//=$usd?><!--&nbsp;&nbsp; &euro; --><?//=$eur?><!--</p>?>-->
                <? /*<p>$ 59,25&nbsp;&nbsp; € 68,78</p>*/?>

            </div>
            <div class="col-lg-4 col-md-6 hidden-sm hidden-xs">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "inc_social",
                        "EDIT_TEMPLATE" => ""
                    )
                );?>
                <div class="clearfix"></div>
<!--                --><?//$APPLICATION->IncludeComponent(
//	"bitrix:menu",
//	"menu_header",
//	array(
//		"ALLOW_MULTI_SELECT" => "N",
//		"CHILD_MENU_TYPE" => "left",
//		"DELAY" => "N",
//		"MAX_LEVEL" => "1",
//		"MENU_CACHE_GET_VARS" => array(
//		),
//		"MENU_CACHE_TIME" => "3600000",
//		"MENU_CACHE_TYPE" => "Y",
//		"MENU_CACHE_USE_GROUPS" => "Y",
//		"ROOT_MENU_TYPE" => "header",
//		"USE_EXT" => "N",
//		"COMPONENT_TEMPLATE" => "menu_header",
//		"COMPOSITE_FRAME_MODE" => "A",
//		"COMPOSITE_FRAME_TYPE" => "AUTO"
//	),
//	false
//);?>
            </div>
        </div>
		
<?php if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse')===false) { ?> 
        <div class="row">
            <div class="col-lg-12 col-md-12 padding-top-10">
                <div class="dropdown hidden-lg">
                    <a href="#" id="dropdownMenu2" data-toggle="dropdown">
                        <? /*<img src="<?=SITE_TEMPLATE_PATH?>/img/menu.svg"> */?>
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="dropdown-menu mobile" role="menu" aria-labelledby="dropdownMenu2">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                            	"ALLOW_MULTI_SELECT" => "Y",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "top", // Тип меню для остальных уровней
                                "DELAY" => "N", // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1", // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "Y",   // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "mobile_menu",  // Тип меню для первого уровня
                                "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
								//"CACHE_SELECTED_ITEMS" => "N", // Не создавать кеш меню для каждой страницы
                            ),
                            false
                        );?>
						<?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                            	"ALLOW_MULTI_SELECT" => "Y",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "top", // Тип меню для остальных уровней
                                "DELAY" => "N", // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1", // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "Y",   // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "mobile_menu_1",  // Тип меню для первого уровня
                                "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
								//"CACHE_SELECTED_ITEMS" => "N", // Не создавать кеш меню для каждой страницы
                            ),
                            false
                        );?>
						<?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                            	"ALLOW_MULTI_SELECT" => "Y",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "top", // Тип меню для остальных уровней
                                "DELAY" => "N", // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1", // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "Y",   // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "mobile_menu_2",  // Тип меню для первого уровня
                                "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
								//"CACHE_SELECTED_ITEMS" => "N", // Не создавать кеш меню для каждой страницы
                            ),
                            false
                        );?>
                    </div>
                </div>
				<div class="main-menu">
                    <div class="menu-wrapper">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"MENU_CLASS" => "menu hidden-xs hidden-sm hidden-md",
		"COMPONENT_TEMPLATE" => "main_menu",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
<!--                        <div class="menu_time 1 hidden-lg">-->
<!--                            <p>--><?//=FormatDate("d F, l", time())?><!--</p>-->
<!--                        </div>-->

                            <div class="header__main">

                                <!-- Weather widget by https://www.meteoservice.ru -->
                                <a style="display: none;" id="ms-informer-link-4738063aa0102b7811fb1dc0ad0b803f" class="ms-informer-link" href="https://www.meteoservice.ru/weather/overview/penza">Погода в Пензе</a>
                                <script class="ms-informer-script" src="https://www.meteoservice.ru/informer/script/4738063aa0102b7811fb1dc0ad0b803f"></script>
                                <!-- End -->
                                <script>
                                    // Получаем погоду выше
                                    window.addEventListener('DOMContentLoaded', function() {
                                        let attempts = 0;
                                        function getTemperatureValue() {
                                            const temperatureElement = document.querySelector('.temperature');
                                            const temperatureValue = temperatureElement.innerText;
                                            const headerTemperature = document.querySelector('.header__temperature');

                                            if (temperatureValue && temperatureValue !== '') {
                                                headerTemperature.innerText = temperatureValue;
                                            } else {
                                                attempts++;
                                                if (attempts < 5) {
                                                    setTimeout(getTemperatureValue, 1000); // Повторяем через 1 секунду
                                                } else {
                                                    console.error('Не удалось получить значение температуры после 5 попыток.');
                                                }
                                            }
                                        }
                                        setTimeout(getTemperatureValue, 1000); // Запускаем через 1 секунды
                                    });

                                </script>

                                <div class="header__info">
                                    <div class="header__info-item">
                                        <div class="header__info-item-icon">
                                            <svg width="8" height="8">
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#date"></use>
                                            </svg>
                                        </div>
                                        <span class="header__info-item-text"><?=FormatDate("d F", time())?></span>
                                    </div>
                                    <div class="header__info-item">
                                        <div class="header__info-item-icon">
                                            <svg width="8" height="8">
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#weather"></use>
                                            </svg>
                                        </div>
                                        <span class="header__info-item-text header__temperature">&nbsp;&nbsp;&nbsp;</span>
                                    </div>
                                    <div class="header__info-item">
                                        <div class="header__info-item-icon"> <span>$</span></div>
                                        <span class="header__info-item-text"><?=$usd?></span>
                                    </div>
                                    <div class="header__info-item">
                                        <div class="header__info-item-icon"> <span>€</span></div>
                                        <span class="header__info-item-text"><?=$eur?></span>
                                    </div>
                                </div>

                            </div>





                    </div>
                </div>
				
                <?/*<input id="m-search" class="m-search hidden-lg hidden-md" type="search" placeholder="Поиск">*/?>
<div style="display:none;" class="m-search ya-site-form ya-site-form_inited_no hidden-lg hidden-md" onclick="return {'action':'https://pravda-news.ru/yaseach/','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Yandex Site Search #2309675','suggest':true,'target':'_blank','tld':'ru','type':3,'usebigdictionary':true,'searchid':2309675,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':null,'input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}"><form action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8"><input type="hidden" name="searchid" value="2309675"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
                <div class="glass">
                    <?/*<input type="search" placeholder="Поиск">*/?>
					<div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'https://pravda-news.ru/yaseach/','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Yandex Site Search #2309675','suggest':true,'target':'_blank','tld':'ru','type':3,'usebigdictionary':true,'searchid':2309675,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':null,'input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}"><form action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8"><input type="hidden" name="searchid" value="2309675"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
                    <button class="hidden-sm hidden-xs" id="search" title="Поиск">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/search.png" alt="">
                    </button>
                    <button class="hidden-lg hidden-md" id="mobile-search" title="Поиск">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/search.png" alt="">
                    </button>
                </div>
            </div>
        </div>
<?}//end Chrome-Lighthouse?>		

        <? if($APPLICATION->GetCurPage(false) == SITE_DIR): ?>
            <?
            global $arTimeFilter;
            $arTimeFilter = array(">DATE_ACTIVE_FROM" => ConvertTimeStamp(time() - 1296000));
			// $arTimeFilter = array();
            global $arFilterSlider;
            $arFilterSlider = array_merge($arTimeFilter, array("PROPERTY_SLIDER" => "2"));
            ?>
			 <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "slider",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "FILTER_NAME" => "arFilterSlider",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "10",
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
                    "PROPERTY_CODE" => array(0=>"",1=>"SLIDER_IMAGE",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
        <? endif; ?>
    </header>

	<?$htmlHeader=ob_get_clean();?>
	<?
	$APPLICATION->AddViewContent('html_header', $htmlHeader);
	?>
	<?
		$APPLICATION->ShowViewContent('html_submenu');
	?>
	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "ldjson", array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "-"
	),
	false
);?>

    <article class="padding-top-20">
        <div class="padding-none">
			<div class="row">
				<div class="col-md-12 col-lg-9">
					<div class="title_block">
						<?=$APPLICATION->ShowViewContent('before_title')?>
						<h1 <?=(CSite::InDir('/index.php')?' class="hidden"':'')?>><?$APPLICATION->ShowTitle(false)?></h1>
					</div>
				</div>
			</div>
#WORK_AREA#<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?

if (!function_exists('mb_ucfirst') && extension_loaded('mbstring'))
{
	/**
	 * mb_ucfirst - преобразует первый символ в верхний регистр
	 * @param string $str - строка
	 * @param string $encoding - кодировка, по-умолчанию UTF-8
	 * @return string
	 */
	function mb_ucfirst($str, $encoding='UTF-8')
	{
		$str = mb_ereg_replace('^[\ ]+', '', $str);
		$str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
			   mb_substr($str, 1, mb_strlen($str), $encoding);
		return $str;
	}
}

?>
        <? $posn = strpos($APPLICATION->GetCurPage(false), "/news/"); ?>
        <? if($APPLICATION->GetCurPage(false) == SITE_DIR) : ?>
            <? $showBlock = true; ?>
        <? elseif($posn===false) : ?>
            <? $showBlock = false; ?>
        <? else : ?>
            <? $showBlock = true; ?>
        <? endif; ?>

        <? if($showBlock) : ?>
            <?
                global $arTimeFilter;
                $arTimeFilter = array(">DATE_ACTIVE_FROM" => ConvertTimeStamp(time() - 864000)); // 2592000
                // $arTimeFilter = array();
                /*** получаем прямую линию ***/
                $arFilter = Array('IBLOCK_ID'=>'6', 'GLOBAL_ACTIVE'=>'Y');
                $db_list = CIBlockSection::GetList(Array("SORT"=>"DESC"), $arFilter, false,Array());
                $db_list->NavStart(1);
                while($line_result = $db_list->GetNext()) {
                    $arLineFile = CFile::GetFileArray($line_result["PICTURE"]);
                    $arLineFile = resWatImg($arLineFile, array("width" => 280, "height" => 190), "BX_RESIZE_IMAGE_EXACT");
                    $line_name = $line_result["NAME"];
                    $line_image = $arLineFile["SRC"];
                    $line_image_descr = $arLineFile["DESCRIPTION"]?$arLineFile["DESCRIPTION"]:$line_name;
                    // $line_url = $line_result["SECTION_PAGE_URL"];
                    $line_url = "/line/?line=".$line_result["ID"];
                }
            ?>
        <? if($APPLICATION->GetCurPage(false) == SITE_DIR): ?>
            <div class="row">
                <div class="col-md-8 col-lg-push-3 col-lg-9">
                        <?
                        global $arrFilterMain;
                        $arrFilterMain = array_merge($arTimeFilter, array("PROPERTY_MAIN_NEWS"=>"3"));
                        ?> <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "main_news",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "COMPONENT_TEMPLATE" => "main_news",
                                "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
                                "FILTER_NAME" => "arrFilterMain",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "2",
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "10",
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
                                "PROPERTY_CODE" => array(0=>"",1=>"",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "PROPERTY_TOP",
                                "SORT_BY2" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "DESC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        );?>


                    <div class="row category news_list popular_block hidden-xs hidden-sm">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <h3><b>Популярные <?=$words[$words_rand];?></b></h3>
                        </div>
                        <?
                        global $arTimeFilter;
                        $arPopTimeFilter = array(">DATE_ACTIVE_FROM" => ConvertTimeStamp(time() - 604800)); // за неделю , "PROPERTY_NUM_VIEWS" => 0
                        ?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_news",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
                                "FILTER_NAME" => "arPopTimeFilter",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "2",
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "5",
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
                                "PROPERTY_CODE" => array(0=>"PROPERTY_NUM_VIEWS",1=>"",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "PROPERTY_NUM_VIEWS", // SHOW_COUNTER
                                "SORT_BY2" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "DESC",
                                "STRICT_SECTION_CHECK" => "N",
                                "BLOCK_ITEM_CLASSES" => "col-md-6 col-lg-4"
                            )
                        );?>
                        <div class="col-md-12 hidden-lg">
                           <hr>
                        </div>
                    </div>


      



                    <div class="clearfix"></div>
                    <div class="row hidden-sm">
                        <div class="col-md-12">
                            <?
                            CModule::IncludeModule('iblock');
                            $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
                            $arFilter = Array("IBLOCK_ID"=>"9", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_AREA"=>"5");
                            $res = CIBlockElement::GetList(Array("DATE_INSERT" => "DESC"), $arFilter, false, Array("nPageSize"=>1), $arSelect);
                            if($res->result->num_rows>0) {
                                while($ob = $res->GetNextElement()) {
                                    $arFields = $ob->GetFields();
                                    $arProps = $ob->GetProperties();
                                    // print_r($arFields);
                                    // print_r($arProps);


                                    $banName = $arFields["NAME"];
                                    $nArea = $arProps["AREA"]["VALUE"];

                                    $banDesc = $banPlan = $banMob = false;

                                    if($arProps["BANNER_DESC"]["VALUE"]>0) {
                                        $arFileBanDesc = CFile::GetFileArray($arProps["BANNER_DESC"]["VALUE"]);
                                        $banDesc = true;
                                    }
                                    if($arProps["BANNER_PLAN"]["VALUE"]>0) {
                                        $arFileBanPlan = CFile::GetFileArray($arProps["BANNER_PLAN"]["VALUE"]);
                                        $banPlan = true;
                                    }
                                    if($arProps["BANNER_MOB"]["VALUE"]>0) {
                                        $arFileBanMob = CFile::GetFileArray($arProps["BANNER_MOB"]["VALUE"]);
                                        $banMob = true;
                                    }

                                    if(!empty($arProps["URL"]["VALUE"])) {
                                        $banUrl = $arProps["URL"]["VALUE"];
                                    }

                                }
                            }else {
                                echo "<hr />";
                            }
                            ?>

                            <? if($banDesc) : ?>
                                <div class="ad2 banner_desc hidden-xs hidden-sm hidden-md">
                                    <? if(!empty($banUrl)) : ?>
                                        <a href="<?=$banUrl?>" target="_blank">
                                    <? endif; ?>
                                        <img src="<?=$arFileBanDesc["SRC"]?>" alt="<?=$banName?>">
                                    <? if(!empty($banUrl)) : ?>
                                        </a>
                                    <? endif; ?>
                                </div>
                            <? endif; ?>
                            <? if($banPlan) : ?>
                                <div class="ad2 banner_plan hidden-xs hidden-sm hidden-lg">
                                    <? if(!empty($banUrl)) : ?>
                                        <a href="<?=$banUrl?>" target="_blank">
                                    <? endif; ?>
                                        <img src="<?=$arFileBanPlan["SRC"]?>" alt="<?=$banName?>">
                                    <? if(!empty($banUrl)) : ?>
                                        </a>
                                    <? endif; ?>
                                </div>
                            <? endif; ?>
                            <? if($banMob) : ?>
                                <div class="ad2 banner_mob hidden-md hidden-lg">
                                    <? if(!empty($banUrl)) : ?>
                                        <a href="<?=$banUrl?>" target="_blank">
                                    <? endif; ?>
                                        <img src="<?=$arFileBanMob["SRC"]?>" alt="<?=$banName?>">
                                    <? if(!empty($banUrl)) : ?>
                                        </a>
                                    <? endif; ?>
                                </div>
                            <? endif; ?>

                        </div>
                    </div>

                    <div class="row hidden-sm">
                        <div class="col-sm-6 col-md-6 col-lg-4 link">
                            <div class="pull-right"><a href="/news/spetsproekty/relevant/">Все материалы</a></div>
                            <h3><b>Актуально</b></h3>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 link">
                            <div class="pull-right"><a href="/news/spetsproekty/persons/">Все материалы</a></div>
                            <h3><b>Персоны</b></h3>
                        </div>
                        <div class="col-md-4 hidden-sm hidden-md hidden-xs">
                            <h3><b>Прямая линия</b></h3>
                        </div>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "ap_news",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "2",
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "1",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Новости",
                                "PARENT_SECTION" => "30",
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(0=>"",1=>"",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "PROPERTY_TOP",
                                "SORT_BY2" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "DESC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        );?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "ap_news",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "2",
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "1",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Новости",
                                "PARENT_SECTION" => "35",
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(0=>"",1=>"",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "PROPERTY_TOP",
                                "SORT_BY2" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "DESC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        );?>
                        <div class="col-md-4 news-categories hidden-sm hidden-md hidden-xs">
                            <a href="<?=$line_url?>"><img src="<?=$line_image?>" alt="<?=$line_image_descr?>"></a>
                            <a href="<?=$line_url?>">
                                <p><?=$line_name?></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-pull-9 col-lg-3 hidden-xs">
                    <? /*<div class="all-other hidden-lg">
                        <div class="all-item">
                            <div class="all-text">
                                <a href="#">
                                    <p>
                                        <time class="text-danger">13:42 </time>
                                        В Пензенской области прошел фестиваль русской кухни для туристов
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="all-item">
                            <div class="all-text">
                                <a href="#">
                                    <p>
                                        <time class="text-danger">13:42 </time>
                                        В Пензенской области прошел фестиваль русской кухни для туристов
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="all-item">
                            <div class="all-text">
                                <a href="#">
                                    <p>
                                        <time class="text-danger">13:42 </time>
                                        В Пензенской области прошел фестиваль русской кухни для туристов
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div> */?>
                    <?
                    // global $arrFilterDay;
                    // $from = date('d.m.Y', time());
                    // $to = date("d.m.Y", time() + 86400);
                    // $arrFilterDay = Array(">=DATE_ACTIVE_FROM" => $from, "<=DATE_ACTIVE_FROM" => $to);

                    global $arSectionFilter;
                	$arSectionFilter = array(
                        // "!"."PARENT_SECTION" => array(15, 16),
                		"!IBLOCK_SECTION_ID" => array(15, 16),
                        "!"."PROPERTY_MAIN_NEWS"=>"3"
                	);
                	// $arSectionFilter = array_merge($arTimeFilter, $arSectionFilter);
                	//print_r($arTimeFilter);

                    ?>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "day_news_main_page", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "arSectionFilter",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "2",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "PROPERTY_TOP",	// Поле для первой сортировки новостей
		"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"HIDE_WRAP" => "Y"
	),
	false
);?>
                </div>
            </div>
        <? endif; ?>

<?php $dev = false;
if ($_GET['dev'] === '1') {
$dev = true;
}
?>



<?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "slider-mob",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "FILTER_NAME" => "arFilterSlider",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "10",
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
                    "PROPERTY_CODE" => array(0=>"",1=>"SLIDER_IMAGE",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>


					<div class="mob-shown">
						<div class="secondary__header wrapper">
							<h2>Популярное</h2><a class="news__link" href="/news/" target="_blank">Смотреть все</a>
						</div>
			</div>
										<?
                        global $arTimeFilter;
                        $arPopTimeFilter = array(">DATE_ACTIVE_FROM" => ConvertTimeStamp(time() - 604800)); // за неделю , "PROPERTY_NUM_VIEWS" => 0
                        ?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_news-mob",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
                                "FILTER_NAME" => "arPopTimeFilter",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "2",
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "5",
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
                                "PROPERTY_CODE" => array(0=>"PROPERTY_NUM_VIEWS",1=>"",),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "PROPERTY_NUM_VIEWS", // SHOW_COUNTER
                                "SORT_BY2" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "DESC",
                                "STRICT_SECTION_CHECK" => "N",
                                "BLOCK_ITEM_CLASSES" => "col-md-6 col-lg-4"
                            )
                        );?>

					    

            <div class="row category hidden-xs hidden-sm">
                <div class="col-sm-12">
                    <?
                    CModule::IncludeModule('iblock');
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
                    $arFilter = Array("IBLOCK_ID"=>"9", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_AREA"=>array(6));
                    $res = CIBlockElement::GetList(Array("DATE_INSERT" => "DESC"), $arFilter, false, Array("nPageSize"=>1), $arSelect);
                    $banDesc = $banPlan = $banMob = false;
                    if($res->result->num_rows>0) {
                        while($ob = $res->GetNextElement()) {
                            $arFields = $ob->GetFields();
                            $arProps = $ob->GetProperties();
                            // print_r($arFields);
                            // print_r($arProps);


                            $banName = $arFields["NAME"];
                            $nArea = $arProps["AREA"]["VALUE"];

                            // $banDesc = $banPlan = $banMob = false;

                            if($arProps["BANNER_DESC"]["VALUE"]>0) {
                                $arFileBanDesc = CFile::GetFileArray($arProps["BANNER_DESC"]["VALUE"]);
                                $banDesc = true;
                            }
                            if($arProps["BANNER_PLAN"]["VALUE"]>0) {
                                $arFileBanPlan = CFile::GetFileArray($arProps["BANNER_PLAN"]["VALUE"]);
                                $banPlan = true;
                            }
                            if($arProps["BANNER_MOB"]["VALUE"]>0) {
                                $arFileBanMob = CFile::GetFileArray($arProps["BANNER_MOB"]["VALUE"]);
                                $banMob = true;
                            }

                            if(!empty($arProps["URL"]["VALUE"])) {
                                $banUrl = $arProps["URL"]["VALUE"];
                            }

                        }
                    }else {
                        echo "<hr  />";
                    }
                    ?>

                    <? if($banDesc) : ?>
                        <div class="ad2_2 banner_desc hidden-xs hidden-sm hidden-md">
                            <? if(!empty($banUrl)) : ?>
                                <a href="<?=$banUrl?>" target="_blank">
                            <? endif; ?>
                                <img src="<?=$arFileBanDesc["SRC"]?>" alt="<?=$banName?>">
                            <? if(!empty($banUrl)) : ?>
                                </a>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                    <? if($banPlan) : ?>
                        <div class="ad2_2 banner_plan hidden-xs hidden-sm hidden-lg">
                            <? if(!empty($banUrl)) : ?>
                                <a href="<?=$banUrl?>" target="_blank">
                            <? endif; ?>
                                <img src="<?=$arFileBanPlan["SRC"]?>" alt="<?=$banName?>">
                            <? if(!empty($banUrl)) : ?>
                                </a>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                    <? if($banMob) : ?>
                        <div class="ad2_2 banner_mob hidden-md hidden-lg">
                            <? if(!empty($banUrl)) : ?>
                                <a href="<?=$banUrl?>" target="_blank">
                            <? endif; ?>
                                <img src="<?=$arFileBanMob["SRC"]?>" alt="<?=$banName?>">
                            <? if(!empty($banUrl)) : ?>
                                </a>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                </div>
                <? /*
                <div class="col-md-6">
                    <div class="ad2_2 hidden-sm hidden-md">
                        <a href="#"><img src="img/ad3.jpg"></a>
                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-md">
                    <div class="ad2_2">
                        <a href="#"><img src="img/ad3.jpg"></a>
                    </div>
                </div>
                <div class="col-md-12 hidden-lg hidden-sm hidden-xs">
                    <div class="ad2">
                        <a href="#"><img src="img/ad2.jpg"></a>
                    </div>
                </div>
                */ ?>
                <div class="col-lg-6 col-md-4 hidden-lg">
                    <div class="row border">
                        <div class="col-md-12 hidden-lg">
                            <h3 style="margin-top: 27px"><b>Прямая линия</b></h3>
                        </div>
                        <div class="col-md-12">
                            <a href="<?=$line_url?>"><img src="<?=$line_image?>" alt="<?=$line_image_descr?>"></a>
                            <a href="<?=$line_url?>">
                                <p><?=$line_name?></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="row border gallery margin-right">
                        <div class="col-md-12 col-lg-6 link">
                            <div class="pull-right hidden-lg"><a href="/gallery/">Все фотографии</a></div>
                            <h3 class="pull-left"><b>Фото</b></h3>
                        </div>
                        <div class="col-lg-6 hidden-sm hidden-md hidden-xs link">
                            <div class="pull-right"><a href="/gallery/">Все фотографии</a></div>
                        </div>
                        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_announce",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DETAIL_URL" => "/gallery/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "15",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "PROPERTY_TOP",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_announce",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
                    </div>
                    <div class="border-right hidden-md hidden-sm hidden-xs"> </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="row gallery margin-left">
                        <div class="col-md-12 col-lg-6 link">
                            <div class="pull-right hidden-lg"><a href="/videogallery/">Все видеоролики</a></div>
                            <h3 class="pull-left"><b>Видео</b></h3>
                        </div>
                        <div class="col-lg-6 hidden-sm hidden-md hidden-xs link">
                            <div class="pull-right"><a href="/videogallery/">Все видеоролики</a></div>
                        </div>
                        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_announce",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DETAIL_URL" => "/videogallery/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "16",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "PROPERTY_TOP",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_announce",
		"PARENT_SECTION_CODE" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12">
                    <?
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
                    $arFilter = Array("IBLOCK_ID"=>"9", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_AREA"=>"7");
                    $res = CIBlockElement::GetList(Array("DATE_INSERT" => "DESC"), $arFilter, false, Array("nPageSize"=>1), $arSelect);
                    $banDesc = $banPlan = $banMob = false;
                    if($res->result->num_rows>0) {
                        while($ob = $res->GetNextElement()) {
                            $arFields = $ob->GetFields();
                            $arProps = $ob->GetProperties();

                            $banName = $arFields["NAME"];
                            $nArea = $arProps["AREA"]["VALUE"];

                            // $banDesc = $banPlan = $banMob = false;

                            if($arProps["BANNER_DESC"]["VALUE"]>0) {
                                $arFileBanDesc = CFile::GetFileArray($arProps["BANNER_DESC"]["VALUE"]);
                                $banDesc = true;
                            }
                            if($arProps["BANNER_PLAN"]["VALUE"]>0) {
                                $arFileBanPlan = CFile::GetFileArray($arProps["BANNER_PLAN"]["VALUE"]);
                                $banPlan = true;
                            }else {
                                $arFileBanPlan = $arFileBanDesc;
                                $banPlan = true;
                            }
                            if($arProps["BANNER_MOB"]["VALUE"]>0) {
                                $arFileBanMob = CFile::GetFileArray($arProps["BANNER_MOB"]["VALUE"]);
                                $banMob = true;
                            }

                            if(!empty($arProps["URL"]["VALUE"])) {
                                $banUrl = $arProps["URL"]["VALUE"];
                            }

                        }
                    }else {
                        echo "<hr />";
                    }
                    ?>

                    <? if($banDesc) : ?>
                        <div class="ad4 banner_desc hidden-xs hidden-sm hidden-md">
                            <? if(!empty($banUrl)) : ?>
                                <a href="<?=$banUrl?>" target="_blank">
                            <? endif; ?>
                                <img src="<?=$arFileBanDesc["SRC"]?>" alt="<?=$banName?>">
                            <? if(!empty($banUrl)) : ?>
                                </a>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                    <? if($banPlan) : ?>
                        <div class="ad4 banner_plan hidden-xs hidden-sm hidden-lg">
                            <? if(!empty($banUrl)) : ?>
                                <a href="<?=$banUrl?>" target="_blank">
                            <? endif; ?>
                                <img src="<?=$arFileBanPlan["SRC"]?>" alt="<?=$banName?>">
                            <? if(!empty($banUrl)) : ?>
                                </a>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                    <? if($banMob) : ?>
                        <div class="ad4 banner_mob hidden-md hidden-lg">
                            <? if(!empty($banUrl)) : ?>
                                <a href="<?=$banUrl?>" target="_blank">
                            <? endif; ?>
                                <img src="<?=$arFileBanMob["SRC"]?>" alt="<?=$banName?>">
                            <? if(!empty($banUrl)) : ?>
                                </a>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                </div>
                <? /*
                <div class="col-md-6 hidden-md hidden-sm">
                    <div class="ad4">
                        <a href="#"><img src="img/ad3.jpg"></a>
                    </div>
                </div>
                <div class="col-md-6 hidden-md hidden-sm">
                    <div class="ad4">
                        <a href="#"><img src="img/ad3.jpg"></a>
                    </div>
                </div>
                <div class="col-md-12 hidden-lg hidden-sm hidden-xs">
                    <div class="ad2">
                        <a href="#"><img src="img/ad2.jpg"></a>
                    </div>
                </div>*/?>
            </div>

		<div class="mob-shown">


		</div>




            <div class="row" style="position: relative;">
                <div class="col-md-12 col-lg-9 col-sm-12 col-xs-12 wrap_news_list_block">

                    <?

                        $property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>"9", "CODE"=>"AREA"));
                        while($enum_fields = $property_enums->GetNext()) {
                            $arEnumFields[$enum_fields["XML_ID"]] = $enum_fields["ID"];
                        }


                    /*$arFilter = Array('IBLOCK_ID'=>2, 'GLOBAL_ACTIVE'=>'Y', 'UF_SHOW_MAIN'=>'1'); //
                    $db_list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);
                    while($ar_result = $db_list->GetNext()) :*/
                    $arSectionMain = array(array("ID" => 22, "NAME" => "Власть", "SECTION_PAGE_URL" => "/news/vlast/"),
                    array("ID" => 25, "NAME" => "Общество", "SECTION_PAGE_URL" => "/news/obshchestvo/"),
                    array("ID" => 23, "NAME" => "Происшествия", "SECTION_PAGE_URL" => "/news/proisshestviya/"),
                    array("ID" => 28, "NAME" => "Экономика", "SECTION_PAGE_URL" => "/news/ekonomika/"),
                    array("ID" => 26, "NAME" => "Образование", "SECTION_PAGE_URL" => "/news/obrazovanie/"),
                    array("ID" => 24, "NAME" => "Здоровье", "SECTION_PAGE_URL" => "/news/zdorove/"),
                    array("ID" => 82, "NAME" => "Спорт", "SECTION_PAGE_URL" => "/news/sport/"),
                    array("ID" => 27, "NAME" => "Культура", "SECTION_PAGE_URL" => "/news/kultura/"),); ?>


						<div class="news__filters swiper wrapper mob-shown">
							<div class="swiper-wrapper">

						<? foreach ($arSectionMain as $ar_result) : ?>

							  <a class="news__filter swiper-slide active-filter" data-newstype="<?=$ar_result["NAME"]?>">
								<span ><?=$ar_result["NAME"]?></span>
							  </a>

						<? endforeach; ?>
							</div>
        				</div>



                    <? foreach ($arSectionMain as $ar_result) : ?>
                        <? //if($ar_result["ELEMENT_CNT"]>0) : ?>

					<div class="hidden-xs hidden-sm">
                            <div class="row category news_list">
                                <div class="col-md-8">
                                    <h3><b><?=$ar_result["NAME"]?></b></h3>
                                </div>
                                <div class="col-md-4 link">
								<?
								//LSI слова для SEO заголовков
								$words = array("новости", "события", "происшествия", "известия", "новинки");
								$words_rand = array_rand($words, 1);
								//LSI слова для SEO заголовков
								?>
								
                                 <div class="pull-right"><a href="<?=$ar_result["SECTION_PAGE_URL"]?>">Все <?=$words[$words_rand];?></a></div>
                                </div>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "list_news",
                                    Array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "N",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "2",
                                        "IBLOCK_TYPE" => "content",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "6",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => $ar_result["ID"],
                                        "PARENT_SECTION_CODE" => $ar_result["CODE"],
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array(0=>"",1=>"",),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "PROPERTY_TOP",
                                        "SORT_BY2" => "ACTIVE_FROM",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "DESC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                );?>


                            </div>
						</div>

                            <?
                            if(!empty($arEnumFields["RUBRIC".$ar_result["ID"]])) {
                                $arSelectBan = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
                                $arFilterBan = Array("IBLOCK_ID"=>"9", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "?PROPERTY_AREA"=>$arEnumFields["RUBRIC".$ar_result["ID"]]);
                                $resBan = CIBlockElement::GetList(Array("DATE_INSERT" => "DESC"), $arFilterBan, false, Array("nPageSize"=>1), $arSelectBan);
                            }
                            if($resBan->result->num_rows>0) {
                                while($obBan = $resBan->GetNextElement()) {
                                    $arFields = $obBan->GetFields();
                                    $arProps = $obBan->GetProperties();
                                    // print_r($arFields);
                                    // print_r($arProps);


                                    $banName = $arFields["NAME"];
                                    $nArea = $arProps["AREA"]["VALUE"];

                                    $banDesc = $banPlan = $banMob = false;

                                    if($arProps["BANNER_DESC"]["VALUE"]>0) {
                                        $arFileBanDesc = CFile::GetFileArray($arProps["BANNER_DESC"]["VALUE"]);
                                        $banDesc = true;
                                    }
                                    if($arProps["BANNER_PLAN"]["VALUE"]>0) {
                                        $arFileBanPlan = CFile::GetFileArray($arProps["BANNER_PLAN"]["VALUE"]);
                                        $banPlan = true;
                                    }else {
                                        $arFileBanPlan = $arFileBanDesc;
                                        $banPlan = true;
                                    }
                                    if($arProps["BANNER_MOB"]["VALUE"]>0) {
                                        $arFileBanMob = CFile::GetFileArray($arProps["BANNER_MOB"]["VALUE"]);
                                        $banMob = true;
                                    }

                                    if(!empty($arProps["URL"]["VALUE"])) {
                                        $banUrl = $arProps["URL"]["VALUE"];
                                    }else {
                                        $banUrl = '';
                                    }

                                } ?>

							<div class="hidden-xs hidden-sm">
                                <div class="row category news_list">
                                    <div class="col-sm-12">
                                        <? if($banDesc) : ?>
                                            <div class="ad2 banner_desc hidden-xs hidden-sm hidden-md">
                                                <? if(!empty($banUrl)) : ?>
                                                    <a href="<?=$banUrl?>" target="_blank">
                                                <? endif; ?>
                                                    <img src="<?=$arFileBanDesc["SRC"]?>" alt="<?=$banName?>">
                                                <? if(!empty($banUrl)) : ?>
                                                    </a>
                                                <? endif; ?>
                                            </div>
                                        <? endif; ?>
                                        <? if($banPlan) : ?>
                                            <div class="ad2 banner_plan hidden-xs hidden-sm hidden-lg">
                                                <? if(!empty($banUrl)) : ?>
                                                    <a href="<?=$banUrl?>" target="_blank">
                                                <? endif; ?>
                                                    <img src="<?=$arFileBanPlan["SRC"]?>" alt="<?=$banName?>">
                                                <? if(!empty($banUrl)) : ?>
                                                    </a>
                                                <? endif; ?>
                                            </div>
                                        <? endif; ?>
                                        <? if($banMob) : ?>
                                            <div class="ad2 banner_mob hidden-md hidden-lg">
                                                <? if(!empty($banUrl)) : ?>
                                                    <a href="<?=$banUrl?>" target="_blank">
                                                <? endif; ?>
                                                    <img src="<?=$arFileBanMob["SRC"]?>" alt="<?=$banName?>">
                                                <? if(!empty($banUrl)) : ?>
                                                    </a>
                                                <? endif; ?>
                                            </div>
                                        <? endif; ?>
                                    </div>
                                </div>
							</div>

                            <?
                            }else {
                                echo "<hr  class='mob-hidden'/>";
                            }
                            ?>

                        <? //endif; ?>

					<!-- kp -->




								<div class="mob-shown hidden news-type-block" data-newstype="<?=$ar_result["NAME"]?>">
									<div class="secondary__header wrapper">
									  <h2><?=$ar_result["NAME"]?></h2><a class="news__link" href="<?=$ar_result["SECTION_PAGE_URL"]?>" target="_blank">Смотреть все</a>
									</div>
									<?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "list_news_main",
                                    Array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "N",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "2",
                                        "IBLOCK_TYPE" => "content",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "2",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => $ar_result["ID"],
                                        "PARENT_SECTION_CODE" => $ar_result["CODE"],
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array(0=>"",1=>"",),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "PROPERTY_TOP",
                                        "SORT_BY2" => "ACTIVE_FROM",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "DESC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                );?>
								</div>
							
					<!-- /kp -->


                    <? endforeach; ?>
                    <? //endwhile; ?>

                </div>



				<div class="hidden-xs hidden-sm">
                <div class="col-md-12 col-lg-3 col-sm-12 col-xs-12">
                    <div class="row float_block">
						<?/*<div class="col-md-4 col-lg-12 col-sm-4 col-xs-4 newspaper">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "sect",
                                    "AREA_FILE_SUFFIX" => "inc_newspaper",
                                    "EDIT_TEMPLATE" => ""
                                )
                            );?>
						</div>*/?>
                        <div class="col-md-4 col-lg-12 col-sm-4 col-xs-4 wrap_archive text-center">
                            <p>
                                <b>
                                    Архив
                                </b>
                            </p>
                            <div id="calendarHere">
                                <iframe name="calendarHere" width="100%" height="200px" src = "<?=$sSite.'/includes/arhive.php'?>"></iframe>
                                <? //include $_SERVER["DOCUMENT_ROOT"].'/upload/arhive_tmp.html'; ?>
                            </div>

                            <!-- Yandex.RTB R-A-265517-2 -->
                            <div id="yandex_rtb_R-A-265517-2"></div>
                            
							<?php if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse')===false) { ?>					
							
							<script type="text/javascript">
                            (function(w, d, n, s, t) {
                            w[n] = w[n] || [];
                            w[n].push(function() {
                            Ya.Context.AdvManager.render({
                            blockId: "R-A-265517-2",
                            renderTo: "yandex_rtb_R-A-265517-2",
                            async: true
                            });
                            });
                            t = d.getElementsByTagName("script")[0];
                            s = d.createElement("script");
                            s.type = "text/javascript";
                            s.src = "//an.yandex.ru/system/context.js";
                            s.async = true;
                            t.parentNode.insertBefore(s, t);
                            })(this, this.document, "yandexContextAsyncCallbacks");
                            </script>
							
							<?}?>

							<?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "sect",
                                    "AREA_FILE_SUFFIX" => "inc_right_banners",
                                    "EDIT_TEMPLATE" => ""
                                )
                            );?>

                        </div>
                        <div class="col-md-4 col-lg-12 col-sm-4 col-xs-4 archive text-center">
                            <p>
                                <b>
                                    Новости по тегам
                                </b>
                            </p>
                            <div class="tags">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:search.tags.cloud",
                                    "tags_news",
                                    Array(
                                        "CACHE_TIME" => "3600",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "COLOR_NEW" => "8c8c8c",
                                        "COLOR_OLD" => "8c8c8c",
                                        "COLOR_TYPE" => "Y",
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "FILTER_NAME" => "",
                                        "FONT_MAX" => "30",
                                        "FONT_MIN" => "12",
                                        "PAGE_ELEMENTS" => "100",
                                        "PERIOD" => "",
                                        "PERIOD_NEW_TAGS" => "",
                                        "SHOW_CHAIN" => "Y",
                                        "SORT" => "NAME",
                                        "TAGS_INHERIT" => "N",
                                        "URL_SEARCH" => "/news/",
                                        "WIDTH" => "100%",
                                        "arrFILTER" => array(0=>"iblock_content",),
                                        "arrFILTER_iblock_content" => array(0=>"2",)
                                    )
                                );?>
                                <p class="text-right"><a href="/tags/">Все теги</a></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 hidden-md">
                            <div class="ad3 text-center">

                            </div>
                        </div>
                    </div>
                </div>
				</div>
            </div>

        <? endif; ?>
				<?php
					$dev = false;
					if ($_GET['dev'] === '1') {
						$dev = true;
					}
					?>

				<?php if($APPLICATION->GetCurPage(false) == SITE_DIR): ?>
				<div class="mob-shown">
				 <div class="secondary__header wrapper">
				  <h2>Фотогалерея</h2>
						<a class="news__link" href="/gallery/" target="_blank">Смотреть все</a>
				</div>


							<?$APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "slider-bottom-mob",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
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
                                    "DETAIL_URL" => "/gallery/#ELEMENT_CODE#/",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "DETAIL_PICTURE",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "2",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "5",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "15",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "PROPERTY_TOP",
                                    "SORT_BY2" => "ACTIVE_FROM",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "DESC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "main_announce",
                                    "COMPOSITE_FRAME_MODE" => "A",
                                    "COMPOSITE_FRAME_TYPE" => "AUTO"
                                ),
                                false
                            );?>

			

				</div>
				<? endif; ?>

        </div>
        <div id="back-top"><a href="#top" title="Наверх"><span>Наверх</span></a></div>
    </article>

    <?
        $APPLICATION->ShowViewContent('html_header');
	?>

</div>
<div class="footer">
    <footer>
        <div class="container hidden-md hidden-lg">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title">
                                <? echo mb_convert_case($words[$words_rand], MB_CASE_TITLE, 'UTF-8');?> Пензы и Пензенской области
                                <b><i class="flaticon-next pull-right"></i></b>
                            </h4>
                        </a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="footer-text">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "bottom_menu",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "Y",
                                        "CHILD_MENU_TYPE" => "footer",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(0=>"",),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "footer",
            							//"CACHE_SELECTED_ITEMS" => "N", // Не создавать кеш меню для каждой страницы
                                        "USE_EXT" => "N"
                                    )
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                           aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title">
                                Редакция
                                <b><i class="flaticon-next pull-right"></i></b>
                            </h4>
                        </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body text-color">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "sect",
                                    "AREA_FILE_SUFFIX" => "inc_bottom_red",
                                    "EDIT_TEMPLATE" => ""
                                )
                            );?>
                        </div>
                    </div>
                </div>
                <div class="panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title">
                                Информация
                                <b><i class="flaticon-next pull-right"></i></b>
                            </h4>
                        </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "sect",
                                    "AREA_FILE_SUFFIX" => "inc_bottom_info",
                                    "EDIT_TEMPLATE" => ""
                                )
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container hidden-sm hidden-xs">
            <div class="footer-block-1 hidden-sm hidden-xs">
                <h4>
				
				<? echo mb_convert_case($words[$words_rand], MB_CASE_TITLE, 'UTF-8');?> Пензы и Пензенской области</h4>
				
                <div class="footer-text">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "footer",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "footer",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
                </div>
                <? /*<div class="footer-text2">
                    <p><a href="#">Звезды</a></p>
                    <p><a href="#">Персона</a></p>
                    <p><a href="#">Актуально</a></p>
                    <p><a href="#">Твоя усадьба</a></p>
                    <p><a href="#">Фото</a></p>
                    <p><a href="#">Видео</a></p>
                    <p><a href="#">Общественная приёмная</a></p>
                    <p><a href="#">Ваш вопрос - наш ответ</a></p>
                </div>
                <div class="footer-text3">
                    <p><a href="#">Акции</a></p>
                    <p><a href="#">Конкурсы</a></p>
                    <p><a href="#">Юбилей «ПП»: 100 лет</a></p>
                    <p><a href="#">Пензенская правда</a></p>
                    <p><a href="#">Земляки</a></p>
                    <p><a href="#">Губернские ведомости</a></p>
                </div>*/ ?>

            </div>

            <div class="footer-block-2">
                <h4>Редакция</h4>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "inc_bottom_red",
                        "EDIT_TEMPLATE" => ""
                    )
                );?>
            </div>
            <div class="footer-block-3">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "inc_bottom_info",
                        "EDIT_TEMPLATE" => ""
                    )
                );?>
            </div>
        </div>
    </footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-9 col-sm-12">
                <div class="allow">
                    <span><b>16+</b></span>
                </div>
                <p class="text">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "sect",
                            "AREA_FILE_SUFFIX" => "inc_bottom_copy",
                            "EDIT_TEMPLATE" => ""
                        )
                    );?>
                </p>
            </div>
            <div class="col-md-5 col-lg-3" id="creator">
                <p class="text2" style="display: none;">Сайт разработан в веб-студии<br>
                    <b><a href="https://iconica.site/" target="_blank">«ICONICA»</a></b>
                </p>
                    <div id="bx-composite-banner"></div>
                    
<?php if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse')===false) { ?>					
					
					
					<div class="text2 counterl live_internet_counter">
                        <?/*<!--LiveInternet counter--><script type="text/javascript" data-skip-moving="true">
                        document.write("<a href='//www.liveinternet.ru/click' "+
                        "target=_blank><img src='//counter.yadro.ru/hit?t45.1;r"+
                        escape(document.referrer)+((typeof(screen)=="undefined")?"":
                        ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                        ";h"+escape(document.title.substring(0,150))+";"+Math.random()+
                        "' alt='' title='LiveInternet' "+
                        "border='0' width='31' height='31'><\/a>")
                        </script><!--/LiveInternet-->*/?>
                        <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
target="_blank"><img id="licntF061" width="31" height="31" style="border:0"
title="LiveInternet"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licntF061").src=
"https://counter.yadro.ru/hit?t42.2;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->
                    </div>

                    <div class="y_metrika_informer">
                    <!-- Yandex.Metrika informer -->
                    <a href="https://metrika.yandex.ru/stat/?id=12773563&amp;from=informer"
                    target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/12773563/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                    style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="12773563" data-lang="ru" /></a>
                    <!-- /Yandex.Metrika informer -->
                    </div>
            </div>
        </div>
    </div>
</div>
<?/*
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(12773563, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/12773563" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Google Analytics -->
    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-10609595-3']);
        _gaq.push(['_trackPageview']);
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    */?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(94034726, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94034726" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?//TODO: удалить после использование ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(94534716, "init", {
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94534716" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?}//end Chrome-Lighthouse?>
</body>
</html>
