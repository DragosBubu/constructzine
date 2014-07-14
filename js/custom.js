jQuery(document).ready(function($) {
        $('.similar-articles-box').carouFredSel({
                responsive: true,
                prev: '.similar-articles-prev',
                next: '.similar-articles-next',
                width: '100%',
                scroll: 2,
                items: {
                        height: 'auto',
                        visible: {
                                min: 2,
                                max: 6
                        }
                }
        });


/*
** Toggle - Services Page
*/
        $(".service-button-box").click(function(){
                $(".content-right-entry").slideUp("slow");
                $(".content-right-entry").eq($(".service-button-box").index($(this))).fadeToggle("slow");
                $(this).addClass('active').siblings().removeClass('active');
        });

/*
** FancyBox
*/
        $(".fancybox").fancybox();

/*
** Masonry
*/

        var $container = $('.gallery');

        $container.imagesLoaded( function(){
                $container.masonry({
                        itemSelector : 'dl.gallery-item'
                });
        });


/*
** Limit menu number of lists
*/
var full_width = 0;

jQuery(".navigation-menu ul:first > li").each(function( index ) {
        if((jQuery(this).width() + full_width) > 540) {
                jQuery(this).remove();
        }
        full_width = full_width + jQuery(this).width();
});

/*
** Responsive Menu
*/
        $('.openresponsivemenu').click(function() {
                $('.nav-container').toggleClass("responsivemenu");
        });
});