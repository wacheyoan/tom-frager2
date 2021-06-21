<?php
//recuperer tous les produits pour les mettre sur la page d'accueil

$params = array('post_type' => 'product');
$wc_query = new WP_Query($params);
?>
<div class="products-container">
    <div class="all-products" id="all-products">
        <?php if ($wc_query->have_posts()) : ?>
            <?php while ($wc_query->have_posts()) :
                $wc_query->the_post();
                $product = new WC_Product(get_the_ID());
                $product = wc_get_product(get_the_ID());
                ?>
                <div class="single-product">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-product">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="detail-product">
                            <h3><?php the_title(); ?></h3>
                            <h3><?php echo  $product->get_price_html(); ?></h3>
                        </div>
                        <?php the_excerpt(); ?>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else:  ?>
            <div>
                <?php _e( 'No Products' ); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
