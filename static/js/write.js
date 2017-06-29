var title_ipt = $(".rel-title"),
    tle_err = $(".rel-tle .form-ipt-error"),
    tag_err = $(".tag-selector .form-ipt-error");


$("#js-tags .for-choice").on("click",function(){
    var len = $("#js-tags .for-choice.active").length;
    if(len<3){
        $(this).toggleClass("active");
    }else{
        $(this).removeClass("active");
    }
});

var old_tag = $("#js-tags .for-choice.active");
var old_tag_name = "";
old_tag_name = getSelectTag(old_tag,old_tag_name);

function getSelectTag(tag,tag_name){
    tag.each(function(){
        tag_name += $(this).text() + ",";
    });
    return (tag_name.substr(tag_name.length-1)==',')?tag_name.substr(0,tag_name.length-1):tag_name;
}
