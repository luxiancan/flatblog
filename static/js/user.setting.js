function uploadImage(ti) {
    //判断是否有选择上传文件
    var imgPath = $("#upload").val();
    if (imgPath == "") {
        alert("请选择上传图片！");
        return;
    }
    //判断上传文件的后缀名
    var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
    if (strExtension != 'jpg' && strExtension != 'gif' && strExtension != 'png' && strExtension != 'jpeg') {
        alert("请选择图片文件");
        return;
    }

    var objUrl = getObjectURL(ti.files[0]); //获取对象的临时路径
    if(objUrl){
        $("#js-portrait").attr("src",objUrl);
    }
}

function getObjectURL(file){
    var url = null ;
    if(window.createObjectURL!=undefined){      // basic
        url = window.createObjectURL(file) ;
    }else if(window.URL!=undefined){            // mozilla(firefox)
        url = window.URL.createObjectURL(file) ;
    }else if(window.webkitURL!=undefined){      // webkit or chrome
        url = window.webkitURL.createObjectURL(file) ;
    }
    return url;
}

$(function(){
    $(".avator-btn-fake").on("click", function(e){
        $("#upload").trigger("click");
    });

    $("#upload").change(function(){
        uploadImage(this);
    });

    $(".js-avator-save").on("click",function(){
        $("#js-avator-submit").trigger("click");
    });

    $(".js-modal-close").on("click",function(){

    });

    /*修改个人信息*/
    var input_num_max = 125;
    // var aboutme_length = $("#aboutme").val().length;
    // $(".js-numCanInput").html("还可以输入"+(input_num_max-aboutme_length)+"个字符");
    $('#aboutme').bind('input propertychange', check_aboutme);
    function check_aboutme(){
        var now_length = $("#aboutme").val().length;
        var can_input_num = input_num_max - now_length;
        if(can_input_num >= 0){
            $(".js-numCanInput").html("还可以输入"+can_input_num+"个字符");
            return true;
        }else{
            $(".js-numCanInput").html("已超出<span class='font-red'>"+Math.abs(can_input_num)+"</span>个字符");
            return false;
        }
    };
    check_aboutme();

    $("#js-job option").each(function(){
        if($(this).val().length>0 && $(this).val() == $("#js-job").attr("data-value")){
            $(this).attr("selected","selected");
        }
    });
    // $("#js-job").val($("#js-job").attr("data-value"));
    $("#js-username-ipt").blur(function(){
        regName($(this));
    });
    $("#js-info-save").on("click",function(){
        var job_error = $("#js-job").next(".errorHint");
        var username = $("#js-username-ipt").val(),
        job = $("#js-job").find("option:selected").val(),
        sex = $('#js-sex input[name="sex"]:checked').val(),
        signature = $('#aboutme').val();
        if(regName($("#js-username-ipt")) && check_aboutme()){
            if(job.length>0){
                job_error.text("");
                var url = "index.php?controller=index&method=ajaxinfosave";
                var data = {
                    'id': id,
                    'username': username,
                    'job': job,
                    'sex': sex,
                    'signature': signature
                };
                $.post(url, data, function(res){
                    var jsonobj = JSON.parse(res);
                    if(jsonobj.result=='success'){
                        alert("修改成功！");
                        letReload();
                    }else{
                        $("#js-username-ipt").next(".errorHint").text("昵称已被使用，更换一个试试~");
                    }
                });
            }else{
                job_error.text("请选择一个选项");
            }
        }
    });
    $("#js-username-ipt").keypress(function(e){
        // 回车键事件
        if(e.which == 13){
            $("#js-info-save").click();
        }
    });
    /*修改个人信息 end*/


    var old_pwd = $("#js-old-pwd");
    var new_pwd = $("#js-new-pwd");
    var new_pwd_repeat = $("#js-new-pwd-repeat");

    old_pwd.blur(function(){
        regPassword($(this));
    });
    new_pwd.blur(function(){
        regPassword($(this));
    });
    new_pwd_repeat.blur(function(){
        regPwdRepeat($(this),new_pwd);
    });

    $("#js-password-save").on("click",function(){
        if(regPassword(old_pwd) && regPassword(new_pwd) && regPwdRepeat(new_pwd_repeat,new_pwd) ){
            if(old_pwd.val() !== new_pwd.val()){
                var url = "index.php?controller=index&method=ajaxpwdsave";
                var data = {
                    'id': id,
                    'old_pwd': old_pwd.val(),
                    'new_pwd': new_pwd.val()
                };
                $.post(url, data, function(res){
                    var jsonobj = JSON.parse(res);
                    if(jsonobj.result=='success'){
                        alert("修改成功！");
                        letReload();
                    }else{
                        old_pwd.next(".errorHint").text("密码错误！");
                    }
                });
            }else{
                new_pwd.next(".errorHint").text("新密码不能和原始密码一致！");
            }
        }
    });
    $("#js-pwd-content").keypress(function(e){
        // 回车键事件
        if(e.which == 13){
            $("#js-password-save").click();
        }
    });
})