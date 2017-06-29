/*--------splendid------------
-----常用表单验证小插件-------
----引用前需引入jquery库------
----------splendid------------*/


// 判断中文字符，以及计算字符长度
function isCn(value){
    var userNameLen = value.length;
    var cnRegexp = /[\u4e00-\u9fa5]/g;       //判断一个双字节的中文字符
    if(cnRegexp.test(value)){
        var cnChar = value.match(cnRegexp);    //利用match方法检索出中文字符并返回一个存放中文的数组
        var chineseLen = cnChar.length;         //算出实际的中文字符长度
        userNameLen += chineseLen;
    }
    return userNameLen;
}

// 用户名验证，参数：用户名输入框的dom，例如$("#username")
function regName($dom){
    var ti = $dom;
    var len = isCn($dom.val());
    if(len==0){
        ti.css("border-color","#ed4933");
        ti.next().text("请输入用户名");
    }else if(/\s+/g.test(ti.val())){
        ti.css("border-color","#ed4933");
        ti.next().text("用户名不能含有空格");
        // /^(?!_)(?!.*?_$)[a-zA-Z0-9_\u4e00-\u9fa5]+$/ 不能以_开头或结尾
    }else if( !(/^[a-zA-Z0-9_\u4e00-\u9fa5]+$/.test(ti.val())) ){
        ti.css("border-color","#ed4933");
        ti.next().text("用户名只能由中英文、数字及下划线组成");
    }else if(len<2 || len>18){
        ti.css("border-color","#ed4933");
        ti.next().text("长度只能在2-18个字符之间，中文字符为两字节");
    }else{
        ti.css("border-color","#ddd");
        ti.next().text("");
        return true;
    }
}

// 密码验证，参数：密码输入框的dom，例如$("#password")
function regPassword($dom){
    var ti = $dom;
    var len = ti.val().length;
    if(len==0){
        ti.css("border-color","#ed4933");
        ti.next().text("请输入密码");
    }else if(/\s+/g.test(ti.val())){
        ti.css("border-color","#ed4933");
        ti.next().text("密码不能含有空格");
    }else if(len<4 || len>20){
        ti.css("border-color","#ed4933");
        ti.next().text("长度只能在4-20个字符之间");
    }else{
        ti.css("border-color","#ddd");
        ti.next().text("");
        return true;
    }
}

// 再次输入密码验证，参数1：确认密码框的dom，参数2：密码框的dom
function regPwdRepeat($dom,$repeatdom){
    var ti = $dom;
    var len = ti.val().length;
    if(len==0){
        ti.css("border-color","#ed4933");
        ti.next().text("请输入密码");
    }else if(ti.val() !== $repeatdom.val()){
        ti.css("border-color","#ed4933");
        ti.next().text("两次密码输入不一致");
    }else{
        ti.css("border-color","#ddd");
        ti.next().text("");
        return true;
    }
}

// 邮箱验证，参数：邮箱输入框的dom，例如$("#email")
function regEmail($dom){
    var ti = $dom;
    var len = ti.val().length;
    var emailRegex = /^\w+@\w+\.(net|com|cn|org|so)$/g;
    if(len===0){
        ti.css("border-color","#ed4933");
        ti.next().text("请输入邮箱");
    }else if(!emailRegex.test(ti.val())){
        ti.css("border-color","#ed4933");
        ti.next().text("邮箱格式错误");
    }else{
        ti.css("border-color","#ddd");
        ti.next().text("");
        return true;
    }
}

// 手机号验证，参数：手机号输入框的dom，例如$("#phone")
function regPhone($dom){
    var ti = $dom;
    var len = ti.val().length;
    var phoneRegex = /^1\d{10}$/;
    if(len===0){
        ti.css("border-color","#ed4933");
        ti.next().text("请输入手机号");
    }else if(!phoneRegex.test(ti.val())){
        ti.css("border-color","#ed4933");
        ti.next().text("手机号格式错误");
    }else{
        ti.css("border-color","#ddd");
        ti.next().text("");
        return true;
    }
}

// 手机号和邮箱验证，参数：输入框的dom
// function regEmail(){
//     var ti = $("#reg-email");
//     var len = ti.val().length;
//     var emailRegex = /^\w+@\w+\.(net|com|cn|org|so)$/g;
//     var phoneRegex = /^1\d{10}$/;
//     if(len===0){
//         ti.css("border-color","#ed4933");
//         ti.next().text("请输入邮箱或手机号");
//     }else if(!emailRegex.test(ti.val()) && !phoneRegex.test(ti.val())){
//         ti.css("border-color","#ed4933");
//         ti.next().text("邮箱或手机格式错误");
//     }else if(emailRegex.test(ti.val())){
//         // 邮箱验证通过
//     }else if(phoneRegex.test(ti.val())){
//         // 手机验证通过
//     }else{
//         ti.css("border-color","#ddd");
//         ti.next().text("");
//         return true;
//     }
// }