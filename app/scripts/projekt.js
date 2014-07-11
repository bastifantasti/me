// Mixitup Filter Gallery
jQuery(document).ready(function ($) {
    $(function(){
        $('.work-grid').mixitup();
    });

// Swipebox Gallery
    $(function($) {
        $(".swipebox").swipebox();
    });

// Nivo Slider
    $(window).load(function() {
        $('.slider').nivoSlider({
            effect: 'boxRandom',
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 500,
            pauseTime: 3000,
            controlNav: true
        });
    });
});
