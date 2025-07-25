<?php get_header(); ?>

<body>
  <!-- Loader -->
  <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
  <!-- Loader -->

  <div class="back-to-home rounded d-none d-sm-block">
    <a href="index.html" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
  </div>

  <!-- ERROR PAGE -->
  <section class="bg-home d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 text-center">
          <img src="<?php echo get_template_directory_uri();?>/images/connect/404.svg" class="img-fluid" alt="">
          <div class="text-uppercase mt-4 display-3">Oh ! no</div>
          <div class="text-capitalize text-dark mb-4 error-page">Page Not Found</div>
          <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary fw-bold">Conect</span>
          </p>
        </div>
        <!--end col-->
      </div>
      <!--end row-->

      <div class="row">
        <div class="col-md-12 text-center">
          <a href="<?php echo home_url(); ?>/contact" class="btn btn-outline-primary mt-4">Go Back</a>
          <a href="<?php echo home_url(); ?>" class="btn btn-primary mt-4 ms-2">Go To Home</a>
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--end section-->
  <!-- ERROR PAGE -->


  <?php get_footer(); ?>