
<style>
    .hero .head {
        top: 180px;
    }
    @media (max-width: 767px) {
        .section {
            margin-top: -250px;
        }
    }
    .course-cons .bg {
        max-width: 767px;
        background: url(/css/images/cons-bg.png) no-repeat center center;
        width: 100%;
        height: 400px;
        margin: 20px auto;
        background-size: 100% auto;
        position: relative;
    }
    .course-cons ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .course-cons .bg:after {
        content: "";
        max-width: 280px;
        max-height: 280px;
        height: 360px;
        width: 360px;
        background: url(/css/images/round_slider.png) no-repeat center center;
        animation-name: rotation;
        animation-duration: 120s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        opacity: 0.25;
        position: absolute;
        left: 241px;
        top: 42px;
        background-size: 100% 100%;
    }
    .btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
        display: table;
        content: " ";
    }
    .content {
        width: 100%;
        padding-top: 1px;
        position: relative;
        padding-bottom: 50px;
    }
    .content-container {
        max-width: 988px;
        margin: 0 auto;
    }
    .course-cons {
        height: 450px;
        background: #343245;
        padding-top: 10px;
    }
    .course-cons ul li:nth-child(1) .cons-label {
        top: -8px;
    }
    .course-cons ul li:nth-child(2) .cons-label {
        top: 50px;
    }
    .course-cons ul li:nth-child(3) .cons-label {
        top: 116px;
    }
    .course-cons ul li:nth-child(4) .cons-label {
        top: 218px;
    }
    .course-cons ul li:nth-child(5) .cons-label {
        top: 296px;
    }
    .course-cons ul li:nth-child(6) .cons-label {
        top: 366px;
    }
    .course-cons ul li:nth-child(7) .cons-label {
        top: 52px;
        right: 0px;
    }
    .course-cons ul li:nth-child(8) .cons-label {
        top: 116px;
        right: 0px;
    }
    .course-cons ul li:nth-child(9) .cons-label {
        top: 225px;
        right: 0px;
    }
    .course-cons ul li:nth-child(10) .cons-label {
        top: 287px;
        right: 10px;
    }

    .cons-label {
        position: absolute;
        font-size: 13px;
        color: #ffffff;
        font-weight: 500;
        text-transform: uppercase;
    }
</style>

<?
$element = $array['content'][0];
$filter = array("content_id" => $element['id']);
$images = Element::SelectAll('files', $filter, null, null);
?>

<div class="js-sticky__wrap" style="height: 480px; margin-bottom: 0px;">
    <header class="hero sticky_hero">
        <div class="image bg-adapt" style="background-image: url(&quot;/css/images/content/courses/<?=$_SESSION['user']['city']?>/baner/<?=$element['name']?>.jpg?mh=600&amp;c=1&amp;cw=2000&amp;hash=0D2DFF733EF51C66941EB5413B4D7F2A7723A5C9&quot;);">
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
<div class="section section-product-images">
    <div class="container">
        <div class="image-gallery">
            <div class="image img-adapt">
                <a href="#zoom-tool-01" class="btn trigger__open-overlayer zoom-tool" data-classes="light zoom">
                    <img src="/css/images/content/courses/<?=$_SESSION['user']['city']?>/DJ/<?=$element['name']?>.png?h=768&amp;w=1024&amp;hash=DC8ADBBD5251B43ABBB5B9828753D61C42BBB91A" data-full="/css/images/content/courses/<?=$_SESSION['user']['city']?>/DJ/<?=$element['name']?>.png" data-large="/css/images/content/courses/<?=$_SESSION['user']['city']?>/DJ/<?=$element['name']?>.png?h=768&amp;w=1024&amp;hash=DC8ADBBD5251B43ABBB5B9828753D61C42BBB91A" data-small="/css/images/content/courses/<?=$_SESSION['user']['city']?>/DJ/<?=$element['name']?>.png?h=169&amp;w=169&amp;hash=6E4209C34F7A3F9C0486104FFD65B4535165D670" alt="<?=$element['title']?>" class="zoomtool-capable image-switch-target" rel="productView">
                </a>




            </div>


        </div>

    </div>
</div>
<?=$element['special'];?>
<?=$element[$_SESSION['user']['city'] .'_features']?>
<?=$element[$_SESSION['user']['city'] .'_desc']?>


<div class="section section-product-combine bg-dark-1 color-light">
    <div class="container product-combine">
        <h2 class="h2 no-line color-light">РЕКОМЕНДУЕМЫЕ КУРСЫ</h2>

        <div class="row equalizer" data-equalizer-watch=".equalizer-item">
            <div class="col-md-9">

                <div class="row">
                    <?
                    $array['id'] = "101";
                    $array['filter']['!id'] = $element['id'];
                    $array['filter']['alter']['city_courses_array'] = $_SESSION['user']['city'];
                    $array['content']['related'] = Element::GetList($array, $array['filter'], $limit="3");
                    ?>
                    <?if(count($array['content']['related']) > 0){?>
                        <?foreach($array['content']['related'] as $element_related){?>

                            <?
                            $filter_related = array("content_id" => $element_related['id']);
                            $images_related = Element::SelectAll('files', $filter_related, null, null);
                            ?>
                            <div class="col-md-4 equalizer-item" style="height: 239px;">

                                <a href="/courses/detail/<?=$element_related['alias']?>/" class="product clearfix">
                                <span class="visual-wrap">
                                    <img src="/css/images/content/courses/<?=$_SESSION['user']['city']?>/DJ/<?=$element['name']?>.png?h=250&amp;w=400&amp;hash=D222B2974AEEBAAACDA6B5913693BDD85BF118C0" alt="<?=$element_related['title']?>">
                                </span>
                                    <span class="content-wrap">
                                        <h5 class="no-line"><?=$element_related['title']?></h5>

                                </span>
                                </a>
                            </div>
                        <? } ?>
                    <? } ?>
                </div>

            </div>
        </div>

        <a href="/courses/" class="ghostbtn ghostbtn-forw ghostbtn-light"><span class="text">Посмотреть все</span></a>

    </div>
</div>

