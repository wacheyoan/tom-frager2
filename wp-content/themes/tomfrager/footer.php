<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TomFrager
 */

/* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
    wp_nav_menu( array(
        'depth' => 6,
        'sort_column' => 'menu_order',
        'container' => 'div',
        'menu_id' => 'main-toolbar',
        'menu_class' => 'menu-toolbar',
        'theme_location' => 'mobile-menu'
    ) );
} else {
    echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
}
?>
<footer id="colophon" class="site-footer">
    <img class="footer-wave" src="<?=get_home_url()?>/wp-content/themes/tomfrager/images/wave.png" alt="vague"/>
    <div class="links">
        <div class="link">
            <a class="page-link" href="">Nos produits</a>
            <img src="<?=get_home_url()?>/wp-content/themes/tomfrager/images/icons/arrow.svg"/>
        </div>
        <div class="link">
            <a class="page-link" href="">Notre histoire</a>
            <img src="<?=get_home_url()?>/wp-content/themes/tomfrager/images/icons/arrow.svg"/>
        </div>
        <div class="link">
            <a class="page-link" href="">Nos engagements</a>
            <img src="<?=get_home_url()?>/wp-content/themes/tomfrager/images/icons/arrow.svg"/>
        </div>
        <div class="link">
            <a class="page-link" href="">Carnet de route</a>
            <img src="<?=get_home_url()?>/wp-content/themes/tomfrager/images/icons/arrow.svg"/>
        </div>
    </div>
    <div class="mention-juridique">
        <p>Mentions légales</p>
        <p>CGVU</p>
        <p>Politique de confidentialité</p>
    </div>
    <div class="logo">
        <img class="footer-logo" src="<?=get_home_url()?>/wp-content/themes/tomfrager/images/bleu-bamboo-logo.png" alt="Logo"/>
    </div>
    <!--		<div class="site-info">-->
    <!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'tomfrager' ) ); ?><!--">-->
    <!--				--><?php
    //				/* translators: %s: CMS name, i.e. WordPress. */
    //				printf( esc_html__( 'Proudly powered by %s', 'tomfrager' ), 'WordPress' );
    //				?>
    <!--			</a>-->
    <!--			<span class="sep"> | </span>-->
    <!--				--><?php
    //				/* translators: 1: Theme name, 2: Theme author. */
    //				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tomfrager' ), 'tomfrager', '<a href="http://underscores.me/">Underscores.me</a>' );
    //				?>
    <!--		</div>-->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<style>
    footer {
        background: #FFBB92;
        position: relative;
        padding-bottom: 5%;
    }

    .footer-wave {
        position: absolute;
        top: -65px;
    }

    .page-link {
        color : black!important;
        text-decoration: none;
        font-family: 'Amatic SC', Serif;
        font-style: normal;
        font-weight: bold;
        font-size: 38px;
        padding: 4% 0;
    }

    .links {
        padding : 5%;
    }

    .link {
        display: flex;
        justify-content: space-between;
        width: 65%;
        margin: auto;
    }

    .mention-juridique {
        display: flex;
        justify-content: space-between;
        width: 90%;
        margin: auto;
        font-size: 12px;
        font-family: 'Raleway', Sans-serif;
    }

    .footer-logo {
        width: 55%;
    }

    .logo {
        width: 100%;
        margin: auto;
        text-align: center;
        padding: 9% 0;
    }
</style>