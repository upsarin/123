		<style>
		.search-result section a .image-container:after {
			background: none !important;
		}
		.search-result section a .image-container{
			background: none !important;
		}
		</style>
		<div class="page-image contacts"><img src="/css/images/header_banner_1.png"></div>
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
                            
                            
                            <li <?=($array['id'] == 100) ? 'class="active"' : ''?>><a href="/news"><span>Новости</span></a></li>
                            
                            <li <?=($array['id'] == 101) ? 'class="active"' : ''?>><a href="/courses"><span>Курсы</span></a></li>
                            
                            <li <?=($array['id'] == 102) ? 'class="active"' : ''?>><a href="/services"><span>Услуги</span></a></li>
                            
                            <li <?=($array['id'] == 103) ? 'class="active"' : ''?>><a href="/contacts"><span>Контакты</span></a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="content-container-wrapper search-line">
            <div class="content-container">
                <div class="content">
                        <form class="form-horizontal">
                            <fieldset>
                                    
                                <div class="form-group">
                                    <div class="col-md-8 col-sm-12 input-box">
                                            <div class="col-md-8 col-sm-8 col-xs-12 single-line input-box">
                                                <input id="textinput" name="name" type="text" placeholder="" class="form-control input-md" required="">
                                            </div>
                                            <div class="col-md-4 col-sm-4 single-line input-box">
                                                <button class="form-button" id="singlebutton" name="singlebutton"><span></span></button>
                                            </div>
                                    </div>
                                    <div class="input-box select-box col-sm-12 col-md-4">
                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" data-id="service" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"></ul></div><select id="service" name="service" class="selectpicker form-control" tabindex="-98">
                                            
                                            
                                        </select></div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                </div>
            </div>
        </div>				
		
			
		<div class="content-container-wrapper search-result">
            <div class="content-container">
                <div class="content">
					<h2 class="block-header">Новости</h2>
					<div class="row">
						<div class="sections-holder">
							<?if(count($array['content']['content']) > 0){?>  
								<?foreach($array['content']['content'] as $element){?>
								
									<?
									$filter = array("content_id" => $element['id']);
									$images = Element::SelectAll('files', $filter, null, null);
									?>
								
									<section class="col-md-12 ">
										<a href="/<?=$array['alias']?>/detail/<?=$element['alias']?>/">
											<!--<?=(count($images) > 0) ? '/'. $images[0]['path'] : ''?>-->
											<div class="image-container">
												<? if(count($images)) { ?>
													<img class="image" src="/<?=$images[0]['path']?>" alt="" style="max-width: 310px;
    max-height: 300px;
    height: auto;">
												<? } else { ?>
													<img class="image" src="/css/images/logo.png" alt="" style="    max-width: 600px;max-height: 500px;height: auto;margin: 50px 10px;">
												<? } ?>
											</div>
											<div class="short-description" style="">
												<span class="date"><?=($element['active_to'] != "0000-00-00 00:00:00") ? date("M d, Y", strtotime($element['active_to'])) : ""?></span>
												<h4 class="title"><?=$element['title']?></h4>
												<div class="refering"></div>
												<div class="refering-title"></div>
												<div class="state"></div>
												<div class="short-text">
													<?=strip_tags($element['preview_desc'])?>
												</div>
											</div>
											<div>
												<span class="button-more"><em>Прочитайте больше</em></span>
											</div>
										</a>
									</section>
												
									
								<? } ?>
							<? } else { ?>
								<section class="col-md-12 ">
									<p style="color: white; font-weight: 400;">Новости для выбранного города еще не публиковались.
								</section>
							<? } ?>
						</div>
					</div>
				</div>
            </div>
        </div>	