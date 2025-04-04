<?php
$images = [
  "img/home-9/IMG-20250316-WA0004.jpg",
  "img/home-9/IMG-20250316-WA0040.jpg",
  "img/home-9/IMG-20250316-WA0041.jpg",
  "img/home-9/IMG-20250316-WA0042.jpg",
  "img/home-9/IMG-20250316-WA0043.jpg",
  "img/home-9/IMG-20250316-WA0050.jpg",
  "img/home-9/IMG-20250316-WA0051.jpg",
  "img/home-9/IMG-20250316-WA0052.jpg",
  "img/home-9/IMG-20250316-WA0053.jpg",
  "img/home-9/IMG-20250316-WA0054.jpg",
  "img/home-9/IMG-20250316-WA0055.jpg",
  "img/home-9/IMG-20250316-WA0056.jpg",
  "img/home-9/IMG-20250316-WA0057.jpg",
  "img/home-9/IMG-20250316-WA0058.jpg",
  "img/home-9/IMG-20250316-WA0059.jpg",
  "img/home-9/IMG-20250316-WA0060.jpg",
  "img/home-9/IMG-20250316-WA0061.jpg",
  "img/home-9/IMG-20250316-WA0062.jpg",
  "img/home-9/IMG-20250316-WA0063.jpg",
  "img/home-9/IMG-20250316-WA0064.jpg",
  "img/home-9/IMG-20250316-WA0066.jpg",
  "img/home-9/IMG-20250316-WA0067.jpg",
  "img/home-9/IMG-20250316-WA0068.jpg",
  "img/home-9/IMG-20250316-WA0070.jpg",
  "img/home-9/IMG-20250316-WA0005.jpg",
  "img/home-9/IMG-20250316-WA0006.jpg",
  "img/home-9/IMG-20250316-WA0007.jpg",
  "img/home-9/IMG-20250316-WA0008.jpg",
  "img/home-9/IMG-20250316-WA0009.jpg",
  "img/home-9/IMG-20250316-WA0010.jpg",
  "img/home-9/IMG-20250316-WA0011.jpg",
  "img/home-9/IMG-20250316-WA0012.jpg",
  "img/home-9/IMG-20250316-WA0013.jpg",
  "img/home-9/IMG-20250316-WA0014.jpg",
  "img/home-9/IMG-20250316-WA0015.jpg",
  "img/home-9/IMG-20250316-WA0016.jpg",
  "img/home-9/IMG-20250316-WA0017.jpg",
  "img/home-9/IMG-20250316-WA0018.jpg",
  "img/home-9/IMG-20250316-WA0019.jpg",
  "img/home-9/IMG-20250316-WA0020.jpg",
  "img/home-9/IMG-20250316-WA0021.jpg",
  "img/home-9/IMG-20250316-WA0022.jpg",
  "img/home-9/IMG-20250316-WA0023.jpg",
  "img/home-9/IMG-20250316-WA0024.jpg",
  "img/home-9/IMG-20250316-WA0025.jpg",
  "img/home-9/IMG-20250316-WA0026.jpg",
  "img/home-9/IMG-20250316-WA0027.jpg",
  "img/home-9/IMG-20250316-WA0028.jpg",
  "img/home-9/IMG-20250316-WA0029.jpg",
  "img/home-9/IMG-20250316-WA0030.jpg",
  "img/home-9/IMG-20250316-WA0031.jpg",
  "img/home-9/IMG-20250316-WA0032.jpg",
  "img/home-9/IMG-20250316-WA0033.jpg",
  "img/home-9/IMG-20250316-WA0034.jpg",
  "img/home-9/IMG-20250316-WA0035.jpg",
  "img/home-9/IMG-20250316-WA0036.jpg",
  "img/home-9/IMG-20250316-WA0037.jpg",
  "img/home-9/IMG-20250316-WA0038.jpg",
  "img/home-9/IMG-20250316-WA0039.jpg",
  "img/home-9/IMG-20250316-WA0044.jpg",
  "img/home-9/IMG-20250316-WA0045.jpg",
  "img/home-9/IMG-20250316-WA0046.jpg",
  "img/home-9/IMG-20250316-WA0047.jpg",
  "img/home-9/IMG-20250316-WA0048.jpg",
  "img/home-9/IMG-20250316-WA0049.jpg",
];
?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>


  <div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-angle-up"></i></div>
  </div>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      margin: 0;
      padding: 20px;
    }

    .gallery-container {
      width: 90%;
      margin: auto;
      column-count: 3;
      column-gap: 15px;
    }

    .gallery-item {
      break-inside: avoid;
      margin-bottom: 15px;
      position: relative;
      overflow: hidden;
      border-radius: 10px;
    }

    .gallery-item img {
      width: 100%;
      display: block;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .gallery-container {
        column-count: 2;
      }
    }

    @media (max-width: 480px) {
      .gallery-container {
        column-count: 1;
      }
    }
  </style>
  <style>
    .page-header.-type-2 {
      position: relative;
      padding-top: 131px;
      padding-bottom: 135px;
      margin-top: 72px;
      z-index: 0;
    }
  </style>

  <main class="main-content">

    <?php include("new-header.php") ?>

    <div class="content-wrapper js-content-wrapper pt-50">
      <!-- <section class="pt-80 pb-80 md:pt-60 md:pb-60 bg-purple-6 mt-80" style="background-image: url('img/home_new/Home_Banner_BG.jpg');">
        <div class="container">
          <div class="row y-gap-20 justify-between items-center">
            <div class="col-xl-6 col-lg-6">
              <h2 class="text-30 lh-15 text-white">Start your Right Education Here! <img src="img/home_new/open-book.png" class="ml-5" alt="image" draggable="false" /></h2>
              <p class="text-white mt-10">Education Breeds Confidence. Confidence Breeds Hope. Hope Breeds Peace.</p>
            </div>
            <div class="col-auto">
              <a href="#gallery_image" class="button -md -white text-dark-1">View Gallery <i class="icon-arrow-top-right text-13 ml-10"></i></a>
            </div>
          </div>
        </div>
      </section> -->

      <section class="layout-pt-md layout-pb-lg layout-pb-md" id="gallery_image">
        <div data-anim-wrap class="container">
          <h2>Gallery</h2>
          <div class="row y-gap-30 justify-center">
            <div class="gallery-container">
              <?php foreach ($images as $image): ?>
                <div class="gallery-item">
                  <img src="<?php echo $image; ?>" alt="Gallery Image">
                </div>
              <?php endforeach; ?>
            </div>
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