<footer class="footer">
  <div class="footer_w page_content">
   <nav class="nav_bottom">
      <?php 
        wp_nav_menu( array(
          'menu_class'=>'menu',  
          'theme_location'=>'bottom',
          'after'=>'',
          'exclude' => 23       
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
<?php wp_footer(about); ?>

<!--begin script-->   
 <script>
 //initialize SlickNav
  $(function(){
    $('#menu').slicknav();
  }); 
  //initialize Swiper

var mySwiper = new Swiper ('.swiper-container', {
  // Optional parameters
  pagination: '.swiper-pagination',
  paginationClickable: true,
  paginationElement: 'a',
  slidesPerView: 5,
  direction: 'horizontal',
  loop: true,
  autoplay: 2000,
  breakpoints: {
  // when window width is <= 320px
  960: {
    slidesPerView: 3,
    spaceBetween: 10
  },
  380: {
    slidesPerView: 1,
    spaceBetween: 10
  },
  // when window width is <= 640px
  768: {
    slidesPerView: 2,
    spaceBetween: 0
  }
},
  //autoplay: 2000,
  // pagination: '.pagination',
  // Navigation arrows
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev'
})    
</script>

	</body>
</html>
