jQuery(document).ready(function($) {
    var $endEl = $('.transition.has-end');
    if($endEl.length) {
        setTimeout(function() {
            $endEl.each(function() {
                $(this).hover(function() {
                    var $el = $(this);
                    var end = parseInt($el.data('end'));
                    $el.addClass('animate');
                    setTimeout(function() { $el.hide(); }, end);
                });
            });
        }, 3000);
    }
});