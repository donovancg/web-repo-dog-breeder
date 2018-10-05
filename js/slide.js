var container = document.getElementById("js--banner");

container.style.backgroundImage = 'linear-gradient(to right, #76B29B 0%, transparent 5%, transparent 32rem, #76B29B 37rem, #76B29B 100%), url("img/slide/slide_01.jpg")';

var i = 1;

setInterval(function() {
    if(i < 6) {
        i++;
    } else {
        i = 1;
    }
    
    container.style.backgroundImage = 'linear-gradient(to right, #76B29B 0%, transparent 5%, transparent 32rem, #76B29B 37rem, #76B29B 100%), url("img/slide/slide_0' + i + '.jpg")';
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