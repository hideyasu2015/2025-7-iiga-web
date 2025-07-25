  <div class="container">
    <div class="row align-items-center mb-4 pb-2">
      <div class="col-md-12">
        <div class="section-title text-center text-lg-start">

          <h4 class="title mb-4 mb-lg-0">Reads Our Latest <br> News &
            <a href="<?php echo home_url(); ?>/blog-events">
              Blog
            </a>
          </h4>
        </div>
      </div>
      <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
      <?php
                    $args = array(
                        //投稿タイプは「post」
                        'post_type' => 'post',  
                        //1ページあたり2件表示させる
                        'posts_per_page' => 6,
                    );
                    $blog_query = new WP_Query ($args);
                ?>
      <?php if ($blog_query->have_posts()): ?>
      <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>

      <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="card blog rounded border-0 shadow">
          <div class="position-relative">
            <div class="blog_image">
              <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('large', array('class' => 'card-img-top rounded-top') ); ?>
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/blog/01.jpg" class="card-img-top rounded-top"
                alt="...">
              <?php endif; ?>
            </div>
            <!-- <img src="<?#php echo get_template_directory_uri() ?>/images/blog/01.jpg"
               class="card-img-top rounded-top" alt="..."> -->

            <a href="<?php the_permalink(); ?>">
              <div class="overlay rounded-top bg-dark"></div>
            </a>
          </div>
          <div class="card-body content">
            <h5><a href="<?php the_permalink(); ?>" class="card-title title text-dark">
                <?php the_title(); ?>
              </a>
            </h5>

            <?php echo (mb_substr(get_the_excerpt(), 0, 40) . '...'); ?>
            <!-- <?#php the_excerpt(); ?> -->
            <!-- //詳細へ -->
            <div class="post-meta d-flex justify-content-between mt-3">
              <a href="<?php the_permalink(); ?>" class="text-muted readmore">Read More <i
                  class="uil uil-angle-right-b align-middle"></i></a>
            </div>
          </div>
          <div class="author">
            <small class="text-light user d-block"><i
                class="uil uil-user"></i>&nbsp;&nbsp;<?php the_author(); ?></small>
            <small class="text-light date"><i class="uil uil-calendar-alt"></i>
              <?php echo get_post_time( 'F j, Y' ); ?></small>
          </div>
        </div>
      </div>
      <!--end col-->

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>



    </div>
    <!--end row-->
  </div>