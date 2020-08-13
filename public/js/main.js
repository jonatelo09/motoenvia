(function ($) {
    "use strict";

    // TOP Menu Sticky
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $("#sticky-header").removeClass("sticky");
            $('#back-top').fadeIn(500);
        } else {
            $("#sticky-header").addClass("sticky");
            $('#back-top').fadeIn(500);
        }
    });

    $(document).ready(function(){

        // mobile_menu
        var menu = $('ul#navigation');
        if(menu.length){
            menu.slicknav({
                prependTo: ".mobile_menu",
                closedSymbol: '+',
                openedSymbol:'-'
            });
        };

        // filter items on button click
        $('.portfolio-menu').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
        });

        //for menu active class
        $('.portfolio-menu button').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
    });

    // Search Toggle
    $("#search_input_box").hide();
    $("#search").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });
    $("#close_search").on("click", function () {
        $('#search_input_box').slideUp(500);
    });
    // Search Toggle
    $("#search_input_box").hide();
    $("#search_1").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });

})(jQuery);
$('.collapse').collapse({
    toggle: false
})
$('input[type="text"]:not(#distance,#cost)').keyup(function() {
    if(!$(this).val()){
        $(this).addClass("error");
    } else{
        $(this).removeClass("error");
    }
});

function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        return true;
    }
    return false;
}

var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 500,
    speedAsDuration: true,
    offset: 50
});

$('#shipping_method').on('change', function(){
    if(!$(this).val()){
        $(this).addClass("error");
    } else{
        $(this).removeClass("error");
    }
    setPrice()
})

function setPrice() {
    let distance = $('#distance').val();
    let shipping_method = $( "#shipping_method option:selected" ).val();
    if (distance !== '' && shipping_method !== '') {
        let total = distance * shipping_method;
        $('#cost').val('$' + Math.round((total + Number.EPSILON) * 100) / 100);
    }
}

$('#navigation li:not(.mobile), .slicknav_nav li').on('click', function(){
    $('#navigation li:not(.mobile), .slicknav_nav li').each(function(){
        $(this).children().removeClass('active-link')
    })
    $(this).children().addClass('active-link')
})

