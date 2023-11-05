<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Passion
 */

$dataCaract = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<header class="page-header">
			<h1><?php the_title(); ?></h1>
		</header>
		
		<section class="revetement-wrapper">

			<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="revetement-card">
				<?php the_post_thumbnail(); ?>
				<div class="revetement-card__content">
						<?php the_content(); ?>
						
						<section>
							<h2>Caractéristiques des revêtements :</h2>
							<p>Rapidité : <?= $dataCaract['rapidite'] ?> cal.</p>
							<p>Contrôle : <?= $dataCaract['controle'] ?> g.</p>
							<p>Adhérence : <?= $dataCaract['adherence'] ?> g.</p>
							<p>Epaisseur : <?= $dataCaract['epaisseur'] ?> g.</p>
						</section>
				</div>
				
			</div>

			<?php
			endwhile; // End of the loop.
			?>
		</section>

	</main><!-- #main -->

<?php

get_footer();
