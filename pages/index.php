<?php 
  include 'pages/head.php';
 /*require_once 'connect/connection.php';
  $query="INSERT INTO `request`(`name`, `phone`, `date`, `ip`, `city`) VALUES ('лол','лол','лоол', 'лол', 'лол')";
  $result=mysqli_query($link, $query);
  if ($result) {
    echo "ok";
  }
  else {
    echo "Error: " . $result . "<br>" . mysqli_error($link);
  }*/
  ?>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- меню -->
    <header class="default-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="/img/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav" style="text-shadow: 1px 0 1px #000, 0 1px 1px #000, -1px 0 1px #000, 0 -1px 1px #000;display: contents;">
              <li><a href="#home">Главная</a></li>
              <li><a href="#services">Строительство и услуги</a></li>
              <li><a href="#project">Галерея</a></li>
              <li><a href="#about">О нас</a></li>
              <li><a href="#contacts">Контакты</a></li>
              <li><a href="#social">Соц.сети</a></li>
              <li><a href="#request" class="primary-btn" style="
              border: 1px solid white;
              color: #fff;
              background: #ff4f00ed;
              padding-top: 10px;
              padding-bottom: 10px;
              padding-left: 20px;
              padding-right: 20px;
              text-shadow: -1px 1px 4px #00000029, 1px -1px 4px #00000029, 1px 1px 4px #00000029, -1px -1px 4px #00000029;
              ">Оставить заявку</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Меню -->
    <!-- Шапка -->
    <section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header.jpg">
      <h2 class="template-name">ДомТут</h2>
      <div class="container">
        <div class="row fullscreen">
          <div class="banner-content col-lg-12">
            <h1 style="text-shadow: 1px 0 1px #000, 0 1px 1px #000, -1px 0 1px #000, 0 -1px 1px #000;">
            Строительство <br>
            Домов
          </h1>
            <a href="#about" class="primary-btn">О компании</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Шапка -->
    <!-- Услуги -->
    <section class="features-area section-gap-top" id="services" style="padding-top: 30px" ;>
      <div class="container">
        <h4 style="font-size: 42px;text-align: center;padding-bottom: 50px;">Строительство и услуги</h4>
        <div class="row feature_inner">
          <div class="col-lg-3 col-md-6">
            <div class="feature-item">
              <i class="fi"><img class="card-img-top" src="/img/vnesotd.jpg" alt="Внешняя отделка"></i>
              <h4>Внешняя отделка</h4>
              <ul>
                <li>Кирпич Облицовочный</li>
                <li>Фиброцементый сайдинг</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-item">
              <i class="fi"><img class="card-img-top" src="/img/vnesrab.jpg" alt="Уличные работы"></i>
              <h4>Уличные работы</h4>
              <ul>
                <li>Фундаменты: ленточный, сваи, малозаглубленный, утепленная шведская плита</li>
                <li>Кровля: Металлочерепица, мягкая кровля, натуральная черепица</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-item">
              <i class="fi"><img class="card-img-top" src="/img/vnutrab.jpg" alt="Внутренние работы"></i>
              <h4>Внутренние работы</h4>
              <ul>
                <li>Теплые полы</li>
                <li>Отопление</li>
                <li>Внутренняя отделка</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-item">
              <i class="fi"><img class="card-img-top" src="/img/home.jpg" alt="Строительство домов"></i>
              <h4>Строительство домов</h4>
              <ul>
                <li>Блоки газобетонные + со снятой фаской</li>
                <li>Брус: строганный, профилированный, клееный</li>
                <li>Бревно: оцилиндрованное, калиброванное, строганное</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Услуги -->
    <!-- Галерея-->
    <section class="project-area section-gap-top" id="project">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2>Галерея наших готовых объектов</h2>
            </div>
          </div>
        </div>
        <div class="filters-content">
          <div class="row grid">
            <div class="col-lg-4 col-md-6 grid-sizer"></div>
            <div class="col-lg-4 col-md-6 grid-item all following" data-wow-delay="0s">
              <div class="single-project">
                <div class="relative">
                  <div class="thumb">
                    <img class="image img-fluid" src="/gallery/brus/6.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 grid-item col-md-6 all upcoming latest">
              <div class="single-project">
                <div class="relative">
                  <div class="thumb">
                    <img class="image img-fluid" src="/gallery/block/2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 grid-item col-md-6 all popular">
              <div class="single-project">
                <div class="relative">
                  <div class="thumb">
                    <img class="image img-fluid" src="/gallery/maf/2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-item col-md-6 all latest following">
              <div class="single-project">
                <div class="relative">
                  <div class="thumb">
                    <img class="image img-fluid" src="/gallery/brus/7.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/domtut_perm/" class="btn btn-secondary btn-block" role="button">Посмотреть все фото</a>
        </div>
      </div>
    </section>
    <!-- Галерея -->
    <!-- о нас -->
    <section class="about-area section-gap" id="about">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-7 col-md-12 about-left">
            <img class="img-fluid" src="/img/about.png" alt="">
          </div>
          <div class="col-lg-5 col-md-12 about-right">
            <div class="section-title text-left">
              <h4>О нас</h4>
              <h2>Кто мы такие?</h2>
            </div>
            <div>
              <p>
                Мы работаем с 2003 года. Построено более 30-ти частных домов, а также бани, беседки, малые архитектурные формы, заборы, кровли, фундаменты.
                <br> Мы строим из разных материалов, такие как профилированый брус, строганый брус, клееный брус, калиброванное бревно, строганное бревно, оцилиндрованное бревно, газоблок. Выполняем внешнюю и внутреннюю отделку.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  о нас -->
    <!-- контакты -->
    <section class="about-area section-gap" style="background: white;" id="contacts">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-7 col-md-12 about-left">
            <div class="section-title text-left" style="margin-bottom: 20px;">
              <h4>Контакты</h4>
            </div>
            <div class="col-lg-9" style="vertical-align: top;">
              <h2>Где мы находимся?</h2>
              <p>
                <img src="/img/navigation.png" style="width:20px;height:auto;vertical-align:middle;" alt="Местонахождение"> Город Пермь.
              </p>
            </div>
            <div class="col-lg-10" style="vertical-align: top;">
              <h2>Как с нами связаться?</h2>
              <p>
                <img src="/img/telephone.png" style="width:20px;height:auto;vertical-align:middle;" alt="Телефон"> Телефон: +7 (342) 203-88-08
                <br>
                <img src="/img/email.png" style="width:20px;height:auto;vertical-align:middle;" alt="Почта"> Электронная почта: 2038808@rambler.ru
              </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 about-right">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A352957cbab8c4463f031f124bc4c066f25fb2542a3adbaaf8a2a59e547d17959&amp;source=constructor" width="378" height="328" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- контакты -->
    <!-- Услуги -->
    <section class="about-area section-gap" id="request" style="background: url(img/ostavit.jpg);background-position: center;background-repeat: no-repeat;background-size: cover;">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-sm-6">
            <div class="section-title text-left" style="margin-bottom: 18px;">
              <h2 style="
              color: white;
              font-size: 62px;
              text-align: center;
              text-shadow: -1px 1px 4px #00000029, 1px -1px 4px #00000029, 1px 1px 4px #00000029, -1px -1px 4px #00000029;
              ">Оставить заявку</h2>
            </div>
            <div>

              <div class="form-group">
                <label style="color: white;">Имя:</label>
                <input class="form-control" required type="text" name="name" id="name" placeholder="Введите имя">
              </div>
              <div class="form-group">
                <label style="color: white;">Телефон:</label>
                <input class="form-control" required type="text" name="phone" id="phone" placeholder="+7(999) 99-99-999">
              </div>

              <button id="btn" class="primary-btn btn-block" style="border: 1px solid #fff;color: #fff;margin-top: 20px;background: rgba(0, 0, 0, 0.71);">Отправить</button>

              <!-- The Modal -->
              <div class="modal" id="ModalSucc" style="display: none; background: rgba(0, 0, 0, 0.55);">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Спасибо!</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      Ваша заявка отправлена!
                    </div>
                  </div>
                </div>
              </div>
              <!-- The Modal -->
              <div class="modal" id="ModalReq" style="display: none; background: rgba(0, 0, 0, 0.55);">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Внимание!</h4>
                    </div>
                    <div class="modal-body">
                      Введите ваше имя или номер телефона!
                    </div>

                  </div>
                </div>
              </div>
              <!-- The Modal -->
              <div class="modal" id="ModalErr" style="display: none; background: rgba(0, 0, 0, 0.55);">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Упс!</h4>
                    </div>
                    <div class="modal-body">
                      Произошла ошибка!
                    </div>

                  </div>
                </div>
              </div>

            </div>
    </section>
    <!--  Услуги -->
    <!-- о нас -->
    <section class="about-area section-gap" style="background: white;" id="social">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2>Следите за нами в</h2>
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-7 col-md-12 about-left">
            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/domtut_stroy/"><img class="mx-auto d-block img-fluid" src="/img/inst.png" alt="" style="width: 355px;"></a>
          </div>
          <div class="col-lg-7 col-md-12 about-right">
            <a target="_blank" rel="noopener noreferrer" href="https://vk.com/gotovdomaperm"><img class="mx-auto d-block img-fluid" src="/img/vk.png" alt="" style="width: 300px;"></a>
          </div>
        </div>
      </div>
    </section>
    <!--  о нас -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
      jQuery(function($) {
        $("input[name=phone]").mask("+7(999) 99-99-999");
      });
    </script>
    <?php 
    include 'pages/footer.php';
    ?>
  </body>

  </html>