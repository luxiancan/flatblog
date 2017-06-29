var index = window.location.href.split("/").length-1;
var href = window.location.href.split("/")[index];

// 获取当前时间戳
function getTimestamp(){
    var timestamp = Date.parse(new Date());
    return timestamp/1000;
}

function letReload(){
    location.reload(true);
}

// 获取url ? 号之后的参数和值
function parse_url(href){
    // controller=admin&method=articleslist&value=1
    var pattern = /(\w+)=(\w+)/ig;
    var parames = {};
    href.replace(pattern, function(a, b, c){
        parames[b] = c;
    });
    // 这是最关键的.当replace匹配到controller=admin时.那么就用执行function(a,b,c);其中a的值为:controller=admin,b的值为controller,c的值为admin;
    // (这是反向引用.因为在定义正则表达式的时候有两个子匹配)
    // 然后将数组的key为controller的值赋为admin,完成,以此类推
    return parames;
}
var parames = parse_url(href);
var props = "";
for(var p in parames){
    if(typeof(parames[p])=="function"){
        parames[p]();
    }else{
        props += p + "=" + parames[p] + "&";
    }
}
props = props.substr(0,props.length-1);

// var regex = /controller=(\w+)&?method=(\w+)&?/g;
// while(regex.exec(href)){
//     var controller = RegExp.$1;
//     var method = RegExp.$2;
// }


var regex_get_id  = /id=(\d+)&?/g;
while(regex_get_id.exec(href)){
    var id = RegExp.$1;
}

var page_regex = /page=(\d+)&?/g;
while(page_regex.exec(href)){
    var page_num = RegExp.$1;
}

var status_regex = /status=(\w+)&?/g;
while(status_regex.exec(href)){
    var status = RegExp.$1;
}

var keyword_regex = /word=(\w+)&?/g;
while(keyword_regex.exec(href)){
    var keyword = RegExp.$1;
}

$(".js-gobtn").on("click",function(){
    var num = parseInt($(".js-page-text").val());
    var pages = $(".gopage").attr("data-pages");
    if(num>0 && num<=pages){
        if(href.indexOf("page") > 0){
            window.location = href.replace(/&page=\d+/g,"&page="+num);
        }else{
            window.location = href+"&page="+num;
        }
    }else{
        alert("请输入正确的页码！");
    }
});

$(".js-gopage").keypress(function(e){
    // 回车键事件
    if(e.which == 13){
        $(".js-gobtn").click();
    }
});

/*添加头部查看部分href属性*/
$(".js-qsort-see .defalut").attr("href",function(){
    if(href.indexOf("status") > 0){
        return href.replace(/&status=\w+/g,"");
    }else{
        return href;
    }
});
$(".js-qsort-see .js-see").attr("href",function(){
    if(href.indexOf("status") > 0){
        return href.replace(/&status=\w+/g,"&status="+$(this).attr("data-see"));
    }else if(href.indexOf("page") > 0){
        return href.replace(/&page=\d+/g,"")+"&status="+$(this).attr("data-see")+"&page="+page_num;
    }else{
        return href+"&status="+$(this).attr("data-see");
    }
});

/*头部查看部分定位*/
$(".js-qsort-see .js-see").each(function(){
    if(status && $(this).attr("data-see") == status){
        $(this).addClass("active");
    }
});




