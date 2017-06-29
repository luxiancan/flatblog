$(function(){
    $(".js-serach-btn").on("click",function(){
        if(get_key_word().length > 0){
            window.location  = href.replace(/&word=.+/g,"") + "&word=" + get_key_word();
        }else{
            alert("请在输入框搜索想搜索的内容");
        }
    });

    $(".search-header").keypress(function(e){
        // 回车键事件
        if(e.which == 13){
            $(".js-serach-btn").click();
        }
    });

    /*搜索导航跳转*/
    $("#js-search-nav a").on("click",function(){
        var data_page = $(this).attr("data-page");
        if(data_page=="index"){
            window.location = href.replace(/&type=.+/g,"").replace(/&word=.+/g,"") + "&word=" + get_key_word();
        }else{
            window.location = href.replace(/&type=.+/g,"").replace(/&word=.+/g,"") + "&type=" + $(this).attr("data-page") + "&word=" + get_key_word();
        }
    });

    /*搜索首页跳转到博文、问题也*/
    $(".href-wrap a").on("click",function(){
        var data_page = $(this).attr("data-page");
        $("#js-search-nav a[data-page='"+data_page+"']").trigger("click");
    });

})

function get_key_word(){
    var key_word = $("#js-serach-ipt").val();
    return key_word.length>0?key_word:'';
}