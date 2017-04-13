$(document).ready(function(){
    var staticHeight;
    function newAnimate(id) {
        var obj = $("#gallery-" + id);
        var subj = $(".gallery-showcase-block");
        var imgMap = $(".gallery-cont-"+ id +" img");
            subj.css({
                height: $(".gallery-cont-" + id + " img")[0].height
            });
            subj.html('<img src="' + $(".gallery-cont-" + id + " .people").attr("src") + '" />');
            $(".gallery-cont-" + id).css({
                width: "100%",
                display: "block"
            });
            $(".gallery-header-" + id).css({
                margin: "0px 0px 1px 0px"
            });
            $(".gallery-cont-" + id + " .imgMap").css({
                display: "block"
            });
            $(".points-" + id + " .point").css({
                display: "block"
            });
            $(".gallery-cont-" + id).css({
                margin: "0px 0px 10px 0px"
            });
            var destination = $(".gallery-showcase-block").offset().top;
            $('body').animate({scrollTop: destination - 100}, 1100);


    };
    function moveSlider(curImage, nextImage){
        $(".slider-images .slider-container img#"+curImage).removeAttr("selected");
        var curImageTop = $("img#" + curImage).css("top");
        $("img#" + curImage).animate({
            zoom: 0.7,
            top: (screen.height/4),
            left: (screen.width/4)
        }, 500, function(){
            $("img#" + curImage).animate({
                left: screen.width,
                opacity: 0
            }, 500, function(){
                $("img#" + nextImage).animate({
                    top: $("img#" + nextImage).css("top"),
                    left: 50,
                    opacity: 1
                }, 500);
                $("img#" + curImage).css({
                    zoom: 1,
                    top: curImageTop
                });
            });
        });
    };
    $(window).bind('orientationchange', function(event) {
        if($(".slider-images").css("display") == "block"){
            var imgTop;

            $(".slider-images #next").css({
                top: screen.height/2,
            });
            $(".slider-images #prev").css({
                top: screen.height/2,
            });
            $(".slider-images .slider-container").css({
                width: screen.width,
            });
            $(".slider-images .slider-container img").css({
                height: staticHeight,
            });
            if (screen.height < 420) {
                imgTop = 55;
                $(".slider-images .slider-container img").css({
                    height: screen.height - 75,
                });
            } else {
                imgTop = screen.height / 3;
            }

            $(".slider-images .slider-container img").css({
                width: $(".slider-images .slider-container").width(),
                left: screen.width,
                top: imgTop,

            });

            $(".slider-images .slider-container img#0").attr("selected", "selected");
            $(".slider-images .slider-container img#0").css({
                left: $(".slider-images .slider-container").css("padding"),
                opacity: 1
            });
        }
    });

    $(".gallery-header .ico").click(function(){
        var id = this.id
        if(screen.width > "1023") {
            if ($(".gallery-cont-moscow .imgMap").css("display") == "block") {
                $(".gallery-cont-moscow").css({
                    width: "100%",
                    display: "none"
                });
                $(".gallery-cont-moscow .imgMap").css({
                    width: "100%",
                    display: "none"
                });
                $(".points-moscow .point").css({
                    display: "none"
                });

                if (id == "almati") {
                    newAnimate(id);
                }
            } else if ($(".gallery-cont-almati .imgMap").css("display") == "block") {
                $(".gallery-cont-almati").css({
                    width: "100%",
                    display: "none"
                });
                $(".gallery-cont-almati .imgMap").css({
                    width: "450px",
                    display: "none"
                });
                $(".points-almati .point").css({
                    display: "none"
                });
                if (id == "moscow") {
                    newAnimate(id);
                }
            } else {
                newAnimate(id);
            }
        } else {
            var pointId = id;
            var imgTop;
            $(".slider-images .slider-container").append("<img id='0' src='"+ $('.gallery-cont-'+pointId+' .people').attr("src") +"' />");
            for(var i = 0; i < $(".gallery-cont-" + pointId + " .images").length; ++i){
                $(".slider-images .slider-container").append("<img id='"+ (i+1) +"' src='"+ $('.gallery-cont-'+pointId+' .images')[i].src +"' />");
            }
            $(".slider-images .slider-container").css({
                width: screen.width,
            });
            if(screen.width == 320) {
                imgTop = screen.height/3;
            } else if(screen.height < 420){
                imgTop = 55;
                $(".slider-images .slider-container img").css({
                    height: screen.height-75,
                });
            } else if(screen.height < 569 && screen.width < 375){
                imgTop = 55;
                $(".slider-images .slider-container img").css({
                    height: screen.height-75,
                });
            } else {
                imgTop = screen.height/3;
            }

            $(".slider-images .slider-container img").css({
                width: $(".slider-images .slider-container").width(),
                left: screen.width,
                top: imgTop
            });

            $(".slider-images .slider-container img#0").attr("selected", "selected");
            $(".slider-images .slider-container img#0").css({
                left: $(".slider-images .slider-container").css("padding"),
                opacity: 1
            });
            $(".slider-images").css({
                display: "block",
                height: screen.height
            });
            staticHeight = parseInt($(".slider-images .slider-container img").css("height"));
        }

    });

    $(".point").click(function(){
        var pointId = this.id;
        var pointCur = $("#"+this.id).parent();
        var curParentClass = $(pointCur).attr("class");
        $(".slider-images").css({
            display: "block",
            height: screen.height
        });
        for(var i = 0; i < $(".image-" + pointId).length; ++i){
            $(".slider-images .slider-container").append("<img id='"+ i +"' src='"+ $('.image-'+pointId)[i].src +"' />");
        }
        $(".slider-images .slider-container").css({
            width: screen.width,
        });
        $(".slider-images .slider-container img").css({
            width: $(".slider-images .slider-container").width()-20,
            height: $(".slider-images .slider-container").height()-100,
            left: screen.width,
            top: 56
        });

        $(".slider-images .slider-container").attr("id", pointId);
        $(".slider-images .slider-container img#0").attr("selected", "selected");
        $(".slider-images .slider-container img#0").css({
            left: $(".slider-images .slider-container").css("padding"),
            opacity: 1
        });
        staticHeight = parseInt($(".slider-images .slider-container img").css("height"));
    });
    $(".slider-images #close").click(function(){
        $(".slider-images").css({
            display: "none"
        });
        $(".slider-images .slider-container").attr("id", "");
        $(".slider-images .slider-container").html("");
    });
    $(".slider-images #prev").click(function(){
        var countImages = $(".slider-images .slider-container img").length;
        if(countImages > 1) {
            var curImageId = $(".slider-images .slider-container img[selected='selected']").attr("id");
            curImage = parseInt(curImageId);
            var nextImage;
            if (curImage == 0) {
                $(".slider-images .slider-container img#" + ($(".slider-images .slider-container img#" + (countImages - 1)).attr("id"))).attr("selected", "selected");
                nextImage = parseInt(countImages - 1);
            } else {
                $(".slider-images .slider-container img#" + (curImage - 1)).attr("selected", "selected");
                nextImage = parseInt(curImage - 1);
            }
            moveSlider(curImage, nextImage);
        }
    });
    $(".slider-images #next").click(function(){
        var countImages = $(".slider-images .slider-container img").length;
        if(countImages > 1) {
            var curImageId = $(".slider-images .slider-container img[selected='selected']").attr("id");
            curImage = parseInt(curImageId);
            var nextImage;
            if (curImage == (countImages - 1)) {
                $(".slider-images .slider-container img#0").attr("selected", "selected");
                nextImage = 0;
            } else {
                $(".slider-images .slider-container img#" + (curImage + 1)).attr("selected", "selected");
                nextImage = parseInt(curImage + 1);
            }
            moveSlider(curImage, nextImage);
        }
    });
});