//Topページだけに適用したい

window.onload = function loadTopMargin() {

    console.log("Loaded top margin");

    const mediaQueryA = window.matchMedia( "(min-width: 1000px)" );
    const wrapperHeight = document.getElementById('site-wrapper');
    let header1 = document.querySelector('header').clientHeight;
    let fixHeight = document.querySelector('.fix').clientHeight;
    let windowHeight = window.innerHeight;
    let topMargin = (windowHeight - fixHeight) / 2 + header1;

    if(mediaQueryA.matches) {
        wrapperHeight.style.paddingTop = topMargin + 'px';
    } else {
        wrapperHeight.style.paddingTop = 0;
    }
}

