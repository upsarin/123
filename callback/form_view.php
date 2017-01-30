<?
session_start();
 if($_SESSION['user']['user'] == "peter"){ 
	$city_form = '<option value="course-base">Базовый курс DJ Школы</option>
	<option value="pro-course">PRO курс DJ Школы</option>
	<option value="scratch-base">Scratch DJ курс DJ Школы</option>
	<option value="kids-course">Kids курс DJ Школы</option>
	<option value="midi-course">MIDI курс DJ Школы</option>
	<option value="vinyl-course">Vinyl курс DJ Школы</option>
	
	<option value="music-write-base">Базовый курс Школы Написания Музыки</option>
	<option value="music-write-pro">PRO курс Школы Написания Музыки</option>
	<option value="music-write-level-up">Level UP курс Школы Написания Музыки</option>
	<option value="salfedgio-course">Сольфеджио курс Школы Написания Музыки</option>
	<option value="vocal-course">Vocal курс Школы Написания Музыки</option>';
 } else if($_SESSION['user']['user'] == "moscow"){ 
	$city_form = '<option value="course-base">Базовый курс DJ Школы</option>
	<option value="pro-course">PRO курс DJ Школы</option>
	<option value="scratch-base">Scratch DJ курс DJ Школы</option>
	<option value="kids-course">Kids курс DJ Школы</option>
	<option value="midi-course">MIDI курс DJ Школы</option>
	<option value="vinyl-course">Vinyl курс DJ Школы</option>
	
	<option value="music-write-base">Базовый курс Школы Написания Музыки</option>
	<option value="music-write-pro">PRO курс Школы Написания Музыки</option>
	<option value="music-write-level-up">Level UP курс Школы Написания Музыки</option>';
  } else if($_SESSION['user']['user'] == "nsk"){ 
	$city_form = '<option value="course-base">Базовый курс DJ Школы</option>
	<option value="pro-course">PRO курс DJ Школы</option>
	
	<option value="kids-course">Kids курс DJ Школы</option>
	<option value="midi-course">MIDI курс DJ Школы</option>
	<option value="vinyl-course">Vinyl курс DJ Школы</option>
	
	<option value="music-write-base">Базовый курс Школы Написания Музыки</option>
	<option value="music-write-pro">PRO курс Школы Написания Музыки</option>
	<option value="music-write-level-up">Level UP курс Школы Написания Музыки</option>';
 } else if($_SESSION['user']['user'] == "almati"){ 
	$city_form = '<option value="course-base">Базовый курс DJ Школы</option>
	<option value="kids-course">Kids курс DJ Школы</option>
	<option value="midi-course">MIDI курс DJ Школы</option>
	<option value="pro-course">PRO курс DJ Школы</option>
	<option value="scratch-base">Scratch DJ курс DJ Школы</option>
	<option value="vinyl-course">Vinyl курс DJ Школы</option>';
 } 
 if($_SESSION['user']['city'] == "moscow"){
	$pre_city_choise = '<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="city_form" title="Москва" aria-expanded="false">
		<span class="filter-option pull-left">Москва</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
	</button>
	<div class="dropdown-menu open" role="combobox" style="max-height: 4681px; overflow: hidden; min-height: 92px;">
		<ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 4669px; overflow-y: auto; min-height: 80px;">
			<li data-original-index="0" class="selected">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Москва</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="1">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Санкт-Петербург</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="2" >
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Новосибирск</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="3">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Алматы</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
		</ul>
	</div>';
	$city_choice ='<option value="moscow" selected="selected">Москва</option><option value="peter">Санкт-Петербург</option><option value="nsk">Новосибирск</option><option value="almati">Алматы</option>';
 } else if($_SESSION['user']['city'] == "peter"){
	$pre_city_choise = '<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="city_form" title="Санкт-Петербург" aria-expanded="false">
		<span class="filter-option pull-left">Санкт-Петербург</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
	</button>
	<div class="dropdown-menu open" role="combobox" style="max-height: 4681px; overflow: hidden; min-height: 92px;">
		<ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 4669px; overflow-y: auto; min-height: 80px;">
			<li data-original-index="0" >
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Москва</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="1" class="selected">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Санкт-Петербург</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="2" >
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Новосибирск</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="3">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Алматы</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
		</ul>
	</div>';
	$city_choice ='<option value="moscow">Москва</option><option value="peter" selected="selected">Санкт-Петербург</option><option value="nsk">Новосибирск</option><option value="almati">Алматы</option>';										
 } else if($_SESSION['user']['city'] == "nsk"){		
	$pre_city_choise = '<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="city_form" title="Новосибирск" aria-expanded="false">
		<span class="filter-option pull-left">Новосибирск</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
	</button>
	<div class="dropdown-menu open" role="combobox" style="max-height: 4681px; overflow: hidden; min-height: 92px;">
		<ul class="dropdown-menu inner" role="listbox" aria-expanded="true" style="max-height: 4669px; overflow-y: auto; min-height: 80px;">
			<li data-original-index="0">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Москва</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="1">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Санкт-Петербург</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="2" class="selected">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Новосибирск</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="3">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Алматы</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
		</ul>
	</div>';
	$city_choice ='<option value="moscow">Москва</option><option value="peter">Санкт-Петербург</option><option value="nsk">Новосибирск</option><option value="almati">Алматы</option>';
 } else if($_SESSION['user']['city'] == "almati"){
	$pre_city_choise = '<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="city_form" title="Алматы" aria-expanded="false">
		<span class="filter-option pull-left">Алматы</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
	</button>
	<div class="dropdown-menu open" role="combobox" style="max-height: 4681px; overflow: hidden; min-height: 92px;">
		<ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 4669px; overflow-y: auto; min-height: 80px;">
			<li data-original-index="0">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Москва</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="1">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Санкт-Петербург</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="2">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Новосибирск</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
			<li data-original-index="3" class="selected">
				<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Алматы</span><span class="glyphicon glyphicon-ok check-mark"></span>
			</a>
			</li>
		</ul>
	</div>';
	$city_choice ='<option value="moscow">Москва</option><option value="peter">Санкт-Петербург</option><option value="nsk">Новосибирск</option><option value="almati" selected="selected">Алматы</option>';											  
 }
echo '

						

                            <fieldset>



                                

                                <h2 class="block-header">Записаться на урок онлайн</h2>

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
												<div class="btn-group bootstrap-select">
													'. $pre_city_choise .'
												</div>
													<select class="selectpicker" id="city_form" tabindex="-98">
													  '. $city_choice .'
													</select>
												
											</div>

                                        </div>

                                    </div>



                                    

                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="service">Услуга</label>

                                        <div class="input-box select-box col-md-8 col-sm-8">

                                            <div class="btn-group bootstrap-select form-control">
												<select class="selectpicker" id="course_form">
													'. $city_form .'
												</select>
											</div>

                                        </div>

                                    </div>



                                    

                                    <div class="form-group form-group-button">

                                        <a class="square-button" href="#"><em><span><button id="singlebutton" name="singlebutton">ОТПРАВИТЬ</button></span></em></a>

                                    </div>



                                </div>

                            </fieldset>
';?>
                        