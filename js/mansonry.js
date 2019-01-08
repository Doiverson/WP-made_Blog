
    var $grid = $('.grid').masonry({
        columnWidth: 204,
        itemSelector: '.grid-item',
        gutter: 4,
        fitWidth: true
    });

$(window).on('load',function() {
    $grid.imagesLoaded().progress(function () {
        $grid.masonry('layout');
    });
});
