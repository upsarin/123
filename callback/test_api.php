<html>
	<head>
		<title>Тестирование API VK</title>
		<script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
	</head>
	<body>
		hello world!
		
		<script>
			$(document).ready(function(){
				var data = {"type":"wall_post_new","object":{"id":8659,"from_id":-35697765,"owner_id":-35697765,"date":1479962844,"marked_as_ads":0,"post_type":"post","text":"#djшкола\n • Принципы обучения в [club35697765|DJ Школе Pioneer DJ Novosibirsk]: \n\n• ИНДИВИДУАЛЬНЫЙ ГРАФИК ОБУЧЕНИЯ на всех курсах DJ Школы!\n\n• Ученик САМОСТОЯТЕЛЬНО назначает дату и время своего следующего занятия (или следующих), выбирая ту дату и время когда именно ему будет удобно прийти на обучение!\n\n• А так же! у нас есть Первая пробная бесплатная встреча!!! \n\n• Назначайте дату и время по тел. +7(913)-015-90-09 [id172532460|сообщением] или заполнить анкету - vk.com\/app5619682_-35697765\n\n#pioneerdjnsk #dj #школа #новосибирск","can_edit":1,"created_by":7184845,"can_delete":1,"attachments":[{"type":"photo","photo":{"id":456239040,"album_id":-7,"owner_id":-35697765,"user_id":7184845,"photo_75":"https:\/\/pp.vk.me\/c837333\/v837333845\/f5f3\/oKBi2g6_xrc.jpg","photo_130":"https:\/\/pp.vk.me\/c837333\/v837333845\/f5f4\/azf2aYymlZo.jpg","photo_604":"https:\/\/pp.vk.me\/c837333\/v837333845\/f5f5\/ov5pbLnv8kQ.jpg","photo_807":"https:\/\/pp.vk.me\/c837333\/v837333845\/f5f6\/YaChFfMw8IM.jpg","photo_1280":"https:\/\/pp.vk.me\/c837333\/v837333845\/f5f7\/Jcz8JE38YFY.jpg","photo_2560":"https:\/\/pp.vk.me\/c837333\/v837333845\/f5f8\/cOmFQEj60ps.jpg","width":1400,"height":1000,"text":"","date":1479962844,"post_id":8659,"access_key":"adfb1af9de67c5b4b8"}},{"type":"page","page":{"id":43870871,"group_id":35697765,"title":"DJ ШКОЛА","current_user_can_edit":1,"current_user_can_edit_access":1,"who_can_view":2,"who_can_edit":0,"edited":0,"created":1337835750,"views":14164,"editor_id":255657379,"creator_id":172532460,"view_url":"http:\/\/m.vk.com\/page-35697765_43870871?api_view=d28caf7044c8913d2b25ee10ebd19b"}}],"comments":{"count":0}},"group_id":35697765,"secret":"aaQ12afwfa12331"};
				
				console.log(data);
				$.ajax({
				  url: "/callback/callback_vk_nsk.php",
				  type: "POST",
				  data: data, 
				  success: function(html){
					
					console.log(html);
					
				  }
				});
			});
		</script>
	</body>
</html>