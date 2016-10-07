<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Canard
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'canard' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php if ( has_nav_menu( 'secondary' ) || has_nav_menu( 'social' ) ) : ?>
			<div class="site-top">
				<div class="site-top-inner">
					<?php if ( has_nav_menu( 'secondary' ) ) : ?>
						<nav class="secondary-navigation" role="navigation">
							<?php
								wp_nav_menu( array(
									'theme_location'  => 'secondary',
									'depth'           => 1,
								) );
							?>
						</nav><!-- .secondary-navigation -->
					<?php endif; ?>
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<nav class="social-navigation" role="navigation">
							<?php
								wp_nav_menu( array(
									'theme_location'  => 'social',
									'link_before'     => '<span class="screen-reader-text">',
									'link_after'      => '</span>',
									'depth'           => 1,
								) );
							?>
						</nav><!-- .social-navigation -->
					<?php endif; ?>
				</div><!-- .site-top-inner -->
			</div><!-- .site-top -->
		<?php endif; ?>

		<div class="site-branding">
			<?php if(!is_page(array( 'home', 'about', 'resources', 'events' )) && !is_home()) { ?>
			<a href="http://kristimckenney.com/#primary" rel="home" itemprop="url">
				<img height="160" src="http://kristimckenney.com/wp-content/themes/canard/images/rf-logo.png" class="site-logo attachment-canard-logo" alt="Redeeming Freedom" data-size="canard-logo" itemprop="logo" data-pin-nopin="true" style="height:160px;margin: -26px 0;">
			</a>			
			<?php } ?>

			<?php if(is_page(array( 'home', 'about', 'resources', 'events' )) || is_home()) { ?>
			<img src="http://kristimckenney.com/wp-content/themes/canard/images/km-logo.png" class="site-logo attachment-canard-logo" alt="Kristi McKenney" data-size="canard-logo" itemprop="logo" data-pin-nopin="true" style="height:110px;margin: -26px 0;">
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php } ?>
		</div><!-- .site-branding -->

		<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<div class="header-image-inner">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt=""></a>
				</div><!-- .header-image-inner -->
			</div><!-- .header-image -->
		<?php endif; // End header image check. ?>

		<div id="search-navigation" class="search-navigation">
			<div class="search-navigation-inner">
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="screen-reader-text"><?php _e( 'Primary Menu', 'canard' ); ?></span></button>
						<?php wp_nav_menu( array( 'theme_location'  => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				<?php endif; ?>
				<div id="search-header" class="search-header">
					<button class="search-toggle" aria-controls="search-form" aria-expanded="false"><span class="screen-reader-text"><?php _e( 'Search', 'canard' ); ?></span></button>
					<?php get_search_form(); ?>
				</div><!-- #search-header -->
			</div><!-- .search-navigation-inner -->
		</div><!-- #search-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
