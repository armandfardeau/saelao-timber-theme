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
    document.getElementById("ctn-donate").style.marginLeft = "500px";

};

function closeNav() {
  var y = document.getElementById('crossmenu');
    y.style.display = 'none';
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("headertransi").style.marginLeft = "0";
    document.getElementById("ctn-donate").style.margin = "auto";
    document.getElementById("ctn-donate").style.marginTop = "-60px";
    document.getElementById("ctn-movable").style.marginLeft = "50";
};

jQuery(document).ready(function($) {
    // $('.subcategories dd').hide(); // Hide all DDs inside .faqs
    // $('.subcategories dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){
    //     // Add class "hover" on dt when hover
    //     $(this).next().slideToggle(150); // Toggle dd when the respective dt is clicked
    // });

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

    $('.programs_faq_title').on('click', function (e) {
        var wasSelected = $(this).hasClass('selected');
        $('.programs_faq_content').hide();
        $('.programs_faq_title').removeClass('selected');
        if (!wasSelected) {
            $(this).addClass('selected').parent().find('.programs_faq_content').show();
        }
    });
});
