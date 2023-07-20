
<div class="container pt-5" style="margin-top:100px; margin-bottom:100px;">
<div class="row product row-gap-5 col-gap-2">
<?php if (have_posts()): ?>
    <?php while (have_posts()): ?>
        <?php the_post(); ?>





        <!-- карточка курса/абонемента -->
        <div class="col">
                    <div class="card p-0" style="width: 18rem;">
                    <a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
<img class="card-img-top" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="">
    </a>
  <div class="card-body">
  <a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
  <h5 class="card-title"><?php echo $product->get_title(); ?></h5></a>
    <p class="card-text"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt )?></p>
    <p><?php echo $product->get_price_html(); ?> </p>
    <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">Купить курс</a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product->get_id() ),
        esc_attr( $product->get_sku() ),
        $product->is_purchasable() ? 'add_to_cart_button' : '',
        esc_attr( $product->get_type() ),
        esc_html( $product->add_to_cart_text() )
    ),
$product );?>
  </div>
</div>



        </div>





<?php endwhile; ?>
<?php the_posts_pagination(); ?>
<?php else: ?>
<p>
    <?php _e('No Blog Posts found', 'nd_dosth'); ?>
</p>
<?php endif; ?>
</div>
</div>
