$("#forgot-userName").blur(function(){
    regName($(this));
});
$("#forgot-email").blur(function(){
    regEmail($(this));
});
$(".page-wrap").on("click","#js-forgot-submit",function(){
    if(forgotTest()){
        var forgot_content = $("#js-forgot-content"),
            forgot_result = $("#js-forgot-result"),
            forgot_username_ipt = $("#js-forgot-username-ipt"),
            forgot_email_ipt = $("#js-forgot-email-ipt"),
            forgot_error = $("#js-forgot-error"),
            forgot_url = "index.php?controller=user&method=ajaxforgot";
        var forgot_data = {username:$("#forgot-userName").val(),email:$("#forgot-email").val()};
        $.post(forgot_url, forgot_data, function(res){
            var jsonobj = JSON.parse(res);
            switch(jsonobj.msg){
                case 'fail':
                    forgot_error.text("登录名和邮箱不匹配！");
                    break;
                case 'success':
                    forgot_error.text("");
                    document.title = "扁平化博客-重设密码";
                    forgot_content.addClass("hide");
                    forgot_result.removeClass("hide");
                    forgot_username_ipt.val(forgot_data.username);
                    forgot_email_ipt.val(forgot_data.email);
                    break;
            }
        });
    }
});
// 提交数据前验证
function forgotTest(){
    if(regName($("#forgot-userName"))){
        if(regEmail($("#forgot-email"))){
            return true;
        }else{ return false; }
    }else{ return false; }
}
$("#forgot-form").keypress(function(e){
    // 回车键事件
    if(e.which == 13){
        $("#js-forgot-submit").click();
    }
});


$("#js-newpassword").blur(function(){
    regPassword($(this));
});
$("#js-repeat-newpwd").blur(function(){
    regPwdRepeat($(this),$("#js-newpassword"));
});
$(".page-wrap").on("click","#js-newpwd-submit",function(){
    if(newpwdTest()){
        var newpassword = $("#js-newpassword"),
            repeat_newpwd = $("#js-repeat-newpwd"),
            forgot_username_ipt = $("#js-forgot-username-ipt"),
            forgot_email_ipt = $("#js-forgot-email-ipt"),
            forgot_result_error = $("#js-forgot-result-error"),
            newpwd_url = "index.php?controller=user&method=ajaxnewpwd";
        var newpwd_data = {
            username: forgot_username_ipt.val(),
            email: forgot_email_ipt.val(),
            newpassword: newpassword.val(),
            updated_at: getTimestamp()
        }
        if(newpwd_data.username !== "" && newpwd_data.email !== ""){
           $.post(newpwd_url, newpwd_data, function(res){
                var jsonobj = JSON.parse(res);
                switch(jsonobj.msg){
                    case 'fail':
                        forgot_result_error.text("修改失败！");
                        break;
                    case 'success':
                        forgot_result_error.text("");
                        alert("修改成功！");
                        window.location = "index.php";
                        break;
                }
            });
        }else{
            alert("非法操作！");
            location.reload(true);
        }
    }
});
function newpwdTest(){
    if(regPassword($("#js-newpassword"))){
        if(regPwdRepeat($("#js-repeat-newpwd"),$("#js-newpassword"))){
            return true;
        }else{ return false; }
    }else{ return false; }
}
$("#forgot-result-form").keypress(function(e){
    // 回车键事件
    if(e.which == 13){
        $("#js-newpwd-submit").click();
    }
});