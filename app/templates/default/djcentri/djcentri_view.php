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

</style>

<div class="slider">
    <div id="close">X</div>
    <div id="prev"></div>
    <div id="next"></div>
    <div class="slider-container">

    </div>
</div>
<div class="section">
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
                            <img class="people" src="/images/pioneer_centers/moscow/FAN_2939.jpg" />
                            <img class="imgMap" src="/css/images/struc/str_msk.png" />
                            <img class="images image-point_11" src="/images/pioneer_centers/moscow/1/1.jpg" />
                            <img class="images image-point_11" src="/images/pioneer_centers/moscow/1/2.jpg" />
                            <img class="images image-point_11" src="/images/pioneer_centers/moscow/1/3.jpg" />

                        <? } else if($element['id'] == "almati") { ?>
                            <img class="people" src="/images/pioneer_centers/almati/RUS_9623.jpg" />
                            <img class="imgMap" src="/css/images/content/index/services/rent.jpg" />

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


