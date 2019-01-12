
const mediaQuery = window.matchMedia( "(min-width: 1000px)" );

let resizeTimer;
const interval = Math.floor(1000 / 60 * 10);

function loadTopMargin(mq) {
    const wrapperHeight = document.getElementById('site-wrapper');
    let header1 = document.querySelector('header').clientHeight;
    let fixHeight = document.querySelector('.fix').clientHeight;
    let windowHeight = window.innerHeight;
    let topMargin = (windowHeight - fixHeight) / 2 + header1;

    if(mq.matches) {
        wrapperHeight.style.paddingTop = topMargin + 'px';
    } else {
        wrapperHeight.style.paddingTop = 0;
    }
}

window.addEventListener('resize', function () {
    console.log('resizing');
    if (resizeTimer !== false) {
        clearTimeout(resizeTimer);
    }
    resizeTimer = setTimeout(function () {
        console.log('resized');
        loadTopMargin(mediaQuery);
    }, interval);
});
