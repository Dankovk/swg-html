// VIEWPORT PLUGIN
// $(":in-viewport") $(":below-the-fold") $(":above-the-top") $(":left-of-screen") $(":right-of-screen")

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

  

  
    // $('image').on('mouseover', function(){
    //   $(this).css({'transform':'translate(-5%, -5%) scale(1.1)', '-webkit-transform':'translate(-5%, -5%) scale(1.1)', '-moz-transform':'translate(-5%, -5%) scale(1.1)', '-ms-transform':'translate(-5%, -5%) scale(1.1)', '-o-transform':'translate(-5%, -5%) scale(1.1)', 'z-index':'99'});
    //   $(this).parents('.romb, #svgMask').css({'z-index':'99'});
    // })
    // $('image').on('mouseleave', function(){
    //     $('.romb,#svgMask').css({'z-index':'2'});
    //     $(this).css({'transform':'translate(0, 0) scale(1.1)', '-webkit-transform':'translate(0, 0) scale(1)', '-moz-transform':'translate(0, 0) scale(1)', '-ms-transform':'translate(0, 0) scale(1)', '-o-transform':'translate(0, 0) scale(1)', 'z-index':'0'});
    //     $(this).parents('.romb, #svgMask').css({'z-index':'1'});

    // });


})(window.jQuery);



$(document).ready(function() {
   var n = 1;
   var interval = setInterval(function(){
       $('li[data-index="' +n+ '"]').click();
       n++
       if (n == 3) n = 0;
   }, 3000);

    obt1 = new Vivus('build_1', {type: 'oneByOne', delay:100, duration: 200, start: "inViewport"});
    obt2 = new Vivus('build_2', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt3 = new Vivus('build_3', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});
    obt4 = new Vivus('castle_1', {type: 'oneByOne', delay:100, duration: 150, start: "inViewport"});

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

    checkHeader();

    
    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
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
var checkHeader = function(){
     if(window.pageYOffset > window.screen.height - 200) {
          $('.layout-header').addClass('black-head');
     }
     else {
          $('.layout-header').removeClass('black-head');
     }
 };

$(document).on('scroll', function(){
    checkHeader();
});