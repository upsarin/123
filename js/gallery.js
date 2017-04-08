$(document).ready(function(){
    $(".gallery-header .ico").click(function(){
        var id = this.id
        var obj = $("#gallery-" + id);
        var subj = $(".gallery-showcase-block");
        var imgMap = $(".gallery-cont-"+ id +" img");
        if($(".gallery-cont-" + id + " .imgMap").height > 0) {
            subj.animate({
                opacity: 1,
                height: $(".gallery-cont-" + id + " img")[0].height
            }, 200, function () {
                subj.html('<img src="' + $(".gallery-cont-" + id + " img")[0].src + '" />');
                $(".gallery-cont-" + id).animate({
                    height: $(".gallery-cont-" + id + " img")[1].height / 1.5 + "px",
                    opacity: 1,
                    width: "100%"
                }, 200, function () {
                    $(".gallery-header-" + id).css({
                        margin: "0px"
                    });
                    $(".gallery-cont-" + id + " .imgMap").animate({
                        height: this.height,
                        opacity: 1,
                        width: "100%",
                    }, 200, function () {
                        $(".gallery-cont-" + id).css({
                            margin: "0px 0px 10px 0px"
                        });
                        $(".points-" + id + " .point").css({
                            display: "block"
                        });

                        var destination = $(".gallery-showcase-block").offset().top;
                        $('body').animate({scrollTop: destination - 100}, 1100);
                    });

                });
            });
        } else {

        }
        console.log("gallery test");
    });
});