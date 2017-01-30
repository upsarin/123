
        <div class="content-container-wrapper school">
            <div class="content-container">
                <div class="content courses">
                    <h2 class="block-header">Услуги</h2>
                    <div class="row">
                        <div class="sections-holder responsive">
                            
							
						<?foreach($array['content']['content'] as $element){
							$filter = array("content_id" => $element['id']);
							$images = Element::SelectAll('files', $filter, null, null);
						?>
							<section class="col-md-4 col-sm-4 ">
                                <a href="/services/detail/<?=$element['alias']?>" >
								<? if(count($images)>0){?>
                                    <div class="image-container">
										<img class="image" src="<?=$images[0]['path']?>" >
									</div>
								<? } ?>
                                    <div class="short-description">
                                        <h4 class="name"><?=$element['title']?></h4>
                                        <h4 class="description"><?=$element['preview_desc']?></h4>
                                    </div>
                                    <span class="button-more"><em></em></span>

                                </a>
                            </section>
                        <? } ?>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
