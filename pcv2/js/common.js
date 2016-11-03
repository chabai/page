window.onload=function(){
    var tf = document.getElementById("topFollow");
    var wc = document.getElementById("weChat");
    tf.onmouseover = function(){
        wc.style.display = "block";
    }
    tf.onmouseout = function(){
        wc.style.display = "none";
    }
}