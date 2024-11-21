$(window).scroll(function () {
    var $win = $(window);
    if ($win.scrollTop() != 0) {
        $('#navbar-special').addClass('show'); 
    } else {
        $('#navbar-special').removeClass('show'); 
    }
});
