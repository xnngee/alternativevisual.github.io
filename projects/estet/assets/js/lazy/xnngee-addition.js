////выделение кнопки якоря
jQuery(window).scroll(function() {
    var $a = $('a');
    $a.each(function(i, el) {
        var top = $(el).offset().top - 10;
        var bottom = top + $(el).height();
        var scroll = $(window).scrollTop();
        var id = $(el).attr('id');
        if (scroll > top && scroll < bottom) {
            $('li.active').removeClass('active');
            $('li[href="#' + id + '"]').addClass('active');
        }
    })
});
////плавное перемещение якоря
$("nav,divx").on("click", "a", function(event) {
    // исключаем стандартную реакцию браузера
    event.preventDefault();

    // получем идентификатор блока из атрибута href
    var id = $(this).attr('href'),

        // находим высоту, на которой расположен блок
        top = $(id).offset().top;

    // анимируем переход к блоку, время: 800 мс
    $('body,html').animate({
        scrollTop: top
    }, 800);
});

////плавное появление навбара при скролле
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

////перемещение навбара при скролле
var prevScrollpos = window.pageYOffset;
var nav = document.getElementById('navbartrans');
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            nav.style.top = "0";
        } else {
            nav.style.top = "-184px";
        }
    prevScrollpos = currentScrollPos;
}
/*
//// центрирование DIV (class=".positionable")
$(document).ready(function() {
    position();
    function position() {
      $( ".positionable").position({
            my: "center center",
            at: "center bottom",
            of: "#main-pic-box", //относительно какого контейнера (# - ID)
            collision: "fit fit"
        });
    }
    position();
});*/

$(document).ready(function() {
	$('#post_form_1').submit(function(){
		$.post("<?= CURRENT_URL ?>", $("#post_form_1").serialize(),  function(response) {
			$('#post_form_1').hide('slow');
			$('#post_form_1_success').html(response);
		});
		return false;
    });
    $('#post_form_2').submit(function(){
		$.post("<?= CURRENT_URL ?>", $("#post_form_2").serialize(),  function(response) {
			$('#post_form_2').hide('slow');
			$('#post_form_2_success').html(response);
		});
		return false;
	});
});
