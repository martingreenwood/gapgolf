<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rapanooi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row row-center'); ?>>

	<div id="video">
		<aside>
		<?php 
			the_custom_logo();
			the_content();
		?>
		</aside>
		<video width="100%" height="auto" autoplay muted preload="none" poster="<?php the_post_thumbnail_url( 'full' ) ?>">
			<source src="<?php the_field( 'mp4' ); ?>" type="video/mp4">
			<source src="<?php the_field( 'webm' ); ?>" type="video/webm">
			Your browser does not support the video tag.
		</video>
	</div>

</article>
