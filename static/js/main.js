var index = window.location.href.split("/").length-1;
var href = window.location.href.split("/")[index];
const articlewrite = 'articlewrite';
const wendawrite = 'wendawrite';

// 顶部导航高亮
$("#nav .menu li a[href='"+href+"']").addClass("active");

// 格式化当前时间
function showTime(){
    var date = new Date(),
        month = date.getMonth() + 1,
        strDate = date.getDate(),
        hour = date.getHours(),
        minute = date.getMinutes(),
        second = date.getSeconds();
    var currentdate = date.getFullYear()+"-"+addZero(month)+"-"+addZero(strDate)+" "+addZero(hour)+":"+addZero(minute)+":"+addZero(second);
    return currentdate;
}
function addZero(val){
    if(val >= 0 && val <= 9){
        return val = "0" + val;
    }else{
        return val;
    }
}


// 侧边栏出现、隐藏
var sidebar = $("#sidebar"),
    mask = $(".mask"),
    sidebar_trigger = $("#sidebar_trigger"),
    backTop = $(".back-to-top"),
    close = $(".close_sidebar");
function showSideBar(){
    mask.fadeIn();
    sidebar.css('right',0);
}
function hideSideBar(){
    mask.fadeOut();
    sidebar.css('right',-sidebar.width());
}
sidebar_trigger.on("click",showSideBar);
close.on("click",hideSideBar);
mask.on("click",hideSideBar);

// 回到顶部功能
backTop.on("click",function(){
    $("html, body").animate({
        scrollTop: 0
    }, 600);
});
$(window).on("scroll",function(){
    // 如果已滚动的部分高于窗口的高度
    if($(window).scrollTop() > 0){
        backTop.fadeIn();
    }else{
        backTop.fadeOut();
    }
});
//浏览器刷新触发scroll事件
$(window).trigger("scroll");


/*登录注册按钮*/
$('#js-signin-btn').on("click",function(){
    $('#login-userName').focus();
    active($(".rl-moal .modal-header .nav-tabs li:first"));
    active($(".rl-moal .modal-body .tab-pane:first"));
});
$('#js-signup-btn').on("click",function(){
    active($(".rl-moal .modal-header .nav-tabs li:last"));
    active($(".rl-moal .modal-body .tab-pane:last"));
});
function active(ti){
    return ti.addClass("active").siblings().removeClass("active");
}

// 验证是否已登录
// function islogin(method){
//     var url = "index.php?controller=index&method=islogin";
//     var data = new Object();
//     $.getJSON(url, data, function(res){
//         var state = res.state;
//         switch(state){
//             case 'nologin':
//                 $("#js-signin-btn").trigger("click");
//                 break;
//             case 'login':
//                 window.location = "index.php?controller=index&method="+method;
//                 break;
//         }
//     });
// }


// 模拟登陆、注册按钮
$(".js-lgn").on("click",function(){
    $("#js-signin-btn").trigger("click");
});
$(".js-rgr").on("click",function(){
    $("#js-signup-btn").trigger("click");
});

$("#signin").on("show.bs.modal", function(e) {
    initLogin();
});

$(".sign-btn").on("click", function() {
    initLogin();
});

function initLogin(){
    $("#signin .field").css("border-color","#ddd");
    $("#signin .error-tip").text("");
}

// 登录验证
$("#login-userName").blur(function(){
    regName($(this));
});
$("#login-password").blur(function(){
    regPassword($(this));
});
$("#signin-btn").on("click",function(){
    if(logintest()){
        var login_url = "index.php?controller=index&method=login";
        var login_data = new Object();
        login_data.username = $("#login-userName").val();
        login_data.password = $("#login-password").val();
        $.post(login_url, login_data, function(res){
            var jsonobj = JSON.parse(res);
            switch(jsonobj.login){
                case 'fail':
                    $("#login-userName").css("border-color","#ed4933");
                    $("#login-userName").parent().find(".error-tip").text("登录名或者密码错误！");
                    break;
                case 'success':
                    alert("登陆成功！");
                    window.location = "index.php";
                    break;
            }
        });
    }
});
// 登录提交数据前验证
function logintest(){
    if(regName($("#login-userName"))){
        if(regPassword($("#login-password"))){
            // var url = "index.php?controller=index&method=get_login_before_url";
            // var data = new Object;
            // data.url = href;
            // $.getJSON(url, data, function(res){

            // });
            return true;
        }else{ return false; }
    }else{ return false; }
}
$("#login-form").keypress(function(e){
    // 回车键事件
    if(e.which == 13){
        $("#signin-btn").click();
    }
});

// 注册验证
$("#reg-userName").blur(function(){
    regName($(this));
});
$("#reg-password").blur(function(){
    regPassword($(this));
});
$("#reg-pwdRepeat").blur(function(){
    regPwdRepeat($(this),$("#reg-password"));
});
$("#reg-email").blur(function(){
    regEmail($(this));
});
$("#signup-btn").on("click",function(){
    if(registertest()){
        var register_url = "index.php?controller=index&method=register";
        var register_data = new Object();
        register_data.username = $("#reg-userName").val();
        register_data.password = $("#reg-password").val();
        register_data.pwd_repeat = $("#reg-pwdRepeat").val();
        register_data.email = $("#reg-email").val();
        register_data.create_at = getTimestamp();
        register_data.last_login_time = getTimestamp();
        $.post(register_url, register_data, function(res){
            var jsonobj = JSON.parse(res);
            switch(jsonobj.register){
                case 'fail':
                    $("#reg-userName").css("border-color","#ed4933");
                    $("#reg-userName").parent().find(".error-tip").text("用户名已被使用，换一个试试~");
                    break;
                case 'success':
                    alert("注册成功！");
                    window.location = "index.php";
                    break;
            }
        });
    }
});
// 注册提交数据前验证
function registertest(){
    if(regName($("#reg-userName"))){
        if(regPassword($("#reg-password"))){
            if(regPwdRepeat($("#reg-pwdRepeat"),$("#reg-password"))){
                if(regEmail($("#reg-email"))){
                    return true;
                }else{ return false; }
            }else{ return false; }
        }else{ return false; }
    }else{ return false; }
}
$("#register-form").keypress(function(e){
    // 回车键事件
    if(e.which == 13){
        $("#signup-btn").click();
    }
});

/*头部搜索框*/
$(".js-top-search").on("click",function(){
    if(get_top_key_word().length > 0){
        window.location  = "index.php?controller=index&method=search&word="+get_top_key_word();
    }else{
        alert("请输入搜索内容！");
    }
});

$("#nav .search-wrap").keypress(function(e){
    // 回车键事件
    if(e.which == 13){
        $(".js-top-search").click();
    }
});

function get_top_key_word(){
    var key_word = $("#js-top-search-ipt").val();
    return key_word.length>0?key_word:'';
}
