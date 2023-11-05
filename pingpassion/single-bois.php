<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<header class="page-header">
			<h1><?php the_title(); ?></h1>
		</header>
		
		<section class="bois-wrapper">

			<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="bois-card">
				<?php the_post_thumbnail(); ?>
				<div class="bois-card__content">
						<?php the_content(); ?>
				</div>
			</div>

			<?php
			endwhile; // End of the loop.
			?>
		</section>

	</main><!-- #main -->

<?php

get_footer();
