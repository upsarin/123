       <div class="signup-for-lesson-shadow">

            <div class="content-container-wrapper signup-for-lesson">

                <a href="#" class="close"></a>

                <div class="content-container">

                    <div class="content">



                        <form class="form-horizontal">

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
													<?if($_SESSION['user']['city'] == "peter"){ ?>
														<option value="course-base">Базовый курс DJ Школы</option>
														<option value="pro-course">PRO курс DJ Школы</option>
														<option value="scratch-base">Scratch DJ курс DJ Школы</option>
														<option value="kids-course">Kids курс DJ Школы</option>
														<option value="midi-course">MIDI курс DJ Школы</option>
														<option value="vinyl-course">Vinyl курс DJ Школы</option>
														
														<option value="music-write-base">Базовый курс Школы Написания Музыки</option>
														<option value="music-write-pro">PRO курс Школы Написания Музыки</option>
														<option value="music-write-level-up">Level UP курс Школы Написания Музыки</option>
														<option value="salfedgio-course">Сольфеджио курс Школы Написания Музыки</option>
														<option value="vocal-course">Vocal курс Школы Написания Музыки</option>
													<? } else if($_SESSION['user']['city'] == "moscow"){ ?>
														<option value="course-base">Базовый курс DJ Школы</option>
														<option value="pro-course">PRO курс DJ Школы</option>
														<option value="scratch-base">Scratch DJ курс DJ Школы</option>
														<option value="kids-course">Kids курс DJ Школы</option>
														<option value="midi-course">MIDI курс DJ Школы</option>
														<option value="vinyl-course">Vinyl курс DJ Школы</option>
														
														<option value="music-write-base">Базовый курс Школы Написания Музыки</option>
														<option value="music-write-pro">PRO курс Школы Написания Музыки</option>
														<option value="music-write-level-up">Level UP курс Школы Написания Музыки</option>
													<? } else if($_SESSION['user']['city'] == "nsk"){ ?>
														<option value="course-base">Базовый курс DJ Школы</option>
														<option value="pro-course">PRO курс DJ Школы</option>
														
														<option value="kids-course">Kids курс DJ Школы</option>
														<option value="midi-course">MIDI курс DJ Школы</option>
														<option value="vinyl-course">Vinyl курс DJ Школы</option>
														
														<option value="music-write-base">Базовый курс Школы Написания Музыки</option>
														<option value="music-write-pro">PRO курс Школы Написания Музыки</option>
														<option value="music-write-level-up">Level UP курс Школы Написания Музыки</option>
													<? } else if($_SESSION['user']['city'] == "almati"){ ?>
														<option value="course-base">Базовый курс DJ Школы</option>
														<option value="kids-course">Kids курс DJ Школы</option>
														<option value="midi-course">MIDI курс DJ Школы</option>
														<option value="pro-course">PRO курс DJ Школы</option>
														<option value="scratch-base">Scratch DJ курс DJ Школы</option>
														<option value="vinyl-course">Vinyl курс DJ Школы</option>
													<? } ?>
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

        <div class="content-container-wrapper content-normal sign-for-lesson-container">

            <div class="content-container">

                <div class="content">

                    <div class="sign_for_lesson"><div class="round_slider"></div><span class="sign_label">ЗАПИСАТЬСЯ НА УРОК ОНЛАЙН</span><a href="#" class="button-apply"><span>Подать заявку<em></em></span></a></div>

                    <nav class="main-menu nav navbar-nav">

                        <ul class="nav navbar-nav">

                            

                            

                            <li><a href="/courses"><span class="menu-label">КУРСЫ</span><span class="image-container"><img src="css/images/icon_courses.png"></span></a></li>

                            

                            <li><a href="/services"><span class="menu-label">УСЛУГИ</span><span class="image-container"><img src="css/images/icon_services.png"></span></a></li>

                            

                            <li><a href="/contacts"><span class="menu-label">КОНТАКТЫ</span><span class="image-container"><img src="css/images/icon_contacts.png"></span></a></li>

                            

                            <li><a href="/apply"><span class="menu-label">ПОДАТЬ ЗАЯВКУ</span><span class="image-container"><img src="css/images/icon_add_apply.png"></span></a></li>

                            

                        </ul>

                    </nav>

                </div>

            </div>

        </div>

        <div class="content-container-wrapper content-normal">

            <div class="content-container">

                <div class="content">

                    <div class="news-container">

                        <h2 class="block-header">НОВОСТИ</h2>

                        <div class="row">

                            <div class="sections-holder responsive">

                                

                                

                                <section class="news col-sm-4 col-md-4">

                                    <a href="/news_page?id=12h46">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/news/30.09.jpg">

                                        </div>

                                        <span class="short-description" style="height: 102px; background: #3a5ee1;">Конкурс Репостов @ Pioneer DJ School</span>

                                        <span class="button-more"><em></em></span>

                                        

                                    </a>

                                </section>

                                

                                <section class="news col-sm-4 col-md-4">

                                    <a href="/news_page?id=12h44">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/news/11.09-2.jpg">

                                        </div>

                                        <span class="short-description" style="height: 102px;background: #3a5ee1;">11.09 Мастер-класс Max Melnickov @ Pioneer DJ Novosibirsk</span>

                                        <span class="button-more"><em></em></span>

                                        

                                    </a>

                                </section>

                                

                                <section class="news col-sm-4 col-md-4">

                                    <a href="/news_page?id=12h45">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/news/11.09.jpg">

                                        </div>

                                        <span class="short-description" style="height: 102px;background: #3a5ee1;">11.09 День открытых дверей @ Pioneer DJ Msaocow</span>

                                        <span class="button-more"><em></em></span>

                                        

                                    </a>

                                </section>

                                

                                <section class="news col-sm-4 col-md-4">

                                    <a href="/news_page?id=12h43">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/news/06.09.jpg">

                                        </div>

                                        <span class="short-description" style="height: 150px;background: #3a5ee1;">06.09 Мастер-класс Ivan Spell @ Pioneer DJ St. Petersburg</span>

                                        <span class="button-more"><em></em></span>

                                        

                                    </a>

                                </section>

                                

                                <section class="news col-sm-4 col-md-4">

                                    <a href="/news_page?id=12h42">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/news/28.08.jpg">

                                        </div>

                                        <span class="short-description" style="height: 150px;background: #3a5ee1;">28.08 Мастер-класс Александра Нуждина @ Pioneer DJ Moscow</span>

                                        <span class="button-more"><em></em></span>

                                        

                                    </a>

                                </section>

                                

                                <section class="news col-sm-4 col-md-4">

                                    <a href="/news_page?id=12h41">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/news/11.09.jpg">

                                        </div>

                                        <span class="short-description" style="height: 150px;background: #3a5ee1;">DJ Школа и Школа Написания Музыки Pioneer DJ Moscow вновь открывает свои двери и приглашает на ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ!</span>

                                        <span class="button-more"><em></em></span>

                                        

                                    </a>

                                </section>

                                

                            </div>

                        </div>

                        <a href="/news" class="button-more-news"><span>ПОДРОБНЕЕ</span></a>

                    </div>

                </div>

            </div>

        </div>



        <div class="content-container-wrapper content-normal actions">

            <div class="content-container">

                <div class="content">

                    <div class="action-container">

                        <h2 class="block-header">АКЦИИ И УСЛУГИ</h2>

                        <div class="row">

                            <div class="sections-holder ">

                                

                                <section class="action col-md-12">

                                    <a href="/service?id=rent">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/services/rent.jpg">

                                        </div>

                                        <span class="button-more"><em></em></span>

                                    </a>

                                </section>

                                

                                <section class="action col-md-12">

                                    <a href="/service?id=partnership">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/services/partnership.jpg">

                                        </div>

                                        <span class="button-more"><em></em></span>

                                    </a>

                                </section>

                                

                                <section class="action col-md-12">

                                    <a href="/service?id=actionsystem">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/services/action.jpg">

                                        </div>

                                        <span class="button-more"><em></em></span>

                                    </a>

                                </section>

                                

                                <section class="action col-md-12">

                                    <a href="/service?id=traning">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/content/index/services/traning.jpg">

                                        </div>

                                        <span class="button-more"><em></em></span>

                                    </a>

                                </section>

                                

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="content-container-wrapper new-videos-container-wrapper">

            <div class="content-container">

                <div class="content">

                    <div class="new-videos-container">

                        <h2 class="block-header">Новые видео от pioneerdjtv</h2>

                        <div class="row">

                            <div class="sections-holder">

                                

                                <section class="new-videos left col-sm-6 col-md-6">

                                    <a href="https://www.youtube.com/pioneerdjschoolru">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/bottom_banner_1.jpg">

                                        </div>

                                        <span class="round_button" href=""><em><span class="button_round_bg play"></span></em></span>

                                    </a>

                                </section>

                                

                                <section class="new-videos left col-sm-6 col-md-6">

                                    <a href="https://www.youtube.com/pioneerdjtvru">

                                        <div class="image-pattern">

                                            <img class="image" src="css/images/bottom_banner_3.jpg">

                                        </div>

                                        <span class="round_button" href=""><em><span class="button_round_bg play"></span></em></span>

                                    </a>

                                </section>

                                

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="content-container-wrapper content-full banner-container">

            <div class="content-container">

                <div class="content">

                    <div class="banner-holder">

                        <a href="https://www.youtube.com/pioneerdjtvru">

                            <img src="css/images/bottom_banner_2.jpg">

                            <span class="round_button" href="#"><em><span class="button_round_bg play"></span></em></span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

