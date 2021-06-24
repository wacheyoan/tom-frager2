<?php
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt() {
    global $post;
    $text = get_field('texte'); //Replace 'your_field_name'
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $excerpt_length = 20; // 20 words
        $excerpt_more = apply_filters('excerpt_more', ' ' . '...');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}
?>

<?php if ( $wpb_all_query->have_posts() ) : ?>
    <article class="articles-carnet" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tomfrager' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div>
        <form>
            <input class="search-bar" type="text"/>
            <img class="icon-search" src="../wp-content/themes/tomfrager/images/icons/Search.svg"/>
        </form>
        <div class="all-filtre">
            <button class="btn-filtre">Nouveau</button>
            <button class="btn-filtre">Musique</button>
            <button class="btn-filtre">Ecologie</button>
            <button class="btn-filtre">Huminitaire</button>
            <button class="btn-filtre">Surf</button>
        </div>
        <div class="all-articles">
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="single-article description-container">
                    <?php the_post_thumbnail() ?>
                    <h2 class="title"><?php the_title();?>
                        <svg width="125" height="34" viewBox="0 0 201 34" fill="#5DBFC4" xmlns="http://www.w3.org/2000/svg" class="slash">
                            <path d="M2.51831 32.8336C3.22658 33.2803 4.28899 33.1686 5.23336 33.1686C4.40704 32.7219 3.58072 32.6102 2.51831 32.8336Z" fill="<?= the_field('color')?>" fill-opacity="0.7"/>
                            <path d="M53.1597 29.1483L53.2778 28.2549C55.6387 28.0315 54.1041 29.26 56.2289 28.8133C56.9372 27.4731 59.8883 28.5899 60.4785 27.9199C60.4785 28.0315 61.5409 27.9199 61.5409 28.3666C61.777 27.6965 62.6034 28.1432 63.3116 27.9199C63.5477 27.6965 63.0756 27.6965 62.9575 27.5848L64.4921 27.2498C65.0823 27.4731 65.3184 27.8082 64.6101 27.9199C66.6169 27.9199 72.4011 27.6965 78.3034 27.4731C84.2057 27.2498 90.1079 27.0264 92.2327 26.8031C91.6425 26.3563 90.344 26.6914 89.7538 25.9096C90.8162 25.3512 91.4064 26.0213 91.8786 25.4629C92.3508 26.6914 94.3575 25.6863 95.3019 26.8031L95.656 26.133L96.2463 26.5797C101.204 25.6863 97.4267 26.133 101.794 26.133C104.391 25.9096 105.572 25.0162 106.988 25.2395C106.752 25.2395 106.162 24.7928 106.87 24.6811C106.988 25.2395 108.641 24.2344 108.995 24.7928C109.703 24.6812 111.828 24.6811 111.002 23.8994C111.356 24.3461 113.245 24.4578 112.182 24.7928C112.773 24.7928 113.481 24.9045 113.953 24.6811L113.127 24.4578C115.252 24.3461 116.432 24.9045 117.849 24.1227L117.022 23.7877C118.321 23.676 119.383 23.676 119.973 24.4578L118.675 24.6811C120.8 24.5695 122.098 24.5695 123.869 24.1227H123.279C125.521 23.341 137.444 22.5592 139.569 21.5541L138.625 20.8841L140.395 20.3257C140.159 20.3257 139.451 22.3359 139.333 22.1125C143.228 22.0008 163.414 21.8892 166.955 22.5592C168.372 23.006 167.191 23.5644 167.191 23.676C168.962 23.4527 168.018 23.006 169.434 23.1176C169.788 23.2293 169.316 23.5644 169.08 23.676C169.788 23.676 170.379 23.8994 170.379 23.5644C169.552 23.341 169.907 22.5592 169.67 22.0008L171.559 22.1125L171.441 22.5592C171.913 22.5592 172.622 21.2191 174.51 21.5541C177.698 21.8892 181.121 21.8892 184.308 22.2242C184.19 22.5592 183.6 22.6709 182.892 22.7826C183.364 22.7826 183.954 22.7826 184.308 23.006C183.6 22.4476 185.725 22.6709 185.134 22.4476C187.613 21.3308 190.564 22.6709 192.689 22.0008C192.925 20.8841 198.592 3.57373 198.71 2.34526C199.418 2.45694 200.008 2.45693 200.244 2.56861C200.126 2.23358 198.828 2.01022 198.119 2.1219L198.001 2.79199C196.349 2.90367 197.647 2.34526 196.113 2.34526C196.113 1.78686 197.529 1.78686 198.71 1.78686C197.529 1.67518 196.467 1.11678 195.995 1.78686C194.932 1.45182 196.113 1.11679 194.932 0.781753C193.988 0.893432 192.807 1.34015 191.745 1.00511V0.893422C189.266 0.111666 187.849 1.45183 185.489 0.781753L185.725 0.558397C184.898 0.223359 183.246 0.558387 181.829 0.111669C182.301 0.223349 182.537 0.670066 181.711 0.670066C180.058 0.223349 178.878 0.558397 177.579 0L176.399 0.446711C173.448 0.223352 166.129 0.111669 158.692 0.111669C155.033 0.111669 151.373 0.111669 148.186 0.111669C145.117 0.111669 142.52 0.223355 140.985 0.223355L141.222 0.111669C136.736 0.223349 129.771 0.335031 122.806 0.446711C119.383 0.55839 115.842 0.670063 112.655 0.893422C109.467 1.11678 106.516 1.34015 104.155 1.56351C102.739 1.00511 100.732 1.22847 99.1974 1.11679C100.024 1.34015 99.7876 1.67519 99.0794 1.67519C94.4756 1.78687 98.7252 2.12191 94.1215 2.45694C88.8094 3.12702 68.2695 3.79709 63.5477 3.68541C61.0688 4.69052 57.8815 4.3555 55.4026 5.02557L55.6387 4.8022C53.0417 5.24892 37.8138 5.919 34.7447 6.58908L35.2169 6.70077C32.6199 7.48252 32.8559 6.58908 30.6131 6.58908C30.9672 7.48252 28.7244 8.26428 27.898 8.37596V8.15259C26.5995 8.48762 23.6484 9.60442 21.5236 9.93946V9.49275C19.7529 10.2745 16.3296 10.4979 15.0311 10.7212C11.9619 10.8329 7.24013 10.7212 3.34463 11.838L0.511533 10.8329L0.157394 11.0563C0.157394 11.0563 -0.196742 15.4118 0.157394 20.1023C0.51153 24.7928 1.692 29.9301 4.52508 31.2702V31.717L5.58748 31.4936C6.88598 31.6053 7.35816 30.9352 7.35816 31.3819L5.70554 31.6053C7.00403 31.6053 6.17772 31.9403 5.70554 32.2753C6.17772 32.2753 6.76794 32.2754 7.12208 32.387C7.35817 32.1637 6.88598 32.1637 6.64988 32.1637C7.24011 31.9403 8.18447 31.2702 9.01079 31.3819C10.3093 31.2702 9.24689 32.1637 10.6634 32.052C14.5589 31.717 18.4544 31.4936 22.3499 31.1586C26.2454 30.8235 30.0229 30.4885 34.0364 30.0418C34.2725 30.2651 34.0364 30.2651 33.8003 30.3768C36.1612 29.9301 38.286 29.7067 40.4108 29.26C41.0011 29.3717 41.2372 29.7067 41.4732 29.9301C40.6469 30.2651 52.9237 29.0366 53.1597 29.1483Z" fill="<?= the_field('color')?>" fill-opacity="0.7"/>
                        </svg>
                    </h2>
                    <div class="row-details">
                        <div class="category">
                            <?php the_category(','); ?>
                        </div>
                        <p><?php the_time('d/m/Y'); ?></p>
                    </div>
                    <?php echo custom_field_excerpt() ?>
                    <a class="btn-history" href="<?php the_permalink(); ?>">Découvrir l'histoire</a>
                </div>
            <?php endwhile; ?>
        </div>
    </article>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<style>
    .category {
        margin-top: 11%;
        text-align: left;
        width: 90%;
    }
    .category a {
        text-decoration : none;
        color : #326867!important;
    }

    .row-details {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        width: 90%;
        height: 45px;
    }

    .row-details p {
        color : #656565;
    }

    .articles-carnet {
        background-image: url("../wp-content/themes/tomfrager/images/background/papier-blanc.png");
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
    }
    .btn-history {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px 30px;
        background: #326867;
        border-radius: 40px;
        color : white!important;
        font-weight: normal!important;
        text-decoration: none;
        font-family: 'Raleway', sans-serif;;
        font-size: 18px;
    }

    .single-article {
        width: 314px;
        box-shadow: 2px 2px 22px rgba(150, 150, 150, 0.25);
        border-radius: 10px;
        background: white;
        padding-bottom: 7%;
        margin: 10% auto!important;
    }

    .single-article p {
        padding: 15px;
        font-family: 'Raleway', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 140%;
        text-align: left;
    }

    .single-article h2 {
        font-size: 26px!important;
        padding: 15px!important;
        text-align: left!important;
        width: 92%;
        margin-bottom: -26px;
    }

    .single-article img {
        width: 100%;
        height: auto;
        border-radius: 10px 10px 0 0;
    }

    .all-articles {
        margin-top: 20%;
    }

    .single-article .title .slash {
        position: absolute;
        left: 24%!important;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .icon-search {
        position: absolute;
        right: 8px;
        top: 9px;
    }

    form {
        position: relative;
        width: 90%;
        margin: auto;
        padding-bottom: 10%;
    }

    form input {
        filter: drop-shadow(0px 0px 8px rgba(170, 170, 170, 0.25));
        background: #FFFFFF!important;
        border-radius: 50px!important;
        width: 343px;
        height: 42px;
        outline: none;
    }

    .btn-filtre {
        background: #FFFFFF;
        border: 2px solid #326867!important;
        box-sizing: border-box!important;
        border-radius: 40px!important;
        color : #326867!important;
        width: 112px!important;
        height: 42px!important;
        margin: 2% 6px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ui-textinput {
        border: none;
        box-shadow: none;
        border-radius: 50px;
    }

    .all-filtre {
        display: flex;
        justify-content: space-between;
        position: absolute;
        height : 100px;
    }
</style>
