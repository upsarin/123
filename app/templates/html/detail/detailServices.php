	<style>
		h2.block-header.thin {
			font-weight: 200;
		}
		img {
		  vertical-align: middle;
		  width: 100%;
		}
	</style>
	<?
	$element = $array['content'][0];
	?>
	
	<div class="content-container-wrapper course-header partnership">
        <div class="content-container">
            <div class="content">

                <div class="row">
                    <div class="column col-md-12">
                        <a href="/services" class="button-back"><span>Назад</span></a>
                        <h2 class="block-header thin"><?=$element['title']?></h2>
                        <div class="signup-course"><span class="course-title"></span><a class="square-button" href="#"><em><span><i>ЗАПИСАТЬСЯ</i></span></em></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<?$city_code = $_SESSION['user']['city'] ."_desc";?>
	<?=$element[$city_code];?>
	
	
	