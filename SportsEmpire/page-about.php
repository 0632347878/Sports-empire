<?php
/**
 * Template Name: Page About
 */

?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		

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
				<?php the_content(); ?>
			</div>
			</section>
			</article>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!--begin section2-->
				<section class="section2about_w">
				  <div class="section2about page_content">
				    <h2 class="partners_heading">Наши клиенты</h2>
				    <!-- Slider main container -->
				    <div class="swiper-container swiper_mod_about">
				        <!-- Additional required wrapper -->
				        <div class="swiper-wrapper about_mod">
				            <!-- Slides -->
				            <div class="swiper-slide"><img src="<?php echo bloginfo("template_url"); ?>/img/fender.png" alt="fender"></div>
				            <div class="swiper-slide"><img src="<?php echo bloginfo("template_url"); ?>/img/dakine.png" alt="dakine"></div>
				            <div class="swiper-slide"><img src="<?php echo bloginfo("template_url"); ?>/img/item_3.png" alt="item_3"></div>
				            <div class="swiper-slide"><img src="<?php echo bloginfo("template_url"); ?>/img/slizenger.png" alt="slizenger"></div>
				            <div class="swiper-slide"><img src="<?php echo bloginfo("template_url"); ?>/img/chanel.png" alt="chanel"></div>
				        </div>
				        <!-- If we need pagination -->
				        <div class="swiper-pagination"></div>
				        
				        <!-- If we need navigation buttons -->
				        <div class="swiper-button-prev about_prew"></div>
				        <div class="swiper-button-next about_next"></div>
				    </div>
				  </div>
				</section>
			</article>
			<!--begin section3-->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="section3about_w">
			  <div class="section3about page_content">
			    <h3 class="heading_about">Вакансии</h3>
			    <p class="about_text_bottom">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
				 <div class="form_vacancy_holder">
		      <h4 class="vacancy_heading">Заполните все поля</h4>
		      <form name="vacancy" action="" method="post">
		        <input type="text" placeholder="Ваш номер телефона">
		        <input type="text" placeholder="Ваш e-mail">
		        <div class="file_wrapper"><input type="file" name="send_f" placeholder="Ваше резюме"></div>
		        <input type="submit" value="Подать заявку">
		      </form>
		      <span class="form_text">Мы гарантируем безопасность ваших данных</span>
		    </div>
				<div class="contact_holder">
				  <h4 class="contact_heding_top">Контактная информация</h4>
				  <p class="contact_text1">Империя спорта</p>
				  <p class="contact_text2">Москва, Россия</p>
				  <p class="contact_text3">ул. Крылатская, 16</p>
				  <span class="contact_nomber">+7 (495) 642 25 33</span>
				  <h4 class="how_get">Как добраться</h4>
				  <p class="get_text">от метро "Молодежная автобус №229</p>
				  <p class="get_text" >от метро "Крылатская" автобус №829</p>
				  <p class="get_text">(до остановки "Дворец ледового спорта)</p>
				</div>
			  </div>
			</section> 
			</article>
			
				<br class="clear">

				

			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		<div class="footer-push-about"></div>
	</main>

<?php get_footer(); ?>
