$(document).ready(function(){
    $("#form_phone").mask("+7 (999) 999-9999");
	$("a[href='/apply/']").click(function(){
        $(".search-border").css({display: "block"});
        return false;
	});
	$("a.trigger__close-overlayer").click(function(){
        $(".search-border").css({display: "none"});
		return false;
	});
    $(".form-send").click(function(){
        $("#errors").css({display: "none"});
		var courseId = $("#form_course").val();
		var courseUserName = $("#form_name").val();
		var courseUserPhone = $("#form_phone").val();
		var error = false;

		if(courseUserName == ""){
            $("#errors").css({display: "block"});
            $("#errors").html("Введите ваше Имя");
            error = true;
		}
		if(courseUserPhone == ""){
            $("#errors").css({display: "block"});
            $("#errors").html("Введите телефон для обратной связи");
            error = true;
		}
		if(!error){
			console.log("form complete");

            data = "city=" + $(".select__footer-dark select option:selected").html() + "&course=" + courseId + "&name=" + courseUserName + "&phone=" + courseUserPhone;
            $.ajax({
                url: "/callback/ajax_mail.php",
                type: "POST",
                data: data,
                success: function(html){
                    $(".search-border .input-wrap").html(html);
                }
            });
		}
		return false;
	});
	/*
	$('.module-window').click(function(){
		console.log(this.id);
		return false;
	});
	
	setTimeout(function(){
		$('.loading_overlay').remove();
		$(".mastfoot").css("display", "block");
		$('.site-wrapper').css({
			display: "table",
		});
		$('.site-wrapper').animate({
			opacity: 1,
		}, 3000)
		
	}, 1000);
	
	$('#link-logout').click(function(e){ 
		console.log(this)
		var data = "action=logout_user&module=login"
		data = data + '&ajax=Y';
		
		$.ajax({
		  url: "/login/",
		  type: "POST",
		  data: data,
		  success: function(html){
				location.href='/';
				
		  }
		});
		return false;
	});
	
	$('#shortlinkForm input[type="submit"]').click(function(e){
		var link = document.getElementById('main[orig_url]').value;

		if(link == "" || link == "undefined"){
			$('#error_mess').remove();
			$('#shortlinkForm').append('<div id="error_mess" class="short_link_error">Заполните поле "Оригинальная ссылка"</div>');
			setTimeout(function(){
				$('#error_mess').animate({
					opacity: 1,
				}, 5000)
				$('#error_mess').remove();
			}, 10000);
			
		} else {
			var data = "action=save_data&module=shortlink&iblock_name=shortlink&main[orig_url]=" + link;
			data = data + '&ajax=Y';
			
			$.ajax({
			  url: "/katalog/",
			  type: "POST",
			  data: data,
			  success: function(html){
				
				var obj = JSON.parse(html);
				$('#noResult').remove();
				if($(linkList.children[0]).attr("class", "new_link")){
					$(linkList.children[0]).attr("class", "");
				}
				var newLi = document.createElement('li');
				newLi.className = "new_link";
				newLi.innerHTML = '<a href="' + obj.orig_url + '" id="' + obj.id + '" target="_blank"><i class="glyphicon glyphicon-share"></i></a>  ' + obj.edit_url;
				
				
				
				linkList.insertBefore(newLi, linkList.children[0]);
				
				document.getElementById('main[orig_url]').value = "";
				
			  }
			});
		}
		return false;
	});	
});

$('#main_tabs a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
});



function logoMove(loaderWidth)
	{
		var logo = $('.logoimg').offset();
		$(".masthead-brand .logoright").hover(function(){
			
			$(".logoimg").animate({
				left: 0,
				top: 0,
			}, 1000)
			.animate({left: "+=100"}, 1000);
		},function(){
			var arc_params = {
				center: [-3,-3],  
				radius: 4,    
				start: 29,
				end: 30,
				dir: -1
			};
			$(".logoimg").animate({left: "-=100"}, 1000);
			$(".logoimg").animate({path : new $.path.arc(arc_params)}, 500);
		
			
		});
		
		$(".masthead-brand .logoleft").hover(function(){
			
			$(".logoimg").animate({
				left: 0,
				top: 0,
			}, 1000)
		});
		// $("html").click(function(e){
			// console.log(window.innerWidth);
			// $(".logoimg").animate({
				// left: e.clientX - logo.left + 40 - loaderWidth/3,
				// top: e.clientY - logo.top - 50,
			// }, 1000);
			
		// });
		*/
	});