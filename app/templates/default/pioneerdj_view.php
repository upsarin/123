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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" id="www-widgetapi-script" src="/js/widgetapi.js" async=""></script>
        <script type="text/javascript" id="www-widgetapi-script" src="/js/additional.js" async=""></script>
        <script src="https://www.youtube.com/player_api"></script>
        <script src="/Bundles/JsHeader/index-v=BMne-U6Vgal8q3NFbvZfdgOMUnIfzy_RdwlKQDCSjtg1"></script>
		<link href="/Bundles/Style/index-v=H4Yv5sjJRgLgqs-CyBthqH_GrqH4LZtmoI-pAHgdUuw1.css" rel="stylesheet"/>
        <script src="//api-maps.yandex.ru/2.0/?load=package.full,package.route,package.geocode&amp;lang=ru-RU" type="text/javascript"></script>
        <style>
            .header .navbar .container .action-nav {
                float: right;
                display: none;
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
                                        <a href="index.html#search__wrap" class="site-search-toggle trigger__open-overlayer" style="visibility: hidden">
                                            <i class="icon-search">
                                                <span class="sr-only">Search</span>
                                            </i>
                                        </a>
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
                                        <a href="#search__wrap" class="site-search-toggle trigger__open-overlayer">
                                            <i class="icon-search"></i>
                                        </a>
                                    </li>
                                                    </ul>
                            </div>
                        </div>
                    </div>
                </header>
                    <?
                        $_SESSION['user']['city'] = "moscow";
                    ?>

                    <? include $content; ?>

                    <div class="footer">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <!--<div class="footer-breadcrumb clearfix">
                                        <ul class="clearfix">
                                            <li><a href="/"><span class="icon-dj"></span><span class="sr-only">DJ</span></a></li>
                                        </ul>
                                    </div>-->
                                    <?minc::pos("breadcrumbs", null, null, null)?>
                                 </div>
                    <div class="col-md-4">

                        <div class="footer-countryselector clearfix">
                            <div class="country-placeholder">
                                <div class="select__styled navigate-select select__footer-dark pos-always-above">
                                    <select style="display: none;">
                                            <option data-icon="flag flag-INT" value="/moscow/"
                                                    selected="selected">
                                                <span class="country-label">Moscow</span>
                                            </option>
                                            <option data-icon="flag flag-INT" value="/nsk/">
                                                <span class="country-label">Novosibirsk</span>
                                            </option>
                                            <option data-icon="flag flag-INT" value="/almati/">
                                                <span class="country-label">Almaty</span>
                                            </option>
                                    </select>
                                </div>
                            </div>
                        </div>
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

                                                <a href="http://pioneerdjstore.ru" class="btn btn-dark"><span class="text">Перейти</span></a>
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
                                                        <a href='https://plus.google.com/+pioneerdjglobal/posts' class='icon-googleplus' target='_blank' >Google</a>
                                                    </li>
                                                    <li>
                                                        <a href='https://www.instagram.com/pioneerdjglobal/' class='icon-instagram' target='_blank' >Instagram</a>
                                                    </li>
                                                    <li>
                                                        <a href='https://twitter.com/PioneerDJglobal' class='icon-twitter' target='_blank' >Twitter</a>
                                                    </li>
                                                    <li>
                                                        <a href='https://www.facebook.com/pioneer.dj.global' class='icon-facebook' target='_blank' >Facebook</a>
                                                    </li>
                                                    <li>
                                                        <a href='https://www.youtube.com/user/pioneerdjglobal' class='icon-youtube' target='_blank' >YouTube</a>
                                                    </li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="footer-legal">
                                            <strong>&copy; Pioneer DJ</strong>

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
            <div style="display: none;">
        <div id="search__wrap">
            <div id="search-field">
                <div class="outer">
                    <div class="container">
                        <div class="input-wrap">
                            <input type="text" class="input__search" data-no-results="Oops nothing can be found" data-nothing-entered="Please enter a search query"/>
                            <a href="/#" class="trigger_clear-text btn__clear-text"><span class="ico-element icon-clear-cross"></span>Clear entry</a>
                        </div>
                        <div class="button-wrap">
                            <a href="/#" class="btn__search trigger__close-overlayer">
                                <i class="icon-cross"><span class="sr-only">Close</span></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="loading-icon-search"></span>
            <div id="result-wrap">
                <div class="outer outer-search-content">
                    <div class="container">
                        <div class="boxed-content">
                            <h3>Top results</h3>
                            <ul><!-- POPULATED WITH JAVASCRIPT --></ul>
                            <p class="button-wrap">
                                <a href="/#" id="view__all" class="btn btn-border trigger__searchpage disabled" data-search-page="/en/search-results/?q=">
                                    <span class="text">See all results</span>
                                </a>
                            </p>
                            <p>Didn’t find what you’re looking for? Maybe use fewer words or a more general search term.<br />If you still have no luck you can contact our <a href="support/contact/index.html">customer service</a></p>
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