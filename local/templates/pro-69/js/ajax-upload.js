$(document).ready(function () {


    $(document).on('submit', '.popup .form', function () {
        var action = $(this).attr('action');
        var data = $(this).serialize();

        $.post("/quarters/ajax.php", {

                data: data,
                action: action
            })
            .done(function (data) {
                // console.log(data);
                $('.loft-types__content').html(data);
                $('#ajaxPopupCallBack').fadeOut(200);
                $('.popup .form').trigger('reset');
                $(".form__select").val(null).trigger("change");
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


    $('#popupClose').add('#popupBg').on('click', function () {
        $('#ajaxPopups').fadeOut(200);
        $('#popupBg').fadeOut(200);
    });

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
                    var action="callbackCard";
                    $('#callbackForm').attr('action', action);
                    $('#callBackLot').val(lot);
                });

                $('.btn-def').on('click', function() {
                    $('.popup--callback .popup__title').text('Забронировать');
                    var action="callbackReserve";
                    $('#callbackForm').attr('action', action);
                    $('#callBackLot').val(lot);
                });

                $(window).trigger('resize');
                return false;
            });

        return false;
    });


  $('.lots__list .lot-sort').click(function(event) {
    
    console.log ('fire1');
        event.preventDefault();
        var action = 'loft-sort';
        var sortBy = $(this).attr('data-sort');
        var direction = $(this).attr('data-direction');

        $(this).attr('data-direction','asc');

        if (direction == 'desc') { 
            $(this).attr('data-direction','asc');
        } else { 
            $(this).attr('data-direction','desc');
        }
        
        $(this).removeClass('active');
        $(this).addClass('active');

         $.post("/quarters/ajax.php?AJAX=1", {

                sortBy: sortBy,
                direction: direction,
                action: action,
                AJAX: 1

            })
            .done(function (data) {
               $('.lotItems').html(data);
             
            });

        return false;

    });



});