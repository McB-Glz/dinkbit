var wW = $(window).width();
var wH = $(window).height();
var flag = false;

function mobileToggle(){
    if (flag == false) {
        $('.mobile-menu').velocity("transition.fadeIn", { duration: 500 });
        flag = true;
    } else if (flag == true) {
        $('.mobile-menu').velocity("transition.fadeOut", { duration: 500 });
        flag = false;
    }
}

function mobileMenu(){
    wW = $(window).width();
    wH = $(window).height();

    var mH = wH -80;

    $('.mobile-menu').css({
        width : wW,
        height: mH
    });
    $('.mobile-btn1').css({
        width : wW,
        height: (mH/6),
        'padding-top': ((mH/6)/2)-22
    });
}

function mobileFilter(){
    if (flag == false) {
        $('#proyect-sidebar').css({
            left: 0,
            opacity: 1
        });
        flag = true;
    } else if (flag == true) {
        $('#proyect-sidebar').css({
            left: '-100%',
            opacity: 0
        });
        flag = false;
    }
}

function proyectosSize(){
    var wrapper = $('#proyect-grid .one-proyect .img-wrapper');

    $('.cover').each(function() {
        var $this = $(this);
        var h = $this.height();
        wrapper.css({
            height: h
        });
    });
}
function backgroundCover(selector){
    $(selector).each(function(){

        var $container = $(this);
        var $container_width = $(this).outerWidth();
        var $container_height = $(this).outerHeight();

        var image_url = $container.css('background-image');
        var image;
        image_url = image_url.match(/^url\("?(.+?)"?\)$/);

        if (image_url[1]) {
            image_url = image_url[1];
            image = new Image();

            image.src = image_url;

            // just in case it is not already loaded
            $(image).load(function () {
                var cW = $container_width;
            var cH = $container_height;
            var iW = image.width;
            var iH = image.height;

            // If image is to narrow scale to match container width
            if (iW < cW) {
                var ratio = cW / iW;
                iW = cW;
                iH = iH * ratio;
            }

            // If image is too short scale to match container height
                if (iH < cH) {
                var ratio = cH / iH;
                iH = cH;
                iW = iW * ratio;
            }

            // If image is bigger in both dimensions scale down to match an edge
            if (iW > cW && iH > cH) {
                var widthRatio = cW / iW;
                var heightRatio = cH / iH;

                if (widthRatio > heightRatio) {
                    iW = cW;
                    iH = iH * widthRatio;
                } else {
                    iH = cH;
                    iW = iW * heightRatio;
                }
            }

            $container.css({ 
                    "background-size": iW+"px "+iH+"px"
                });
            });
        }
    });
}

$(window).resize(function(){
    clearTimeout(timeOut);
    timeOut = setTimeout(function(){ 
        proyectosSize();
    }, 300);
});

function contactFormValidation(){
    $('#contactForm').formValidation({
        framework: 'bootstrap',
        message: 'Por favor introduce la información solicitada.',                        
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            message: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu duda o comentario.'
                    }
                }
            },
            name: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu nombre.'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu email.'
                    },
                    emailAddress: {
                        message: 'Por favor verifíca tu email.'
                    }
                }
            },
            tel: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu teléfono.'
                    },
                    regexp: {
                        regexp: /^\d{8,14}$/,
                        message: 'Introduce un teléfono valido.'
                    },
                }
            },
        }
    })
    .on('success.form.fv', function(e) {

          e.preventDefault();

          var $form = $(e.target);

          var $response_container = $('#response');

          $form.find('button').attr('disabled', 'disabled');
          $form.find('button').addClass('disabled');

          var formData = $form.serialize();

          $.ajax({
              type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
              url         : base_url+'/send-email', // the url where we want to POST
              data        : formData, // our data object
              dataType    : 'json', // what type of data do we expect back from the server
              encode      : true
          })
          .done(function(data) {

              if (!$response_container.is(':visible')) {
                  $response_container.slideToggle('fast');
              }

              $response_container.html(data.message);

              if (data.status == 'error') {

                  $response_container.addClass('alert-danger');

              }else{

                  $response_container.addClass('alert-success');

                  $form.formValidation('resetForm', true);
              }

              $form.find('button').removeAttr('disabled');
              $form.find('button').removeClass('disabled');

          });
        });
}

$(document).ready(function() {

    new WOW().init();

    // Top Menu Animations

    $('.navbar').velocity("transition.fadeIn", { duration: 1500 });
    $('.js-menu').velocity("transition.fadeIn", { stagger: 75} ,{ duration: 1000 });

    //Mobile Menu

    $('#js-mobile-menu').click(function(){
        mobileToggle();
        mobileMenu();
    });

    $('.mobile-btn1, .mobile-btn2, .mobile-btn3').click(function(){
        mobileToggle();
    });

    //Smoooth Scroll

    $(".js-scroll").click(function(){
        $('#que-hacemos').velocity("scroll", { 
                  duration: 250
        });
    });

    // Team Section

    $('.team-top div').on("touchstart", function (e) {
        'use strict'; //satisfy code inspectors
        var $this = $(this);
        if ($this.hasClass('hover') || $this.next('div').hasClass('hover')) {
            $('.team-top div').removeClass('hover');
            return true;
        } else {
            $this.next('div').addClass('hover');
            //$this.not(this).removeClass('hover');
            e.preventDefault();
            return false; //extra, and to make sure the function has consistent return points
        }
    });

    // Proyectos

    $('.pinned').each(function() {
        var $this = $(this);
        var h = $this.height();
        // console.log(h);
        // console.log(wH + "px");

        if (h < wH) {
            $this.pin({
                containerSelector: ".single-section",
                padding: {top: 80},
                minWidth: 767
            })
        }

        if (wW < 768) {
            $(".mobile-pin").pin({
                containerSelector: ".single-section",
                padding: {top: 60},
            })

            if ( $(".mobile-pin").css("position") === "fixed" ) {
                $(".desc").css({
                    "margin-top": 40
                });
            }   

        }

    });

    // Contacto Map Section

    $('#js-map').mouseenter(function(){
        $('.mapa-title').velocity("fadeOut", { duration: 300});
    });
    $('#js-map').mouseleave(function(){
        $('.mapa-title').velocity("fadeIn", { duration: 200});
    });

});