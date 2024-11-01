
"use strict";


// ===Project===
    function projectMasonaryLayout() {
        if (jQuery('.masonary-layout').length) {
            jQuery('.masonary-layout').isotope({
                layoutMode: 'masonry'
            });
        }

        if (jQuery('.post-filter').length) {
            jQuery('.post-filter li').children('span').click(function() {
                var Self = jQuery(this);
                var selector = Self.parent().attr('data-filter');
                jQuery('.post-filter li').children('span').parent().removeClass('active');
                Self.parent().addClass('active');


                jQuery('.filter-layout').isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 500,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        }

        if (jQuery('.post-filter.has-dynamic-filter-counter').length) {
            // var allItem = $('.single-filter-item').length;

            var activeFilterItem = jQuery('.post-filter.has-dynamic-filter-counter').find('li');

            activeFilterItem.each(function() {
                var filterElement = jQuery(this).data('filter');
                console.log(filterElement);
                var count = jQuery('.gallery-content').find(filterElement).length;

                $(this).children('span').append('<span class="count"><b>' + count + '</b></span>');
            });
        };
    }


// Instance Of Fuction while Window Load event
    jQuery(window).load(function() {
        (function($) {
            projectMasonaryLayout ();            
        })(jQuery);
    });