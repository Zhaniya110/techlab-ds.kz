<?php get_header(); ?>
  <!-- ======= Hero Section ======= -->
  <main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Inner Page</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Inner Page</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
  <div class="container ">
  <row class="d-flex align-items-center">

<div class="col-md-10">
  <h1 class="d-flex text-center">
                <?php the_title(); ?>
            </h1>

            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>



                    <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                </div>
                <row>
  </div>


</section>

</main><!-- End #main -->


  <?php get_footer(); ?>