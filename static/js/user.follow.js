
var uid = Number($("#nav .user").attr("data-uid"));
var fid = Number($(".follow-wrap").attr("data-uid"));

$(".js-already-follow[data-type='1']").removeClass("hide");
$(".js-add-follow[data-type='1']").addClass("hide");


$(document).on("click",".js-add-follow",function(){
    if(uid==fid){
        alert("对不起你不能对自己进行关注！");
    }else{
        var $this = $(this);
        var $already_follow = $(".js-already-follow");
        var url = "index.php?controller=index&method=ajaxuserfollow";
        var data = new Object();
        data.uid = uid;
        data.fid = fid;
        data.time = getTimestamp();
        $.post(url, data, function(res){
            if(res=='success'){
                $this.addClass("hide");
                $already_follow.removeClass("hide");
            }else{
                alert("操作失败！");
            }
        });
    }
});

$(document).on("click",".js-cancel-follow",function(){
    var $already_follow = $(".js-already-follow");
    var $add_follow = $(".js-add-follow");
    var url = "index.php?controller=index&method=ajaxdeluserfollow";
    var data = new Object();
    data.uid = uid;
    data.fid = fid;
    $.post(url, data, function(res){
        if(res=='success'){
            $already_follow.addClass("hide");
            $add_follow.removeClass("hide");
        }else{
            alert("操作失败！");
        }
    });
});


$(".js-btn-line").each(function(){
    var is_fans = $(this).attr("data-is-fans"),
        is_concern = $(this).attr("data-is-concern"),
        concern_follow = $(this).find(".js-concern-follow"),
        concern_already = $(this).find(".js-concern-already"),
        concern_mutual = $(this).find(".js-concern-mutual"),
        concern_msg = $(this).find(".js-concern-msg");
    if(is_fans=="1" && is_concern=="1"){
        /*显示互相关注按钮*/
        concern_follow.addClass("hide");
        concern_already.addClass("hide");
        concern_mutual.removeClass("hide");
        concern_msg.removeClass("hide");
    }else if(is_fans=="2" && is_concern=="1"){
        /*显示已关注按钮*/
        concern_follow.addClass("hide");
        concern_already.removeClass("hide");
        concern_mutual.addClass("hide");
        concern_msg.removeClass("hide");
    }else{
        /*显示关注按钮*/
        concern_follow.removeClass("hide");
        concern_already.addClass("hide");
        concern_mutual.addClass("hide");
        concern_msg.addClass("hide");
    }
});


$(document).on("click",".js-concern-mutual",function(){
    var $this = $(this);
    delConcern($this);
});

$(document).on("click",".js-concern-already",function(){
    var $this = $(this);
    delConcern($this);
});

function delConcern($this){
    window.fid = $this.attr("data-uid");
    var concern = $this.siblings(".js-concern-follow");
    var msg = $this.siblings(".js-concern-msg");
    var url = "index.php?controller=index&method=ajaxdeluserfollow";
    var data = new Object();
    data.uid = uid;
    data.fid = fid;
    $.post(url, data, function(res){
        if(res=='success'){
            $this.addClass("hide");
            msg.addClass("hide");
            concern.removeClass("hide");
        }
    });
}

$(document).on("click",".js-concern-follow",function(){
    window.fid = $(this).attr("data-uid");
    var $this = $(this);
    var concern_mutual = $this.parents(".js-btn-line[data-is-fans='1']").find(".js-concern-mutual");
    var concern_already = $this.parents(".js-btn-line[data-is-fans='2']").find(".js-concern-already");
    var msg = $this.siblings(".js-concern-msg");
    var url = "index.php?controller=index&method=ajaxuserfollow";
    var data = new Object();
    data.uid = uid;
    data.fid = fid;
    data.time = getTimestamp();
    $.post(url, data, function(res){
        if(res=='success'){
            $this.addClass("hide");
            concern_mutual.removeClass("hide");
            concern_already.removeClass("hide");
            msg.removeClass("hide");
        }
    });
});