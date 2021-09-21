var imgSlide = document.getElementsByClassName('img-slide');
var indexSlide = 0;
showSlide(indexSlide);

var changeSlide = function() {
    indexSlide++;
    if (indexSlide > 2) {
        indexSlide = 0;
    }
    showSlide(indexSlide);
}
setInterval(changeSlide, 4000)

function showSlide(index) {
    for (var i = 0; i < imgSlide.length; i++) {
        imgSlide[i].style.display = 'none';
    }
    imgSlide[index].style.display = 'block';
}