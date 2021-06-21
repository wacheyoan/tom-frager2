<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TomFrager
 */
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12
);
$loop = new WP_Query($args);
?>

<div id="secondary">
    <?php while ($loop->have_posts()):
        $loop->the_post();

        $product = wc_get_product();
        $imageId = $product->get_image_id();
        $image_url = wp_get_attachment_image_url($imageId, 'full');
        $title = $product->get_title();
        $price = $product->get_price();
        ?>
        <a href="<?=$product->get_permalink()?>">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="article-container">
                    <div class="product-image-container">
                        <img src="<?= $image_url ?>" alt="">
                    </div>
                    <div class="info-container">
                        <p><?= $title ?></p>
                        <p><?= $price ?></p>
                    </div>
                </div>
            </article>
        </a>
    <?php endwhile; ?>
</div>


<style>

    #secondary {
        display: grid;
        justify-content: space-evenly;
        grid-template-columns: repeat(auto-fill, minmax(163px, 1fr) );
        grid-gap: 2px;
        justify-items: center;
        margin-bottom: 25px;
    }

    #secondary a:nth-child(even) {
        margin-top: 75px;
    }

    .info-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: white;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 43px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;

    }

    .info-container p {
        font-family: 'Amatic SC', cursive;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 140%;
    }

    .info-container p:first-child {
        margin-left: 15px;
    }

    .info-container p:last-child {
        margin-right: 15px;
    }

    .product-image-container {
        position: absolute;
        top: -25px;
    }


    #secondary article {
        background: #FFBB92;
        border-radius: 15px;
        position: relative;
        width: 163px;
        height: 276px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }


</style>