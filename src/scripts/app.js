function myFunction1() {
    var x = document.getElementById('myDIV1');
    var y = document.getElementById('myARROW1');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.transform ="rotate(90deg)";

    }
    else {
        x.style.display = 'none';
        y.style.transform ="rotate(0deg)";
    }
};

function myFunction2() {
    var x = document.getElementById('myDIV2');
    var y = document.getElementById('myARROW2');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.transform ="rotate(90deg)";

    }
    else {
        x.style.display = 'none';
        y.style.transform ="rotate(0deg)";
    }
};

function myFunction3() {
    var x = document.getElementById('myDIV3');
    var y = document.getElementById('myARROW3');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.transform ="rotate(90deg)";

    }
    else {
        x.style.display = 'none';
        y.style.transform ="rotate(0deg)";
    }
};

function openNav() {
  var y = document.getElementById('crossmenu');
    y.style.display = 'block';
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("headertransi").style.marginLeft = "250px";
    document.getElementById("ctn-movable").style.marginLeft = "250px";
    document.getElementById("ctn-donate").style.marginLeft = "700px";

};

function closeNav() {
  var y = document.getElementById('crossmenu');
    y.style.display = 'none';
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("headertransi").style.marginLeft = "0";
    document.getElementById("ctn-donate").style.margin = "auto";
    document.getElementById("ctn-donate").style.marginTop = "-60px";
    document.getElementById("ctn-movable").style.marginLeft = "50px";
};

jQuery(document).ready(function($) {
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
