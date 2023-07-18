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





function techlab()
{
$args = array(
'labels' => array(
'name' => 'TechLab курсы',
'singular_name' => 'TechLab курс'
),
'hierarchical' => true ,// true - like page, false - like post
'public' => true,
'menu_icon' => 'dashicons-welcome-learn-more',
'has_archive'=> true,
'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.02188 3.0166C2.00986 3.02865 2 4.03912 2 5.26216V7.4858H4.22995H6.45991V5.24636V3.00696L4.25184 3.00084C3.03742 2.99747 2.03394 3.00458 2.02188 3.0166ZM13.8459 3.02276C13.8372 3.03141 13.8301 4.03928 13.8301 5.26246V7.48641L16.0506 7.47665L18.2711 7.4669V5.23778V3.00862L16.0664 3.00783C14.8537 3.00737 13.8545 3.0141 13.8459 3.02276ZM7.93394 10.1312V17.2371H10.164H12.394L12.3845 10.141L12.375 3.04479L10.1544 3.03504L7.93394 3.02529V10.1312ZM13.8679 15.045V17.2371H16.0789H18.29V15.045V12.8528H16.0789H13.8679V15.045Z" fill="black"/>
</svg>'),
'supports' => array('title','editor','thumnail'),
'rewrite' => array('slug','techlab-courses')
);
register_post_type('techlab', $args);
}

add_action('init','techlab');



function techlab_taxonomy(){
 $args = array (
               
            'labels' => array(

                          'name' => 'Категории Курсов',
                          'singular_name' => 'Курс' 
                                
            ),
            'public' => true,
            'hierarchical' => true,

        );
 register_taxonomy( 'Категории Курсов', array('techlab'), $args );
}

add_action('init','techlab_taxonomy');







