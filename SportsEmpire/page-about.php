<?php
/**
 * Template Name: Page About
 */

?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		

		

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class="section1about_w">
				    <div class="section1about page_content">
				       <div class="section2_heading heading_mod">
				         <h2>
				          <span>Империя</span>
				          <img class="star_img" src="<?php echo bloginfo("template_url"); ?>/img/logo.jpg" alt="Logo" />
				          <span>Спорта</span>
				         </h2>
				      </div>
						
					</div>
				</section>
				<?php the_content(); ?>
			</article>

			

				

			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	
		<!-- /section -->
		<div class="footer-push-about"></div>
	</main>

<?php get_footer(about); ?>
