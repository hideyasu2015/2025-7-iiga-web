<!-- Footer Start -->
<div id="fb-root"></div>
<!-- for facebook -->
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v10.0&appId=306374097596794&autoLogAppEvents=1"
  nonce="ygmYOt8o"></script>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
        <a href="#" class="logo-footer">
          <img src="<?php echo get_template_directory_uri() ?>/images/connect/logo_with_mail.png" width="300" alt="">
        </a>
        <p class="mt-4">introduction of Japanese culture</p>
        <p>Web marketing to Japan</p>
    
        <!--==== SNSアイコン ====-->
        <!-- <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
          <li class="list-inline-item"><a href="https://www.facebook.com/connect.co.ltd" class="rounded"><i
                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
           <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram"
                class="fea icon-sm fea-social"></i></a></li> -->
        <!-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter"
                class="fea icon-sm fea-social"></i></a></li>
        </ul>  -->
        <!--end icon-->
      </div>
      <!--end col-->


      <!--========== center navメニュー ============-->
      <div class="col-md-3 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
        <h5 class="text-light footer-head">Nav Menu</h5>
        <ul class="list-unstyled footer-list mt-4">
          <li><a href="<?php echo home_url(); ?>" class="text-foot">
              <i class="uil uil-angle-right-b ms-1"></i>
              HOME</a></li>
          <li><a href="<?php echo home_url(); ?>/blog-japan" class="text-foot">
              <i class="uil uil-angle-right-b ms-1"></i>
              Blog-Japan</a></li>
          <li><a href="<?php echo home_url(); ?>/blog-events/" class="text-foot">
              <i class="uil uil-angle-right-b ms-1"></i>
              Blog</a></li>
          <li><a href="<?php echo home_url(); ?>/contact/" class="text-foot">
              <i class="uil uil-angle-right-b ms-1"></i>
              Contact Us</a></li>

        </ul>
      </div>
      <!--end col-->


      <!-- facebook -->
      <div class="col-md-5 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 text-center">
        <!-- <h5 class="text-light footer-head">Facebook</h5> -->

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
          src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=306374097596794&autoLogAppEvents=1"
          nonce="Mgdv8H8F"></script>

        <div class="fb-page" data-href="https://www.facebook.com/connect.co.ltd.Japan" data-tabs="timeline"
          data-width="350" data-height="500" data-small-header="true" data-adapt-container-width="false"
          data-hide-cover="false" data-show-facepile="false">
          <blockquote cite="https://www.facebook.com/connect.co.ltd.Japan" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/connect.co.ltd.Japan">Connect.co.ltd-Japan</a></blockquote>
        </div>
      </div>



    </div>
    <!--end col-->

  </div>
  <!--end row-->
  </div>
  <!--end container-->
</footer>
<!--end footer-->
<footer class="footer footer-bar">
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col-sm-12">
        <div class="text-sm-start">
          <p class="mb-0">©2021 Connect.co, Ltd
          </p>
        </div>
      </div>
      <!--end col-->

    </div>
    <!--end row-->
  </div>
  <!--end container-->
</footer>
<!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i
    data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<?php wp_footer(); ?>

<!-- javascript -->
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.bundle.min.js"></script>
<!-- SLIDER -->
<script src="<?php echo get_template_directory_uri() ?>/js/tiny-slider.js "></script>
<script src="<?php echo get_template_directory_uri() ?>/js/swiper.min.js"></script>
<!-- tobii js -->
<script src="<?php echo get_template_directory_uri() ?>/js/tobii.min.js "></script>
<!-- Icons -->
<script src="<?php echo get_template_directory_uri() ?>/js/feather.min.js"></script>
<!-- Main Js -->
<script src="<?php echo get_template_directory_uri() ?>/js/plugins.init.js"></script>
<!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>