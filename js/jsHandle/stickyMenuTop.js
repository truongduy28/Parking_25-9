const navMenu = document.querySelector('#nav_menu');
let navMenuTop = navMenu.offsetTop;
window.onscroll = function() {
    if (window.scrollY > navMenuTop) {
        navMenu.classList.add('sticky');
    } else {
        navMenu.classList.remove('sticky');
    }
}