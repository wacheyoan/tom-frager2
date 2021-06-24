<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TomFrager
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script>
        const $ = jQuery;
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tomfrager' ); ?></a>

	<header id="masthead" class="site-header">
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$tomfrager_description = get_bloginfo( 'description', 'display' );
//			if ( $tomfrager_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $tomfrager_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div>-->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tomfrager' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
        <nav>
            <?php
            if ( function_exists('has_nav_menu') && has_nav_menu('desktop-menu') ) {
                wp_nav_menu( array(
                        'depth' => 6,
                        'sort_column' => 'menu_order',
                        'container' => 'div',
                        'menu_id' => 'main-desktop-menu',
                        'menu_class' => 'desktop-menu',
                        'theme_location' => 'desktop-menu'
                    )
                );
            } else {
                echo "<ul class='nav desktop-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
            }
            ?>
        </nav>
	</header><!-- #masthead -->
