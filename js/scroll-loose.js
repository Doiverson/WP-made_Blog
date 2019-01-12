
const topContainer = document.querySelector('.top');
let bottomOfTop = topContainer.clientHeight;
let classFix = document.querySelector('.fix');
let header = document.querySelector('header');
let headerHeight = header.clientHeight;


function looseFix() {

    let windowScroll = (window.scrollY + window.innerHeight);
    let scrollInAt = bottomOfTop + 48;
    if(windowScroll >= scrollInAt + headerHeight ) {
        classFix.classList.add('loose-fix');
    } else {
        classFix.classList.remove('loose-fix');
    }
}

function headerHide() {
    console.log("Yay");
    if(window.scrollY >= headerHeight) {
        header.classList.add('header-hide');
        classFix.classList.add('fix-middle');

    } else {
        header.classList.remove('header-hide');
        classFix.classList.remove('fix-middle');
    }
}

window.addEventListener('scroll', looseFix);
window.addEventListener('scroll', headerHide);
