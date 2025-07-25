<?php get_header(); ?>
<!-- start Slider -->
<section class="swiper-slider-hero position-relative d-block vh-100" id="home">
 <?php get_template_part( 'templates/carousel' ); ?>
</section>
<!--end Slider -->


<!-- what we do-->
<section class="section">
  <?php get_template_part('templates/top', 'whatwedo'); ?>
</section>
<!--end section-->

<!----------- Blog section ----------------->
<section id="blog" class="mb-5">
  <?php get_template_part('templates/top', 'blog'); ?>

  <!--end container-->
</section>
<!--end section-->





<!--＝＝＝＝＝＝＝＝ 金額セクション ＝＝＝＝＝＝＝＝＝＝-->
<section class="section">
  <?php get_template_part('templates/top','counsultfee'); ?>
  <!--end container-->
</section>





<?php get_footer();?>