////плавное появление
/*
$(document).ready(function() {
    var mywindow = $(window);
    var mypos = mywindow.scrollTop();
    mywindow.scroll(function() {
        if (mywindow.scrollTop() > mypos) {
            $('.navbartrans').fadeOut();
        } else {
            $('.navbartrans').fadeIn();
        }
        mypos = mywindow.scrollTop();
    });
}); 
*/

////перемещение
    var prevScrollpos = window.pageYOffset;
    var nav = document.getElementById('navbartrans');
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                nav.style.top = "0";
            } else {
                nav.style.top = "-95px";
            }
        prevScrollpos = currentScrollPos;
    }