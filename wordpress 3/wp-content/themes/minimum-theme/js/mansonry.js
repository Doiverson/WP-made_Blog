jQuery(function($){
    var $grid = $('.grid').masonry({
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        gutter: 26,
        percentPosition: true
    });

    $(window).on('load',function() {
        $grid.imagesLoaded().progress(function () {
            $grid.masonry('layout');
        });
    });
});
