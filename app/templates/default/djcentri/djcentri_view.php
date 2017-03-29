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
</style>


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
                            <img src="/css/images/content/index/services/rent.jpg" />
                            <img class="imgMap" src="/css/images/struc/str_msk.jpg" />
                        <? } else if($element['id'] == "almati") { ?>
                            <img src="/css/images/content/index/services/rent.jpg" />
                            <img class="imgMap" src="/css/images/content/index/services/rent.jpg" />
                        <? } ?>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>


