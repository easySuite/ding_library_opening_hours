(function ($) {

  Drupal.behaviors.ding_library_opening_hours__reload = {
    attach: function(context, settings) {
      $('.ding_library_hours').each(function(i, e){
        $e = $(e);
        $.get('/ding_library_hours_ajax/' + $e.data('type') + '/' + $e.attr('id'));
      });
    }
  };

}(jQuery));
