<style>
    .page-home .header .navbar, .cookie-is-visible .page-home .header .navbar {
        background: #2a2937;
    }
    ul {
        list-style: none;
    }
    .category-toolbar .container li {
        border-left: 3px solid #7a7a8a;
        padding-left: 10px;
        color: #7a7a8a;
    }
    .gallery-showcase-block {
        max-height: 660px;
    }
    .container{
        width:96%;
        position:relative
    }.container-full{position:relative}.col{position:relative;float:left;width:100%;min-height:1px;padding-left:7px;padding-right:7px}
    @media(max-width:767px){.container{width:80%;padding-left:14px !important;padding-right:14px !important;margin-right: 0px !important}}
</style>

<div class="slider-images">
    <div id="close">X</div>
    <div id="prev"></div>
    <div id="next"></div>
    <div class="slider-container">

    </div>
</div>
<div class="section" style="background: url(/images/pioneer_centers/map2.png); background-position: 0px 0px; background-size: 100%;">
    <div class="section category-toolbar">
        <div class="container">
            <h1 class="quote">Pioneer DJ School <br /> DJ Центры</h1>
            <p>
                Официальные DJ Центры Pioneer DJ School от бренда Pioneer DJ это многофункциональные образовательные площадки,
                ведущие несколько видов деятельности:
                <ul>
                    <li>
                        DJ Школы - Обучение DJ мастерству как новичков так и профессионалов на максимальном международном уровне.
                    </li>
                    <li>
                        DJ Магазины - Официальные offline магазины Pioneer DJ.
                    </li>
                    <li>
                        DJ Студии - Тренинг площадки с флагманским DJ оборудованием, а также TV студия - Pioneer DJ TV.
                    </li>
                </ul>
            </p>
        </div>
    </div>

    <div class="section section-productcat-products">
        <div class="container">
            <div class="gallery-showcase-block"></div>
            <? foreach($_SESSION['user']['city_array'] as $element){ ?>
                <? if($element['id'] == "nsk"){
                    continue;
                } ?>
                <div id="gallery-<?=$element['id']?>" class="gallery-showcase-li">
                    <div class="gallery-header gallery-header-<?=$element['id']?>"><?=$element['title']?><i id="<?=$element['id']?>" class="ico"></i></div>
                    <div class="gallery-container gallery-cont-<?=$element['id']?>">
                        <? if($element['id'] == "moscow"){ ?>
                            <h2 style="color: white; display: none;padding-left: 50px;">Команда DJ Центра Москва</h2>
                            <img class="people" src="/images/pioneer_centers/moscow/FAN_2939.jpg" />
                            <h2 style="color: white; display: none;padding-left: 50px;">Схема DJ Центра Москва</h2>
                            <img class="imgMap" src="/css/images/struc/str_msk.png" style="width: 100%"/>
                            <img class="images image-point_11" src="/images/pioneer_centers/moscow/1/1.jpg" />
                            <img class="images image-point_11" src="/images/pioneer_centers/moscow/1/2.jpg" />
                            <img class="images image-point_11" src="/images/pioneer_centers/moscow/1/3.jpg" />
                            <img class="images image-point_10" src="/images/pioneer_centers/moscow/2/1.jpg" />
                            <img class="images image-point_10" src="/images/pioneer_centers/moscow/2/2.jpg" />
                            <img class="images image-point_9" src="/images/pioneer_centers/moscow/3/1.jpg" />
                            <img class="images image-point_9" src="/images/pioneer_centers/moscow/3/2.jpg" />
                            <img class="images image-point_8" src="/images/pioneer_centers/moscow/5/1.jpg" />
                            <img class="images image-point_7" src="/images/pioneer_centers/moscow/4/1.jpg" />
                            <img class="images image-point_7" src="/images/pioneer_centers/moscow/4/2.jpg" />
                            <img class="images image-point_6" src="/images/pioneer_centers/moscow/6/1.jpg" />
                            <img class="images image-point_6" src="/images/pioneer_centers/moscow/6/2.jpg" />
                            <img class="images image-point_6" src="/images/pioneer_centers/moscow/6/3.jpg" />
                            <img class="images image-point_5" src="/images/pioneer_centers/moscow/7/1.jpg" />
                            <img class="images image-point_5" src="/images/pioneer_centers/moscow/7/2.jpg" />
                            <img class="images image-point_4" src="/images/pioneer_centers/moscow/8/1.jpg" />
                            <img class="images image-point_4" src="/images/pioneer_centers/moscow/8/2.jpg" />
                            <img class="images image-point_3" src="/images/pioneer_centers/moscow/9/1.jpg" />
                            <img class="images image-point_3" src="/images/pioneer_centers/moscow/9/2.jpg" />
                            <img class="images image-point_3" src="/images/pioneer_centers/moscow/9/3.jpg" />
                            <img class="images image-point_2" src="/images/pioneer_centers/moscow/11/1.jpg" />
                            <img class="images image-point_2" src="/images/pioneer_centers/moscow/11/2.jpg" />
                            <img class="images image-point_1" src="/images/pioneer_centers/moscow/12/1.jpg" />
                            <img class="images image-point_1" src="/images/pioneer_centers/moscow/12/2.jpg" />
                            <img class="images image-point_12" src="/images/pioneer_centers/moscow/10/1.jpg" />
                            <img class="images image-point_12" src="/images/pioneer_centers/moscow/10/2.jpg" />
                        <? } else if($element['id'] == "almati") { ?>
                            <h2 style="color: white; display: none;padding-left: 50px;">Команда DJ Центра Алматы</h2>
                            <img class="people" src="/images/pioneer_centers/almati/RUS_9623.jpg" />
                            <h2 style="color: white; display: none;padding-left: 50px;">Схема DJ Центра Алматы</h2>
                            <img class="imgMap" src="/css/images/struc/str_almati.png" style="height: 450px;width: 350px;text-align: center;margin: 0 32%;"/>
                            <img class="images image-point_13" src="/images/pioneer_centers/almati/shop_1.jpg" />
                            <img class="images image-point_13" src="/images/pioneer_centers/almati/shop_2.jpg" />
                            <img class="images image-point_14" src="/images/pioneer_centers/almati/base.jpg" />
                            <img class="images image-point_15" src="/images/pioneer_centers/almati/vinyl.jpg" />
                            <img class="images image-point_15" src="/images/pioneer_centers/almati/trening_1.jpg" />
                            <img class="images image-point_16" src="/images/pioneer_centers/almati/trening_2.jpg" />

                        <? } ?>
                    </div>
                    <div class="points-<?=$element['id']?>">
                        <? if($element['id'] == "moscow"){ ?>
                            <i class="point" id="point_1" class="ico"></i>
                            <i class="point" id="point_2" class="ico"></i>
                            <i class="point" id="point_3" class="ico"></i>
                            <i class="point" id="point_4" class="ico"></i>
                            <i class="point" id="point_5" class="ico"></i>
                            <i class="point" id="point_6" class="ico"></i>
                            <i class="point" id="point_7" class="ico"></i>
                            <i class="point" id="point_8" class="ico"></i>
                            <i class="point" id="point_9" class="ico"></i>
                            <i class="point" id="point_10" class="ico"></i>
                            <i class="point" id="point_11" class="ico"></i>
                            <i class="point" id="point_12" class="ico"></i>
                        <? } else if($element['id'] == "almati") { ?>
                            <i class="point" id="point_13" class="ico"></i>
                            <i class="point" id="point_14" class="ico"></i>
                            <i class="point" id="point_15" class="ico"></i>
                            <i class="point" id="point_16" class="ico"></i>
                        <? } ?>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>


