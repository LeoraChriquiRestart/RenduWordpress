<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping-Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<div class="index-container">
					<img src="wp-content/themes/pingpassion/images/Screenshot 2023-11-04 at 21-05-30 Accueil - Ping-Passion.png" alt="images">
					<section class="index-description">
						<p>
							Chez Ping Passion, nous croyons que le tennis de table est bien plus qu'un simple sport, c'est une passion. Que vous soyez un débutant cherchant à s'améliorer ou un joueur chevronné visant l'excellence, Ping Passion est votre partenaire de confiance pour tout ce qui concerne le tennis de table. Nous sommes fiers de contribuer à l'épanouissement de votre passion pour ce sport dynamique et excitant.
						</p>
					</section>
				</div>


			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
	
<?php

get_footer();
