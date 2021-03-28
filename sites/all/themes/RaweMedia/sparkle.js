(function ($) {
  Drupal.behaviors.responsiveAnimation = {
    attach: function (context, settings) {
      $('h1#site-name', context)
        .hover(function(){
          $(this)
            .animate({
              'margin-left': '10px'
            },
            'slow');
        });
    }
  }
}(jQuery));