<?php


function bs_assets(){
  wp_enqueue_script( 'bootstrap2', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'),1,true);

  wp_enqueue_script( 'bootstrap', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'),1,true);
   wp_enqueue_style( 'bs_styles', get_theme_file_uri( 'style.css' ), array(),'1.0', 'all');
   wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',array(),'1.0','all');
   wp_enqueue_style('aos',get_theme_file_uri('assets/vendor/aos/aos.css'),array(),'1.0','all');
   wp_enqueue_style('bootstrap',get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'),array(),'1.0','all');
   wp_enqueue_style('bootstrap_icons',get_theme_file_uri('assets/vendor/bootstrap-icons/bootstrap-icons.css'),array(),'1.0','all');
   wp_enqueue_style('boxicons',get_theme_file_uri('assets/vendor/boxicons/css/boxicons.min.css'),array(),'1.0','all');
   wp_enqueue_style('glightbox',get_theme_file_uri('assets/vendor/glightbox/css/glightbox.min.css'),array(),'1.0','all');
   wp_enqueue_style('remixicon',get_theme_file_uri('assets/vendor/remixicon/remixicon.css'),array(),'1.0','all');
   wp_enqueue_style('swiper',get_theme_file_uri('assets/vendor/swiper/swiper-bundle.min.css'),array(),'1.0','all');

 wp_enqueue_script( 'purecounter', get_theme_file_uri('assets/vendor/purecounter/purecounter_vanilla.js'), array(),1,true);
 wp_enqueue_script( 'aos', get_theme_file_uri('assets/vendor/aos/aos.js'), array(),1,true);
 wp_enqueue_script( 'glightbox', get_theme_file_uri('assets/vendor/glightbox/js/glightbox.min.js'), array(),1,true);
 wp_enqueue_script( 'swiper', get_theme_file_uri('assets/vendor/swiper/swiper-bundle.min.js'), array(),1,true);
 wp_enqueue_script( 'validate', get_theme_file_uri('assets/vendor/php-email-form/validate.js'), array(),1,true);
 wp_enqueue_script( 'mainjs', get_theme_file_uri('/assets/js/main.js'),  array( 'jquery' ),1,true);
 
}


add_action( 'wp_enqueue_scripts','bs_assets' );





function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'techLab' ),
  'secondary' => __( 'Полезные ссылки', 'techLab' ),
  'services' => __( 'Наши услуги', 'techLab' ),
  
) );










