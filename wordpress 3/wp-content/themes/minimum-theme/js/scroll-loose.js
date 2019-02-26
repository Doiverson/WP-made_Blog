


let fixHeight = document.querySelector('.fix').clientHeight;
let windowHeight = window.innerHeight;
let topMargin = (windowHeight - fixHeight) / 2;

let classFix = document.querySelector('.fix');
let header = document.querySelector('header');
let headerHeight = header.clientHeight;

function headerHide() {

    if(window.scrollY >= headerHeight) {
        header.classList.add('header-hide');
        classFix.classList.add('fix-middle');

    } else {
        header.classList.remove('header-hide');
        classFix.classList.remove('fix-middle');
    }
}

function looseFix() {

    let topContainer = document.querySelector('.top');
    let bottomOfTop = topContainer.scrollHeight;
    let windowScroll = (window.scrollY + window.innerHeight);
    let scrollInAt = bottomOfTop + topMargin + 40;

    if(windowScroll >= scrollInAt + headerHeight ) {
        classFix.classList.add('loose-fix');
        classFix.classList.remove('fix-middle'); // ??
    } else {
        classFix.classList.remove('loose-fix');
    }
}



window.addEventListener('scroll', headerHide);
window.addEventListener('scroll', looseFix);
