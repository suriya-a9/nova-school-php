<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->

  
  <div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-angle-up"></i></div>
 </div>

  <style>
    section.pt-80.pb-80.md\:pt-60.md\:pb-60.bg-purple-6.mt-100 {
      margin-top: 130px;
    }
  </style>

  <main class="main-content">

    <?php include("header.php") ?>

    <div class="content-wrapper js-content-wrapper">
      <section class="pt-80 pb-80 md:pt-60 md:pb-60 bg-purple-6 mt-100" style="background-image: url('img/home_new/Home_Banner_BG.jpg');">
        <div class="container">
          <div class="row y-gap-20 justify-between items-center">
            <div class="col-xl-6 col-lg-6">
              <h2 class="text-30 lh-15 text-white">Finding Your Right Education <img src="img/home_new/open-book.png" class="ml-5" alt="image" draggable="false" /></h2>
              <p class="text-white mt-10">Use the list below to bring attention to your product’s key differentiator.</p>
            </div>
            <div class="col-auto">
              <a href="#register_form" class="button -md -white text-dark-1">Apply Now <i class="icon-arrow-top-right text-13 ml-10"></i></a>
            </div>
          </div>
        </div>
      </section>
      
      <section class="layout-pt-lg layout-pb-lg pt-40 pb-40">
        <div class="container">
          <div data-anim-wrap class="row y-gap-30 justify-between items-center">
            <div class="col-xl-8 col-lg-8 order-2 order-lg-1">
              <h2 data-anim-child="slide-up delay-1" class="text-45 lg:text-40 md:text-30 text-dark-1">Why @ <span class="text-purple-1">Nova Education</span></h2>
              <p data-anim-child="slide-up delay-1" class="text-dark-1 mt-20 text-justify">We are committed to build and maintain a Best-in-Class team of faculties. Our staffs and students ultimately drive the success of the institution, and thus we are committed to provide a world class education. Our personal and professional development programs provide faculties numerous opportunities to further enhance their skill sets and careers in their path of education, and the management also ensures that they have resources to maintain a healthy lifestyle.</p>
            </div>
            <div class="col-xl-4 col-lg-4 order-1 order-lg-2">
              <img src="img/home_new/Home_About_Content_1.png" draggable="false" alt="image">
            </div>
          </div>
        </div>
      </section>

      <section class="layout-pt-lg layout-pb-lg bg-light-6 pt-0 pb-40" id="register_form">
        <div data-anim-wrap class="container">
          <div class="row y-gap-30 pt-40">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdu3__ckR8vvRLiwD8yaJUYkeqMAKWdvQDTMCtzR7MsllPosA/viewform?embedded=true" class="button-style car j o i n u s t" target="_blank" width="650" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading&#8230;</iframe>
          </div>
        </div>
      </section>

      <?php include("footer.php") ?>

    </div>
  </main>

  <!-- JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/leaflet.js"></script>
  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>

</body>

</html>