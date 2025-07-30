<?php get_header(); ?>

<?php if (have_posts() ) : ?>
<?php while(have_posts()) : the_post() ?>

<!-- Hero Start -->
<section class="bg-half d-table w-100"
  style="background: url('<?php echo get_template_directory_uri(); ?>/images/connect/iphone_top.jpg') center center;">
  <div class="bg-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <div class="page-next-level">
          <h3 class="title text-white title-dark"><?php the_title(); ?></h3>
          <div class="page-next">
            <nav aria-label="breadcrumb" class="d-inline-block">
              <ul class="breadcrumb bg-white rounded shadow mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#"><?php the_title(); ?></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--end col-->
    </div>
    <!--end row-->
  </div>
  <!--end container-->
</section>
<!--end section-->

<div class="position-relative">
  <div class="shape overflow-hidden text-white">
    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
  </div>
</div>
<!-- Hero End -->



<section class="bg_half" style="margin-top: 7rem; margin-bottom:7rem;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="section-title">
          <div class="text-center mb-5">
            <h1 class="title mb-4"><?php the_title(); ?></h1>
            <?php the_post_thumbnail('thumbnail', array('class'=> 'img-fluid rounded-md shadow-md')); ?>
            <img src="images/blog/05.jpg" class="img-fluid rounded-md shadow-md" alt="">
          </div>

          <div>
            <?php the_content(); ?>
          </div>

        </div>
        <!--end section title-->


      </div>
      <!--end col-->
    </div>
    <!--end row-->
  </div>
  <!--end container-->
</section>
<!--end section-->
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>