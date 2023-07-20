<?php get_header(); ?>
  <!-- ======= Hero Section ======= -->
  <main id="main">


<section class="inner-page">
  <div class="container ">

  <h1 class="d-flex text-center">
                <?php the_title(); ?>
            </h1>

            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>



                    <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

               
  </div>


</section>

</main><!-- End #main -->


  <?php get_footer(); ?>