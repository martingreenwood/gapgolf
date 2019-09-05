<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gapgolf
 */

get_header(); ?>


	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main"> -->


			<!-- <div id="slidessectionetc"> -->

				<?php $banner = get_field( 'banner_image' ); ?>
				<section id="banner" class="section">
					<div class="top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="widget count">
										<h2><?php the_field( 'number_of_spaces_left', 'options' ); ?></h2>
										<p>SPACES<br />REMAINING</p>
									</div>
								</div>
								<div class="col">
									<img src="<?php the_field( 'banner_logo' ); ?>" alt="Gap Golf Academy" class="big-logo">
								</div>
								<div class="col">
									<div class="social">
										<a target="_blank" rel="noreferrer nofollow" href="<?php the_field( 'instagram', 'options' ); ?>"><i class="fab fa-instagram"></i></a>
										<a target="_blank" rel="noreferrer nofollow" href="<?php the_field( 'facebook', 'options' ); ?>"><i class="fab fa-facebook-f"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="caption">
						<div class="container">
							<div class="row">
								<div class="oneslides">
								<?php
								if( have_rows('banner_slides') ):
								    while ( have_rows('banner_slides') ) : the_row();
									?>
									<div class="slide" style="background-image:url(<?php the_sub_field('slide') ?>)">
										<h1><?php the_sub_field( 'slide_header' ); ?></h1>
										<h2><?php the_sub_field( 'slide_sub_header' ); ?></h2>
									</div>
									<?php
								    endwhile;
								endif;
								?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<?php $section_one_bg = get_field( 'background_image' ); ?>
				<!-- <section id="sectionone" class="section" style="background-image: url(<?php echo $section_one_bg['url'] ?>);"> -->
				<section id="sectionone" class="section parallax-window" bleed="50" data-parallax="scroll" data-image-src="<?php echo $section_one_bg['url'] ?>">

					<div class="container">
						<div class="row">
							<div class="text col-sm-12 col-md-6 col-lg-6">
								<?php the_field( 'section_one_intro' ); ?>
							</div>
							<div class="points col-sm-12 col-md-6 col-lg-6">

								<?php
								if( have_rows('section_one_points') ):
								    while ( have_rows('section_one_points') ) : the_row();
									?>
									<div class="point">
										<img src="<?php the_sub_field( 'icon' ); ?>" alt="">
										<p><?php the_sub_field( 'text' ); ?></p>
									</div>
									<?php
								    endwhile;
								endif;
								?>
								<div class="book">
									<a href="#sectionten" class="button">CONTACT US</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<?php $section_two_bg = get_field( 'section_two_banner_image' ); ?>
				<!-- <section id="sectiontwo" class="section" style="background-image: url(<?php echo $section_two_bg['url'] ?>);"> -->
				<section id="sectiontwo" class="section parallax-window" data-parallax="scroll" data-image-src="<?php echo $section_two_bg['url'] ?>">
					<div class="container">
						<div class="row">
							<div class="widget count">
								<h2><?php the_field( 'number_of_spaces_left', 'options' ); ?></h2>
								<p>SPACES<br />REMAINING</p>
							</div>
							<h2><?php the_field( 'section_two_title' ); ?></h2>
							<p><?php the_field( 'section_two_sub_title' ); ?></p>
						</div>
					</div>
				</section>

				<?php $section_three_bg = get_field( 'section_three_bg_image' ); ?>
				<!-- <section id="sectionthree" class="section" style="background-image: url(<?php echo $section_three_bg['url'] ?>);"> -->
				<section id="sectionthree" class="section parallax-window" data-parallax="scroll" data-image-src="<?php echo $section_three_bg['url'] ?>">
					<div class="container">

						<div class="row">
							<div class="column col-sm-hidden col-lg-4">

							</div>
							<div class="column col-sm-12 col-lg-8">
								<?php the_field( 'section_three_intro' ); ?>
							</div>

							<div class="space column col-sm-12 col-lg-12">
								&nbsp;
							</div>

							<div class="bio col-sm-12 col-md-4 col-lg-4">
								<?php the_field( 'section_three_column_one' ); ?>
							</div>
							<div class="bio col-sm-12 col-md-4 col-lg-4">
								<?php the_field( 'section_three_column_two' ); ?>
							</div>
							<div class="bio col-sm-12 col-md-4 col-lg-4">
								<?php the_field( 'section_three_column_three' ); ?>
							</div>
						</div>
					</div>
				</section>

				<section id="sectionfour" class="section fp-auto-height">
					<div class="container-fluid">
						<div class="rowalt">
								<?php

								$images = get_field('section_four_gallery');
								$size = 'square'; // (thumbnail, medium, large, full or custom size)

								if( $images ): ?>
								    <div class="carousel threeslides">
								        <?php foreach( $images as $image ): ?>
								            <div>
												<!-- <a data-fancybox="threeslides" href="<?php echo $image['URL'] ?>"> -->
								            		<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
												<!-- </a> -->
								            </div>
								        <?php endforeach; ?>
								    </div>
								<?php endif; ?>
					 	</div>
					</div>
				</section>

				 <section id="sectionfive" class="section fp-auto-height">
					<div class="container-fluid">
						<div class="rowalt">
							<?php
							$images = get_field('section_five_gallery');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)

							if( $images ): ?>
							    <div class="carousel fourslides">
							        <?php foreach( $images as $image ): ?>
							            <div>
							            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
							            </div>
							        <?php endforeach; ?>
							    </div>
							<?php endif;
							?>
						</div>
					</div>
				</section>

				<?php $section_six_bg = get_field( 'section_six_background_image' ); ?>
				<!-- <section id="sectionsix" class="section" style="background-image: url(<?php echo $section_six_bg['url'] ?>);"> -->
				<section id="sectionsix" class="section parallax-window" data-parallax="scroll" data-image-src="<?php echo $section_six_bg['url'] ?>">
					<div class="container">
						<div class="row">
							<div class="text col-sm-12 col-md-6 col-lg-6">
								<?php the_field( 'section_six_intro' ); ?>
							</div>
							<div class="points col-sm-12 col-md-6 col-lg-6">

								<?php
								if( have_rows('section_one_points') ):
								    while ( have_rows('section_six_points') ) : the_row();
									?>
									<div class="point">
										<img src="<?php the_sub_field( 'icon' ); ?>" alt="">
										<p><?php the_sub_field( 'text' ); ?></p>
									</div>
									<?php
								    endwhile;
								endif;
								?>
							</div>
						</div>
					</div>
				</section>

				<section id="sectionseven" class="section fp-auto-height">
					<div class="container-fluid">
						<div class="rowalt">
							<?php

							$images = get_field('section_seven_gallery');
							$size = 'square'; // (thumbnail, medium, large, full or custom size)

							if( $images ): ?>
							    <div class="carousel threeslides">
							        <?php foreach( $images as $image ): ?>

										<div class="single">
											<a href="<?php echo $image['url'] ?>">
							            		<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
											</a>
										</div>

							        <?php endforeach; ?>
							    </div>
							<?php endif; ?>
						</div>
					</div>
				</section>

				<section id="sectioneight" class="section fp-auto-height">
					<div class="container-fluid">
						<div class="row">
							<img src="<?php the_field( 'video_thumbnail' ); ?>" alt="">
							<div class="video-overlay">
								<a class="closeme" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve" class="">
										<g>
											<g>
												<g id="clear">
													<polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3     214.2,178.5   " data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/>
												</g>
											</g>
										</g>
									</svg>
								</a>
								<video id="videoreel" width="1280" height="720" controls>
									<source data-src="<?php the_field( 'section_eight_video' ); ?>" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
				</section>

				<?php $section_nine_bg = get_field( 'section_nine_background' ); ?>
				<!-- <section id="sectionnine" class="section" style="background-image: url(<?php echo $section_nine_bg['url'] ?>);"> -->
				<section id="sectionnine" class="section parallax-window" data-parallax="scroll" data-image-src="<?php echo $section_nine_bg['url'] ?>">
					<div class="container">
						<div class="row">
							<div class="oneslides">

							<?php
							if( have_rows('section_nine_quotes') ):
							    while ( have_rows('section_nine_quotes') ) : the_row();
								?>
								<div class="slide">
									<?php the_sub_field( 'quote' ); ?>
								</div>
								<?php
							    endwhile;
							endif;
							?>

							</div>
						</div>
					</div>
				</section>

				<?php $section_ten_bg = get_field( 'section_ten_background_image' ); ?>
				<!-- <section id="sectionten" class="section" style="background-image: url(<?php echo $section_ten_bg['url'] ?>);"> -->
				<section id="sectionten" class="section parallax-window" data-parallax="scroll" data-image-src="<?php echo $section_ten_bg['url'] ?>">
					<div class="container">
						<div class="row">
							<div class="form">
								<?php the_field( 'section_ten_intro' ); ?>
							</div>
							<div class="social-copy">
								<div class="">
									<a target="_blank" rel="noreferrer nofollow" href="<?php the_field( 'instagram', 'options' ); ?>"><i class="fab fa-instagram"></i></a>
									<a target="_blank" rel="noreferrer nofollow" href="<?php the_field( 'facebook', 'options' ); ?>"><i class="fab fa-facebook-f"></i></a>
								</div>
								<p>&copy; Copyright <?php echo bloginfo( 'name' ) ?> <?php echo date('Y'); ?></p>
							</div>
						</div>
					</div>
				</section>

			</div>

		</main>
	</div>

<?php
get_footer();
