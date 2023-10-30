(function ($) {

  $(document).ready(function() {
    $('.day-notice-star').tipsy();
  });

  Drupal.behaviors.ding_library_opening_hours__reload = {
    attach: function(context, settings) {
      $('.ding_library_hours').each(function(i, e){
        $e = $(e);
        $.get('/ding_library_hours_ajax/' + $e.data('type') + '/' + $e.attr('id'));
      });
      $('.ui-tabs.ui-widget.ui-widget-content .ui-tabs-panel.ui-widget-content').removeAttr('aria-expanded');
    }
  };
}(jQuery));
