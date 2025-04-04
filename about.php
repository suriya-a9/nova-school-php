<?php
$tabs = [
  [
    "id" => 1,
    "title" => "Nova College of Education",
    "image" => "img/home-9/about-us-tab.webp",
    "content1" => "Nova College of Education, Coimbatore, was established by Alfa Education Trust in the academic year 2008, with the vision of Mr.A.Rangasamy, whose cherished dream was to start a College of Education to achieve high ideals for future teachers.",
    "content2" => "It is situated in a sprawling campus of 5 acres in Coimbatore, which in many ways is surrounded by a natural ecosystem. Over a period of nine years, totally dedicated to the cause of Education, Nova College of Education has made tremendous contributions to society by finding out a new cadre of teachers who could imbibe a good value system, self-confidence, self-reliance in the future generation through focused, planned, and research-based innovations.",
    "url" => "contact.php"
  ],
  [
    "id" => 2,
    "title" => "Nova Teacher Training Institute",
    "image" => "img/home-9/about-us-tab.webp",
    "content1" => "Nova College of Education, Coimbatore, was established by Alfa Education Trust in the academic year 2008, with the vision of Mr.A.Rangasamy, whose cherished dream was to start a College of Education to achieve high ideals for future teachers.",
    "content2" => "It is situated in a sprawling campus of 5 acres in Coimbatore, which in many ways is surrounded by a natural ecosystem. Over a period of nine years, totally dedicated to the cause of Education, Nova College of Education has made tremendous contributions to society by finding out a new cadre of teachers who could imbibe a good value system, self-confidence, self-reliance in the future generation through focused, planned, and research-based innovations.",
    "url" => "contact.php"
  ],
  [
    "id" => 3,
    "title" => "Nova Public School",
    "image" => "img/home-9/about-us-tab.webp",
    "content1" => "Nova College of Education, Coimbatore, was established by Alfa Education Trust in the academic year 2008, with the vision of Mr.A.Rangasamy, whose cherished dream was to start a College of Education to achieve high ideals for future teachers.",
    "content2" => "It is situated in a sprawling campus of 5 acres in Coimbatore, which in many ways is surrounded by a natural ecosystem. Over a period of nine years, totally dedicated to the cause of Education, Nova College of Education has made tremendous contributions to society by finding out a new cadre of teachers who could imbibe a good value system, self-confidence, self-reliance in the future generation through focused, planned, and research-based innovations.",
    "url" => "contact.php"
  ],
  [
    "id" => 4,
    "title" => "Nova Flinto Play School",
    "image" => "img/home-9/about-us-tab.webp",
    "content1" => "Nova College of Education, Coimbatore, was established by Alfa Education Trust in the academic year 2008, with the vision of Mr.A.Rangasamy, whose cherished dream was to start a College of Education to achieve high ideals for future teachers.",
    "content2" => "It is situated in a sprawling campus of 5 acres in Coimbatore, which in many ways is surrounded by a natural ecosystem. Over a period of nine years, totally dedicated to the cause of Education, Nova College of Education has made tremendous contributions to society by finding out a new cadre of teachers who could imbibe a good value system, self-confidence, self-reliance in the future generation through focused, planned, and research-based innovations.",
    "url" => "contact.php"
  ]
];
?>

<?php
$slides = [
  [
    "id" => 1,
    "title" => "Chess",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Empowering students with extraordinary education.",
    "url" => "#"
  ],
  [
    "id" => 2,
    "title" => "Football",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Training the future educators of tomorrow.",
    "url" => "#"
  ],
  [
    "id" => 3,
    "title" => "Silambam",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Providing quality education for young minds.",
    "url" => "#"
  ],
  [
    "id" => 4,
    "title" => "Cooking",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Fun and learning for preschoolers.",
    "url" => "#"
  ],
  [
    "id" => 5,
    "title" => "Brain Stroming",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Globally connected education programs.",
    "url" => "#"
  ],
  [
    "id" => 6,
    "title" => "Yoga",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Globally connected education programs.",
  ],
  [
    "id" => 7,
    "title" => "Electronic Debugging",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Globally connected education programs.",
  ],
  [
    "id" => 8,
    "title" => "Dance & Music",
    "image" => "img/home-9/nova-about-brain.png",
    "content" => "Globally connected education programs.",
  ]
];
?>

<?php
$milestones = [
  ["year" => "2008", "title" => "Nova was Established", "icon" => "🚀"],
  ["year" => "2016", "title" => "B.Ed Courses Started", "icon" => "✔️"],
  ["year" => "2017", "title" => "Nova Public School (CBSC)", "icon" => "✔️"],
  ["year" => "2018", "title" => "Nova Kindergarten", "icon" => "✔️"]
];
?>

<?php
$testimonials = [
  ["name" => "Mahesh", "message" => "“I recently used the services of this education consulting website and I couldn't be happier with the results. The team was incredibly knowledgeable and helpful in guiding me through the college application process.”", "image" => "img/home-9/favicon.webp"],
  ["name" => "Ram Govind", "message" => "“They provided me with valuable insights and advice that helped me select the best colleges for my goals and interests. Additionally, they helped me with essay editing and interview preparation, which I found extremely useful.”", "image" => "img/home-9/favicon.webp"],
  ["name" => "Meenakshi", "message" => "“I would like to thank all my faculty members who have encouraged and supported me. Overall, I would highly recommend this education consulting website to anyone who wants to make the most out of their college experience.”", "image" => "img/home-9/favicon.webp"],
];
?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<link rel="stylesheet" href="css/timeline.css">

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <script>
    function setActiveTab(tabId) {
      document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
      document.querySelectorAll('.content').forEach(content => content.style.display = 'none');

      document.getElementById('tab-' + tabId).classList.add('active');
      document.getElementById('content-' + tabId).style.display = 'flex';
    }
  </script>

  <div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-angle-up"></i></div>
  </div>

  <main class="main-content">

    <?php include("new-header.php") ?>

    <div class="content-wrapper js-content-wrapper pt-50">

      <section class='home-banner'>
        <div class='container-fluid'>
          <div class='row'>
            <div class='col-md-12'>
              <div id="homeBannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/home-9/banner-1.jpeg" class="d-block" alt="banner">
                    <div class="carousel-caption">
                      <h3>Leading Educational Study Centre</h3>
                      <p>Welcome To Nova Education, We Make Your Dream Come True</p>
                      <div class='caption-button'>
                        <button class='btn btn-primary header-contact-button'>Contact Us</button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/home-9/banner-2.jpeg" class="d-block" alt="banner">
                    <div class="carousel-caption">
                      <h3>Leading Educational Study Centre</h3>
                      <p>Welcome To Nova Education, We Make Your Dream Come True</p>
                      <div class='caption-button'>
                        <button class='btn btn-primary header-contact-button'>Contact Us</button>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="carousel-item">
                    <img src="img/home-9/banner-new.webp" class="d-block" alt="banner">
                    <div class="carousel-caption">
                      <h3>Leading Educational Study Centre</h3>
                      <p>Welcome To Nova Education, We Make Your Dream Come True</p>
                      <div class='caption-button'>
                        <button class='btn btn-primary header-contact-button'>Contact Us</button>
                      </div>
                    </div>
                  </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeBannerCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeBannerCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="nova-institution" id="nova-about-institution">
        <div class="container">
          <div class="row">
            <h2 class="nova-institute-heading">Nova Institution</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="nova-tab">
                <div class="tabs">
                  <?php foreach ($tabs as $tab): ?>
                    <button
                      id="tab-<?php echo $tab['id']; ?>"
                      class="tab <?php echo $tab['id'] === 1 ? 'active' : ''; ?>"
                      onclick="setActiveTab(<?php echo $tab['id']; ?>)">
                      <?php echo $tab['title']; ?>
                    </button>
                  <?php endforeach; ?>
                </div>

                <div class="tab-content">
                  <?php foreach ($tabs as $tab): ?>
                    <div
                      id="content-<?php echo $tab['id']; ?>"
                      class="content row align-items-center"
                      style="display: <?php echo $tab['id'] === 1 ? 'flex' : 'none'; ?>;">
                      <!-- Image Column -->
                      <div class="col-md-6">
                        <img src="<?php echo $tab['image']; ?>" alt="<?php echo $tab['title']; ?>" class="img-fluid">
                      </div>
                      <!-- Text Content Column -->
                      <div class="col-md-6">
                        <h3><?php echo $tab['title']; ?></h3>
                        <p><?php echo $tab['content1']; ?></p>
                        <p class="sub_content"><?php echo $tab['content2']; ?></p>
                        <a href="<?php echo $tab['url']; ?>" class="btn btn-primary">Start Learning</a>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="nova-vision">
        <div class="container">
          <div class="row">
            <h2>Our Vision</h2>
            <div class="col-md-6">
              <div class="nova-vision-first">
                <img src="img/home-9/vision.png">
              </div>
            </div>
            <div class="col-md-6">
              <div class="vision" id="vision-about">
                <div class="vision-img">
                  <img src="img/home-9/Vision.webp" alt="Our Vision">
                </div>
                <div class="vision-content">
                  <h4>Our Vision</h4>
                  <p>We at Nova empower children with numerous learning opportunities and the best teaching practices...</p>
                  <!-- <a href="#">Read More &gt;</a> -->
                </div>
              </div>
              <div class="mission" id="mission-about">
                <div class="mission-img">
                  <img src="img/home-9/Mission.webp" alt="Our Mission">
                </div>
                <div class="mission-content">
                  <h4>Our Mission</h4>
                  <p>We at Nova empower children with numerous learning opportunities and the best teaching practices...</p>
                  <!-- <a href="#">Read More &gt;</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="journey-section">
        <div class="container">
          <div class="row">
            <h2>Start your Learning Journey Today!</h2>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

              <div class="row">
                <?php
                $firstRow = [
                  ["image" => "img/home-9/Learn (1).webp", "title" => "Learn with Experts"],
                  ["image" => "img/home-9/Industrial.webp", "title" => "Industrial Exposure"]
                ];
                foreach ($firstRow as $item) { ?>
                  <div class="col-md-6">
                    <div class="journey-section-div">
                      <div class="journey-content-div">
                        <img src="<?php echo $item['image']; ?>" alt="img">
                        <h4><?php echo $item['title']; ?></h4>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>

              <div class="row">
                <?php
                $secondRow = [
                  ["image" => "img/home-9/Learn.webp", "title" => "Hands-on Learning"],
                  ["image" => "img/home-9/Flexible.webp", "title" => "Flexible Learning"]
                ];
                foreach ($secondRow as $item) { ?>
                  <div class="col-md-6">
                    <div class="journey-section-div">
                      <div class="journey-content-div">
                        <img src="<?php echo $item['image']; ?>" alt="img">
                        <h4><?php echo $item['title']; ?></h4>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>

            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </section>

      <div class="swiper-container container">
        <!-- <div class="row"> -->
        <h2>Co Curricular Activities</h2>
        <p>Co Curricular ActivitiesNova Public School encourages students to enrich and widen their creative aspect to emphasize on qualities that make them success in all that they do. We also enhance children in social interaction, to develop leadership skills and art of recreation that helps them in promoting self discipline and self confidence.</p>
        <div class="swiper-wrapper">
          <?php foreach ($slides as $slide): ?>
            <div class="swiper-slide">
              <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
              <h3><?php echo $slide['title']; ?></h3>
              <!-- <p><?php echo $slide['content']; ?></p>
              <a href="<?php echo $slide['url']; ?>" class="btn btn-primary">Learn More</a> -->
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Swiper Pagination & Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- </div> -->
      </div>
      <section class="achievements">
        <div class="container">
          <div class="row">
            <h2>Our Acheivements</h2>
            <div class="col-md-12">

              <div class="timeline-container">
                <div class="progress-bar">
                  <div class="progress"></div>
                </div>
                <div class="milestones">
                  <?php foreach ($milestones as $index => $milestone): ?>
                    <div class="milestone" id="milestone-<?php echo $index; ?>">
                      <span><strong><?php echo $milestone["year"]; ?></strong></span>
                      <div><?php echo $milestone["icon"]; ?></div>
                      <span><?php echo $milestone["title"]; ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="what-students-say">
        <div class="container">
          <div class="row">
            <h2>What Our Students Have To Say</h2>
            <div class="col-md-6">
              <div class="what-students-img">
                <img src="img/home-9/what-students-img.png" alt="img">
              </div>
            </div>
            <div class="col-md-6">
              <div class="what-students-contane">
                <div id="studentCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php foreach ($testimonials as $index => $testimonial): ?>
                      <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="testimonial">
                          <div class="name">
                            <img src="<?php echo $testimonial["image"]; ?>" class="testimonial-img" alt="Student">
                            <h4 class="testimonial-name"><?php echo $testimonial["name"]; ?></h4>
                          </div>
                          <p class="testimonial-text"><?php echo $testimonial["message"]; ?></p>
                          <div class="testimonial-star">
                            <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#studentCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#studentCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </button>
                </div>
              </div>
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
  <script src="js/timeline.js"></script>

  <script>
    jQuery('.about_sub_content_btn').click(function(e) {
      e.preventDefault();
      console.log('click');
      jQuery('.about_sub_content').slideToggle('fast');
      jQuery(this).text(jQuery(this).text() == 'Read Less' ? 'Read More' : 'Read Less');
    });

    jQuery('.about_sub_content_btn_2').click(function(e) {
      e.preventDefault();
      console.log('click');
      jQuery('.about_sub_content_2').slideToggle('fast');
      jQuery(this).text(jQuery(this).text() == 'Read Less' ? 'Read More' : 'Read Less');
    });

    jQuery('.about_sub_content_btn_3').click(function(e) {
      e.preventDefault();
      console.log('click');
      jQuery('.about_sub_content_3').slideToggle('fast');
      jQuery(this).text(jQuery(this).text() == 'Read Less' ? 'Read More' : 'Read Less');
    });

    jQuery('.about_sub_content_btn_4').click(function(e) {
      e.preventDefault();
      console.log('click');
      jQuery('.about_sub_content_4').slideToggle('fast');
      jQuery(this).text(jQuery(this).text() == 'Read Less' ? 'Read More' : 'Read Less');
    });
  </script>
  <!-- Swiper JS -->
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3, // Default: 3 slides visible
      spaceBetween: 50, // Adjust space between slides
      centeredSlides: true, // Center the active slide
      loop: true, // Infinite looping
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1200: { // Large screens
          slidesPerView: 3,
          spaceBetween: 100
        },
        992: { // Tablets and small laptops
          slidesPerView: 2,
          spaceBetween: 60
        },
        768: { // Small tablets
          slidesPerView: 1.5,
          spaceBetween: 40
        },
        400: { // Mobile devices
          slidesPerView: 1,
          spaceBetween: 20
        },
        300: { // Mobile devices
          slidesPerView: 1,
          spaceBetween: 20
        }
      }
    });
  </script>



  <script>
    let progressBar = document.querySelector('.progress');
    let milestones = document.querySelectorAll('.milestone');
    let currentStep = 0;
    let totalSteps = milestones.length;
    let progressIncrement = 100 / (totalSteps - 1);

    function animateProgress() {
      if (currentStep >= totalSteps) {
        // Reset all milestones & progress
        milestones.forEach(milestone => milestone.classList.remove('active'));
        currentStep = 0;
        progressBar.style.width = "0%";
      }

      setTimeout(() => {
        progressBar.style.width = (currentStep * progressIncrement) + "%";
        milestones[currentStep].classList.add('active');

        if (currentStep > 0) {
          milestones[currentStep - 1].classList.remove('active');
        }

        currentStep++;
        setTimeout(animateProgress, 2000); // Move to the next milestone every 2 seconds
      }, 500);
    }

    animateProgress();
  </script>
</body>

</html>