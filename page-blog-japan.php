<?php get_header(); ?>

<!-- Hero Start -->
<!-- <section class="bg-half bg-light d-table w-100"> -->
<!-- hideyasu add -->
<!-- <section id="category-iphone" class="bg-half w-100" style="background: url('images/1.jpg') center center;"> -->
<section id="category-iphone" class="bg-half w-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <div class="page-next-level">
          <h4 class="title text-white"> Blog-Japan </h4>
          <div class="page-next">
            <nav aria-label="breadcrumb" class="d-inline-block">
              <ul class="breadcrumb bg-white rounded shadow mb-0">
                <li class="breadcrumb-item"><a href="index.html">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog-japan</li>
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
<!-- Hero End -->


<!-- Shape Start -->
<div class="position-relative">
  <div class="shape overflow-hidden text-white">

    <!-- <img class="shape-img" src="images/connect/iphone_top.jpg" alt=""> -->
    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
  </div>
</div>
<!--Shape End-->

<!-- Blog Start -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- BLog Start -->
      <div class="col-lg-8 col-md-6">
        <div class="row">

          <?php
            $args = array(

                //pagedが必要
                'paged' => get_query_var('paged', 1),
                'post_type' => 'post',
                'category_name' => 'japan',
                'posts_per_page' => 10,
            );
            $blog_query = new WP_Query($args);
          
            ?>
          <?php if ($blog_query->have_posts() ) : ?>
          <?php while ($blog_query->have_posts()) : $blog_query->the_post() ; ?>
          <div class="col-lg-6 col-md-12 mb-4 pb-2">
            <div class="card blog rounded border-0 shadow">
              <div class="position-relative">
                <div class="blog_image">
                  <?php the_post_thumbnail('large',array('class'=> 'card-img-top rounded-top')); ?>
                  <!-- <img src="" class="card-img-top rounded-top" alt="..."> -->
                </div>
                <div class="overlay rounded-top bg-dark"></div>
              </div>
              <div class="card-body content">
                <h5><a href="<?php the_permalink(); ?>" class="card-title title text-dark">
                    <?php the_title(); ?>
                  </a>
                </h5>
                <div class="post-meta d-flex justify-content-between mt-3">

                  <a href="<?php the_permalink(); ?>" class="text-muted readmore">Read More <i
                      class="uil uil-angle-right-b align-middle"></i></a>
                </div>
              </div>
              <div class="author">
                <small class="text-light user d-block"><i class="uil uil-user"></i>
                  &nbsp;&nbsp;<?php the_author(); ?>
                </small>
                <small class="text-light date"><i class="uil uil-calendar-alt"></i>
                  <?php echo get_post_time('F j, Y'); ?>
                </small>
              </div>
            </div>
          </div>
          <!--end col-->

          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <!-- end row -->
      </div>
      <!-- end clo-lg-8 -->

      <!-- START SIDEBAR -->
      <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
        <?php get_sidebar('main'); ?>
      </div>
      <!--end col-->
      <!-- END SIDEBAR -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container               -->

  <!-- PAGINATION START -->
  <div class="container">
    <div class="row">
      <div class="col-8 justify-content-center mb-0 mt-5">
        <?php $args = array(
                    'total' => $blog_query->max_num_pages,
                    'show_all'           => False,
                    'end_size'           => 1,
                    'type'               => 'list',
                    'prev_text' => 'Prev',
                    'next_text' => 'Next'
                    ); 
         echo paginate_links( $args ); ?>

        <!-- <ul class="pagination justify-content-center mb-0">
          <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
          <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
        </ul> -->

      </div>
      <!--end col-->
      <div class="col-4"></div>
      <!-- PAGINATION END -->
    </div>
    <!--end row-->
  </div>
  <!--end container -->
  <!-- BLog End -->

</section>
<!--end section-->
<!-- Blog End -->
<?php get_footer();?>