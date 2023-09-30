<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<main class="case-page">
    <div class="case">
        <div class="case__top wrapper">
            <div class="case__info">
                <div class="case__year"><?=$arResult["PROPERTIES"]["YEAR"]["VALUE"]?></div>
                <div class="case__name"><?=$arResult["PROPERTIES"]["SITE_NAME"]["VALUE"]?></div>
<!--                <pre>-->
<!--                    --><?// print_r($arResult) ?>
<!--                </pre>-->
            </div>
            <div class="case__btn"><span class="arr-btn" href="" data-modal="callback">
                    <p>Заказать проект</p>
                    <svg width="43px" height="43px">
                      <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arr-r"></use>
                    </svg><span class="arr-btn-circle"></span></span>
            </div>
        </div>
        <div class="case__meta wrapper">
            <div class="case__meta-item">
                <p class="case__meta-item-title">Услуга</p>
                <p class="case__meta-item-name"><?=$arResult["PROPERTIES"]["SERVICE"]["VALUE"]?></p>
            </div>
            <div class="case__meta-item">
                <p class="case__meta-item-title">Тематика</p>
                <p class="case__meta-item-name"><?=$arResult["PROPERTIES"]["THEME"]["VALUE"]?></p>
            </div>
            <div class="case__meta-item">
                <p class="case__meta-item-title">Клиент</p>
                <p class="case__meta-item-name"><?=$arResult["PROPERTIES"]["CLIENT"]["VALUE"]?></p>
            </div>
            <div class="case__meta-item">
                <p class="case__meta-item-title">Сайт</p>
                <a class="case__meta-item-name" href="<?=$arResult["PROPERTIES"]["SITE_LINK"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["SITE_LINK"]["DESCRIPTION"]?></a>
            </div>
        </div>
        <div class="side-info wrapper">
            <h3 class="side-info__title">О проекте</h3>
            <div class="side-info__content">
                <div class="side-info__text">

                    <?=$arResult["PROPERTIES"]["ABOUT"]["VALUE"]["TEXT"]?>

                </div>
            </div>
        </div>
        <div class="case__img">
            <img src="<?=$arResult["DISPLAY_PROPERTIES"]["SITE_MAIN_PIC"]["FILE_VALUE"]["SRC"]?>"/>
        </div>
        <div class="side-info wrapper">
            <h3 class="side-info__title">Бизнес-задача</h3>
            <div class="side-info__content">
                <div class="side-info__text">
                    <?=$arResult["PROPERTIES"]["IDEA"]["VALUE"]["TEXT"]?>
                </div>
            </div>
        </div>
        <div class="case__img">
            <img src="<?=$arResult["DISPLAY_PROPERTIES"]["SECOND_PIC"]["FILE_VALUE"]["SRC"]?>"/>
        </div>
        <div class="side-info wrapper">
            <h3 class="side-info__title">Приоритеты</h3>
            <div class="side-info__content">
                <div class="side-info__text">
                    <?=$arResult["PROPERTIES"]["PRIORITIES"]["VALUE"]["TEXT"]?>
                </div>
            </div>
        </div>
        <div class="case__grid">
            <div class="case__grid-item">
                <div class="case__grid-title"><?=$arResult["PROPERTIES"]["MOB_DESCR_1"]["VALUE"]?></div>
                <div class="case__grid-img"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["MOB_PIC_1"]["FILE_VALUE"]["SRC"]?>"/></div>
            </div>
            <div class="case__grid-item">
                <div class="case__grid-title"><?=$arResult["PROPERTIES"]["MOB_DESCR_2"]["VALUE"]?></div>
                <div class="case__grid-img"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["MOB_PIC_2"]["FILE_VALUE"]["SRC"]?>"/></div>
            </div>
            <div class="case__grid-item">
                <div class="case__grid-title"><?=$arResult["PROPERTIES"]["MOB_DESCR_3"]["VALUE"]?></div>
                <div class="case__grid-img"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["MOB_PIC_3"]["FILE_VALUE"]["SRC"]?>"/></div>
            </div>
            <div class="case__grid-item">
                <div class="case__grid-title"><?=$arResult["PROPERTIES"]["MOB_DESCR_4"]["VALUE"]?></div>
                <div class="case__grid-img"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["MOB_PIC_4"]["FILE_VALUE"]["SRC"]?>"/></div>
            </div>
        </div>


            <? if(!empty($arResult["PROPERTIES"]["OPTION_NAME_1"]["VALUE"])): ?>
                <div class="case__extra wrapper">
                    <div class="case__extra-title">Дополнительные опции</div>
                        <? if(!empty($arResult["PROPERTIES"]["OPTION_NAME_1"]["VALUE"])): ?>
                                <div class="case__row">
                                    <div class="case__row-title"><sup>01</sup>
                                        <p><?=$arResult["PROPERTIES"]["OPTION_NAME_1"]["VALUE"] ?></p>
                                    </div>
                                    <div class="case__row-content">
                                         <?php foreach($arResult["PROPERTIES"]["OPTION_ITEM_1"]["DESCRIPTION"] as $key => $description): ?>
                                             <div class="case__row-item">
                                                <p class="case__row-title"><?= $description ?></p>
                                                <p class="case__row-text"><?= $arResult["PROPERTIES"]["OPTION_ITEM_1"]["VALUE"][$key] ?></p>
                                             </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                        <? endif; ?>

                        <? if(!empty($arResult["PROPERTIES"]["OPTION_NAME_2"]["VALUE"])): ?>

                                <div class="case__row">
                                    <div class="case__row-title"><sup>02</sup>
                                        <p><?=$arResult["PROPERTIES"]["OPTION_NAME_2"]["VALUE"] ?></p>
                                    </div>
                                    <div class="case__row-content">
                                        <?php foreach($arResult["PROPERTIES"]["OPTION_ITEM_2"]["DESCRIPTION"] as $key => $description): ?>
                                            <div class="case__row-item">
                                                <p class="case__row-title"><?= $description ?></p>
                                                <p class="case__row-text"><?= $arResult["PROPERTIES"]["OPTION_ITEM_2"]["VALUE"][$key] ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                        <? endif; ?>

                        <? if(!empty($arResult["PROPERTIES"]["OPTION_NAME_3"]["VALUE"])): ?>

                                <div class="case__row">
                                    <div class="case__row-title"><sup>03</sup>
                                        <p><?=$arResult["PROPERTIES"]["OPTION_NAME_3"]["VALUE"] ?></p>
                                    </div>
                                    <div class="case__row-content">
                                        <?php foreach($arResult["PROPERTIES"]["OPTION_ITEM_3"]["DESCRIPTION"] as $key => $description): ?>
                                            <div class="case__row-item">
                                                <p class="case__row-title"><?= $description ?></p>
                                                <p class="case__row-text"><?= $arResult["PROPERTIES"]["OPTION_ITEM_3"]["VALUE"][$key] ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                        <? endif; ?>

                        <? if(!empty($arResult["PROPERTIES"]["OPTION_NAME_4"]["VALUE"])): ?>

                            <div class="case__row">
                                <div class="case__row-title"><sup>04</sup>
                                    <p><?=$arResult["PROPERTIES"]["OPTION_NAME_4"]["VALUE"] ?></p>
                                </div>
                                <div class="case__row-content">
                                    <?php foreach($arResult["PROPERTIES"]["OPTION_ITEM_4"]["DESCRIPTION"] as $key => $description): ?>
                                        <div class="case__row-item">
                                            <p class="case__row-title"><?= $description ?></p>
                                            <p class="case__row-text"><?= $arResult["PROPERTIES"]["OPTION_ITEM_4"]["VALUE"][$key] ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <? endif; ?>
                    </div>
                <? endif; ?>
        <pre>
            <? print_r($arResult["PROPERTIES"]) ?>
        </pre>

                <div class="case__video">
                    <video src="reel.mp4" autoplay="autoplay" muted="muted" loop="loop"></video>
                </div>
                <div class="wrapper case__order"><span class="arr-btn" href="" data-modal="callback">
                          <p>Заказать проект</p>
                          <svg width="43px" height="43px">
                            <use xlink:href="images/sprite.svg#arr-r"></use>
                          </svg><span class="arr-btn-circle"></span></span>
                </div>
