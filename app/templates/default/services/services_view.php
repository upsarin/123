
	
	<?
		if($array['action'] == "detail"){
			$filter = array("content_id" => $array['content'][0]['id'], "type" => "detail_image");
			$images = Element::SelectAll('files', $filter, null, null);
			$back = "/". $images[0]["path"];
			$element = $array['content'][0];
		} else {
			$back = "/css/images/header_banner_1.png";
		}
	?>
	<div class="page-image service-page"><img src="<?=$back?>"/></div>
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
		<div class="signup-for-lesson-shadow" style="display: none;">
            <div class="content-container-wrapper signup-for-lesson">
                        <a href="#" class="close"></a>
                <div class="content-container">
                    <div class="content">

                        <form class="form-horizontal">
                            <fieldset>

                                
                                <h2 class="block-header">Заявка на услугу</h2>
                                <div class="row">

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="name">Представтесь</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="email">Email</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="phone">Моб.телефон</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="city">Город</label>

                                        <div class="input-box select-box col-md-8 col-sm-8">
											<div class="btn-group bootstrap-select form-control">
												
												<select class="selectpicker" id="city_form">
												  <option value="moscow" <?=($_SESSION['user']['city'] == "moscow") ? "selected='selected'" : "" ?>>Москва</option>
												  <option value="peter" <?=($_SESSION['user']['city'] == "peter") ? "selected='selected'" : "" ?>>Санкт-Петербург</option>
												  <option value="nsk" <?=($_SESSION['user']['city'] == "nsk") ? "selected='selected'" : "" ?>>Новосибирск</option>
												  <option value="almati" <?=($_SESSION['user']['city'] == "almati") ? "selected='selected'" : "" ?>>Алматы</option>
												</select>

												
											</div>

                                        </div>

                                    </div>

                                    
                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="service">Услуга</label>

                                        <div class="input-box select-box col-md-8 col-sm-8">

                                            <div class="btn-group bootstrap-select form-control">
												<select class="selectpicker" id="course_form">
													
														
														<option value="actionsystem" <?=($element['alias'] == "actionsystem") ? "selected='selected'" : ""?>>Скидочная система</option>
														<option value="partnership" <?=($element['alias'] == "partnership") ? "selected='selected'" : ""?>>Партнёрская программа</option>
														<option value="photosession" <?=($element['alias'] == "photosession") ? "selected='selected'" : ""?>>Фотосессия (DJ портфолио)</option>
														<option value="rent" <?=($element['alias'] == "rent") ? "selected='selected'" : ""?>>Аренда DJ Оборудования</option>
														<option value="traning" <?=($element['alias'] == "traning") ? "selected='selected'" : ""?>>Разовое посещение DJ Центра в формате свободной тренировки.</option>
														<option value="videomix" <?=($element['alias'] == "videomix") ? "selected='selected'" : ""?>>Видео-микс на Pioneer DJ TV</option>
													
												</select>
											</div>

                                        </div>

                                    </div>

                                    
                                    <div class="form-group form-group-button">
                                        <a class="square-button" href="#"><em><span><button id="singlebutton" name="singlebutton">ОТПРАВИТЬ</button></span></em></a>
                                    </div>

                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
		
	<?if(isset($array["content"]) && !empty($array["content"])) {
		include $html_temp;
	} ?>
	