var container = document.getElementById('js--slide-div');
var img = document.getElementById('js--slide-main');
var trans = document.getElementById('js--slide-trans');
var imgStr = "img/slide/slide-";

var i = 1;

setInterval(function() {
    function transChange() {
        var src = trans.src;
        var arrSrc = src.split("slide-")[1];
        var i = parseFloat(arrSrc.split(".jpg")[0]);
        if(i < 6) {
            i++;
        } else {
            i = 1;
        }
        trans.src = imgStr + i + ".jpg";
    }
    function imgFade() {
        img.classList.add("u-animate-fadeOut");
    }

    function imgChange() {
        setTimeout(function() {
            img.src = trans.src;
        }, 1000);
    }

    function imgSnap() {
        img.classList.remove("u-animate-fadeOut");
    }

    transChange();
    imgFade();
    imgChange();

}, 5000);

/*

TIMING SEQUENCE:

trans change image
img fade out
trans visible
img change image
img snap in
repeat

*/