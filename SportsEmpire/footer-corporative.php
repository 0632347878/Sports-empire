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
<?php wp_footer(corporative); ?>

 <script>
 //initialize SlickNav
  $(function(){
    $('#menu').slicknav();
  }); 
  //initialize Swiper
var mySwiper = new Swiper ('.swiper-container', {
  // Optional parameters
  paginationClickable: true,
  slidesPerView: 5,
  spaceBetween: -30,
  direction: 'horizontal',
  loop: true,
  autoplay: 2000,
  breakpoints: {
  // when window width is <= 320px
  960: {
    slidesPerView: 4,
    spaceBetween: 10
  },
  768: {
    slidesPerView: 3,
    spaceBetween: 0
  },
  680: {
    slidesPerView: 2,
    spaceBetween: 0
  },
  380: {
    slidesPerView: 1,
    spaceBetween: 10
  }
  // when window width is <= 640px
},
  // pagination: '.pagination',
  // Navigation arrows
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev'
})    
// initialize the plugin 
$(function () {
  $('#responsiveGallery-container').responsiveGallery({
    animatDuration: 400, // ms
    $btn_prev: $('#responsiveGallery-container .responsiveGallery-btn_prev'),
    $btn_next: $('#responsiveGallery-container .responsiveGallery-btn_next')
  });
});

$(function () {
  $('#responsiveGallery-container2').responsiveGallery({
    animatDuration: 400, // ms
    $btn_prev: $('#responsiveGallery-container2 .responsiveGallery-btn_prev'),
    $btn_next: $('#responsiveGallery-container2 .responsiveGallery-btn_next')
  });
});

</script>
</body>

</html>