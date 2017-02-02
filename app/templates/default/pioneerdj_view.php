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




        <script type="text/javascript" id="www-widgetapi-script" src="/js/widgetapi.js" async=""></script>
        <script src="https://www.youtube.com/player_api"></script>
        <script src="/Bundles/JsHeader/index-v=BMne-U6Vgal8q3NFbvZfdgOMUnIfzy_RdwlKQDCSjtg1"></script>
		<link href="/Bundles/Style/index-v=H4Yv5sjJRgLgqs-CyBthqH_GrqH4LZtmoI-pAHgdUuw1.css" rel="stylesheet"/>
		<link href="/Content/css/fonts-default.css" rel="stylesheet" type="text/css">
	</head>
    <body class="header__experience-mode cookie-is-visible">
        <div class="page-home">
            <div class="outer">
                <div class="bg">

                <header class="header outer">
                    <div class="topbar">
                        <div class="container">
                            <a href="index.html#" class="btn-offcanvas trigger__offcanvas"><i class="icon-menu"></i></a>
                                    <a href="index.html" class="logo">
                                        <img src="/Content/img/pioneer-dj.png" alt="Pioneer DJ School logo" />
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
                                        <img src="/Content/img/pioneer-dj.png" alt="Pioneer DJ School logo" />
                                    </a>
                            <nav class="main-nav">
                                    <ul>
                                        <li class="main-nav__home">
                                                <a href="/">Home</a>
                                        </li>
                                                <li class="main-nav__products folder__container">
                                                    <a href='/product/' >Products</a>
                                                    <span class="folder__trigger"></span>
                                                    <div class="folder__content">
                                                        <ul>
                                                                <li>
                                                                    <a href='/product/player/' >  <span class="image">
                                                                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/players.png" alt="players" />
                                                                        </span>
                                                                                <span class="text">
                Players                                                                </span>
                </a>                                                </li>
                                                                <li>
                <a href='/product/mixer/' >                                                        <span class="image">
                                                                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/mixers.png" alt="mixers" />
                                                                        </span>
                                                                                <span class="text">
                Mixers                                                                </span>
                </a>                                                </li>
                                                                <li>
                <a href='/product/controller/' >                                                        <span class="image">
                                                                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/controllers.png" alt="controllers" />
                                                                        </span>
                                                                                <span class="text">
                Controllers                                                                </span>
                </a>                                                </li>
                                                                <li>
                <a href='/product/headphones/' >                                                        <span class="image">
                                                                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/headphones.png" alt="Headphones" />
                                                                        </span>
                                                                                <span class="text">
                Headphones                                                                </span>
                </a>                                                </li>
                                                                <li>
                <a href='/product/' >                                                        <span class="image">
                                                                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/other.png" alt="other" />
                                                                        </span>
                                                                                <span class="text">
                More                                                                </span>
                </a>                                                </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                    <li>
                                                        <a href='/news/' title='News' >News</a>
                                                    </li>
                                                    <li>
                                                        <a href='/support/' title='Support' >Support</a>
                                                    </li>
                                                    <li>
                                                        <a href='/shops/' title='Where to Buy' >Find a store</a>
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

                    <? include $content; ?>

                    <div class="footer">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="footer-breadcrumb clearfix">
                    <ul class="clearfix">
                        <li><a href="/"><span class="icon-dj"></span><span class="sr-only">DJ</span></a></li>
                    </ul>
                </div>
                                </div>
                                <div class="col-md-4">

                <div class="footer-countryselector clearfix">
                    <div class="country-placeholder">
                        <div class="select__styled navigate-select select__footer-dark pos-always-above">
                            <select style="display: none;">
                                    <option data-icon="flag flag-INT" value="/en/"
                                            selected="selected">
                                        <span class="country-label">Global</span>
                                    </option>
                                    <option data-icon="flag flag-JP" value="/ja-jp/">
                                        <span class="country-label">日本</span>
                                    </option>
                                    <option data-icon="flag flag-ES" value="/es-es/">
                                        <span class="country-label">Espa&#241;a</span>
                                    </option>
                                    <option data-icon="flag flag-US" value="/en-us/">
                                        <span class="country-label">USA</span>
                                    </option>
                                    <option data-icon="flag flag-GB" value="/en-gb/">
                                        <span class="country-label">United Kingdom</span>
                                    </option>
                                    <option data-icon="flag flag-FR" value="/fr-fr/">
                                        <span class="country-label">France</span>
                                    </option>
                                    <option data-icon="flag flag-DE" value="/de-de/">
                                        <span class="country-label">Deutschland</span>
                                    </option>
                                    <option data-icon="flag flag-IT" value="/it-it/">
                                        <span class="country-label">Italia</span>
                                    </option>
                                    <option data-icon="flag flag-NL" value="/nl-nl/">
                                        <span class="country-label">Nederland</span>
                                    </option>
                                    <option data-icon="flag flag-PT" value="/pt-pt/">
                                        <span class="country-label">Portugal</span>
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
                                                <div class="col-md-6 clearfix">
                                                    <div class="folder__container">
                                                            <p class="item-title">
                                                                <a href='/product/' >Products</a>
                                                                <span class="folder__trigger"></span>
                                                            </p>
                                                            <div class="folder__content">
                                                                    <ul class="clearfix">
                                                                        <li>
                                                                            <p class="item-subtitle">
                                                                         </p>
                                                                        <ul class="double-list clearfix">
                                                                                <li><a href='/product/player/' >DJ player</a></li>
                                                                                <li><a href='/product/effector/' >Remix station</a></li>
                                                                                <li><a href='/product/mixer/' >DJ mixer</a></li>
                                                                                <li><a href='/product/headphones/' >Headphones</a></li>
                                                                                <li><a href='/product/controller/' >DJ controller</a></li>
                                                                                <li><a href='/product/monitor-speakers/' >Monitor speakers</a></li>
                                                                                <li><a href='/product/all-in-one-system/' >All-in-one DJ system</a></li>
                                                                                <li><a href='/product/production/' >Production</a></li>
                                                                                <li><a href='/product/accessories/' >Accessories</a></li>
                                                                                <li><a href='/product/turntable/' >Turntable</a></li>
                                                                                <li><a href='/product/software/' >DJ software</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 clearfix">
                                                    <div class="folder__container">
                                                            <p class="item-title">
                                                                <a href='/support/' >Support</a>
                                                                <span class="folder__trigger"></span>
                                                            </p>
                                                            <div class="folder__content">
                                                                <ul class="clearfix">
                                                                        <li><a href='/support/contact/' title='Contact' >Contact</a></li>
                                                                        <li><a href='/support/documents/' >Manuals</a></li>
                                                                        <li><a href='/support/software/' >Software & firmware</a></li>
                                                                        <li><a href='/support/software-information/' >Software information</a></li>
                                                                        <li><a href='http://faq.pioneerdj.com' class='lnk-external' target='_blank' >FAQ</a></li>
                                                                        <li><a href='http://forums.pioneerdj.com/home' class='lnk-external' target='_blank' >Forum</a></li>
                                                                        <li><a href='/landing/pioneer-dj-certified/' >Certified Program</a></li>
                                                                </ul>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 clearfix">
                                                        <div class="folder__container">
                                                            <p class="item-title">
                                                                <a href='/news/' title='News' >News</a>
                                                                <span class="folder__trigger"></span>
                                                            </p>
                                                        </div>
                                                        <div class="folder__container">
                                                            <p class="item-title">
                                                                <a href='/shops/' >Where to buy</a>
                                                                <span class="folder__trigger"></span>
                                                            </p>
                                                        </div>
                                                        <div class="folder__container">
                                                            <p class="item-title">
                                                                <a href='/company/company-info/' >About us</a>
                                                                <span class="folder__trigger"></span>
                                                            </p>
                                                                <div class="folder__content">
                                                                    <ul class="clearfix">
                                                                            <li><a href='/company/company-info/' >Company info</a></li>
                                                                            <li><a href='/corporate-contact/' >Corporate contact</a></li>
                                                                    </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-storelocator equalize" style="height: 224px;">
                                        <div class="intro">
                                            <i class="ico"></i> Find a local store or an online shop.
                                        </div>
                                        <div class="form">
                                            <div class="in">

                                                <a href="/shops/" class="btn btn-dark"><span class="text">Find authorised shops</span></a>
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
                                            <ul class="clearfix">
                                                    <li>
                <a href='http://www.kuvo.com/' target='_blank' >                                                <span class="image"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/kuvo-org.png" /></span>
                KUVO</a>                                    </li>
                                                    <li>
                <a href='http://www.pioneerdjradio.com/' target='_blank' >                                                <span class="image"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/dj-radio-org.png" /></span>
                Radio</a>                                    </li>
                                                    <li>
                <a href='http://www.djsounds.com/' target='_blank' >                                                <span class="image"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/dj-sounds-org.png" /></span>
                DJsounds</a>                                    </li>
                                                    <li>
                <a href='http://www.pioneerdjinibiza.com' target='_blank' >                                                <span class="image"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/ibiza-org.png" /></span>
                Ibiza</a>                                    </li>
                                                    <li>
                <a href='http://www.pioneerproaudio.com' target='_blank' >                                                <span class="image"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/pro-audio-gold.png" /></span>
                Pioneer Pro Audio</a>                                    </li>
                                            </ul>
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
                                            <ul>
                                                    <li>
                                                        <a href='/company/privacy-policy/' >privacy policy</a>
                                                    </li>
                                                    <li>
                                                        <a href='/company/terms-of-use/' >terms of use</a>
                                                    </li>
                                                    <li>
                                                        <a href='/company/trademarks/' >trademarks</a>
                                                    </li>
                                            </ul>
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