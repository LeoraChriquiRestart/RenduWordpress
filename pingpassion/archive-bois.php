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
				<h1>Nos différents bois</h1>
				<p>Dans un sport de précision et de sensation comme l’est le Tennis de Table, le choix de la raquette et en premier lieu du bois se révèle d’une extrême importance.</p>
			</header><!-- .page-header -->

			<section class="boiss-wrapper">
				
				<?php
				while ( have_posts() ) :
					the_post(); ?>
					
				<div class="boiss-card">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail(); ?>
					<div class="boiss-card__content">
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