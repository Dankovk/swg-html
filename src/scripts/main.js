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
    $('image').on('mouseover', function(){
        $(this).css({'transform':'translate(-5%, -5%) scale(1.1)', 'z-index':'99'});
        $(this).parents('.romb, #svgMask').css({'z-index':'99'});
    })
    $('image').on('mouseleave', function(){
        $('.romb').css({'z-index':'2'});
        $(this).css({'transform':'translate(0,0) scale(1)', 'z-index':'0'});
        $(this).parents('.romb, #svgMask').css({'z-index':'1'});
    })



})(window.jQuery);



$(document).ready(function() {
   var n = 1;
   var interval = setInterval(function(){
       $('li[data-index="' +n+ '"]').click();
       n++
       if (n == 3) n = 0;
   }, 3000);
});