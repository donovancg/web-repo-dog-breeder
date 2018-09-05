var img = document.getElementById('js--select-img');
var selectImg = document.querySelectorAll(".popup__selector--img");
var imgArr = [];
var i;
for(i = 0; i < selectImg.length; i++) {
    imgArr.push(selectImg[i]);
    console.log(imgArr[i].src);
    imgArr[i].addEventListener("click", function(int) {
        img.src = int.path[0].src;
    });
}