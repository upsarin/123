<style>
    .page-home .header .navbar, .cookie-is-visible .page-home .header .navbar {
        display: block;
        width: 100%;
        background: #2a2937;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1;
        -webkit-transition: all 300ms;
        -moz-transition: all 300ms;
        -ms-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
    }
    .js-sticky__wrap {
        position: relative;
        margin-top: 50px;
    }
    .sr-only {
        position: relative;
        width: 450px;
        height: 50px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0,0,0,0);
        border: 0;
    }
</style>

<div class="js-sticky__wrap" style="height: 100px;">
    <header class="simple-header sticky_simple-header">
        <div class="content">
            <div class="container">
                <h1 class="sr-only">DJ Школа</h1>
            </div>
        </div>
    </header>

</div>
<div class="section">
    <div class="section category-toolbar">
        <div class="container">
            <p class="">
            </p><p><h3 class="quote"><span class="ellipsis">Хочешь быть настоящим Dj - Мы поможем!<br>Просто запишись на пробное бесплатное занятие</span></h3>
            </p>
            <p><span class="ghostbtn ghostbtn-large ghostbtn-forw ghostbtn-light"><span class="text" style="color: black;">Подать заявку</span></span></p>
        </div>
    </div>

    <div class="section section-productcat-products">
        <div class="container">
            <div class="product-grid">
                <ul class="product-grid-list equalizer" data-equalizer-watch=".in">

                    <pre>
                        <?print_r($array['content']['content'][0]);?>
                    </pre>
                    <? foreach($array['content']['content'] as $element){ ?>
                    <li class="product-grid-item">
                        <a class="product" href="/en/product/player/cdj-tour1/black/overview/">
                            <div class="in" style="height: 419px;">
                                <div class="head">
                                    <div class="image">
                                        <img src="/css/images/content/courses/<?=$city?>/DJ/<?=$element['name']?>.png?h=240&amp;w=320&amp;hash=7EE269C66BB9D6C0D8EAADA73395CE0BB00DCEB0" alt="CDJ-TOUR1">
                                    </div>
                                    <div class="product-info">
                                    </div>
                                </div>
                                <div class="body">
                                    <h2 class="name">CDJ-TOUR1</h2>
                                    <p class="desc">TOUR system multi-player with fold-out touch screen</p>
                                    <p>Headline act</p>

                                    <p class="longdesc">Tour from festival to arena with the CDJ-TOUR1 and perform at the highest level. Together with the DJM-TOUR1 mixer you'll play the main stag...</p>
                                </div>
                            </div>
                            <div class="foot">



                                        <span class="tilebtn">
                                            <span class="ico icon-tilebtn-more">
                                                <span class="sr-only">
                                                    More
                                                </span>
                                            </span>
                                        </span>
                            </div>
                        </a>
                    </li>
                    <? } ?>
                </ul>
            </div>
        </div>
    </div>

</div>