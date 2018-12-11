$(document).ready(function(){
    $("#on").click(function(){
        $("#js-image").attr("src","./pic_bulbon.gif");
    });
    $("#off").click(function(){
        $("#js-image").attr("src","./pic_bulboff.gif");
    });
    $("#onoff").click(function(){
        if($("#js-image").attr("src")==="./pic_bulboff.gif") {
            $("#js-image").attr("src", "./pic_bulbon.gif");
        } else{
            $("#js-image").attr("src", "./pic_bulboff.gif");
        }
     });
});



