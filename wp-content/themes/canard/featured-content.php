<?php
/**
 * The template for displaying featured content
 *
 * @package Canard
 */
$featured_posts = canard_get_featured_posts();
if ( empty( $featured_posts ) ) {
	return;
}
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
		<?php // custom static grid on home page ?>
		

<article class="post type-post status-publish format-standard has-post-thumbnail hentry category-faith tag-featured background-done" style="background-color: transparent;">
	<a class="post-thumbnail" href="#primary" style="background-image: url(&quot;/wp-content/themes/canard/images/rf-logo.png&quot;);opacity:1;background-size:contain;background-position: 50% 50%; background-repeat: no-repeat;background-color:white;">
		<img width="915" height="250" src="/wp-content/themes/canard/images/rf-logo.png" class="attachment-canard-featured-content-thumbnail size-canard-featured-content-thumbnail wp-post-image" alt="cropped-cropped-kristi8-15" scale="0">
	</a>
	<header class="entry-header">
		<div class="entry-meta" style="padding-left: 0;color:black;text-shadow:none;">
			<span class="cat-links"><a href="#primary" rel="category tag" style="color:black;">MAIN BLOG</a></span>
		</div>
		<h1 class="entry-title" style="padding: 0;color:black;text-shadow:none;">
			<a href="#primary" rel="bookmark" style="color:black;">Redeeming Freedom</a>
		</h1>
	</header><!-- .entry-header -->
</article><!-- #post-## -->

<article class="post type-post status-publish format-image has-post-thumbnail hentry tag-featured post_format-post-format-image background-done">
	<a class="post-thumbnail" href="/about" style="background-image: url(&quot;/wp-content/themes/canard/images/kristi.jpg&quot;); background-position: center center;">
		<img width="915" height="250" src="/wp-content/themes/canard/images/kristi.jpg" class="attachment-canard-featured-content-thumbnail size-canard-featured-content-thumbnail wp-post-image" alt="cropped-cropped-cropped-kristi8-15.jpg" scale="0">
	</a>
	<header class="entry-header">
		<div class="entry-meta">
			<span class="cat-links"></span>
		</div>
		<h1 class="entry-title">
			<a href="/about" rel="bookmark">About</a>
		</h1>
	</header><!-- .entry-header -->
</article><!-- #post-## -->

<article class="post type-post status-publish format-image has-post-thumbnail hentry tag-featured post_format-post-format-image background-done">
	<a class="post-thumbnail" href="/events" style="background-image: url(&quot;/wp-content/themes/canard/images/calendar.jpg&quot;);background-position: center right;" >
	<img width="235" height="156" src="/wp-content/themes/canard/images/calendar.jpg" class="attachment-canard-featured-content-thumbnail size-canard-featured-content-thumbnail wp-post-image" alt="calendar photo by https://www.flickr.com/photos/dafnecholet/s" sizes="(max-width: 235px) 100vw, 235px">	</a>

	<header class="entry-header">
		<div class="entry-meta">
			<span class="cat-links"></span>
		</div>
		<h1 class="entry-title">
			<a href="/events" rel="bookmark">Events</a>
		</h1>
	</header><!-- .entry-header -->
</article><!-- #post-## -->

<article class="post type-post status-publish format-image has-post-thumbnail hentry tag-featured post_format-post-format-image background-done">
	<a class="post-thumbnail" href="/resources" style="background-image: url(&quot;/wp-content/themes/canard/images/resources.jpg&quot;);">
		<img width="915" height="250" src="/wp-content/themes/canard/images/resources.jpg" class="attachment-canard-featured-content-thumbnail size-canard-featured-content-thumbnail wp-post-image" alt="books photo by https://www.flickr.com/photos/44534236@N00/" scale="0">
	</a>

	<header class="entry-header">
		<div class="entry-meta">
			<span class="cat-links"></span>
		</div>
		<h1 class="entry-title">
			<a href="http://kristimckenney.com/2016/07/13/laying-down-my-rights/" rel="bookmark">Resources</a>
		</h1>
	</header><!-- .entry-header -->
</article><!-- #post-## -->

<article class="post type-post status-publish format-image has-post-thumbnail hentry tag-featured post_format-post-format-image background-done">
	<a class="post-thumbnail" href="http://reclaiminghaven.com" style="background-image: url(&quot;/wp-content/themes/canard/images/reclaiming.jpg&quot;);">
		<img width="915" height="500" src="/wp-content/themes/canard/images/reclaiming.jpg" class="attachment-canard-featured-content-thumbnail size-canard-featured-content-thumbnail wp-post-image" alt="DIY" scale="0">
	</a>

	<header class="entry-header">
		<div class="entry-meta">
			<span class="cat-links">DIY Projects and Restorations</span>
		</div>
		<h1 class="entry-title">
			<a href="http://reclaiminghaven.com" rel="bookmark">Reclaiming Haven</a>
		</h1>	</header><!-- .entry-header -->
</article><!-- #post-## -->








		<?php
			// foreach ( $featured_posts as $post ) {
			// 	setup_postdata( $post );

			// 	 // Include the featured content template.
			// 	get_template_part( 'content', 'featured-post' );
			// }

			// wp_reset_postdata();
		?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content -->
