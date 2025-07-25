<?php get_header(); ?>

<!-- Hero Start -->
<section class="bg-half bg-light d-table w-100"
  style="background: url('<?php echo get_template_directory_uri(); ?>/images/connect/contact_top.jpg') center center;">
  <div class="bg-overlay bg-overlay-white"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <div class="page-next-level">
          <h4 class="title">Contact Us</h4>
          <div class="page-next">
            <nav aria-label="breadcrumb" class="d-inline-block">
              <ul class="breadcrumb bg-white rounded shadow mb-0">
                <li class="breadcrumb-item"><a href="<?php echo home_url();?>">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
  </div>
</div>
<!--Shape End-->

<!-- Start Contact -->
<section class="section mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6  mt-4 pt-2">
        <div class="card shadow rounded border-0">
          <div class="card-body pt-3">
            <h4 class="card-title">Contact Us</h4>
            <div class="custom-form mt-3">

              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

              <!-- contact form　shortcode -->
              <?php the_content(); ?>

              <?php endwhile; ?>
              <?php endif; ?>

              <!-- start form -->

            </div>
          </div>
        </div>
      </div>

      <!-- 右半分 -->
      <div class="col-lg-8 col-md-6 ps-md-3 pe-md-3 mt-4 pt-2">
        <div class="card map map-height-two rounded map-gray border-0">
          <div class="card-body p-0">
            <div id="map" class="rounded" style="height: 500px; width: 100%;"></div>
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
<!-- End contact -->



<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script //callbackをtestMapに変更する
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqeunFJ3sP0DwkBb4o5aHvfKUiAtR4IWo&callback=testMap&libraries=&v=weekly"
  async></script>

<script>
let map;
const locations = [{
    lat: 34.44240737169703,
    lng: 132.7560966053917
  },
  {
    lat: 21.02769822970885,
    lng: 105.843831813235
  },
  {
    lat: 18.79406980279902,
    lng: 98.99262600135351
  }
]


// Adds a marker to the map.
function addMarker(location, map) {
  // Add the marker at the clicked location, and add the next-available label
  // from the array of alphabetical characters.
  new google.maps.Marker({
    position: location,
    // label: labels[labelIndex++ % labels.length],
    map: map,
  });
}

//testMapに関数名を変更する
function testMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: {
      lat: 23.641251,
      lng: 120.639221
    },
    zoom: 4,
  });

  //add maker
  locations.forEach((location) => {
    addMarker(location, map);
  })
}
</script>
<?php get_footer();?>