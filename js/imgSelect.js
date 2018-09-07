var img = document.getElementById('js--puppy-img');
var selectImg = document.querySelectorAll(".puppy-main__select");
var imgArr = [];
var i;
for(i = 0; i < selectImg.length; i++) {
    imgArr.push(selectImg[i]);
    console.log(imgArr[i].src);
    imgArr[i].addEventListener("click", function(int) {
        img.src = int.path[0].src;
    });
}