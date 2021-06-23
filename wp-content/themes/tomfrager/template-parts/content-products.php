<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TomFrager
 */

$category = $_GET['cat'] ?? 'all';


$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12
);

if($category && $category !== "all"){
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 12,
        'tax_query'  => array(
            array(
                'taxonomy'  => 'product_cat',
                'field'     => 'term_id',
                'terms'     => array($category),
                'operator'  => 'IN',
            )
        )
    );
}

$loop = new WP_Query($args);

$categories = get_terms(['taxonomy' => 'product_cat']);

?>

<ul class="categories-container">
    <div class="swiper-wrapper">

        <li class="category swiper-slide active" data-cat="all">Toutes les catégories</li>
        <?php
        foreach ($categories as $category) {
            ?>
            <li class="category swiper-slide" data-cat="<?= $category->term_id?>">
                <?=$category->name?>
            </li>
            <?php
        }
        ?>
    </div>
</ul>

<h2 class="title">
    Choisissez vos produits préférés
    <svg width="325" height="24" viewBox="0 0 325 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="slash">
        <path d="M4.08716 23.644C5.2367 23.9585 6.96101 23.8799 8.49373 23.8799C7.1526 23.5654 5.81147 23.4868 4.08716 23.644Z"
              fill="#5DBFC4" fill-opacity="0.7"/>
        <path d="M86.2793 21.0497L86.4708 20.4208C90.3026 20.2636 87.812 21.1283 91.2606 20.8138C92.4101 19.8706 97.1999 20.6566 98.1578 20.185C98.1578 20.2636 99.8821 20.185 99.8821 20.4994C100.265 20.0278 101.606 20.3422 102.756 20.185C103.139 20.0278 102.373 20.0278 102.181 19.9492L104.672 19.7133C105.63 19.8706 106.013 20.1064 104.863 20.185C108.12 20.185 117.508 20.0278 127.088 19.8706C136.667 19.7133 146.247 19.5561 149.695 19.3989C148.737 19.0845 146.63 19.3203 145.672 18.7701C147.396 18.377 148.354 18.8487 149.121 18.4556C149.887 19.3203 153.144 18.6128 154.677 19.3989L155.252 18.9273L156.209 19.2417C164.256 18.6128 158.125 18.9273 165.214 18.9273C169.429 18.7701 171.345 18.1412 173.644 18.2984C173.261 18.2984 172.303 17.984 173.453 17.9054C173.644 18.2984 176.326 17.591 176.901 17.984C178.051 17.9054 181.499 17.9054 180.158 17.3551C180.733 17.6696 183.798 17.7482 182.074 17.984C183.032 17.984 184.182 18.0626 184.948 17.9054L183.607 17.7482C187.055 17.6696 188.971 18.0626 191.27 17.5123L189.929 17.2765C192.037 17.1979 193.761 17.1979 194.719 17.7482L192.612 17.9054C196.06 17.8268 198.168 17.8268 201.041 17.5123H200.084C203.724 16.9621 223.074 16.4118 226.523 15.7044L224.99 15.2327L227.864 14.8397C227.481 14.8397 226.331 16.2546 226.14 16.0974C232.462 16.0188 265.224 15.9402 270.972 16.4118C273.271 16.7263 271.355 17.1193 271.355 17.1979C274.229 17.0407 272.696 16.7263 274.995 16.8049C275.57 16.8835 274.803 17.1193 274.42 17.1979C275.57 17.1979 276.528 17.3551 276.528 17.1193C275.187 16.9621 275.761 16.4118 275.378 16.0188L278.444 16.0974L278.252 16.4118C279.018 16.4118 280.168 15.4686 283.233 15.7044C288.406 15.9402 293.962 15.9402 299.135 16.176C298.944 16.4118 297.986 16.4904 296.836 16.5691C297.603 16.5691 298.561 16.5691 299.135 16.7263C297.986 16.3332 301.434 16.4904 300.477 16.3332C304.5 15.5472 309.29 16.4905 312.738 16.0188C313.121 15.2327 322.318 3.04862 322.509 2.18395C323.659 2.26255 324.617 2.26255 325 2.34116C324.808 2.10534 322.701 1.94813 321.551 2.02673L321.36 2.49838C318.678 2.57699 320.785 2.18395 318.294 2.18395C318.294 1.79091 320.593 1.79091 322.509 1.79091C320.593 1.7123 318.869 1.31927 318.103 1.79091C316.378 1.55509 318.294 1.31927 316.378 1.08345C314.846 1.16206 312.93 1.47648 311.206 1.24066V1.16205C307.182 0.611801 304.883 1.55509 301.051 1.08345L301.434 0.926239C300.093 0.690417 297.411 0.926232 295.112 0.611803C295.878 0.69041 296.262 1.00484 294.92 1.00484C292.238 0.69041 290.322 0.926239 288.215 0.533203L286.299 0.847627C281.509 0.690413 269.631 0.611803 257.56 0.611803C251.621 0.611803 245.682 0.611803 240.509 0.611803C235.528 0.611803 231.313 0.690415 228.822 0.690415L229.205 0.611803C221.925 0.69041 210.621 0.76902 199.317 0.847627C193.761 0.926234 188.013 1.00484 182.84 1.16205C177.668 1.31926 172.878 1.47648 169.046 1.6337C166.747 1.24066 163.49 1.39788 160.999 1.31927C162.34 1.47649 161.957 1.71231 160.808 1.71231C153.336 1.79092 160.233 2.02674 152.761 2.26256C144.139 2.7342 110.803 3.20584 103.139 3.12723C99.1158 3.83469 93.9428 3.59888 89.9194 4.07052L90.3026 3.9133C86.0876 4.22773 61.3726 4.69938 56.3912 5.17102L57.1576 5.24963C52.9426 5.79988 53.3258 5.17102 49.6856 5.17102C50.2604 5.79988 46.6202 6.35013 45.279 6.42874V6.27151C43.1715 6.50734 38.3818 7.29341 34.9332 7.52923V7.21481C32.0594 7.76506 26.5033 7.92227 24.3958 8.07948C19.4144 8.15809 11.7509 8.07948 5.4284 8.86555L0.830228 8.15809L0.255453 8.31531C0.255453 8.31531 -0.319316 11.381 0.255453 14.6825C0.830222 17.984 2.74614 21.5999 7.3443 22.5432V22.8576L9.06859 22.7004C11.1761 22.779 11.9424 22.3074 11.9424 22.6218L9.26019 22.779C11.3677 22.779 10.0266 23.0148 9.26019 23.2507C10.0266 23.2507 10.9845 23.2507 11.5593 23.3293C11.9424 23.1721 11.1761 23.1721 10.7929 23.1721C11.7508 23.0148 13.2836 22.5432 14.6247 22.6218C16.7322 22.5432 15.0079 23.1721 17.307 23.0935C23.6294 22.8576 29.9519 22.7004 36.2743 22.4646C42.5968 22.2288 48.7277 21.9929 55.2417 21.6785C55.6249 21.8357 55.2417 21.8357 54.8585 21.9143C58.6903 21.5999 62.1389 21.4427 65.5876 21.1283C66.5455 21.2069 66.9287 21.4427 67.3119 21.5999C65.9707 21.8357 85.8961 20.9711 86.2793 21.0497Z"
              fill="#5DBFC4" fill-opacity="0.7"/>
    </svg>
</h2>
<div id="secondary">
    <?php while ($loop->have_posts()):
        $loop->the_post();

        $product = wc_get_product();
        $imageId = $product->get_image_id();
        $image_url = wp_get_attachment_image_url($imageId, 'full');
        $title = $product->get_title();
        $price = $product->get_price();
        ?>
        <a href="<?= $product->get_permalink() ?>">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="article-container">
                    <svg width="32px" height="32px" class="quick_add">
                        <image xlink:href="http://localhost/tom-frager/wp-content/themes/tomfrager/images/icons/Add.svg"
                               width="32px" height="32px"/>
                    </svg>
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
<div id="home" data-url="<?= get_home_url() ?>"></div>

<div class="button-container">
    <button type="button" class="btn btn-orange quick_add_btn">Ajouter ma sélection au panier</button>
</div>

<style>

    #secondary {
        display: grid;
        justify-content: space-evenly;
        grid-template-columns: repeat(auto-fill, minmax(163px, 1fr) );
        grid-gap: 2px;
        justify-items: center;
        margin-bottom: 25px;
        margin-top: 50px;
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

    .quick_add {
        position: absolute;
        right: 0;
        top: 0;
        padding: 12px;
        z-index: 4;
    }

    .quick_add.disabled {
        pointer-events: none;
    }

    .entry-title {
        display: none;
    }

    .title {
        font-size: 34px !important;
    }

    .btn {
        border-radius: 50px;
        padding: 10px;
        width: 80%;
        font-family: 'Raleway', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 140%;
        text-align: center;
    }

    .btn-orange {
        background: #FCAD80;
        outline: none;
        border: #FCAD80;

    }

    .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .categories-container{
        list-style-type: none;
        white-space: nowrap;
        overflow: hidden;
    }

    .categories-container li{
        display: inline;
        font-family: 'Raleway',sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 140%;
    }

    .active{
        font-weight: 600 !important;

    }

</style>

<script>

    let items = [];
    $(document).on('click', '.quick_add', function (e) {
        e.preventDefault();
        let article = $(this).closest('article').attr('id').replace('post-', '');
        if (!items.includes(article)) {
            items.push(article);
            $(this).replaceWith('<svg width="32px" height="32px" class="quick_add">' +
                '<image xlink:href="http://localhost/tom-frager/wp-content/themes/tomfrager/images/icons/AddDisabled.svg" width="32px" height="32px"/>' +
                '</svg>');
        }

    })

    let urls = [];
    let home = $('#home').data('url')

    $('.quick_add_btn').on('click', function () {
        if (items.length === 0) {
            return;
        }

        $('.quick_add_btn').text('Ajout en cours');


        for (let product of items) {
            urls.push(`${home}/?add-to-cart=${product}&quantity=1`);
        }
        ajaxRequests(urls);
    })

    function ajaxRequests(urls) {
        if (urls.length > 0) {
            $.ajax({
                method: 'GET',
                url: urls.pop()
            }).done(function (result) {
                ajaxRequests(urls);
            })
        } else {
            window.location.href = home + '/cart'
        }
    }

    $('.categories-container li').on('click',function (){
        let li = $(this)
        $.ajax({
            method: "GET",
            data: {cat:$(this).data('cat')},
            success:function (response){
                $('#secondary').replaceWith($(response).find('#secondary'));
                $('li.active').removeClass('active');
                $(li).addClass('active')
            }
        })
    })



</script>

<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper('.categories-container',{
        slidesPerView: 2,
        spaceBetween: 30,

    })
</script>