<?php
/** 
@package bootstrap2wordpress
*/


?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <h3>TechLab</h3>
          <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
          <p>
            A108 Adam Street <br>
            NY 535022, США<br><br>
            <strong>Телефон:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Полезные ссылки</h4>
        <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'secondary',
                            //as registered in function.php
                            'depth' => 1,
                            'container' => 'div', //html wrapper of the menu ul
                            'container_class' => 'col-lg-2 col-md-6 footer-links',
                            'menu' => 'ul',
                            'before' => '<i class="bx bx-chevron-right"></i>',
                            'fallback_cb' => false

                        ))
                        ?>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Наши услуги</h4>
        <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'services',
                            //as registered in function.php
                            'depth' => 1,
                            'container' => 'div', //html wrapper of the menu ul
                            'container_class' => 'col-lg-2 col-md-6 footer-links',
                            'menu' => 'ul',
                            'before' => '<i class="bx bx-chevron-right"></i>',
                            'fallback_cb' => false

                        ))
                        ?>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Наша рассылка</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Подписаться">
        </form>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Авторские права <strong><span>TechLab</span></strong>. Все права защищены
  </div>
  <div class="credits">
   
    Разработано <a href="https://zhan883.kz">ZHAN883.KZ</a>
  </div>
</div>

          
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>


  <?php wp_footer(  );?>
</body>

</html>