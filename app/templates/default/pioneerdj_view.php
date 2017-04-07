<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title><?=$array['title'];?></title>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="<?=$array['keyswords'];?>">
    <meta name="description" content="<?=$array['metakeys'];?>">
    <meta property="og:title" content="<?=$array['title'];?>" />
    <meta property="og:site_name" content="<?=$array['title'];?>" />
    <meta property="og:url" content="https://www.pioneerdjschool.ru/" />
    <meta property="og:description" content="<?=$array['metakeys'];?>" />
    <meta property="og:image" content="https://www.pioneerdjschool.ru/favicon.jpg"/>
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?=$array['title'];?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">



    <link href="/Content/css/fonts-default.css" rel="stylesheet" type="text/css">
    <link href="/css/callback.css" rel="stylesheet" type="text/css">
    <link href="/css/gallery.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/callback.js"></script>
    <script src="/js/gallery.js"></script>
    <script type="text/javascript" id="www-widgetapi-script" src="/js/widgetapi.js" async=""></script>
    <script type="text/javascript" id="www-widgetapi-script" src="/js/additional.js" async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <script src="/Bundles/JsHeader/index-v=BMne-U6Vgal8q3NFbvZfdgOMUnIfzy_RdwlKQDCSjtg1"></script>
    <link href="/Bundles/Style/index-v=H4Yv5sjJRgLgqs-CyBthqH_GrqH4LZtmoI-pAHgdUuw1.css" rel="stylesheet"/>
    <script src="//api-maps.yandex.ru/2.0/?load=package.full,package.route,package.geocode&amp;lang=ru-RU" type="text/javascript"></script>
    <style>
        
        @media (min-width: 551px) and (max-width: 630px){
            .header .topbar .container .logo {
                margin: 0 130px !important;
            }
        }
        .input-wrap {
            margin-top: 60px;
        }
        #errors {
            background: rgba(128, 0, 12, 0.56);
            color: white;
            padding: 7px;
            display: none;
        }
        .form_mess {
            width: 100%;
            padding: 0;
            background: none;
            border: none;
            border-bottom: 4px solid #3a5ee1;
            outline: none;
            font-family: "pdj",Arial,sans-serif;
            font-size: 30px;
            line-height: 40px;
            color: #fff;
            text-transform: uppercase;
        }
        .bg .section {
            padding-top: 50px;
        }
        .selectboxit-option-icon-container {
            display: none !important;
        }
        .selectboxit-text {
            margin-left: 10px !important;
        }
        .selectboxit-arrow-container {
            position: relative !important;
            color: white;
        }
        .select__footer-dark .selectboxit-container .selectboxit-btn .selectboxit-arrow-container i {
            color: white;
        }
        .select__footer-dark {
            top: -5px;
            left: 125px;
            position: relative;
        }
        @media (max-width: 780px){
            select.input__search {
                padding-right: 16% !important;
            }
            .search-border {
                width: 100% !important;
                left: 0px !important;
                right: 0px !important;
            }
            #search__wrap #search-field {
                margin-left: 0px !important;
                margin-right: 0px !important;
            }
        }
        select.input__search:hover{
            cursor:pointer;
        }
        select.input__search option {

            background: #2a2937;
            border:none;
            outline: none;
            font-family: "pdj",Arial,sans-serif;
            line-height: 40px;
            color: white;
            text-transform: uppercase
        }
        select.input__search option:hover {
            background: white;
            color: #2a2937;
            cursor: pointer;
        }
        select.input__search {
            border-radius: 0;

            height: 40px;

            border: 0;
            font-size: 16px;

            -webkit-appearance: none;

            width: 100%;
            padding: 0;
            background: none;
            border: none;
            border-bottom: 4px solid #3a5ee1;
            outline: none;
            font-family: "pdj",Arial,sans-serif;

            line-height: 40px;
            color: #fff;
            text-transform: uppercase;
        }
        .form-send-wrap{
            padding: 40px;
            float: right;
        }
        .form-send:hover {
            background: #fff;
            color: #3a5ee1;
        }
        .form-send {
            background: #3a5ee1;
            padding: 20px;
            font-family: "pdj",Arial,sans-serif;
            font-size: 20px;
            line-height: 40px;
            color: #fff;
            text-transform: uppercase;
        }
        .input-wrap .selectboxit-arrow-container{
            color: white;
            top: -30px;
            position: relative;
            float: right;
        }
        .search-border {
            display: none;
            position: fixed;
            top: 74px;
            width: 59%;
            left: 19%;
            right: 20%;
        }
        #search__wrap #search-field {
            height: 400px;
            position: relative;
            z-index: 3;
            top: 0px;
            background: #2a2937;
            padding: 24px 0 0;
            margin-left: 20px;
            margin-right: 20px;
        }
        @media (min-width: 1001px){
            .header .navbar .container .action-nav {
                top: -10px;
                position: relative;
            }
        }
        @media (max-width: 550px){
            .header .topbar .container .logo {
                margin: 0 15% !important;
            }
        }
        .header .navbar .container .action-nav {
            float: right;
        }
        .icon-vk{
            background: url(/images/50.jpg) !important;
            background-size: cover !important;
        }
        .icon-vk:hover{
            background: url(/images/50hover.jpg) !important;
            background-size: cover !important;
        }
        .item-search {
            width: 200px;
        }
        .select__footer-dark .selectboxit-container .selectboxit-list a .selectboxit-option-icon-container .flag {
            width: 20px;
            display: none;
        }
        .select__footer-dark .selectboxit-container .selectboxit-list a {
            display: block;
            height: auto;
            color: #24f6d6;
            background: none;
            text-transform: uppercase;
            padding: 10px 15px;
            text-indent: 0;
            width: 100%;
            text-align: center;
            font-size: 15px !important;
        }
        .action-nav .select__footer-dark .selectboxit-container .selectboxit-btn {
            background: none;
        }
        @media (max-width: 1000px) and (min-width: 480px) {
            .footer-countryselector.clearfix {
                margin-left: -90px;
            }

            .contact_phone {
                top: -42px !important;
                left: -180px !important;
            }
        }
        @media (min-width: 550px) and (max-width: 767px){
            .select__footer-dark {
                left: 112px !important;
            }
        }
        @media (max-width: 480px){
            .select__footer-dark {
                top: 3px;
                left: 10px !important;
            }
        }
        @media (max-width: 767px){
            .select__footer-dark {
                top: 3px;
                left: 110px;
            }
            .contact_phone {
                top: -34px !important;
                left: -120px !important;
            }
        }
        @media (max-width: 320px){
            .footer-countryselector.clearfix {
                margin-left: 50px !important;
            }
        }
        .hero.hero-compact .btn-holder {
            bottom: 30px;
        }
        .bg-experience {
            background-position: 0px -230px;
        }
        @media (min-width: 1001px){
            .page-is-scrolled .header .navbar, .cookie-is-visible .header .navbar, .cookie-is-visible.page-is-scrolled .page-home .header .navbar {
                height: 55px;
            }
        }
        @media (max-width: 1000px) {
            .header .topbar .container .logo {
                margin: 0 200px;
            }
            .header .topbar .container .action-nav {
                position: absolute;
                right: 7px;
                top: 12px;
                width: 160px;
            }
            .action-nav .footer-countryselector {
                background: none;
                width: 190px;
            }
            .footer-countryselector .country-placeholder {
                width: 100%;
            }
            .bg .section {
                margin-top: 20px;
            }
        }
        @media (max-width: 767px) {
            .header .topbar .container .action-nav {
                top: 0px;
                right: 27px;
            }

            .action-nav .select__footer-dark .selectboxit-container .selectboxit-btn {
                width: 100%;
                height: auto;
                background: none;
            }
        }
        .input-wrap label {
            color: white;
        }
        .hero .ghostbtn.ghostbtn-large.ghostbtn-forw.ghostbtn-light {
            position: relative;
            left: 56%;
            top: 0px;
        }
        @media(max-width: 480px){
            .image.bg-adapt {
                height: 260px;
            }

        }
        .contact_phone {
            color: white;
            font: 14px Helvetica,Arial;
            font-size: 15px;
            position: relative;
            top: 10px;
            left: -220px;
        }

        @media(max-width: 480px) {
            .contact_phone {
                display:none;
            }
            .footer-countryselector.clearfix {
                margin-left: 40px;
            }
        }
    </style>
</head>

<body class="header__experience-mode cookie-is-visible">
<div class="page-home">
    <div class="outer">
        <div class="bg">

            <header class="header outer">
                <div class="topbar">
                    <div class="container">
                        <a href="index.html#" class="btn-offcanvas trigger__offcanvas"><i class="icon-menu"></i></a>
                        <a href="/" class="logo">
                            <img src="/css/images/logo.png" alt="Pioneer DJ School logo" />
                        </a>

                        <div class="action-nav">
                            <ul>
                                <li>
                                    <div class="footer-countryselector clearfix">
                                        <div class="country-placeholder">
                                            <div class="select__styled navigate-select select__footer-dark pos-always-below">
                                                <select style="display: none;">
                                                    <?foreach($_SESSION['user']['city_array'] as $key => $val){?>
                                                        <option data-icon="flag flag-INT" value="<?=($array['name'] == "main") ? "/main/" : "/". $array['name'] ."/"?>?city=<?=$val['id']?>" <?=($_SESSION['user']['city'] == $val['id']) ? 'selected="selected"' : ''?>>
                                                            <span class="country-label"><?=$val['title']?></span>
                                                        </option>
                                                    <? } ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="contact_phone"><?=$_SESSION['user']['city_phone']?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navbar" id="navbar">
                    <div class="container">
                        <a href="/" class="logo">
                            <img src="/css/images/logo.png" alt="Pioneer DJ School logo" />
                        </a>
                        <nav class="main-nav">
                            <ul>
                                <li class="main-nav__home">
                                    <a href="/">Главная</a>
                                </li>
                                <li class="main-nav__products folder__container">
                                    <a href='/news/' >Новости</a>
                                </li>
                                <li>
                                    <a href='/courses/' title='Курсы' >Курсы</a>
                                </li>
                                <li>
                                    <a href='/services/' title='Услуги' >Услуги</a>
                                </li>
                                <li>
                                    <a href='/contacts/' title='Контакты' >Контакты</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="action-nav">
                            <ul>
                                <li class="item-search">
                                    <div class="select__styled navigate-select select__footer-dark pos-always-below">
                                        <select style="display: none;">
                                            <?foreach($_SESSION['user']['city_array'] as $key => $val){?>
                                                <option data-icon="flag flag-INT" value="<?=($array['name'] == "main") ? "/main/" : "/". $array['name'] ."/"?>?city=<?=$val['id']?>" <?=($_SESSION['user']['city'] == $val['id']) ? 'selected="selected"' : ''?>>
                                                    <span class="country-label"><?=$val['title']?></span>
                                                </option>
                                            <? } ?>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <span class="contact_phone"><?=$_SESSION['user']['city_phone']?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>


            <? include $content; ?>

            <div class="footer">
                <!--callback-->

                        <div id="callback-icon">
                            <a href="/callback/">
                                <img src="/css/images/callback.png" />
                            </a>
                        </div>
                        <div id="callback" >
                            <div class="container">
                                <div class="button-wrap">
                                    <a href="/#" class="btn__search trigger__close-overlayer">
                                        <i class="icon-cross"><span class="sr-only">Close</span></i>
                                    </a>
                                </div>
                                <div class="input-wrap">
                                    <span id="callback_errors"></span>
                                    <h4>Оставьте свои контактные данные и мы перезвоним вам в ближайшее время.</h4>
                                    <br/><label for="callback_name">Имя</label><br/>
                                    <input type="text" id="callback_name" class="input__search" data-nothing-entered="Пожалуйста введите свое имя" placeholder="Ваше Имя" />
                                    <br/><label for="callback_phone">Телефон</label><br/>
                                    <input type="text" id="callback_phone" class="input__search" data-nothing-entered="Пожалуйста введите свой телефон" placeholder="Ваш телефон" />

                                    <div class="form-send-wrap">
                                        <a class="callback_send" href="" >Перезвоните мне</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <!--end callback -->
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!--<div class="footer-breadcrumb clearfix">
                                    <ul class="clearfix">
                                        <li><a href="/"><span class="icon-dj"></span><span class="sr-only">DJ</span></a></li>
                                    </ul>
                                </div>-->
                                <?minc::pos("breadcrumbs", null, null, null)?>
                            </div>

                        </div>
                        <div class="row equalizer" data-equalizer-watch=".equalize">
                            <div class="col-md-8">
                                <div class="footer-links equalize">
                                    <div class="row">

                                        <div class="col-md-3 clearfix">
                                            <div class="folder__container">
                                                <p class="item-title">
                                                    <a href='/news/' >Новости</a>
                                                    <span class="folder__trigger"></span>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="col-md-3 clearfix">
                                            <div class="folder__container">
                                                <p class="item-title">
                                                    <a href='/courses/' title='Курсы' >Курсы</a>
                                                    <span class="folder__trigger"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 clearfix">
                                            <div class="folder__container">
                                                <p class="item-title">
                                                    <a href='/services/' >Услуги</a>
                                                    <span class="folder__trigger"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 clearfix">
                                            <div class="folder__container">
                                                <p class="item-title">
                                                    <a href='/contacts/' >Контакты</a>
                                                    <span class="folder__trigger"></span>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-storelocator equalize" style="height: 224px;">
                                    <div class="intro">
                                        <i class="ico"></i> Официальный интернет магазин.
                                    </div>
                                    <div class="form">
                                        <div class="in">

                                            <a href="http://pioneerdjstore.ru" target='_blank' class="btn btn-dark"><span class="text">Перейти</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="footer-elsewhere">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-social">
                                    <ul class="clearfix">
                                        <li>
                                            <a href='<?=$_SESSION['user']['vk_link']?>' class='icon-vk' target='_blank' ></a>
                                        </li>
                                        <li>
                                            <a href='<?=$_SESSION['user']['instagram_link']?>' class='icon-instagram' target='_blank' >Instagram</a>
                                        </li>
                                        <li>
                                            <a href='<?=$_SESSION['user']['facebook_link']?>' class='icon-facebook' target='_blank' >Facebook</a>
                                        </li>
                                        <li>
                                            <a href='<?=$_SESSION['user']['youtube_link']?>' class='icon-youtube' target='_blank' >YouTube</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-legal">
                                    <strong>&copy; Pioneer DJ School</strong>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-corporate">
                                    <strong> </strong>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div id="zoom-tool-01" class="zoomtool">
            <div class="zoomtool__topbar">
                <div class="outer">
                    <div class="container">
                        <div class="zoomtool__scale clearfix">
                            <a href="/#" class="scale-trigger zoom-out"><i class="ico icon-min"></i></a>
                            <div class="slider-wrap">
                                <div class="slider"></div>
                            </div>
                            <a href="/#" class="scale-trigger zoom-in"><i class="ico icon-plus"></i></a>
                        </div>
                        <div class="zoomtool__actions">
                            <a href="/#" class="btn__action download-image"><i class="ico icon-download"></i></a>

                        </div>
                        <a href="/#" class="btn__action close trigger__close-overlayer"><i class="ico icon-cross"></i></a>
                    </div>
                </div>
            </div>
            <div class="zoomtool__canvas">
                <div class="zoomtool__holder">
                    <div class="zoomtool__element">
                        <img src="" />
                    </div>
                </div>
            </div>
            <div class="zoomtool_more-images">
                <div class="in clearfix">
                    <div class="image-gallery-thumbs folder__container zoomtool">
                        <span class="folder__trigger"></span>
                        <div class="wrap">
                            <div class="folder__content">
                                <div class="list">
                                    <div class="items target">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-border" style="">
        <div id="search__wrap">
            <div id="search-field">
                <div class="outer">
                    <div class="container">
                        <div class="input-wrap">
                            <span id="errors"></span>

                            <? if($array['content_type'] == "detail" && ($array['model'] == "courses" || $array['model'] == "services")){
                                $cur_course_id = $array['content'][0]['id'];
                                if( $array['model'] == "courses"){
                                    $courses['id'] = "101";
                                    $courses['filter']['alter']['city_courses_array'] = $_SESSION['user']['city'];
                                    $btn_text = "Записаться";
                                } else if( $array['model'] == "services"){
                                    $courses['id'] = "102";
                                    $courses['filter']['alter']['city_array'] = $_SESSION['user']['city'];
                                    $btn_text = "Сделать заявку";
                                } else {
                                    $courses['id'] = "101";
                                    $courses['filter']['alter']['city_courses_array'] = $_SESSION['user']['city'];
                                    $btn_text = "Записаться";
                                }
                            } else {
                                $courses['id'] = "101";
                                $courses['filter']['alter']['city_courses_array'] = $_SESSION['user']['city'];
                                $btn_text = "Записаться";
                                $cur_course_id = 1;
                            } ?>
                            <select class="input__search" id="form_course">
                                <?
                                $courses['content']['courses'] = Element::GetList($courses, $courses['filter']);
                                ?>
                                <?foreach($courses['content']['courses'] as $courses_el){ ?>
                                    <option val="<?=$courses_el['id']?>" <?=($cur_course_id == $courses_el['id']) ? "selected='selected'" : ""?>><?=$courses_el['title']?></option>
                                <? } ?>
                            </select>
                            <span id="" class="selectboxit-arrow-container" unselectable="on"><i id="" class="selectboxit-arrow icon-arrow-f-d" unselectable="on"></i></span>
                            <br/><label for="form_name">Имя</label><br/>
                            <input type="text" id="form_name" class="input__search" data-nothing-entered="Пожалуйста введите свое имя" placeholder="Ваше Имя" />
                            <br/><label for="form_phone">Телефон</label><br/>
                            <input type="text" id="form_phone" class="input__search" data-nothing-entered="Пожалуйста введите свой телефон" placeholder="Ваш телефон" />

                            <div class="form-send-wrap">
                                <a class="form-send" href="" ><?=$btn_text?></a>
                            </div>
                        </div>
                        <div class="button-wrap">
                            <a href="/#" class="btn__search trigger__close-overlayer">
                                <i class="icon-cross"><span class="sr-only">Close</span></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="/Bundles/JsFooter/index-v=t1G3GmOJ5JWe-BQ9xJkaVJPxC4hHw974rCWhubqJaZE1"></script>
</body>
</html>