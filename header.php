<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gapgolf
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143753852-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-143753852-1');
	</script>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<?php if (isset($_GET['done'])): ?>
	<script type="text/javascript">
		// (function($){
			Swal.fire(
				'Request Sent',
				'We will be in touh soon!',
				'success'
			)
		// })(jQuery);
	</script>
	<?php endif; ?>

	<header id="masthead" class="site-header section fp-auto-height">
		<div class="container">
			<div class="row">

				<nav id="site-navigation" class="main-navigation">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div>
					<div class="menu-primary-container">
						<ul id="primary-menu" class="menu">
							<?php if (get_field( 'enable_section_banner_nav_item', 'options' )): ?>
								<li data-menuanchor="Home" class="menu-item"><a href="#banner"><?php the_field( 'section_banner_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_one_nav_item', 'options' )): ?>
								<li data-menuanchor="Program" class="menu-item"><a href="#sectionone"><?php the_field( 'section_one_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_two_nav_item', 'options' )): ?>
								<li data-menuanchor="BookNow" class="menu-item"><a href="#sectiontwo"><?php the_field( 'section_two_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_three_nav_item', 'options' )): ?>
								<li data-menuanchor="Coaches" class="menu-item"><a href="#sectionthree"><?php the_field( 'section_three_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_four_nav_item', 'options' )): ?>
								<li data-menuanchor="Gallery" class="menu-item"><a href="#sectionfour"><?php the_field( 'section_four_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_five_nav_item', 'options' )): ?>
								<li data-menuanchor="Supporters" class="menu-item"><a href="#sectionfive"><?php the_field( 'section_five_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_six_nav_item', 'options' )): ?>
								<li data-menuanchor="Facilities" class="menu-item"><a href="#sectionsix"><?php the_field( 'section_six_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_seven_nav_item', 'options' )): ?>
								<li data-menuanchor="More" class="menu-item"><a href="#sectionseven"><?php the_field( 'section_seven_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_eight_nav_item', 'options' )): ?>
								<li data-menuanchor="Showreel" class="menu-item"><a href="#sectioneight"><?php the_field( 'section_eight_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_nine_nav_item', 'options' )): ?>
								<li data-menuanchor="Testimonals" class="menu-item"><a href="#sectionnine"><?php the_field( 'section_nine_nav', 'options' ); ?></a></li>
							<?php endif; ?>

							<?php if (get_field( 'enable_section_ten_nav_item', 'options' )): ?>
								<li data-menuanchor="Contact" class="menu-item"><a href="#sectionten"><?php the_field( 'section_ten_nav', 'options' ); ?></a></li>
							<?php endif; ?>
							<li class="menu-count spaces">
								<span><?php the_field( 'number_of_spaces_left', 'options' ); ?></span> SPACES REMAINING
							</li>
						</ul>
					</div>

					<div class="social">
						<ul>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						</ul>
					</div>
				</nav>

			</div>
		</div>
	</header>

	<div id="fullpage">

		<!-- <div id="content" class="site-content"> -->
