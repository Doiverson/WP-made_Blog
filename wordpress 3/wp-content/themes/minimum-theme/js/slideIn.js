// Latest article
const slideElement = document.getElementsByClassName('new-article-container');
TweenMax.to(slideElement, 2, {opacity:1, x:0 , ease:Sine.easeOut, delay:0.5});

// First 6 articles
const gridItem = document.querySelectorAll('.grid-item');
const gridArray = Array.from(gridItem);
let delayTime = 0.5;

gridArray.forEach((a) => {
    TweenMax.to(a, 2, {opacity:1, x:0 , ease:Sine.easeOut, delay:delayTime});
    delayTime += 0.5;
    console.log(a);
});


