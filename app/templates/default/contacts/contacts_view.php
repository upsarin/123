		
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

                    <h2 class="block-header">Контакты</h2>
                    <div class="authorized-stores">
                        <h2 class="block-header dark">DJ Центры от бренда Pioneer DJ</h2>
                    </div>
                    <p></p>
                    <div class="shops-info">
                        <script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
                        
                        <div class="spoiler-block">
                            <a class="button-plus toogle-address-list" href="#"></a>
                            <div class="spoiler-line" ></div>
                            <div class="spoiler-content ">
                                <div class="address">
                                    <address class="city">МОСКВА</address>
                                    <address class="district">Главный DJ Центр от компании Pioneer DJ в РФ</address>
                                </div>
                                <ul class="adresses-list">
                                    
                                    <li class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-5 ">
                                            <address><strong>Pioneer DJ Moscow</strong><br/>м. Курская,Нижний Сусальный переулок д. 5 ст. 4<br/>Ежедневно с 12.00 до 22.00</address>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                            <span class="phone">&#43;7 916 942-52-48</span>
                                            
                                            <a href="#" class="email"><span>msk_info@pioneerdjschool.ru</span></a>
                                            <a href="#" class="email"><span>info@pioneerdjschool.ru</span></a>
                                            <a class="mail-us" href="mailto:msk_info@pioneerdjschool.ru"><span class="mail-us-label">Написать нам</span><span class="round_button" ><em ><span class="button_round_bg"><i class="fa fa-envelope-o fa-2x"></i></span></em></span></a>
                                        </div>
                                        <div class="social-buttons-container col-md-3 col-sm-3 col-xs-2">
                                            <a href="javascript:void(0)" class="show-social-buttons fa fa-share-alt"></a>
                                            <ul class="toggle_list nav nav-icons navbar-nav navbar-nav-right social-buttons" >
                                                <li><a href="https://vk.com/pioneerdjmsk" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
                                                <li><a href="https://fb.com/pioneerdjmsk" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="https://instagram.com/pioneerdjmsk" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
                                                <li><a href="https://youtube.com/pioneerdjschoolru" target="_blank" class="btn btn-social-icon btn-youtube-play"><span class="fa fa-youtube-play"></span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="map">
                                    <script >
                                        maps.push({
                                            markers:[
                                                
                                                {title : "Pioneer DJ Moscow", address:"м. Курская,Нижний Сусальный переулок д. 5 ст. 4", position : {latitude:"55.760235", longitude:"37.663277" }},
                                                
                                            ]
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                    
					<!--
                        <div class="spoiler-block">
                            <a class="button-plus toogle-address-list" href="#"></a>
                            <div class="spoiler-line" ></div>
                            <div class="spoiler-content ">
                                <div class="address">
                                    <address class="city">САНКТ-ПЕТЕРБУРГ</address>
                                    <address class="district">Северо-Западный DJ Центр от компании Pioneer DJ в РФ</address>
                                </div>
                                <ul class="adresses-list">
                                    
                                    <li class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-5 ">
                                            <address><strong>Pioneer DJ St. Petersburg</strong><br/>Набережная реки Фонтанки,д. 84<br/>Ежедневно с 10.00 до 22.00</address>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                            <span class="phone">&#43;7 812 984-91-44</span>
                                            
                                            <a href="#" class="email"><span>peter_info@pioneerdjschool.ru</span></a>
                                            <a class="mail-us" href="mailto:peter_info@pioneerdjschool.ru"><span class="mail-us-label">Написать нам</span><span class="round_button" ><em ><span class="button_round_bg"><i class="fa fa-envelope-o fa-2x"></i></span></em></span></a>
                                        </div>
                                        <div class="social-buttons-container col-md-3 col-sm-3 col-xs-2">
                                            <a href="javascript:void(0)" class="show-social-buttons fa fa-share-alt"></a>
                                            <ul class="toggle_list nav nav-icons navbar-nav navbar-nav-right social-buttons" >
                                                <li><a href="https://vk.com/pioneerdjspb" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
                                                <li><a href="https://fb.com/pioneerdjspb" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="https://instagram.com/pioneerdjspb" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
                                                <li><a href="https://youtube.com/pioneerdjschoolru" target="_blank" class="btn btn-social-icon btn-youtube-play"><span class="fa fa-youtube-play"></span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="map">
                                    <script >
                                        maps.push({
                                            markers:[
                                                
                                                {title : "Pioneer DJ St. Petersburg", address:"Набережная реки Фонтанки,д. 84", position : {latitude:"59.9263", longitude:"30.331562" }},
                                                
                                            ]
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
						-->
                    
                        <div class="spoiler-block">
                            <a class="button-plus toogle-address-list" href="#"></a>
                            <div class="spoiler-line" ></div>
                            <div class="spoiler-content ">
                                <div class="address">
                                    <address class="city">НОВОСИБИРСК</address>
                                    <address class="district">Сибирский DJ центр от торговой марки Pioneer DJ в РФ</address>
                                </div>
                                <ul class="adresses-list">
                                    
                                    <li class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-5 ">
                                            <address><strong>Pioneer DJ Novosibirsk</strong><br/>Проспект Димитрова, д. 7, оф. 407<br/>Ежедневно с 10.00 до 22.00</address>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                            <span class="phone">&#43;7 913 015-90-09</span>
                                           
                                            <a href="#" class="email"><span>nsk_info@pioneerdjschool.ru</span></a>
                                            <a class="mail-us" href="mailto:nsk_info@pioneerdjschool.ru"><span class="mail-us-label">Написать нам</span><span class="round_button" ><em ><span class="button_round_bg"><i class="fa fa-envelope-o fa-2x"></i></span></em></span></a>
                                        </div>
                                        <div class="social-buttons-container col-md-3 col-sm-3 col-xs-2">
                                            <a href="javascript:void(0)" class="show-social-buttons fa fa-share-alt"></a>
                                            <ul class="toggle_list nav nav-icons navbar-nav navbar-nav-right social-buttons" >
                                                <li><a href="https://vk.com/pioneerdjnsk" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
                                                <li><a href="https://fb.com/pioneerdjnsk" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="https://instagram.com/pioneerdjnsk" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
                                                <li><a href="https://youtube.com/pioneerdjschoolru" target="_blank" class="btn btn-social-icon btn-youtube-play"><span class="fa fa-youtube-play"></span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="map">
                                    <script >
                                        maps.push({
                                            markers:[
                                                
                                                {title : "Pioneer DJ Novosibirsk", address:"Проспект Димитрова, д. 7, оф. 407", position : {latitude:"55.034771", longitude:"82.91168" }},
                                                
                                            ]
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                    
                        <div class="spoiler-block">
                            <a class="button-plus toogle-address-list" href="#"></a>
                            <div class="spoiler-line" ></div>
                            <div class="spoiler-content ">
                                <div class="address">
                                    <address class="city">АЛМАТЫ</address>
                                    <address class="district">Официальный DJ Центр от компании Pioneer DJ в Казахстане</address>
                                </div>
                                <ul class="adresses-list">
                                    
                                    <li class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-5 ">
                                            <address><strong>Pioneer DJ Almaty</strong><br/>ул. Сатпаева, 29/3 (Центральный стадион, Западная трибуна, каб.45) <br/>Ежедневно с 10.00 до 22.00</address>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                            <span class="phone">&#43;7 747 336-22-02</span>
                                           
                                            <a href="#" class="email"><span>almati_info@pioneerdjschool.ru</span></a>
                                            <a class="mail-us" href="mailto:almati_info@pioneerdjschool.ru"><span class="mail-us-label">Написать нам</span><span class="round_button" ><em ><span class="button_round_bg"><i class="fa fa-envelope-o fa-2x"></i></span></em></span></a>
                                        </div>
                                        <div class="social-buttons-container col-md-3 col-sm-3 col-xs-2">
                                            <a href="javascript:void(0)" class="show-social-buttons fa fa-share-alt"></a>
                                            <ul class="toggle_list nav nav-icons navbar-nav navbar-nav-right social-buttons" >
                                                <li><a href="https://vk.com/pioneerdjalmaty" target="_blank" class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a></li>
                                                <li><a href="https://fb.com/pioneerdjalmaty" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="https://instagram.com/pioneerdjalmaty" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></li>
                                                <li><a href="https://youtube.com/pioneerdjschoolru" target="_blank" class="btn btn-social-icon btn-youtube-play"><span class="fa fa-youtube-play"></span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="map">
                                    <script >
                                        maps.push({
                                            markers:[
                                                
                                                {title : "Pioneer DJ Almaty", address:"ул. Сатпаева, 29\/3 (Центральный стадион, Западная трибуна, каб.45) ", position : {latitude:"43.237051", longitude:"76.921786" }},
                                                
                                            ]
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="content-container-wrapper franchise-offer">
            <div class="content-container">
                <div class="content">

                    <h2 class="block-header">Франшиза Pioneer DJ School</h2>
                    <a href="/franchise" class="button-more-news"><span>ПОДРОБНЕЕ</span></a>
                </div>
            </div>
        </div>