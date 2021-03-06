// VIEWPORT PLUGIN
// $(":in-viewport") $(":below-the-fold") $(":above-the-top") $(":left-of-screen") $(":right-of-screen")

$(window).on('load', function () {
    var $preloader = $('.page-preloader'),
        $spinner   = $preloader.find('.preloader-itself');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});




if($('form div').hasClass('wpcf7-mail-sent-ok')){
    $('.form-container').remove();
    $('.application').prepend(' <div class="layout-container"> <h1 class ="success-h1">Ваша заявка отправлена!</h1> <h4 class ="succes-h4">Мы обязательно рассмотрим вашу <br> заявку в ближайшее время.</h4> <div class ="img-success"> <img src="http://swg.popel-studio.com/wp-content/themes/swg/images/form-success.png" alt=""/> </div> </div>');
    $('html body').animate({
        scrollTop:10000
    },1);
}
//$(document).on('ready',function(){
//    alert('loaded');
//    $('.form-container').remove();
//    $('.application').prepend(' <div class="layout-container"> <h1 class ="success-h1">Ваша заявка отправлена!</h1> <h4 class ="succes-h4">Мы обязательно рассмотрим вашу <br> заявку в ближайшее время.</h4> <div class ="img-success"> <img src="images/form-success.png" alt=""/> </div> </div>');
//
//});



(function($){$.belowthefold=function(element,settings){var fold=$(window).height()+$(window).scrollTop();return fold<=$(element).offset().top-settings.threshold;};$.abovethetop=function(element,settings){var top=$(window).scrollTop();return top>=$(element).offset().top+$(element).height()-settings.threshold;};$.rightofscreen=function(element,settings){var fold=$(window).width()+$(window).scrollLeft();return fold<=$(element).offset().left-settings.threshold;};$.leftofscreen=function(element,settings){var left=$(window).scrollLeft();return left>=$(element).offset().left+$(element).width()-settings.threshold;};$.inviewport=function(element,settings){return!$.rightofscreen(element,settings)&&!$.leftofscreen(element,settings)&&!$.belowthefold(element,settings)&&!$.abovethetop(element,settings);};$.extend($.expr[':'],{"below-the-fold":function(a,i,m){return $.belowthefold(a,{threshold:0});},"above-the-top":function(a,i,m){return $.abovethetop(a,{threshold:0});},"left-of-screen":function(a,i,m){return $.leftofscreen(a,{threshold:0});},"right-of-screen":function(a,i,m){return $.rightofscreen(a,{threshold:0});},"in-viewport":function(a,i,m){return $.inviewport(a,{threshold:0});}});})(jQuery);

(function ($) {

    $('.selectize').selectize({
        sortField: 'text'
    });

    $('.selectize-tag').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    var myShape = "M280 20, L540 145, L280 270, 20 145 Z";

    //Simple path example
    /*  var myShape = "M424.313,250.873c0,4.393-3.56,7.952-7.952,7.952L21.952,279.5c-4.392,0-7.952-3.56-7.952-7.952l15.904-245.71c0-4.392,3.56-7.952,7.952-7.952L431.47,15.5c4.393,0,7.952,3.56,7.952,7.952L424.313,250.873";*/

    //find all images wanting to be masked (with 'data-mask' attribute)
    var maskIMGs = $('img[data-mask]');

    maskIMGs.each(function(index){
      //get IMG attributes
      var maskPath = $(this).attr('data-mask');
      var maskSrc = $(this).attr('src');
      var maskWidth = $(this).attr('width');
      var maskHeight = $(this).attr('height');
      var maskAlt = $(this).attr('alt');
      var maskTitle = $(this).attr('title');
      var uniqueID = index;

      //build SVG from our IMG attributes & path coords.
      var maskSVG = $('<svg version="1.1" baseProfile="full" xmlns="http://www.w3.org/2000/svg" class="svgMask" width="'+maskWidth+'" height="'+maskHeight+'" viewBox="0 0 '+maskWidth+' '+maskHeight+'" x="'+maskWidth/2+'" y="'+maskHeight/2+'"><defs><clipPath id="maskID'+uniqueID+'"><path d="'+eval(maskPath)+'"/></clipPath>  </defs><title>'+maskTitle+'</title><desc>'+maskAlt+'</desc><image clip-path="url(#maskID'+uniqueID+')" width="'+maskWidth+'" height="'+maskHeight+'" xlink:href="'+maskSrc+'" /></svg>');

      //swap original IMG with SVG
      $(this).replaceWith(maskSVG);

      //clean up
      delete maskSVG;
    });


    Mousetrap.bind('s h o w m e t h e t r u t h', function() {
        $('.manuf-gallery').addClass('easter-bg');
    });



    $('image').on('mouseover', function(){
      $(this).css({'transform':'translate(-5%, -5%) scale(1.1)', '-webkit-transform':'translate(-5%, -5%) scale(1.1)', '-moz-transform':'translate(-5%, -5%) scale(1.1)', '-ms-transform':'translate(-5%, -5%) scale(1.1)', '-o-transform':'translate(-5%, -5%) scale(1.1)', 'z-index':'99'});
      $(this).parents('.romb, #svgMask').css({'z-index':'99'});
    })
    $('image').on('mouseleave', function(){
        $('.romb,#svgMask').css({'z-index':'2'});
        $(this).css({'transform':'translate(0, 0) scale(1.1)', '-webkit-transform':'translate(0, 0) scale(1)', '-moz-transform':'translate(0, 0) scale(1)', '-ms-transform':'translate(0, 0) scale(1)', '-o-transform':'translate(0, 0) scale(1)', 'z-index':'0'});
        $(this).parents('.romb, #svgMask').css({'z-index':'1'});

    });


})(window.jQuery);



(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
            || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
                timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());


$(document).ready(function() {
   var n = 1;
   var interval = setInterval(function(){
       $('li[data-index="' +n+ '"]').click();
       n++
       if (n == 3) n = 0;
   }, 3000);


    //
    //$(window).on('scroll',function(e){
    //    parallaxScroll();
    //    console.log(1-($(window).scrollTop()*100)/$(window).height());
    //});


    //
     function update(){
    //     var slideBack = $('.slide-background.active');
    //     var headContent =  $('.head-content');
    //     var headBlock = $('.projecting-head-block');
    //
         var scrolled = $(window).scrollTop();
    //     slideBack.css({
    //         'transform': 'translate3d('+0+","+ scrolled *.65+'px,'+0+')',
    //         'opacity': 1 - (scrolled*100/$(window).height())/100
    //     });
    //     headContent.css({
    //         'transform': "translate3d("+0+","+($('.head-block').height()/2+scrolled *.60)+"px,"+0+")",
    //         'opacity': 1 - (scrolled*100/$(window).height())/100
    //
    //
    //     });
    //     $('.key-competence').css('margin-top',(0-(scrolled*.15))+'px');
    //     $('.waved-bg').css('top',(0-(scrolled*.25))+'px');
    //     $('.workers-bg-manuf').css({
    //         'top': $('.head-block').height()/2 + (scrolled-5500) *.50+'px',
    //         'opacity': 1 - (scrolled*100/$('.workers-bg-manuf').offset.top)/100
    //
    //
    //
    //     });
    //
    //     headBlock.css({
    //         'transform': 'translate3d('+0+","+ scrolled *.65+'px,'+0+')',
    //         'opacity': 1 - (scrolled*100/$(window).height())/100
    //     });
         if(scrolled > 1  && !$('.layout-header').hasClass('header-portfolio')) {
             $('.layout-header').addClass('black-head');
         }
         else if(scrolled<1) {
             $('.layout-header').removeClass('black-head');
         }
     //    else if(scrolled>1500){
         //        s.refresh();
         //        $('.layout-header').addClass('black-head');
         //
         //}

         requestAnimationFrame(update);
     }
    requestAnimationFrame(update);

    var scrollCheck = $(window).scrollTop();
    $(window).on('scroll', function(){
        if (scrollCheck>2000){
            setInterval(function(){
                s.refresh();
            },1500);
        }

    });

    $(document).on("change", ".file-input",function(){
        $(".file-label").addClass("filed");
        var filename = $(".file-input").val();
        filename = filename.replace(/^.*[\\\/]/, '');
        $('.file-label').html(filename);
        $('.svg-container-filled').addClass('visible');


    });



    function parallaxScroll(){
        var slideBack = $('.slide-background.active');
        var headContent =  $('.head-content');
        var headBlock = $('.projecting-head-block');
        var scrolled = $(window).scrollTop();
        if(scrolled > 1) {
            $('.layout-header').addClass('black-head');
        }
        else {
            $('.layout-header').removeClass('black-head');
        }

        $('.waved-bg').css('top',(0-(scrolled*.25))+'px');
        //$('.dotted-bg').css('top',(0-(scrolled*.25))+'px');
        $('.key-competence').css('margin-top',(0-(scrolled*.15))+'px');

        slideBack.css({
            'transform': 'translate3d('+0+","+ scrolled *.65+'px,'+0+')',
            'opacity': 1 - (scrolled*100/$(window).height())/100
        });
        headBlock.css({
            'transform': 'translate3d('+0+","+ scrolled *.65+'px,'+0+')',
            'opacity': 1 - (scrolled*100/$(window).height())/100
        });

        headContent.css({
            'transform': "translate3d("+0+","+($('.head-block').height()/2+scrolled *.60)+"px,"+0+")",
            'opacity': 1 - (scrolled*100/$(window).height())/100


        });

        $('.workers-bg-manuf').css({
            'top': $('.head-block').height()/2 + (scrolled-5500) *.50+'px',
            'opacity': 1 - (scrolled*100/$('.workers-bg-manuf').offset.top)/100



        });



    }

    // inViewPort function for each svg element
    //
    // function startDraw(dom, obt){
    //     if($(''+dom+'').is(':in-viewport()')){
    //         obt.play(1);
    //     }

    // }

    // $('.layout-content').on('scroll',function(){
    //     startDraw('#build_1', obt1);
    //     startDraw('#build_2', obt2);
    //     startDraw('#build_3', obt3);

    // });



    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       10,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
      }
    );
    wow.init();

});

//check window Offset to change header style
//SVG -animations block

//var button = Snap("#button-normal");
//var buttonAnimtStartValue = button.polyline().attr({
//    points: [144.557,44.315, 0.5,44.315, 0.5,5.648],
//    fill:'none',
//    stroke:"#3379D9",
//
//});
//$('#button-normal').on('click',function(){
//    buttonAnimtStartValue.animate({
//        points:
//    },500,mina.elastic);
//
//});

    $('.slide-background.active').attr({
        'data-0':"opacity:1; transform:translateY(0%)",
        'data-100p':"opacity:0;transform:translateY(60%)"
    });

//svvg animation blocl

    $('.form-control').on('blur', function(){
        if(!$(this).val().length==0){
            $(this).addClass('not-empty');
        }else{
            $(this).removeClass('not-empty');
        }
    });
    if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        var s = skrollr.init({
        forceHeight: false,
        smootScrollig:true,
        smoothScrollingDuration:200,
});
    }


$(".js-scroll").click(function(event) {
    event.preventDefault();
    var link = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(link).offset().top - 170
    }, 1000);
});

//
//$('body').mousewheel(function(event, delta) {
//    if (delta < 0) {
//        $('body').scrollTo('+=50', 40, {easing : 'linear'} );
//    }
//    else
//        $('body').scrollTo('-=50', 40, {easing : 'linear'}  );
//
//    return false;
//});
$(document).on('focus', '.form-control', function(){
    var $this = $(this);
    $this.closest('.form-group').find('label').addClass('focused');
});
$(document).on('blur', '.form-control', function(){
    if(!$(this).val().length==0){
        return
    }
    var $this = $(this);
    $this.closest('.form-group').find('label').removeClass('focused');
});
$(document).on('click','.arrow-bottom', function(){
    $('body').animate({scrollTop:$('.scope-content').offset().top-120});
});
$('.arrow-down-link').on('click',function(){
    $('body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
});
$(document).on('slide.bs.carousel','.carousel-top',function(event) {
    var $this   = $(this),
        itemLength = $this.find('.item').length,
        $slides = $this.find('.item'),
        $next   = $(event.relatedTarget),
        targetID = $next.index(),
        $active = $slides.filter('.active'),
        $bg = $('.slide-background-wrap .slide-background'),
        $left = $this.find('.carousel-control.left'),
        $right = $this.find('.carousel-control.right'),

        activeIndex = $slides.index($active),
        nextIndex   = $slides.index($next),
        background = $this.find('.slide-background');

        if (targetID === 0) {
            $left.addClass('hidden');
            $right.removeClass('hidden');
        } else if (targetID == itemLength - 1) {
            $left.removeClass('hidden');
            $right.addClass('hidden');
        } else {
            $left.removeClass('hidden');
            $right.removeClass('hidden');
        }

    $bg.eq(nextIndex).addClass('active');
    $bg.eq(activeIndex).removeClass('active');

    // Hashnav
    var hash = $next.data('hash');

    if (hash) document.location.hash = '#!' + hash;
    else document.location.hash = '';
    $('.slide-background').css({
        opacity:0

    });
    $('.slide-background').removeAttr('data-0 data-100p');



    $('.slide-background.active').css({
        opacity:1
    });

    $('.slide-background.active').attr({
        'data-0':"opacity:1; transform:translateY(0%)",
        'data-100p':"opacity:0;transform:translateY(60%)"
    });

    if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
         s.refresh($('.slide-background'));
    }



});

$(document).on('slide.bs.carousel','#Client-carousel',function(event) {
    var $this=$(this),
        $next   = $(event.relatedTarget),
        targetID = $next.index(),
        $left = $this.find('.carousel-control.left'),
        $right = $this.find('.carousel-control.right'),
        itemLength = $this.find('.item').length;

    if (targetID === 0) {
        $left.addClass('hidden');
        $right.removeClass('hidden');
    } else if (targetID == itemLength - 1) {
        $left.removeClass('hidden');
        $right.addClass('hidden');
    } else {
        $left.removeClass('hidden');
        $right.removeClass('hidden');
    }

});

$('.carousel').carousel({
    interval: false
});
$('.scroll-spy').affix({
    offset: {
        top: $('.head-block').height(),
        bottom: function () {
            return (this.bottom = $('.footer').outerHeight(true));
        }
    }
});
