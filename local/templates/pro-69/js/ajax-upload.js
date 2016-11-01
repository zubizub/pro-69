$(document).ready(function () {


    $(document).on('submit', '.popup .form', function () {
        var action = $(this).attr('id');
        var data = $(this).serialize();

        $.post("/quarters/ajax.php", {

                data: data,
                action: action
            })
            .done(function (data) {
                // console.log(data);
                $('.loft-types__content').html(data);


            });

        return false;

    });

    $('.loft-types__tab').on('click', function () {
        var filter = $(this).attr('filter');
        console.log(filter);
        var action = 'loftGroup';


        $.post("/quarters/ajax.php", {
                filter: filter,
                action: action
            })
            .done(function (data) {
                $('.loft-types__content').html(data);
                $('.sliderCard').slick({
                    dots: false,
                    infinite: true,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear'
                });

                $('.sliderCard').slick({
                    dots: false,
                    arrows: false,
                    infinite: false,
                    slidesToShow: $loftTypesTab.length,
                    //slidesToScroll: 1,
                    speed: 0,
                    asNavFor: '.loft-types__content',
                    focusOnSelect: true,
                    vertical: true,
                    //variableWidth: true,
                    verticalSwiping: true,
                    swipe: false,
                    touchMove: false,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                speed: 150,
                                slidesToShow: 1,
                                vertical: false,
                                verticalSwiping: false,
                                variableWidth: true,
                                //centerMode: true,
                                centerPadding: '0px',
                                swipe: true,
                                touchMove: true
                            }
                        }
                    ]
                });




            });
    });


    $('#popupClose').on('click', function () {
        $(this).parent().fadeOut(200);
        $('#popupBg').fadeOut(200);
    })
    $('.ajaxLotItem').on('click', function () {
        var el = $(this).attr('el');
        var lot = $(this).attr('lot');
        //console.log(el);
        var action = 'elementPopup';
        $.post("/quarters/ajax.php", {
                ELEMENT_ID: el,
                action: action
            })
            .done(function (data) {
                $('#cardLoft').html(data);
                $('#ajaxPopups').fadeIn(200);
                $('#popupBg').fadeIn(200);
                $('.btn-callback').add('.btn-def').on('click', function(){
                    //$('#ajaxPopups').fadeOut(200);
                    $('#ajaxPopupCallBack').fadeIn(200);
                    //$('#popupBg').fadeIn(200);
                    return false;
                });

                $('.btn-callback').on('click', function() {
                    $('.popup--callback .popup__title').text('Обратный звонок');
                });

                $('.btn-def').on('click', function() {
                    $('.popup--callback .popup__title').text('Забронировать');
                });


                return false;
            });

        return false;
    });


});