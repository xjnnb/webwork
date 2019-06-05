var $divClass = $('.sm-card');
var height = 0;
$divClass.each(function () {
    if ($(this).height() > height) {
        height = $(this).height();
    }
});
$divClass.height(height);
$('.icon-preview').css('marginTop',height/3);