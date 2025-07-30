<div class="card border-0 sidebar sticky-bar rounded shadow">
  <div class="card-body">

    <!-- SEARCH -->
    <div class="widget">
      <form role="search" method="get" action="<?php echo home_url();?>">
        <div class="input-group mb-3 border rounded">
          <input type="search" id="s" name="s" value="<?php the_search_query(); ?>" class="form-control border-0"
            placeholder="Search Keywords...">
          <!-- <button type="submit" class="input-group-text bg-transparent border-0" id="searchsubmit"><i -->
          <button type="submit" class="input-group-text bg-transparent border-0"><i class="uil uil-search"></i></button>
        </div>
      </form>

    </div>
    <!-- SEARCH -->

    <!-- Categories -->
    <div class="widget mb-4 pb-2">
      <h5 class="widget-title">Categories</h5>
      <ul class="list-unstyled mt-4 mb-0 blog-categories">
        <li class="cat-item"><a href="<?php echo home_url(); ?>/blog-events/">Blog</a></li>
        <li class="cat-item"><a href="<?php echo home_url(); ?>/blog-japan/">Blog-Japan</a></li>
        <li class="cat-item"><a href="<?php echo home_url(); ?>/blog-marketing/">Marketing</a></li>
        

      </ul>
    </div>
    <!-- Categories -->

    <!-- RECENT POST -->
    <div class="widget mb-4 pb-2">
      <h5 class="widget-title">Recent Post</h5>
      <div class="mt-4">
        <?php
               $args = array(
                   'posts_per_page' => 5 //表示件数の指定
               );
               $posts = get_posts( $args );
               foreach ( $posts as $post ): //ループの開始
               setup_postdata( $post ); //記事データのセット
           ?>
        <!-- start loop -->
        <div class="clearfix post-recent">
          <div class="post-recent-thumb float-start"> <a href="<?php the_permalink(); ?>">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid rounded'));?>
              </a>
          </div>
          <div class="post-recent-content float-start">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <!-- //date -->
            <span class="text-muted mt-2"><?php echo get_post_time( 'F j, Y' ); ?></span>
          </div>
        </div>

        <!-- //今回作成したクエリをリセットする -->
        <?php
               wp_reset_postdata(); 
            endforeach;
            ?>
        <!-- end loop -->

      </div>
    </div>
    <!-- RECENT POST -->




  </div>
</div>