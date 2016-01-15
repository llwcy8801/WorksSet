/**
 * Created by Jarry on 2015/12/28.
 */

$(function () {
    var h = 0, t = 0;
    $(window).scroll(function () {
        h = $(window).scrollTop();
        if (h > 200 & t > h) {
            $('.scrollnav').show();
        } else {
            $('.scrollnav').hide();
        }
        setTimeout(function () {
            t = h;
        }, 0);
    });
});

function doUp(postid)
{
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var up = parseInt(document.getElementById("doup").innerHTML);
            document.getElementById("doup").innerHTML = up+1;
        }
    }
    xmlhttp.open("GET","action.php?action=doup&postid="+postid,true);
    xmlhttp.send();
}
