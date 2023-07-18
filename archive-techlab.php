<?php get_header(); ?>

    <div class="container pt-5" style="margin-top:100px; margin-bottom:100px;">
      <div class="row product row-gap-5">
    

              <!-- карточка курса/абонемента -->
        <div class="col-md-4">
        <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>


            <div class="card">
                <div class="card-body">
                  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
                <hr />
                <div class="card-body">
                  <p><?php the_excerpt(); ?></p>
                </div>
             </div>
             
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
            <?php else: ?>
            <p><?php _e( 'No Blog Posts found', 'nd_dosth' ); ?></p>
            <?php endif; ?>
                        
         </div>
               

           
          </div>
      </div>

    <?php get_footer(); ?>