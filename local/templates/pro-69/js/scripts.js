$(".js-phone-mask").mask("+7 (999) 999-99-99");

$('.form__select').each(function () {
    var $cont = $(this).closest('.form__select-wrap');

    $(this).select2({
        placeholder: 'Не выбран',
        dropdownParent: $cont,
        minimumResultsForSearch: Infinity
    });
});

$('#popupClose2').on('click', function(){
    $('#ajaxPopupCallBack').fadeOut(200);
    //$('#popupBg').fadeOut(200);
});

$('.btn-callback-header').on('click', function(){
    //$('#ajaxPopups').fadeOut(200);
    $('#ajaxPopupCallBack').fadeIn(200);
    //$('#popupBg').fadeIn(200);
    return false;
});

//
//$("[data-fancybox-group]").fancybox({
//    helpers: {
//        overlay: {
//            locked: false
//        }
//    }
//});

var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#btn-pdf').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});

$('.slider0').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});

$('.slider1').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});

$('.slider2').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});

$('.gallery2Switch .switch a').click(function(){


    var group = $(this).attr('data-switch');

    $('.gallery2Switch .switch').removeClass('active');
    $(this).parent().addClass('active');

    $('.galleryGroup').hide();
    $('.group'+group).show();

    $(".slider0").slick('setPosition');
    $(".slider1").slick('setPosition');
    $(".slider2").slick('setPosition');
});
