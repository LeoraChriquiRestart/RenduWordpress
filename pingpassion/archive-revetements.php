<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping-Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Nos différents revêtements</h1>
				<p>Le choix d’une raquette de ping pong doit aussi tenir compte de son revêtement. Il en existe plusieurs types et dans différentes caractéristiques.</p>
			</header><!-- .page-header -->

			<section class="revetements-wrapper">
				
				<?php
				while ( have_posts() ) :
					the_post(); ?>
					
				<div class="revetements-card">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail(); ?>
					<div class="revetements-card__content">
						<?php the_excerpt(); ?>
						<button>
							<a href="<?php the_permalink(); ?>">Voir plus</a>
						</button>
					</div>
				</div>
				
				<?php endwhile; ?>
			</section>

			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();