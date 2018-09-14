var container = document.querySelector('.banner');

var i = 1;

setInterval(function() {
    if(i < 7) {
        i++;
    } else {
        i = 1;
    }
    console.log(container.style.backgroundImage);
    container.style.backgroundImage = "linear-gradient(to right, $color-banner 0%, transparent 5%, transparent 35rem, $color-banner 45rem, $color-banner 100%), url(\"../img/slide/slide_0" + i + ".jpg\");";
    console.log(i);
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