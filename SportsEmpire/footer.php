<footer class="footer">
  <div class="footer_w page_content">
   <nav class="nav_bottom">
      <?php 
        wp_nav_menu( array(
          'menu_class'=>'menu',  
          'theme_location'=>'bottom',
          'after'=>''       
        ) );
      ?>
   </nav>
    <div class="social social_mod">
    <?php dynamic_sidebar( 'top-area' ); ?>
   </div>
  <div class="copyright_block">
    &copy; 2016 «Империя Спорта». 
  </div>
  </div>
 </footer>
<?php wp_footer(); ?>

 <script>
 //initialize SlickNav
  $(function(){
    $('#menu').slicknav();
  });
  //initialize Swiper
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    
    // If we need pagination
    pagination: '.swiper-pagination',
    autoplay: 2000,
    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
  })        
</script>

	</body>
</html>
