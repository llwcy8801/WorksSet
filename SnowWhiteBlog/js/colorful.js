/**
 * Created by Jarry on 2015/12/22.
 */
$(function(){
    $(".box").mouseenter(function(){
        var box=$(this);
        if(box.hasClass("box2")){
            box.removeClass("box2");
            box.addClass("box2");
        }else{
            box.addClass("box2");
        }
        setTimeout(function(){
            box.removeClass("box2");
        },2000);

    })
})