
var index = window.location.href.split("/").length-1;
var href = window.location.href.split("/")[index];
var href_regex = /controller=\w+&(\w+=\w+)&?/g;
while(res = href_regex.exec(href)){
    var href_sub = RegExp.$1.substr(0,10);
}
$(".left-nav .nav-item a[href*='"+href_sub+"']").parent().addClass("active");


function searchContent(name){
    var key = $(".search input").val();
    key = key.replace(/\s+/g,"");
    if(key.length>0){
        window.location = "admin.php?controller=admin&method="+name+"list&key="+key;
    }else{
        alert("请输入搜索内容！");
    }
}

$("#all-select").on("click",function(){
    if($(this).is(":checked")){
        $(".table .check").prop("checked",true);
    }else{
        $(".table .check").prop("checked",false);
    }
});

function selectStatus(ti,name){
    var value = $(ti).children('option:selected').val();
    if(value==1 || value==2){
        window.location = "admin.php?controller=admin&method="+name+"list&value="+value;
    }else{
        window.location = "admin.php?controller=admin&method="+name+"list";
    }
}

function delOne(id,name){
    if(confirm('确认删除这条数据吗？删除后不可恢复！')){
        window.location = "admin.php?controller=admin&method="+name+"del&id="+id;
    }
}

function delAll(name){
    var idStr = "";
    $(".check:checked").each(function(){
        idStr += $(this).attr("id") + ',';
    });
    idStr = idStr.substr(0,idStr.length-1);
    if(idStr.length>0){
        if(confirm("确认删除这些数据吗？删除后不可恢复！")){
            var url = "admin.php?controller=admin&method="+name+"delmore";
            var data = new Object();
            data.id = idStr;
            $.post(url, data, function(res){
                alert("删除多条数据成功！");
                window.location = "admin.php?controller=admin&method="+name+"list";
            });
        }
    }else{
        alert("请选择需要删除的数据！");
    }
}