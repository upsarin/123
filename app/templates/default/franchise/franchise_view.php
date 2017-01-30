
    <div class="wrapper">
        <div class="page-image franchise-page-image"><img src="/css/images/franshise_banner.jpg"/></div>
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
								<li data-original-index="2" class="cityChoise" id="nsk">
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
                        <a href="/" class="logo-image"><img src="http://u0205105.isp.regruhosting.ru/css/images/logo.png"></a>
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
        <div class="signup-for-lesson-shadow">
            <div class="content-container-wrapper signup-for-lesson">
                <a href="#" class="close"></a>
                <div class="content-container">
                    <div class="content">

                        <form class="form-horizontal">
                            <fieldset>

                                
                                <h2 class="block-header">Отправить заявку по франшизе Pioneer DJ School</h2>
                                <div class="row">

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="name">Имя</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="email">Телефон</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="phone">Почта</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group form-group-button">
                                        <a class="square-button" href="#" ><em><span><button id="submit" name="submit">Отправить</button></span></em></a>
                                    </div>

                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>



        <div class="content-container-wrapper course-header franchise">
            <div class="content-container">
                <div class="content">

                    <div class="row">
                        <div class="column col-md-12">
                            <h2 class="block-header">PIONEER DJ SCHOOL</h2>
                            <span class="offer">Предложение по франшизе</span>
                            <!--<div class="signup-course"><a class="square-button" href="#" ><em><span><i>Подать заявку</i></span></em></a></div>-->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="content-container-wrapper franchise-description">
            <div class="content-container">
                <div class="content">
                    <h2 class="block-header">Проект</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <p> Pioneer DJ School - Официальные DJ центры, занимающиеся образовательной и просветительской деятельностью от лица бренда Pioneer DJ.</p>

                            
                            <p><strong>DJ Центры Pioneer DJ School:</strong></p>
                            <ul>
                                
                                <li>DJ школа и школа по написанию музыки</li>
                                
                                <li>DJ магазин с полным ассортиментом продукции Pioneer DJ</li>
                                
                                <li>DJ студия (площадка для проведения мастер-классов и презентаций оборудования)</li>
                                
                                <li>Площадка видео-съёмок и создания рекламного контента.</li>
                                
                                <li>Центр поддержки и получения знаний по технике для всех владельцев оборудования.</li>
                                
                            </ul>
                            
                            <p><strong>Особенности работы и преимущества:</strong></p>
                            <ul>
                                
                                <li>Официальный статус и поддержка DJ Центров бренд-представительством Pioneer DJ</li>
                                
                                <li>Уникальная и эффективная методика обучения разработанная Pioneer DJ</li>
                                
                                <li>Индивидуальный подход к каждому клиенту</li>
                                
                                <li>Идеальные знания продукции Pioneer DJ</li>
                                
                            </ul>
                            
                            <p><strong>Ресурсы проекта:</strong></p>
                            <ul class="list_urls">
                                
							<li>
							<div class="url_header">Pioneer DJ School:</div>   
							<a href="https://vk.com/pioneerdjschool" target="_blank">VK</a>  | 
							<a href="https://www.facebook.com/pioneerdjschool.ru/" target="_blank">Facebook</a>  | 
							<a href="https://www.instagram.com/pioneerdjschool.ru/" target="_blank">Instagram</a> | 
							<a href="https://www.youtube.com/pioneerdjschoolru" target="_blank">YouTube</a>  | 
							<a href="http://promodj.com/pioneerdjschool" target="_blank">Promodj</a>
							</li>

							<li>
							<div class="url_header">Pioneer DJ TV:</div>  
							<a href="https://vk.com/pioneerdjtv" target="_blank">VK</a>  | 
							<a href="https://www.youtube.com/pioneerdjtvru" target="_blank">YouTube</a> | 
							<a href="https://www.instagram.com/pioneerdjtv/" target="_blank">Instagram</a>
							</li>
							
							<li>
							<div class="url_header">Pioneer DJ Music:</div>  
							<a href="https://vk.com/pioneerdjmusic" target="_blank">VK</a>  | 
							<a href="https://soundcloud.com/pioneerdjmusic" target="_blank">Soundcloud</a>  | 
							<a href="https://beta.mixcloud.com/pioneerdjmusic/" target="_blank">Mixcloud</a> 
							</li>
							
							<li>
							<div class="url_header">Pioneer DJ Msk:</div>  
							<a href="https://vk.com/pioneerdjmsk" target="_blank">VK</a>  | 
							<a href="https://www.facebook.com/pioneerdjmsk" target="_blank">Facebook</a>  | 
							<a href="https://www.instagram.com/pioneerdjmsk/" target="_blank">Instagram</a> 
							</li>
							
							<li>
							<div class="url_header">Pioneer DJ Spb:</div>  
							<a href="https://vk.com/pioneerdjspb" target="_blank">VK</a>  | 
							<a href="https://www.facebook.com/pioneerdjspb" target="_blank">Facebook</a>  | 
							<a href="https://www.instagram.com/pioneerdjspb/" target="_blank">Instagram</a> 
							</li>
							
							<li>
							<div class="url_header">Pioneer DJ Nsk:</div>  
							<a href="https://vk.com/pioneerdjnsk" target="_blank">VK</a>  | 
							<a href="https://www.facebook.com/PioneerDJnsk/" target="_blank">Facebook</a>  | 
							<a href="https://www.instagram.com/pioneerdjnsk/" target="_blank">Instagram</a> 
							</li>
							
							<li>
							<div class="url_header">Pioneer DJ Almaty:</div>  
							<a href="https://vk.com/pioneerdjalmaty" target="_blank">VK</a>  | 
							<a href="https://www.facebook.com/pioneerdjalmaty/" target="_blank">Facebook</a>  | 
							<a href="https://www.instagram.com/pioneerdjalmaty/" target="_blank">Instagram</a> 
							</li>
                                
                            </ul>
                            
                            <a download href="/Predlozhenie_po_franshize_Pioneer_DJ_School.pdf" class="download-file"><span class="download-file-label">Скачать презентацию</span><span class="round_button"><em ><span class="button_round_bg"></span></em></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>