<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
/* ===

TITLE: Двери Estet Киров

META:
	description: Двери Estet Киров

	keywords: estet, двери, двери estet, двери естет, двери эстет, киров, купить двери, купить дешево, купить двери в кирове, купить двери в кирове межкомнатные, межкомнатные двери, купить двери в кирове входные, входные двери, двери входные киров

	viewport: width=device-width, initial-scale=1.0

  charset: utf-8
  
VAR:
	simple: true
	compress_text: true

=== */

?>
<!-- не трогать! (начало) -->
<link href="../../../assets/css/lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<!--<?= mso_load_script(CURRENT_PAGE_URL . '../../../assets/js/jquery-3.2.1.min.js') ?> -->
<script type="text/javascript" src="../../../assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../assets/js/lazy/lightzoom.js"></script>
<script src="../../../assets/js/body/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(document).ready(function(){
      $('.main-pic').slick({
        dots: true,
        infinite: true,
        speed: 300,
        centerMode: true,
        slidesToShow: 1,
        prevArrow: false,
    		nextArrow: false,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear'
      });

      $('.review-pic').slick({
        dots: true,
        infinite: true,
        speed: 700,
        centerMode: true,
        slidesToShow: 1,
        adaptiveHeight: false,
        autoplay: true,
        autoplaySpeed: 8500,
        fade: true,
        cssEase: 'linear'
      });
    jQuery('.lightzoom').lightzoom();
    });
  </script>
  <a class="yacor" id="top"> </a>
  <!-- не трогать! (конец) -->
  	<!-- навигационная полоса -->
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow" id="navbartrans">
    <a href="#top" class="uppr">
      <img src="../../../assets/images/assets/up.png" class="d-inline-block align-tomx-auto" alt=""> </a>
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="../../../assets/images/logotipi/logo.png" class="d-inline-block align-top logo" alt=""> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link disabled" href="#buyers">
              <i class="fa d-inline fa-lg fa-user-o"></i> Покупателям</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">
              <i class="fa d-inline fa-lg fa-clone"></i> Галерея</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#review">
              <i class="fa d-inline fa-lg fa-comment-o"></i> Отзывы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacts">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	<!-- первый блок (ознакомительный) -->
  <div class="py-5 cover">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div id="main-pic-box">
			  <!-- слайдшоу -->
            <div id="main-pic" class="main-pic positionable my-4">
			<!-- шаблон картинки
			  <div>                
                <img class="img-fluid" src="./uploads/название картинки.jpg">
              </div> -->
              <div>                
                <img class="img-fluid" src="./uploads/dver-estet.jpg">
              </div>
              <div>
                <img class="img-fluid" src="./uploads/dver-estet2.jpg">
              </div>
              <div>
                <img class="img-fluid" src="./uploads/dver-estet3.jpg">
              </div>
            </div>
          </div>
        </div>
        <divx class="col-md-7">
          <h1 class="pt-3">Продажа входныx дверeй в Кирове по доступным ценам</h1>
          <p class="lead my-3">Компания "Эстет" работает на рынке производства дверей с 2002 года.
            <br>
            <br>За это время мы зарекомендовали себя как надежный партнер и динамично развивающаяся компания.</p>
          <a class="btn btn-primary m-1" href="#contacts">Связаться с <br> менеджером</a>
          <a class="btn btn-primary m-1" href="#gallery">Ознакомиться с <br> ассортиментом</a>
        </divx>
      </div>
    </div>
  </div>
  <a class="yacor" id="buyers"> </a>
  <div class="py-5" style="background-image: url('../../../assets/images/assets/black_wood_bg.jpg');background-repeat:repeat;background-size:fit;background-position:center top;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-light">Двери по наличию, межкомнатные и входные</h1>
          <p class="lead text-light">Монтаж в течении 3-ех рабочих дней. </p>
        </div>
      </div>
    </div>
  </div>
	<!-- второй блок (галерея) -->
  <a class="yacor" id="gallery"> </a>
  <div class="py-5 text-center bg-light shadow-h cover">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Галерея</h1>
          <p class="lead">Двери в наличии. Нажмите, чтобы узнать подробнее!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6 p-1">
          <a href="#">
            <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_1.jpg"> </a>
        </div>
        <div class="col-md-3 col-6 p-1">
          <a href="#">
            <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_5.jpg"> </a>
        </div>
        <div class="col-md-3 col-6 p-1">
          <a href="#">
            <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_3.jpg"> </a>
        </div>
        <div class="col-md-3 col-6 p-1">
          <a href="#">
            <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_4.jpg"> </a>
        </div>
      </div>
    </div>
  </div>
	<!-- третий блок (отзывы) -->
<a class="yacor" id="review"> </a>
<div class="p-3 text-center bg-secondary text-white cover" style="background-image: url('../../../assets/images/assets/black_wood_bg_2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-4">Отзывы покупателей</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="review-pic my-4">
            <div>
              <a href="/uploads/otz1.jpg" class="lightzoom">
                <img class="img-fluid img-center popup" src="/uploads/otz1.jpg"> </a>
            </div>
            <div>
              <a href="/uploads/otz2.jpg" class="lightzoom">
                <img class="img-fluid img-center popup" src="/uploads/otz2.jpg"> </a>
            </div>
            <div>
              <a href="/uploads/otz3.jpg" class="lightzoom">
                <img class="img-fluid img-center popup" src="/uploads/otz3.jpg"> </a>
            </div>
            <div>
              <a href="/uploads/otz4.jpg" class="lightzoom">
                <img class="img-fluid img-center popup" src="/uploads/otz4.jpg"> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="yacor" id="contacts"> </a>
  <div class="py-5 px-3 bg-primary text-white filter-light" style="background-image: url('../../../assets/images/assets/man.jpg');background-size:cover;background-repeat:no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <iframe height="100%" frameborder="0" style="border:0" allowfullscreen="" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2077.868906258141!2d49.66777821593288!3d58.61454977516694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43fcf5b7be31f835%3A0xa0f18a124bc53108!2z0YPQuy4g0JrQsNGA0LvQsCDQnNCw0YDQutGB0LAsIDE4LCDQmtC40YDQvtCyLCDQmtC40YDQvtCy0YHQutCw0Y8g0L7QsdC7LiwgNjEwMDIw!5e0!3m2!1sru!2sru!4v1540565939743"
            class="mt-"></iframe>
        </div>
        <div class="col-md-6 text-dark">
          <h1 class="mt-2">Вызов менеджера на дом</h1>
          <p>Заключение договоров на месте замера и т.д.</p>
          <div class="formyContainer" data-initial='{"form_id":"1119","form_lang":"ru"}'></div>
            <!-- путь к скрипту можно поставить до </body> -->
          <script src="https://formy.upriver.ru/js/formy-react.js" charset="utf-8"></script>
          <!--
          <form>
            <div class="form-group" id="post_form_1">
              <label for="InputName">Ваше имя и фамилия</label>
              <input name="field[Name]" type="text" class="form-control" id="InputName" placeholder="Имя и фамилия"> </div>
            <div class="form-group">
              <label for="InputEmail1">Номер телефона</label>
              <input name="field[Mobile]" type="text" class="form-control" id="InputMobile" placeholder="+7 900 000 00 00"> </div>
            <div class="form-group">
              <label for="InputEmail1">Адрес электронной почты</label>
              <input name="field[Email]" tname="field[]" ype="email" class="form-control" id="InputEmail" placeholder="Электронная почта"> </div>
            <div class="form-group">
              <label for="Textarea">Ваше сообщение</label>
              <textarea name="field[Text]" class="form-control" id="Textarea" rows="3" placeholder="Сообщение"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Отправить</button>
          </form>
          -->
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-4">
          <h3 class="display-3" style="background-image: url('../../../assets/images/logotipi/logo.png');background-repeat:no-repeat;background-position:left center;">&nbsp;</h3>
          <p>
            <a class="text-white" href="http://vk.com/estetdveri43">
              <i class="fa d-inline mr-3 text-secondary fa-vk"></i>vk.com/estetdveri43</a>
          </p>
          <p>
            <a href="http://instagram.com/estetdveri43" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-instagram"></i>instagram.com/estetdveri43</a>
          </p>
          <p>
            <a href="https://vk.com/xnngeedesigns" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-vk"></i>Site by XenonGee Designs</a>
          </p>
        </div>
        <div class="p-4 col-md-4">
        </div>
        <div class="p-4 col-md-4">
        <h2 class="mb-4">Контакты</h2>
          <p class="lead">Менеджер по оптовым продажам</p>
          <p>
            <a href="tel:8 (8332) 44-34-55" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-phone"></i>44-34-55</a>
          </p>
          <p class="lead">Адреса магазинов</p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank">
              <i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>ТК "Ряды на КРИНА" ул. К. Маркса 18</a>
            <br> </p>
          <p contenteditable="true">
            <a href="tel:8 (8332) 73-16-76" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-phone"></i>73-16-76</a>
          </p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white">
              <i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>mail@mail.ru</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">Политика конфиденциальности
            <br>© 2018 ESTET | Дверные технологии. Все права защищены. </p>
        </div>
      </div>
    </div>
  </div>

_ <a href="<?= BASE_URL ?>lpf-admin">Admin panel</a>(Put you login/password to <b>pages/lpf-admin/auth/auth-options.php</b>)
