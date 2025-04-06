<?php
$tabs = [
    ["id" => 1, "title" => "Nova College of Education", "image" => "img/home-9/nova-college-of-education.webp", "content" => "Empowering Students to Attain and Maintain Extraordinary Education. Spearheaded by experienced...", "sub_content" => "Admissions Open from all education courses", "url" => "/"],
    ["id" => 2, "title" => "Nova Teacher Training Institute", "image" => "img/home-9/nova-teacher-training.webp", "content" => "Empowering Students to Attain and Maintain Extraordinary Education. Spearheaded by experienced...", "sub_content" => "Admissions Open from all education courses", "url" => "/"],
    ["id" => 3, "title" => "Nova Public School", "image" => "img/home-9/nova-public-school.webp", "content" => "Empowering Students to Attain and Maintain Extraordinary Education. Spearheaded by experienced...", "sub_content" => "Admissions Open from all education courses", "url" => "/"],
    ["id" => 4, "title" => "Nova Flinto Play School", "image" => "img/home-9/nova-plito-play-school.webp", "content" => "Empowering Students to Attain and Maintain Extraordinary Education. Spearheaded by experienced...", "sub_content" => "Admissions Open from all education courses", "url" => "/"],
];
?>
<?php
$facilities = [
    ["title" => "Smart Classroom", "description" => "Our classrooms are spacious and equipped with digital modules", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "facilities.php"],
    ["title" => "Scientific & Tech Lab", "description" => "State-of-the-art science and technology labs", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "facilities.php"],
    ["title" => "The Library", "description" => "A vast collection of books and digital resources", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "facilities.php"],
    ["title" => "Music Room", "description" => "A dedicated space for music and performing arts", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "facilities.php"],
    ["title" => "Food Court Facility", "description" => "Healthy and hygienic meals for students", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "facilities.php"],
    ["title" => "Transport Facility", "description" => "Safe and efficient transport for students", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "facilities.php"],
];
?>
<?php
$events = [
    ["title" => "Nova Kindergarten Event", "description" => "Our classrooms are spacious and equipped with digital modules", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "/"],
    ["title" => "B.Ed / D.El.Ed", "description" => "Professional training for aspiring teachers", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "/"],
    ["title" => "Nova Public School Event", "description" => "Annual celebrations and activities", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "/"],
    ["title" => "Cricket Event", "description" => "Inter-school cricket tournament", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "/"],
    ["title" => "Smart Classroom", "description" => "Digitally advanced learning spaces", "image" => "img/home-9/banner.webp", "subtext" => "6 April, 2025", "url" => "/"],
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
        a.button.-md.-purple-3.text-purple-1 {
            padding: 12px 24px
        }
    </style>
    <script>
        function setActiveTab(tabId) {
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            document.querySelectorAll('.content').forEach(content => content.style.display = 'none');

            document.getElementById('tab-' + tabId).classList.add('active');
            document.getElementById('content-' + tabId).style.display = 'block';
        }
    </script>

    <main class="main-content">

        <?php include("new-header.php") ?>

        <div class="content-wrapper js-content-wrapper">

            <!-- <section data-anim-wrap class="masthead -type-6 pb-0">
        <div class="masthead__bg">
          <img src="img/home_new/Home_Banner_BG_1.png" alt="background">
          <img src="img/home_new/Home_Banner_BG_2.png" alt="background">
          <div class="absolute-full-center" id="js-masthead-1-particles"></div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="carousel-inner">
            <div class="container">
              <div class="row y-gap-50 items-center">
                <div class="col-lg-6">
                  <div class="masthead__content">
                    <h1 data-anim-child="slide-up delay-3" class="masthead__title">
                      Leading Educational<br>
                      <span class="text-purple-1">Study Centre</span>
                    </h1>
                    <p data-anim-child="slide-up delay-4" class="pt-20">
                      Welcome To Nova Education, We Make Your Dreams Come True.
                    </p>
                    <div data-anim-child="slide-up delay-5" class="row items-center x-gap-20 y-gap-20 pt-40 lg:pt-30 is-in-view">
                      <div class="col-auto">
                        <a href="contact.php" class="button -md -orange-1 text-white">Join Now</a>
                      </div>
                      <div class="col-auto">
                        <a href="courses.php" class="button -md -outline-light-5 text-dark-1">Find Courses</a>
                      </div>
                    </div>
                    <div data-anim-child="slide-up delay-6" class="row x-gap-20 y-gap-20 items-center pt-40 lg:pt-30 is-in-view">
                      <div class="col-xl-4 col-auto">
                        <div class="text-dark-1">
                          <div class="mr-10">
                            <img src="img/home-8/hero/icons/1.svg" class="owl-carousel-slider-img" height='120' width='120'draggable="false" alt="icon">
                          </div>
                          <div class="fw-500 lh-11 mt-10">Over 1000+<br/> Students</div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-auto">
                        <div class="text-dark-1">
                          <div class="mr-10">
                            <img src="img/home-8/hero/icons/2.svg" class="owl-carousel-slider-img" height='120' width='120' draggable="false" alt="icon">
                          </div>
                          <div class="fw-500 lh-11 mt-10">More than<br/> 14 Courses</div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-auto">
                        <div class="text-dark-1">
                          <div class="mr-10">
                            <img src="img/home-8/hero/icons/3.svg" class="owl-carousel-slider-img" height='120' width='120' draggable="false" alt="icon">
                          </div>
                          <div class="fw-500 lh-11 mt-10">68 Teaching<br/> Faculties</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div data-anim-child="slide-up delay-6" class="masthead__image relative">
                    <img src="img/home_new/Home_Banner_1.png" draggable="false" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-inner">
            <div class="container">
              <div class="row y-gap-50 items-center">
                <div class="col-lg-6">
                  <div class="masthead__content">
                    <h1 data-anim-child="slide-up delay-3" class="masthead__title">
                      We can Teach you by<br>
                      <span class="text-purple-1">Popular Education</span>
                    </h1>
                    <p data-anim-child="slide-up delay-4" class="pt-20">
                      Welcome To Nova Education, We Make Your Dreams Come True.
                    </p>
                    <div data-anim-child="slide-up delay-5" class="row items-center x-gap-20 y-gap-20 pt-40 lg:pt-30 is-in-view">
                      <div class="col-auto">
                        <a href="contact.php" class="button -md -orange-1 text-white">Join Now</a>
                      </div>
                      <div class="col-auto">
                        <a href="courses.php" class="button -md -outline-light-5 text-dark-1">Find Courses</a>
                      </div>
                    </div>
                    <div data-anim-child="slide-up delay-6" class="row x-gap-20 y-gap-20 items-center pt-40 lg:pt-30 is-in-view" >
                      <div class="col-xl-4 col-auto">
                        <div class="text-dark-1">
                          <div class="mr-10">
                            <img src="img/home-8/hero/icons/1.svg" class="owl-carousel-slider-img"  height='120' width='120' draggable="false" alt="icon">
                          </div>
                          <div class="fw-500 lh-11 mt-10">Over 5000+<br> students</div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-auto">
                        <div class="text-dark-1">
                          <div class="mr-10">
                          <img src="img/home-8/hero/icons/2.svg" class="owl-carousel-slider-img" height='120' width='120' draggable="false" alt="icon">
                          </div>
                          <div class="fw-500 lh-11 mt-10">More than<br> 10,000 courses</div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-auto">
                        <div class="text-dark-1">
                          <div class="mr-10">
                          <img src="img/home-8/hero/icons/3.svg" class="owl-carousel-slider-img" height='120' width='120' draggable="false" alt="icon">
                          </div>
                          <div class="fw-500 lh-11 mt-10">Learn anything<br> online</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div data-anim-child="slide-up delay-6" class="masthead__image relative">
                    <img src="img/home_new/Home_Banner_2.png" draggable="false" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

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
            <section class="home-about">
                <div class="container">
                    <div class="row">
                        <div class="home-about-heading">
                            <h2>About Nova Education</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="home-about-content">
                                <p>Nova College of Education, Coimbatore, was established by Alfa Education Trust in the academic year 2008, with the vision of Mr. A. Ragasammy, whose cherished dream was to start a College of Education to achieve high ideals for future teachers. It is situated in a sprawling campus of 5 acres in Coimbatore, which in many ways is surrounded by a natural ecosystem.</p>
                                <p>Over a period of nine years, totally dedicated to the cause of Education, Nova College of Education has made tremendous contributions to society by finding out a new cadre of teachers who could imbibe a good value system, self-confidence, and self-reliance in the future generation through focused, planned, and research-based innovations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="vision">
                                <div class="vision-img">
                                    <img src="img/home-9/Vision.webp" alt="Our Vision">
                                </div>
                                <div class="vision-content">
                                    <h4>Our Vision</h4>
                                    <p>We at Nova empower children with numerous learning opportunities and the best teaching practices...</p>
                                    <!-- <a href="#">Read More &gt;</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mission">
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
            <section class="why-nova-section">
                <div class="container">
                    <div class="row">
                        <h2>Why Nova Education?</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="why-nova-left">
                                <img src="img/home-9/why.webp" alt="Why Nova?">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-nova-right">
                                <div class="why-nova-div">
                                    <div class="why-nova-div-img">
                                        <img src="img/home-9/Select.webp" alt="Select a Course">
                                    </div>
                                    <div class="why-nova-div-content">
                                        <h4>Select a course You Like <br>And Explore It!</h4>
                                        <p>Starting from Kinder Garden - Public Schooling - D.TEd - B.Ed</p>
                                    </div>
                                </div>
                                <div class="why-nova-div">
                                    <div class="why-nova-div-img">
                                        <img src="img/home-9/Visit.webp" alt="Visit Nova">
                                    </div>
                                    <div class="why-nova-div-content">
                                        <h4>Visit Nova To Know More <br>About It!</h4>
                                        <p>We are Always Open to Answer your Queries</p>
                                    </div>
                                </div>
                                <div class="why-nova-div">
                                    <div class="why-nova-div-img">
                                        <img src="img/home-9/Nova.webp" alt="Nova Brings Value">
                                    </div>
                                    <div class="why-nova-div-content">
                                        <h4>Nova Brings Value Based<br>Education In Everyone</h4>
                                        <p>Nova Brings Value Based Education In Everyone</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="nova-institution" id="home-institution">
                <div class="container">
                    <div class="row">
                        <h2 class="nova-institute-heading">Nova Educational</h2>
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
                                            class="content"
                                            style="display: <?php echo $tab['id'] === 1 ? 'block' : 'none'; ?>;">
                                            <img src="<?php echo $tab['image']; ?>" alt="<?php echo $tab['title']; ?>" class="tab-image">
                                            <p><?php echo $tab['content']; ?></p>
                                            <p class="sub_content"><?php echo $tab['sub_content']; ?></p>
                                            <a href="<?php echo $tab['url']; ?>">Know More</a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-facilities py-5">
                <div class="container">
                    <h2 class="text-center mb-4">Our Facilities</h2>
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($facilities as $facility): ?>
                            <div class="item">
                                <img src="<?php echo $facility['image']; ?>" alt="<?php echo $facility['title']; ?>">
                                <div class="content">
                                    <span class="subtext"><?php echo $facility['subtext']; ?></span>
                                    <h4><?php echo $facility['title']; ?></h4>
                                    <p><?php echo $facility['description']; ?></p>
                                    <a href="<?php echo $facility['url']; ?>">Read more &gt;</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="contact.php"><button class="join-now">Join Now</button></a>
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

            <!-- <section class="layout-pt-lg layout-pb-lg bg-light-6">
                <div class="container">
                    <div class="row y-gap-20 justify-center text-center">
                        <div class="col-auto">
                            <div class="sectionTitle">
                                <h2 class="sectionTitle__title">Why Nova Education?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row y-gap-30 justify-between pt-60 lg:pt-40">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="d-flex flex-column items-center text-center">
                                <div class="relative size-100 d-flex justify-center items-center rounded-full bg-light-2">
                                    <img src="img/home_new/Home_Why_Nova_Icon_1.png" draggable="false" alt="image">
                                    <div class="side-badge">
                                        <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                                            <span class="text-14 fw-500 text-white">01</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-17 fw-500 text-dark-1 mt-30">Select a Course You Like And Explore It!</div>
                                <p class="pt-10">Starting from Kinder Garten - Public Schooling - D.TEd - B.Ed</p>
                            </div>
                        </div>
                        <div class="col-auto xl:d-none width140">
                            <div class="pt-30">
                                <img src="img/home_new/Home_Arrow.png" draggable="false" alt="icon">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="d-flex flex-column items-center text-center">
                                <div class="relative size-100 d-flex justify-center items-center rounded-full bg-light-2">
                                    <img src="img/home_new/Home_Why_Nova_Icon_2.png" draggable="false" alt="image">
                                    <div class="side-badge">
                                        <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                                            <span class="text-14 fw-500 text-white">02</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-17 fw-500 text-dark-1 mt-30">Visit Nova To Know More <br />About It!</div>
                                <p class="pt-10">We are Always Open to Answer your Queries.</p>
                            </div>
                        </div>
                        <div class="col-auto xl:d-none width140">
                            <div class="pt-30">
                                <img src="img/home_new/Home_Arrow.png" draggable="false" alt="icon">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="d-flex flex-column items-center text-center">
                                <div class="relative size-100 d-flex justify-center items-center rounded-full bg-light-2">
                                    <img src="img/home_new/Home_Why_Nova_Icon_3.png" draggable="false" alt="image">
                                    <div class="side-badge">
                                        <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                                            <span class="text-14 fw-500 text-white">03</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-17 fw-500 text-dark-1 mt-30">Nova Brings Value Based Education In Everyone</div>
                                <p class="pt-10">Nova Brings Value Based Education to Everyone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="layout-pt-lg layout-pb-lg bg-light-3">
                <div data-anim-wrap class="container">
                    <div class="row justify-center text-center">
                        <div class="col-auto">
                            <div class="sectionTitle">
                                <h2 class="sectionTitle__title">Nova Institutions <img src="img/home_new/library_building.png" alt="image" class="img-responsive" draggable="false" /></h2>
                            </div>
                        </div>
                    </div>
                    <div data-anim-wrap class="row y-gap-30 justify-between pt-60 lg:pt-50">
                        <div class="col-lg-3 col-md-6 tt" data-anim-child="slide-right delay-1">
                            <div class="priceCard -type-1 rounded-16 overflow-hidden">
                                <div class="priceCard__header py-40 px-30 bg-purple-6">
                                    <div class="priceCard__price text-26 lh-11 fw-700 text-white">Nova College of Education</div>
                                    <div class="priceCard__period text-white text-14 mt-10">Admissions Open from all education courses</div>
                                </div>
                                <div class="priceCard__content pt-30 pr-40 pb-30 pl-40 bg-white">
                                    <div class="priceCard__text text-justify">Empowering Students to Attain and Maintain Extraordinary Education. Spearheaded by experienced...</div>
                                    <div class="hover14 column home_course_box_img">
                                        <figure>
                                            <img src="img/home_new/course/Home_Course_3.jpg" alt="image" class="rounded-8 img-responsive mt-30" draggable="false" />
                                        </figure>
                                    </div>
                                    <div class="priceCard__button mt-30">
                                        <a class="button -md -purple-3 text-purple-1" href="course_details.php">Know More <i class="icon-arrow-top-right text-11 ml-10"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 tt" data-anim-child="slide-right delay-2">
                            <div class="priceCard -type-1 rounded-16 overflow-hidden">
                                <div class="priceCard__header py-40 px-30 bg-purple-6">
                                    <div class="priceCard__price text-25 lh-11 fw-700 text-white">Nova Teacher Tranning School</div>
                                    <div class="priceCard__period text-white text-14 mt-10">A unique feature of the College is that the entire courses</div>
                                </div>
                                <div class="priceCard__content pt-30 pr-40 pb-30 pl-40 bg-white ">
                                    <div class="priceCard__text text-justify">Academic Activities at the College comprises B.Ed / D.T.Ed Programmes and other non-formal career oriented courses...</div>
                                    <div class="hover14 column home_course_box_img">
                                        <figure>
                                            <img src="img/home_new/course/Home_Course_2.jpg" alt="image" class="rounded-8 img-responsive mt-30" draggable="false" />
                                        </figure>
                                    </div>
                                    <div class="priceCard__button mt-30">
                                        <a class="button -md -purple-3 text-purple-1" href="teacher_training.php">Know More <i class="icon-arrow-top-right text-11 ml-10"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 tt" data-anim-child="slide-right delay-1">
                            <div class="priceCard -type-1 rounded-16 overflow-hidden">
                                <div class="priceCard__header py-40 px-30 bg-purple-6">
                                    <div class="priceCard__price text-26 lh-11 fw-700 text-white">Nova Public School</div>
                                    <div class="priceCard__period text-white text-14 mt-10">Admissions Open from PRE K.G to Vth STD</div>
                                </div>
                                <div class="priceCard__content pt-30 pr-40 pb-30 pl-40 bg-white">
                                    <div class="priceCard__text text-justify">Empowering Students to Attain and Maintain Extraordinary Education. Spearheaded by experienced...</div>
                                    <div class="hover14 column home_course_box_img">
                                        <figure>
                                            <img src="img/home_new/course/Home_Course_1.jpg" alt="image" class="rounded-8 img-responsive mt-30" draggable="false" />
                                        </figure>
                                    </div>
                                    <div class="priceCard__button mt-30">
                                        <a class="button -md -purple-3 text-purple-1" href="course_details.php">Know More <i class="icon-arrow-top-right text-11 ml-10"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-anim-child="slide-right delay-3">
                            <div class="priceCard -type-1 rounded-16 overflow-hidden">
                                <div class="priceCard__header py-40 px-30 bg-purple-6">
                                    <div class="priceCard__price text-26 lh-11 fw-700 text-white">Nova Flinto Play School</div>
                                    <div class="priceCard__period text-white text-14 mt-10">We offering you flinto play school for better results</div>
                                </div>
                                <div class="priceCard__content pt-30 pr-40 pb-30 pl-40 bg-white">
                                    <div class="priceCard__list">
                                        <div>
                                            <i class="text-purple-1 pr-8" data-feather="check"></i>
                                            Tamil Education
                                        </div>
                                        <div>
                                            <i class="text-purple-1 pr-8" data-feather="check"></i>
                                            English Education
                                        </div>
                                        <div>
                                            <i class="text-purple-1 pr-8" data-feather="check"></i>
                                            Mathematics
                                        </div>
                                        <div>
                                            <i class="text-purple-1 pr-8" data-feather="check"></i>
                                            View All
                                        </div>
                                    </div>
                                    <div class="hover14 column home_course_box_img">
                                        <figure>
                                            <img src="img/home_new/course/Home_Course_4.jpg" alt="image" class="rounded-8 img-responsive mt-30" draggable="false" />
                                        </figure>
                                    </div>
                                    <div class="priceCard__button mt-30">
                                        <a class="button -md -purple-3 text-purple-1" href="course_details.php">Know More <i class="icon-arrow-top-right text-11 ml-10"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="layout-pt-lg layout-pb-lg">
                <div data-anim-wrap class="container">
                    <div class="row y-gap-15 justify-between items-center">
                        <div class="col-lg-6">
                            <div class="sectionTitle">
                                <h2 class="sectionTitle__title">Our Facilities</h2>
                                <p class="sectionTitle__text">Let's Start your Study with Our Best Amenities</p>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <a href="courses.php" class="button -icon -purple-3 text-purple-1">
                                Join Our Institutions
                                <i class="icon-arrow-top-right text-13 ml-10"></i>
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="overflow-hidden pt-60 lg:pt-50 js-section-slider" data-gap="30" data-nav-prev="js-courses-prev" data-nav-next="js-courses-next" data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper pb-3">
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_1.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">
                                                    <div>
                                                        <div class="px-15 rounded-200 bg-orange-1">
                                                            <span class="text-12 lh-1 fw-500 text-white">New Feature</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Smart Class Room</div>
                                                <p class="pt-10">Our classrooms are spacious, fairy and equipped digital modules</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_2.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">
                                                    <div>
                                                        <div class="px-15 rounded-200 bg-orange-1">
                                                            <span class="text-12 lh-1 fw-500 text-white">New Feature</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Scientific & Tech Lab</div>
                                                <p class="pt-10">Computer Science is a technology subject with full amenities.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_3.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Library</div>
                                                <p class="pt-10">A state-of-the art Library is provided in the campus with full amenities.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_4.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Music Room</div>
                                                <p class="pt-10">The Music Room is fully furnished with the latest musical instruments.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_5.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Examination Centre</div>
                                                <p class="pt-10">A separate room is allotted for all exams related works.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_9.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Food Court Facility</div>
                                                <p class="pt-10">Parterened with third party company for serving foods.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_6.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Transport Facility</div>
                                                <p class="pt-10">The School bus and van facilities are available.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_7.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Annual Events</div>
                                                <p class="pt-10">Annual day and Sports day are celebrated.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">
                                        <a href="about.php" class="coursesCard -type-1 border-light rounded-8">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="img/home_new/facility/Home_Facility_8.jpg" alt="image">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                            </div>
                                            <div class="h-100 pt-15 pb-10 px-20">
                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Safety Measures</div>
                                                <p class="pt-10">Fire Extinguishers are installed in all corners of the campus.</p>
                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <div class="text-17 fw-500 text-dark-1 py-10">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-50 rounded-full shadow-5 js-courses-prev">
                            <i class="icon icon-arrow-left text-24"></i>
                        </button>
                        <button class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-50 rounded-full shadow-5 js-courses-next">
                            <i class="icon icon-arrow-right text-24"></i>
                        </button>
                    </div>
                </div>
            </section>

            <section class="section-bg layout-pt-lg layout-pb-md">
                <div class="section-bg__item -full -height-half bg-dark-5" style="background-image: url('img/home_new/Home_Start_Learn_BG.jpg');"></div>
                <div data-anim-wrap class="container">
                    <div class="row justify-center text-center">
                        <div class="col-auto">
                            <div class="sectionTitle">
                                <h2 class="sectionTitle__title text-white">Start your Learning Journey Today!</h2>
                                <p class="sectionTitle__text text-white">Lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div data-anim-wrap class="row y-gap-30 justify-between pt-60 lg:pt-50">
                        <div data-anim-child="slide-up delay-1" class="col-lg-3 col-md-6">
                            <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
                                <div class="coursesCard__image">
                                    <img src="img/home_new/Home_Start_Learn_Icon_1.png" draggable="false" alt="image">
                                </div>
                                <div class="coursesCard__content mt-30">
                                    <h5 class="coursesCard__title text-18 lh-1 fw-500">Learn with Experts</h5>
                                    <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti consecte.</p>
                                </div>
                            </div>
                        </div>
                        <div data-anim-child="slide-up delay-2" class="col-lg-3 col-md-6">
                            <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
                                <div class="coursesCard__image">
                                    <img src="img/home_new/Home_Start_Learn_Icon_2.png" draggable="false" alt="image">
                                </div>
                                <div class="coursesCard__content mt-30">
                                    <h5 class="coursesCard__title text-18 lh-1 fw-500">Learn Anything</h5>
                                    <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti consecte.</p>
                                </div>
                            </div>
                        </div>
                        <div data-anim-child="slide-up delay-3" class="col-lg-3 col-md-6">
                            <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
                                <div class="coursesCard__image">
                                    <img src="img/home_new/Home_Start_Learn_Icon_3.png" draggable="false" alt="image">
                                </div>
                                <div class="coursesCard__content mt-30">
                                    <h5 class="coursesCard__title text-18 lh-1 fw-500">Flexible Learning</h5>
                                    <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti consecte.</p>
                                </div>
                            </div>
                        </div>
                        <div data-anim-child="slide-up delay-4" class="col-lg-3 col-md-6">
                            <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
                                <div class="coursesCard__image">
                                    <img src="img/home_new/Home_Start_Learn_Icon_4.png" draggable="false" alt="image">
                                </div>
                                <div class="coursesCard__content mt-30">
                                    <h5 class="coursesCard__title text-18 lh-1 fw-500">Industrial Standard</h5>
                                    <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti consecte.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="layout-pt-lg layout-pb-lg">
                <div class="container">
                    <div data-anim-wrap class="row y-gap-30 justify-between items-center">
                        <div class="col-xl-6 col-lg-6 order-2 order-lg-1">
                            <h2 data-anim-child="slide-up delay-1" class="text-45 lg:text-40 md:text-30 text-dark-1">About <span class="text-purple-1">Nova Education</span></h2>
                            <p data-anim-child="slide-up delay-2" class="text-dark-1 mt-20">Nova College of Education, Coimbatore, was established by Alfa Education Trust in the academic year 2008, with the vision of Mr.A.Rangasamy, whose cherished dream was to start a College of Education to achieve high ideals for future teachers. It is situated in a sprawling campus of 5 acres in the Coimbatore which in many ways is surrounded by a natural eco system.</p>
                            <p data-anim-child="slide-up delay-2" class="text-dark-1 mt-20">Over a period of nine years, totally dedicated to the cause of Education, Nova College of Education has made tremendous contributions to the society by finding out a new cader of teachers who could imbibe a good value system, self-confident, self-reliant in the future generation through focused, planned and research based innovations.</p>
                            <div data-anim-child="slide-up delay-3" class="row y-gap-30 pt-30 lg:pt-20">
                                <div class="col-12">
                                    <div class="featureIcon -type-1">
                                        <div class="featureIcon__icon bg-light-7">
                                            <img src="img/home_new/Home_Vision_Icon.png" draggable="false" alt="icon">
                                        </div>
                                        <div class="featureIcon__content ml-30 md:ml-20">
                                            <h4 class="text-17 fw-500">Our Vision</h4>
                                            <p class="mt-5">We at Nova empowers child centric ambience with numerous learning opportunities and best teaching practices...</p>
                                            <div class="blogCard -type-1 blogCard__category pt-10">
                                                <a href="about.php" class="text-orange-1">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featureIcon -type-1">
                                        <div class="featureIcon__icon bg-light-7">
                                            <img src="img/home_new/Home_Mission_Icon.png" draggable="false" alt="icon">
                                        </div>
                                        <div class="featureIcon__content ml-30 md:ml-20">
                                            <h4 class="text-17 fw-500">Our Mission</h4>
                                            <p class="mt-5">We at Nova Public School aims at inculcating the respect of human dignity in every student providing the best...</p>
                                            <div class="blogCard -type-1 blogCard__category pt-10">
                                                <a href="about.php" class="text-orange-1">Read More <i class="icon-arrow-top-right text-11 ml-5"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 order-1 order-lg-2">
                            <div class="composition -type-5">
                                <div class="-el-1">
                                    <img src="img/home_new/Home_About_Content_2.png" draggable="false" alt="image">
                                </div>
                                <div class="-el-2">
                                    <img src="img/home_new/Home_About_Content_1.png" draggable="false" alt="image">
                                </div>
                                <div class="-el-3">
                                    <div class="sm:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 shadow-6">
                                        <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                                            <img src="img/masthead/1.svg" alt="icon">
                                        </div>
                                        <div class="ml-20">
                                            <div class="text-orange-1 text-16 fw-500 lh-1">14 + Years</div>
                                            <div class="mt-3">Experience to Made</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="-el-4">
                                    <div class="img-el -w-260 px-30 py-20 d-flex items-center bg-white rounded-8 shadow-6">
                                        <div class="img-el__side">
                                            <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                                                <img src="img/masthead/2.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="text-purple-1 text-16 fw-500 lh-1">Congrats!</div>
                                            <div class="mt-3">Your Admission Completed</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-80 pb-80 md:pt-60 md:pb-60 bg-purple-6" style="background-image: url('img/home_new/Home_Banner_BG.jpg');">
                <div class="container">
                    <div class="row y-gap-20 justify-between items-center">
                        <div class="col-xl-6 col-lg-6">
                            <h2 class="text-30 lh-15 text-white">Finding Your Right Courses <img src="img/home_new/open-book.png" class="ml-5" alt="image" draggable="false" /></h2>
                            <p class="text-white mt-10">Use the list below to bring attention to your product’s key differentiator.</p>
                        </div>
                        <div class="col-auto">
                            <a href="contact.php" class="button -md -white text-dark-1">Get Started<i class="icon-arrow-top-right text-13 ml-10"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="layout-pt-lg layout-pb-lg bg-light-6">
                <div data-anim-wrap class="container">
                    <div data-anim-child="slide-left delay-1" class="row y-gap-20 justify-between items-center">
                        <div class="col-lg-6">
                            <div class="sectionTitle">
                                <h2 class="sectionTitle__title">News & Events</h2>
                                <p class="sectionTitle__text">Read our upcoming news and events.</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="javascript:void(0);" class="button -icon -purple-3 text-purple-1">
                                View More <i class="icon-arrow-top-right text-13 ml-10"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row y-gap-30 pt-40">
                        <div class="col-lg-3 col-md-6 ">
                            <div data-anim-child="slide-left delay-2" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
                                <div class="blogCard__image ratio ratio-3:2">
                                    <a href="javascript:void(0);">
                                        <img class="img-ratio" src="img/home_new/news/Home_News_2.jpg" draggable="false" alt="image">
                                    </a>
                                </div>
                                <div class="px-20 py-30 bg-white pr">
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mb-15 home-news-date">
                                        <div class="icon-calendar-2"></div>
                                        <div class="ml-8">6 April, 2018</div>
                                    </div>
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                                        <div class="icon-location"></div>
                                        <div class="ml-8">Periyanaickenpalayam, CBE</div>
                                    </div>
                                    <h4 class="text-17 pt-20 lh-15 fw-500"><a href="javascript:void(0);">Nova Kindergarten Event</a></h4>
                                    <p class="pt-10">Nurture your kids precious future in the hands of Nova Kindergarten.</p>
                                    <div class="blogCard -type-1 blogCard__category pt-15"><a href="javascript:void(0);">Read More <i class="icon-arrow-top-right text-13 ml-5"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div data-anim-child="slide-left delay-2" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
                                <div class="blogCard__image ratio ratio-3:2">
                                    <a href="javascript:void(0);">
                                        <img class="img-ratio" src="img/home_new/news/Home_News_1.jpg" draggable="false" alt="image">
                                    </a>
                                </div>
                                <div class="px-20 py-30 bg-white pr">
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mb-15 home-news-date">
                                        <div class="icon-calendar-2"></div>
                                        <div class="ml-8">6 April, 2018</div>
                                    </div>
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                                        <div class="icon-location"></div>
                                        <div class="ml-8">Periyanaickenpalayam, CBE</div>
                                    </div>
                                    <h4 class="text-17 pt-20 lh-15 fw-500"><a href="javascript:void(0);">B.Ed / D.TEd Event</a></h4>
                                    <p class="pt-10">We are focused to create better teacher for the betterment of tomorrow.</p>
                                    <div class="blogCard -type-1 blogCard__category pt-15"><a href="javascript:void(0);">Read More <i class="icon-arrow-top-right text-13 ml-5"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div data-anim-child="slide-left delay-2" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
                                <div class="blogCard__image ratio ratio-3:2">
                                    <a href="javascript:void(0);">
                                        <img class="img-ratio" src="img/home_new/news/Home_News_3.jpg" draggable="false" alt="image">
                                    </a>
                                </div>
                                <div class="px-20 py-30 bg-white pr">
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mb-15 home-news-date">
                                        <div class="icon-calendar-2"></div>
                                        <div class="ml-8">6 April, 2018</div>
                                    </div>
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                                        <div class="icon-location"></div>
                                        <div class="ml-8">Periyanaickenpalayam, CBE</div>
                                    </div>
                                    <h4 class="text-17 pt-20 lh-15 fw-500"><a href="javascript:void(0);">Nova Public School Event</a></h4>
                                    <p class="pt-10">School is surrounded by a salubrious & healthy Environment.</p>
                                    <div class="blogCard -type-1 blogCard__category pt-15"><a href="javascript:void(0);">Read More <i class="icon-arrow-top-right text-13 ml-5"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div data-anim-child="slide-left delay-2" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
                                <div class="blogCard__image ratio ratio-3:2">
                                    <a href="javascript:void(0);">
                                        <img class="img-ratio" src="img/home_new/news/Home_News_4.jpg" draggable="false" alt="image">
                                    </a>
                                </div>
                                <div class="px-20 py-30 bg-white pr">
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mb-15 home-news-date">
                                        <div class="icon-calendar-2"></div>
                                        <div class="ml-8">6 April, 2018</div>
                                    </div>
                                    <div class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                                        <div class="icon-location"></div>
                                        <div class="ml-8">Periyanaickenpalayam, CBE</div>
                                    </div>
                                    <h4 class="text-17 pt-20 lh-15 fw-500"><a href="javascript:void(0);">Cricket Event</a></h4>
                                    <p class="pt-10">In order to find the tallent, we do conduct sports with participation certificate.</p>
                                    <div class="blogCard -type-1 blogCard__category pt-15"><a href="javascript:void(0);">Read More <i class="icon-arrow-top-right text-13 ml-5"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="news-events py-5">
                <div class="container">
                    <h2 class="text-center mb-4">News & Events</h2>
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($events as $event): ?>
                            <div class="item">
                                <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>">
                                <div class="content">
                                    <span class="subtext"><?php echo $event['subtext']; ?></span>
                                    <h4><?php echo $event['title']; ?></h4>
                                    <p><?php echo $event['description']; ?></p>
                                    <a href="<?php echo $event['url']; ?>">Read more &gt;</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="contact.php"><button class="join-now">Join Now</button></a>
                </div>
            </section>
            <section class="cta">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cta-div">
                                <h2>Finding Your Right Courses</h2>
                                <p>Use the list below to bring attention to your product's key differentiator</p>
                                <button class="cta-button">Join Now</button>
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
    <script src="js/chart.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            lazyLoad: true,
            animateOut: 'fadeOut',
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            autoHeight: true,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script> -->
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true, // ✅ Enable Navigation Arrows
                dots: true, // ✅ Enable Dots
                autoplay: true,
                autoplayTimeout: 2500,
                autoplayHoverPause: true,
                navText: ["<span class='custom-prev'>&#10094;</span>", "<span class='custom-next'>&#10095;</span>"], // ✅ Custom Arrow Icons
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        });
    </script>
</body>

</html>