<?php get_header(); ?>

<?php woocommerce_product_loop_start(); ?>

<?php woocommerce_product_subcategories(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div id="product-image1">
<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
  <?php echo $product->get_image(); ?>
</a>
</div>
<div id="product-description-container">
  <ul>
  <a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
    <li><h4><?php echo $product->get_title(); ?></h4></li></a>
    <li><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt )?></li>
    <li><h6><?php echo $product->get_price_html(); ?> <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product->get_id() ),
        esc_attr( $product->get_sku() ),
        $product->is_purchasable() ? 'add_to_cart_button' : '',
        esc_attr( $product->get_type() ),
        esc_html( $product->add_to_cart_text() )
    ),
$product );?></h6></li>
 </ul>
</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>