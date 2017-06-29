$(function(){
    $(window).on("scroll",function(){
        if($(window).scrollTop() >= 70){
            var sliderLeft = $(".slider").offset().left;
            $(".slider .user-pic img").addClass("suimg");
            $(".slider .user-pic-wrap").addClass("su-user-pic-wrap");
            $(".slider").css({
                position: "fixed",
                left: sliderLeft + "px",
                top: "50px"
            });
        }else{
            $(".slider .user-pic img").removeClass("suimg");
            $(".slider .user-pic-wrap").removeClass("su-user-pic-wrap");
            $(".slider").css({
                position: "absolute",
                left: 0,
                top: "-170px"
            });
        }
    });

    $(window).trigger("scroll");

    var href_regex = /id=\d+&(\w+=\w+)&?/g;
    while(res = href_regex.exec(href)){
        var href_sub = RegExp.$1;
    }

    $(".slider li a[href='"+href+"']").addClass("active");
    $(".slider li a[href*='"+href_sub+"']").addClass("active").parent().siblings().find("a").removeClass("active");

    $("#all-select").on("click",function(){
        if($(this).is(":checked")){
            $("#lstBox .check").prop("checked",true);
        }else{
            $("#lstBox .check").prop("checked",false);
        }
    });


});

