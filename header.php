<?php
/** 
@package bootslander
*/


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>TechLab</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
       
       
       <a href="index.html"><img src="<?php bloginfo('template_url')?>/assets/img/logo.webp" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
      <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 3,
            'container'         => 'nav',
            'container_class'   => 'navbar',

            
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <?php global $woocommerce; ?>
<a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>" class="cart">
  <button type="button" class="btn btn-dark">
  <i class="bi bi-bag"></i> <span class="badge badge-light"><?php echo WC()->cart->get_cart_contents_count() ?></span>
  
</button> 
        </a>
    </div>
  </header><!-- End Header -->

  