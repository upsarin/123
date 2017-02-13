
<style>
    .hero .head {
        top: 180px;
    }
    @media (max-width: 767px) {
        .section {
            margin-top: -250px;
        }
    }
</style>

<?
    $element = $array['content'][0];
    $filter = array("content_id" => $element['id']);
    $images = Element::SelectAll('files', $filter, null, null);
?>

<div class="js-sticky__wrap" style="height: 480px; margin-bottom: 0px;">
    <header class="hero sticky_hero">
        <div class="image bg-adapt" style="background-image: url(&quot;https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/player/cdj-tour1/hero-tour-header-lg-n.jpg?mh=600&amp;c=1&amp;cw=2000&amp;hash=0D2DFF733EF51C66941EB5413B4D7F2A7723A5C9&quot;);">
        </div>
        <div class="content">
            <div class="container">
                <div class="head">
                    <div class="name">
                        <?=$element['title']?>
                    </div>
                    <div id="fb-root"></div>
                    <h1 class="desc"><?=strip_tags($element['preview_desc'])?></h1>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="section section-product-info">
    <div class="container">

        <!--
            Add class has-serie if this highlight block exists
            Add class has-latest-update if this highlight block exists
        -->

        <div class="info has-serie has-latest-update row">

            <div class="col usp">
                <p><?=$element[$_SESSION['user']['city'] .'_desc']?></p>
            </div>
        </div>

    </div>
</div>

