<?php
/*
Template Name: Corporative page, basic mod
*/
  
 get_header(); ?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


		

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(corporative); ?>