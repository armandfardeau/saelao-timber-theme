jQuery(document).ready(function($) {
    $('.navbar-toggle').on('click', function (e) {
       e.preventDefault();
        $('.navbar').toggleClass('navbar-toggled');
    });

    $('.arrow-toggle-timeline').on('click', function (e) {
        $(this).closest('.timeline-content').toggleClass('timeline-toggled');
    });

    $('.programs_single:not(:first)').hide();
    $('.programs_faq_content').hide();

    $('.programs_nav_item:first').addClass('selected');

    $('.programs_nav_item').on('click', function (e) {
        e.preventDefault();

        var $this = $(this);
        var index = $this.data('tab');

        $('.programs_nav_item').removeClass('selected');
        $this.addClass('selected');

        $('.programs_single').hide();
        $('.programs_single-' + index).show();
    });


    if (window.location.hash) {
        $('.programs_nav_item').each(function (key, item) {
            if ($(item).attr('href') === window.location.hash) {
                $(item).click();
            }
        })
    }


    $('.programs_faq_title').on('click', function (e) {
        var wasSelected = $(this).hasClass('selected');
        $('.programs_faq_content').hide();
        $('.programs_faq_title').removeClass('selected');
        if (!wasSelected) {
            $(this).addClass('selected').parent().find('.programs_faq_content').show();
        }
    });

    //

    $('.partner_text:not(:first)').hide();

    $('.partners_logo:first').addClass('selected');

    $('.partners_logo').on('hover', function (e) {
        e.preventDefault();

        var $this = $(this);
        var index = $this.data('tab');

        $('.partners_logo').removeClass('selected');
        $this.addClass('selected');

        $('.partner_text').hide();
        $('.partner_text_' + index).show();
    });

});
