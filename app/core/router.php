<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Router
{

	static function start($page_name = NULL)
	{
		if($page_name != NULL){
			$_SERVER['REQUEST_URI'] = '/'. $page_name .'/';
		}
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		
		if($routes[1] == 'Ajax'){
					if ( !empty($routes[2]) ){	
						$page = $routes[2];
					} else {
						$page = "main";
					}
					$page_info = Controller()->showPage($page);
					if($page_info['name'] == $page){
						
						 if(isset($routes[3]) && !empty($routes[3]) && (substr($routes[3], 0, 1) != "?")){
							
								
							if($routes[3] == "detail"){ 
								$page_info['action'] = $routes[3];
								$page_info['content_type'] = "detail";
								if(isset($routes[4]) && !empty($routes[4])){
									$page_info['content']['alias'] = $routes[4];
								}
							} else if($routes[2] == "personal" || $routes[2] == "administrator"){
								$page = $routes[3];
								
								
								$page_info = Controller()->showPage($page);
								$page_info['action'] = "index"; 
								if(isset($routes[4]) && !empty($routes[4]) && (substr($routes[4], 0, 1) != "?")){
									
									if($routes[4] == "detail"){
										$page_info['action'] = $routes[4];
										$page_info['content_type'] = "detail";
										if(isset($routes[5]) && !empty($routes[5])){
											$page_info['content']['alias'] = $routes[5];
										} 
									} else {
										$page_info['action'] = $routes[4];
									}
								}
							} else {
								$page_info['action'] = $routes[3];
							}
								
							
						 } else {
							$page_info['action'] = "index";
						 }

						
						$obj->$page_info['action']($page_info);
						
					} else { 
						Router::ErrorPage404();
					}			
		} else {
		// получаем имя контроллера
			if($routes[1] == "admin"){
				$page = "administrator";
			} else if ( !empty($routes[1]) ){	
				$page = $routes[1];
			} else {
				$page = "main";
			}
				
					$obj = new Controller();
					$page_info = $obj->showPage($page);
					if($page_info['name'] == $page){
						
						 if(isset($routes[2]) && !empty($routes[2]) && (substr($routes[2], 0, 1) != "?")){
							
								
							if($routes[2] == "detail"){ 
								$page_info['action'] = $routes[2];
								$page_info['content_type'] = "detail";
								if(isset($routes[3]) && !empty($routes[3])){
									$page_info['content']['alias'] = $routes[3];
								}
							} else if($routes[1] == "personal" || $routes[1] == "administrator"){
								$page = $routes[2];
								
								$obj = new Controller();
								$page_info = $obj->showPage($page);
								$page_info['action'] = "index"; 
								if(isset($routes[3]) && !empty($routes[3]) && (substr($routes[3], 0, 1) != "?")){
									
									if($routes[3] == "detail"){
										$page_info['action'] = $routes[3];
										$page_info['content_type'] = "detail";
										if(isset($routes[4]) && !empty($routes[4])){
											$page_info['content']['alias'] = $routes[4];
										} 
									} else {
										$page_info['action'] = $routes[3];
									}
								}
							} else {
								$page_info['action'] = $routes[2];
							}
								
							
						 } else {
							$page_info['action'] = "index";
						 }

						$obj->$page_info['action']($page_info);	
						
					} else { 
						Router::ErrorPage404();
					}
				
		// получаем имя экшена
		}
	}

	static function ErrorPage404()
	{
		?>
		<html lang="ru">
<head>

    <meta charset="utf-8">

    <title><?=$array['title']?></title>
	
	
	
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--<meta http-equiv="Cache-Control" content="no-cache">-->
    <meta name="description" content="<?=$array['metakeys']?>">
	<meta name="keywords" content="<?=$array['keywords']?>">
	
    <meta name="author" content="">



    <link rel="stylesheet" href="/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css?v=1.0">

    <link rel="stylesheet" href="/css/font-awesome.css?v=1.0">

    <link rel="stylesheet" type="text/css" href="/css/slick.css">

    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

    <link rel="stylesheet" href="/css/style.css?v=1.0">

    
	<!--Javascript-->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/js/bootstrap-select.js"></script>

    <script type="text/javascript" src="/js/slick.min.js"></script>
	<script src="//api-maps.yandex.ru/2.0/?load=package.full,package.route,package.geocode&lang=ru-RU" type="text/javascript"></script>
    <script type="text/javascript" src="/js/main.js"></script>
	<style>
		.bot-menu-list,a {
			display:block;
		}
		
		
	
		.contacts-container {
			color: #222;
			background: none;
			position: relative;
			overflow: hidden;
			height: 200px;
		}
		.page-image {
			position: absolute;
			width: 100%;
			overflow: hidden;
			height: 100%;
		}
	</style>
	



</head>

<body>
    
    <div class="wrapper">
        
        		
	<div class="page-image contacts"><img src="/css/images/header_banner_1.png"/></div>
        <header class="header navbar navbar-white navbar-static-top">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="contacts-block">

                    <div class="btn-group bootstrap-select">
					
						<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="">
									<? if($_SESSION['user']['city'] == "moscow"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Moscow</span><span class="phone">+7 916 942-52-48</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else if($_SESSION['user']['city'] == "peter"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">St. Petersburg</span><span class="phone">+7 812 984-91-44</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else if($_SESSION['user']['city'] == "nsk"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Novosibirsk</span><span class="phone">+7 913 015-90-09</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else if($_SESSION['user']['city'] == "almati"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Almaty</span><span class="phone">+7 747 336-22-02</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else { ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Moscow</span><span class="phone">+7 916 942-52-48</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } ?>
								
							
						</button>
						<div class="dropdown-menu open" role="combobox">
							<ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
								<li data-original-index="0" class="cityChoise" id="moscow">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">Moscow</span><span class="phone">+7 916 942-52-48</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
								<li data-original-index="1" class="cityChoise" id="peter">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">St. Petersburg</span><span class="phone">+7 812 984-91-44</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
								<li data-original-index="2" class="selected" class="cityChoise" id="nsk">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">Novosibirsk</span><span class="phone">+7 913 015-90-09</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
								<li data-original-index="3" class="cityChoise" id="almati">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">Almaty</span><span class="phone">+7 747 336-22-02</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
							</ul>
						</div>
				</div>

                </div>
                    <div class="navbar-brand">
                        <a href="/" class="logo-image"><img src="/css/images/logo.png"></a>
                    </div>
                </div>

                <div class="navbar-container header-container">
                    <nav class="collapse navbar-collapse menu">
                        <ul class="nav navbar-nav ">
                            
                            
                            <li><a href="/news"><span>Новости</span></a></li>
                            
                            <li><a href="/courses"><span>Курсы</span></a></li>
                            
                            <li><a href="/services"><span>Услуги</span></a></li>
                            
                            <li><a href="/contacts"><span>Контакты</span></a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>		
		<div class="content-container-wrapper contacts-container">
            <div class="content-container">
                <div class="content">

                    <h2 class="block-header">404 ошибка, извините, страница не найдена.</h2>
                    
                </div>
            </div>
        </div>
        	
        <footer class="footer">
            <div class="footer-row">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-8 breadcrumb">
                            <div class="footer-block clearfix">
                                <ul>
                                    <li><a href="/"><span class="main-page-logo">&nbsp;</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 language-select">
                            <div class="footer-block clearfix">
                                <div class="btn-group bootstrap-select">
								<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Moscow">
									<span class="filter-option pull-left">
										<span class="language city_value">
										<?
											if($_SESSION['user']['city'] == "moscow"){
												echo "Moscow";
											} else if($_SESSION['user']['city'] == "peter"){
												echo "Saint Petersburg";
											} else if($_SESSION['user']['city'] == "nsk"){
												echo "Novosibirsk";
											} else if($_SESSION['user']['city'] == "almati"){
												echo "Almaty";
											} else {
												echo "Moscow";
											}
										?>
										</span>
									</span>&nbsp;
									<span class="bs-caret">
										<span class="caret"></span>
									</span>
								</button>
									<div class="dropdown-menu open" role="combobox">
										<ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
											<li data-original-index="0" class="cityChoise" id="moscow">
												<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"  class="cityChoise" id="moscow">
													<span class="language">Moscow</span>
													<span class="glyphicon glyphicon-ok check-mark"></span>
												</a>
											</li>
											<li data-original-index="1" class="cityChoise" id="peter">
												<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false" class="cityChoise" id="peter">
													<span class="language">Saint Petersburg</span>
													<span class="glyphicon glyphicon-ok check-mark"></span></a>
											</li>
											<li data-original-index="2" class="cityChoise" id="nsk">
												<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"  class="cityChoise" id="nsk">
													<span class="language cityChoise" id="nsk">Novosibirsk</span>
													<span class="glyphicon glyphicon-ok check-mark"></span></a>
											</li>
											<li data-original-index="3" class="cityChoise" id="almati">
												<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
													<span class="language">Almaty</span>
													<span class="glyphicon glyphicon-ok check-mark"></span></a>
											</li>
										</ul>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 site-map">
                            <div class="footer-block clearfix">
                                <ul class="categories">
                                    
                                    <li class="categories">
                                        <a class="categories" href="/contacts/"><span>DJ ЦЕНТРЫ</span></a>
                                        <a class="button-expand collapse-list" href="javascript:void(0)"></a>
                                        
                                        <ul class="pages">
                                            <li><a href="/contacts/" id="moscow">Pioneer DJ Moscow</a></li>
                                            
                                            <!--<li><a href="/contacts/" id="peter">Pioneer DJ St. Petersburg</a></li>-->
                                            
                                            <li><a href="/contacts/" id="nsk">Pioneer DJ Novosibirsk</a></li>
                                            
                                            <li><a href="/contacts/" id="almati">Pioneer DJ Almaty</a></li>
                                            
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="categories">
                                        <a class="categories" href="/news"><span>НОВОСТИ</span></a>
                                        <a class="button-expand collapse-list" href="javascript:void(0)"></a>
                                        
                                    </li>
                                    
                                    <li class="categories">
                                        <a class="categories" href="/courses"><span>КУРСЫ</span></a>
                                        <a class="button-expand collapse-list" href="javascript:void(0)"></a>
                                        
                                    </li>
                                    
                                    <li class="categories">
                                        <a class="categories" href="/services"><span>УСЛУГИ</span></a>
                                        <a class="button-expand collapse-list" href="javascript:void(0)"></a>
                                        
                                    </li>
                                    
                                    <li class="categories">
                                        <a class="categories" href="/contacts"><span>КОНТАКТЫ</span></a>
                                        <a class="button-expand collapse-list" href="javascript:void(0)"></a>
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 shop-info">
                            <div class="footer-block clearfix">
                                <div class="shop-label"><span>Официальный интернет магазин</span></div>
                                <a class="square-button" target="_blank" href="http://pioneerdjstore.ru"><em><span><i>ПЕРЕЙТИ</i></span></em></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <ul class="nav nav-icons navbar-nav navbar-nav-right social-buttons">
				<?if($_SESSION['user']['city'] == "moscow"){ ?>
                    <li><a href="https://vk.com/pioneerdjmsk" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
					<li><a href="https://www.facebook.com/pioneerdjmsk" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="https://www.instagram.com/pioneerdjmsk/" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
				<? } else if($_SESSION['user']['city'] == "peter"){ ?>
					<li><a href="https://vk.com/pioneerdjspb" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
					<li><a href="https://www.facebook.com/pioneerdjspb" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="https://www.instagram.com/pioneerdjspb/" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
				<? } else if($_SESSION['user']['city'] == "nsk"){ ?>
					<li><a href="https://vk.com/pioneerdjnsk" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
					<li><a href="https://www.facebook.com/PioneerDJnsk/" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="https://www.instagram.com/pioneerdjnsk/" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
				<? } else if($_SESSION['user']['city'] == "almati"){ ?>
					<li><a href="https://vk.com/pioneerdjalmaty" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
					<li><a href="https://www.facebook.com/pioneerdjalmaty/" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="https://www.instagram.com/pioneerdjalmaty/" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
				<? } ?>
                    
                    
                    <li><a href="https://www.youtube.com/pioneerdjschoolru" target="_blank" class="btn btn-social-icon btn-youtube-play"><span class="fa fa-youtube-play"></span></a></li>
                </ul>
                <span class="copyright">© Pioneer DJ</span>
				
				<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=42358839&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/42358839/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="42358839" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42358839 = new Ya.Metrika({
                    id:42358839,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42358839" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
            </div>
        </footer>
    </div>






<script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script>
<div id="vk_community_messages" style="height: 80px; width: 60px; position: fixed; z-index: 10000; right: 20px; bottom: 0px; background: none;">
<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
$(document).ready(function(){
VK.Widgets.CommunityMessages("vk_community_messages", 123681111, {});
});
</script>
</div>


<input type="hidden" value="peter" id="peter_value" />
<input type="hidden" value="moscow" id="moscow_value" />
<input type="hidden" value="nsk" id="nsk_value" />
<input type="hidden" value="almati" id="almati_value" />

</body></html>
		
		<?
		// $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        // header('HTTP/1.1 404 Not Found');
		// header("Status: 404 Not Found");
		// include ($host.'404');
    }
    
}
