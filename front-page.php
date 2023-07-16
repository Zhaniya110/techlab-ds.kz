<?php get_header(); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Раскройте свое творчество с <span>TechLab</span></h1>
            <h2>В IT-школе, специализирующуейся на робототехнике и программировании для детей от 5 до 18 лет</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Начать обучение</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="<?php bloginfo('template_url')?>/assets/img/hero-img.webp" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>
            <iframe class="container-fluid rounded"  src="https://www.youtube.com/embed/56aH6gbRGzM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Мы - команда TechLab, увлеченные специалисты в области робототехники и программирования</h3>
            <p>Наша цель - вдохновить детей на творчество и развить их навыки в увлекательном мире робототехники.Мы предлагаем высококачественное образование, инновационные программы и индивидуальный подход к каждому ученику.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Индивидуальный подход</a></h4>
              <p class="description">Мы стремимся к тому, чтобы каждый ученик получил максимальное внимание и персонализированное обучение.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Качество образования</a></h4>
              <p class="description">Мы гордимся тем, что предлагаем высококачественное образование в области робототехники и программирования</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Практическое применение</a></h4>
              <p class="description">Мы ставим перед собой задачу не только обучить теории и навыкам, но и помочь ученикам применить их на практике.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Особенности</h2>
          <p>Наша уникальность</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Качественное образование</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Индивидуальный подход:</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">SОпытные преподаватели</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Небольшие группы</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Социальная ответственность</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Практическое применение</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Развитие инженерного мышления</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Разнообразные возрастные группы</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Проектные работы</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Участие в соревнованиях</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Гибкий график обучения</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Франшизная возможность</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Довольных клиента</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Завершенных проектов</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Часов поддержки</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Трудолюбивых сотрудников</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="<?php bloginfo('template_url')?>/assets/img/details-1.webp" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Курс робототехники для детей от 5-9 лет состоит из 5 модулей обучения по 16 уроков.</h3>
            <p class="fst-italic">
            Занятия проходят на конструкторах "Lego Wedo 2.0" и "Физика и Технологии"
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Занятия по 90 минут</li>
              <li><i class="bi bi-check"></i> Абонемент на 4 урока - 16.000tg</li>
              <li><i class="bi bi-check"></i> Абонемент на 8 уроков - 30.00tg .</li>
             
            </ul>
            <p>
            Образовательная робототехническая платформа LEGO® Education WeDo – это увлекательное и простое в использовании средство, которое позволяет ученикам узнавать новое об окружающем их мире, создавая и "оживляя" различные модели и конструкции.  </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="<?php bloginfo('template_url')?>/assets/img/details-2.webp" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Lego Mindstorms EV3</h3>
            <p class="fst-italic">
            Курс робототехник для детей от 10-16 лет

            </p>
            <p>
            Курс «Lego Mindstorms» - это один из интереснейших способов изучения компьютерных технологий и программирования. Во время уроков ученики проектируют, создают и программируют роботов, которые оснащены 32-разрядными процессорами, серводвигателями и датчиками прикосновения, звука, освещенности, движения и температуры. 
Командная работа над практическими заданиями способствует глубокому изучению составляющих современных роботов, а визуальная программная среда позволяет легко и эффективно изучать алгоритмизацию и программирование. 
          </p>
            <p>
            Курс делится на 4 модуля обучения, с промежуточными контрольными работами, между модулями и итоговыми соревнованиями в конце курса.
     </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="<?php bloginfo('template_url')?>/assets/img/details-3.webp" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            
            <p>Длительность урока - 2 часа
В одной группе от 2-4 учеников</p>
<p>Стоимость</p>
            <ul>
              <li><i class="bi bi-check"></i> Разовое посещение - 5000 тг.</li>
              <li><i class="bi bi-check"></i> 4 занятия в месяц - 18.000 тг.</li>
              <li><i class="bi bi-check"></i> 8 занятий в месяц - 33.000 тг.</li>
              <li><i class="bi bi-check"></i> 12 занятий в месяц- 49.500 тг </li>
            </ul>
            <p>
            4 модуля обучения по 24 урока
            </p>
            <p>
            После завершения 4х модулей, ученик может продолжать посещение заниматься в клубе покупая абонементы, где уже будут заниматься проектными работами и участвовать в различных конкурсах по робототехнике.
</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="<?php bloginfo('template_url')?>/assets/img/details-4.webp" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Курс "Робототехника на Arduino"</h3>
            <p class="fst-italic">
            для школьников и студентов от 14 лет

            </p>
            <p>
            Курс робототехники на плате Ардуино для начинающих ► это развитие творческого и конструкторского мышления. Программа уроков Arduino на русском и на казахском языках разбита на модули и рассчитана на детей с нулевыми знаниями в электротехнике и программировании. 
            </p>
            <p>Курс состоит из нескольких модулей, каждый из них охватывает одно
 определенное направление создания роботов:</p>
            <ul>
              <li><i class="bi bi-check"></i>Схемотехника;.</li>
              <li><i class="bi bi-check"></i> Макетирование</li>
              <li><i class="bi bi-check"></i> Автоматизация</li>
              <li><i class="bi bi-check"></i> Электроника</li>
              <li><i class="bi bi-check"></i>Пайка</li>
              <li><i class="bi bi-check"></i> Написание кода для постановки задач роботу.</li>
            </ul>
            <p>
Каждый модуль курса состоит из 24 уроков.
<ul>
              <li><i class="bi bi-check"></i>1 модуль. Основы робототехники на Arduino;.</li>
              <li><i class="bi bi-check"></i> 2 модуль. Исследование сигналов.</li>
              <li><i class="bi bi-check"></i> 3 модуль. Работа с проектами.</li>
             
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="<?php bloginfo('template_url')?>/assets/img/details-5.webp" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Курс "Программирование на языке Scratch"</h3>
            <p class="fst-italic">
            Scratch — простой, понятный и невероятно веселый язык программирования для детей. 
            </p>
            <p>
            В нем нет кодов, которые нужно знать назубок и писать без ошибок. Все, что требуется, — это умение читать и считать. Как из конструктора, при помощи Scratch можно собирать программы из разноцветных «кирпичиков» — блоков. В программу можно вносить любые изменения в любой момент, и сразу видеть, как она работает.
Самое распространенное применение Scratch — это обучение детей программированию в форме создания мультфильмов или игр. Помимо этих применений, Scratch можно использовать для образовательных целей и создавать в программе иллюстративные материалы для уроков не только по программированию, но и по истории, биологии, физике и другим предметам.</p>
          
<p>Продолжительность курса:</p>
            <ul>
              <li><i class="bi bi-check"></i> Продвинутый уровень- 48 уроков</li>
              <li><i class="bi bi-check"></i> Проектный уровень- 12 уроков.</li>
              <li><i class="bi bi-check"></i> После каждого модуля выдаётся сертификат!</li>
             
            </ul>
          

</div>
        </div>
      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Оборудование</h2>
          <p>Наша Лаборатория</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery-1.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-1.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery-2.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-2.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery-3.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-3.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery-4.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-4.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery-5.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-5.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery-6.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-6.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery-7.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-7.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery-8.webp" class="gallery-lightbox">
                <img src="<?php bloginfo('template_url')?>/assets/img/gallery-8.webp" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <section id="testimonials" class="testimonials">
  <div class="container">

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php bloginfo('template_url')?>/assets/img/testimonials-1.webp" class="testimonial-img" alt="">
            <h3>Сол Гудман</h3>
            <h4>Генеральный директор и основатель</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Проиниациулис пурус консекуат сем куре дигни ссим донец порттитора ентум сусципит рхонцус. Аццусантиум квам, ультрицес егет ид, аликуам егет нибх ет. Маецен аликуам, рисус ат семпер.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- Конец элемента отзыва -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php bloginfo('template_url')?>/assets/img/testimonials-2.webp" class="testimonial-img" alt="">
            <h3>Сара Вилссон</h3>
            <h4>Дизайнер</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Экспорт темпор иллум тамен малис малис ерам квуе ируре эссе лаборе квуем циллум квид циллум ерам малис квуорум велит форе ерам велит сунт аликва ностер фугиат ируре амет легам аним кулпа.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- Конец элемента отзыва -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php bloginfo('template_url')?>/assets/img/testimonials-3.webp" class="testimonial-img" alt="">
            <h3>Жена Карлис</h3>
            <h4>Владелец магазина</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Еним ниси квуем экспорт дуис лаборе циллум квуае магна еним синт квуорум нулла квуем вениам дуис миним темпор лаборе квуем ерам дуис ностер ауте амет ерам форе квуис синт миним.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php bloginfo('template_url')?>/assets/img/testimonials-4.webp" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php bloginfo('template_url')?>/assets/img/testimonials-5.webp" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Штат</h2>
          <p>Наша команда</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?php bloginfo('template_url')?>/assets/img/team/team-1.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Берикулы Тельман</h4>
                <span>Преподаватель</span>
                <div class="social">
                  <P>Cтудент 3 курса специальности "Информационные системы",стаж 3 года </P>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="<?php bloginfo('template_url')?>/assets/img/team/team-2.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Елемес Сункар</h4>
                <span>Преподаватель</span>
                <div class="social">
                <P>Cтудент 3 курса специальности "Информационные системы",стаж 3 года </P>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="<?php bloginfo('template_url')?>/assets/img/team/team-3.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ержуман Санжар</h4>
                <span>Методист и преподаватель</span>
                <div class="social">
                  <p>Магистр 1 курса специальности "Информационные системы",стаж 4 года 
Елемес Сункар- преподаватель it-школы,</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?php bloginfo('template_url')?>/assets/img/team/team-4.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Тлеубаева Арайлым Орынбайкызы</h4>
                <span>Директор it-школы</span>
                <div class="social">
                магистр технически наук, сеньор-лектор Astana IT University 
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>ЦЕНОВАЯ ПОЛИТИКА</h2>
          <p>ПРОВЕРЬТЕ НАШИ ЦЕНЫ</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Lego Wedo 2.0</h3>
              <h4>30.000<span> <sup>₸</sup>/ в месяц</span></h4>
              <ul>
                <li>Для детей от 5-9 лет</li>
                <li>5 модулей</li>
                <li>Обучения из 16 уроков </li>
              
                <li>Занятия по 90 минут</li>
                <li>Абонемент на 4 урока - 16.000tg </li>
                <li>Абонемент на 8 уроков - 30.00tg  </li>
             

              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Записаться на Пробный Урок</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <h3>Lego Mindstorms EV3</h3>
              <h4>30.000<span> <sup>₸</sup>/ в месяц</span></h4>
              <ul>
                <li>Длительность урока - 2 часа</li>
                <li>В одной группе от 2-4 учеников</li>
                <li>4 модуля обучения по 24 урока</li>
               
                <li>Разовое посещение - 5000 тг</li>
                <li>4 занятия в месяц - 18.000 тг</li>
                <li>8 занятий в месяц - 33.000 тг</li>
                <li>12 занятий в месяц- 49.500 тг </li>
            
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Записаться на Пробный Урок</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <h3>Arduino </h3>
              <h4>30.000<span> <sup>₸</sup>/ в месяц</span></h4>
              <ul>
                <li>Длительность урока - 2 часа</li>
                <li>В одной группе от 2-4 учеников</li>
                <li>4 модуля обучения по 24 урока</li>
                
                <li>Разовое посещение - 5000 тг</li>
                <li>4 занятия в месяц - 18.000 тг</li>
                <li>8 занятий в месяц - 33.000 тг</li>
                <li>12 занятий в месяц- 49.500 тг </li>
            
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Записаться на Пробный Урок</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
              <span class="advanced">Популярно</span>
              <h3>Scratch</h3>
              <h4>30.000<span> <sup>₸</sup>/ в месяц</span></h4>
              <ul>
                <li>Длительность урока - 2 часа</li>
                <li>В одной группе от 2-4 учеников</li>
                <li>4 модуля обучения по 24 урока</li>
              
                <li>Разовое посещение - 5000 тг</li>
                <li>4 занятия в месяц - 18.000 тг</li>
                <li>8 занятий в месяц - 33.000 тг</li>
                <li>12 занятий в месяц- 49.500 тг </li>
            
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Записаться на Пробный Урок</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Часто задаваемые вопросы</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Какова продолжительность курсов в TechLab? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Какие возрастные ограничения для участия в курсах TechLab? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>Участие в курсах TechLab открыто для детей в возрасте от 5 до 18 лет.</p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Какие языки программирования изучаются в курсах TechLab? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>В курсах TechLab дети изучают различные языки программирования, такие как Scratch, Python и другие, в зависимости от уровня курса.</p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Каковы размеры групп во время занятий в TechLab?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>Группы в TechLab обычно состоят из 2-4 учеников, что позволяет обеспечить индивидуальное внимание и оптимальный процесс обучения. </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Какова стоимость курсов в TechLab?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>Стоимость курсов в TechLab зависит от выбранного курса и плана оплаты. Мы предлагаем различные пакеты и гибкую ценовую политику. Дополнительную информацию о ценах можно найти на нашем веб-сайте.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Есть ли у нас сертификаты по окончании курсов?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>Да, по окончании каждого модуля курса в TechLab выдается сертификат участника.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Можно ли открыть франшизу TechLab?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>Да, у нас есть возможность открыть франшизу TechLab. Мы предлагаем франшизные пакеты с оборудованием, брендингом, бизнес-моделью и другими материалами для успешного запуска собственной школы робототехники.</p>
              </div>
            </li>
          </ul>
        </div>
       <div data-aos="fade-up" data-aos-delay="700">
        <p>Если у вас возникли другие вопросы, пожалуйста, свяжитесь с нами, и мы с радостью поможем вам!</p>
       </div>
      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Контакты</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Наш адрес:</h4>
                <p>Коргалжинское шоссе 25/2 , 2 этаж</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Тел:</h4>
                <p>+7 777 985 6129</p>
                <p>+8 707 135 7797</p>
              </div>

            </div>

          </div>
          <div class="col-lg-5 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <h1 class="mb-5">Свяжитесь  Нами</h1>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Ваш Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Сообщение" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Загрузка</div>
            <div class="error-message"></div>
            <div class="sent-message">Ваше сообщение отправлено. Спасибо!</div>
          </div>
          <div class="text-center"><button type="submit">Отправить сообщение</button></div>
        </form>

      </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>