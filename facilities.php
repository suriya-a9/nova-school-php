<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body class="preloader-visible" data-barba="wrapper">

    <style>
        .pdf-container {
            position: relative;
            margin-bottom: 20px;
        }

        .pdf-thumbnail {
            width: 100%;
            height: 250px;
            background-position: center;
            position: relative;
            object-fit: cover;
            background-repeat: no-repeat;
        }

        .pdf-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .pdf-container:hover .pdf-button {
            display: block;
        }

        .col-md-4.pdf-container p {
            margin: 20px 0px;
            font-size: 20px;
            font-weight: bold;
        }

        p.sub-text {
            position: absolute;
            right: 0;
            top: 0;
            color: white;
            background: #002047;
            padding: 6px 25px;
        }
    </style>

    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>

    <main class="main-content">

        <?php include("new-header.php") ?>

        <div class="content-wrapper js-content-wrapper pt-50">
            <!-- <section class="pt-80 pb-80 md:pt-60 md:pb-60 bg-purple-6 mt-80">
                <div class="container">
                    <div class="row y-gap-20 justify-between items-center">
                        <div class="col-xl-6 col-lg-6">
                            <h2 class="text-30 lh-15 text-white">Facilities</h2>
                            <p class="text-white mt-10">Explore our facilities by viewing the PDFs below.</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="layout-pt-md layout-pb-lg pt-40 pb-30">
                <div data-anim-wrap class="container">
                    <div class="row y-gap-50 justify-between">
                        <h2>Facilities Detail</h2>
                    </div>
                    <div class="row y-gap-50 justify-between">
                        <div class="col-md-4 pdf-container">
                            <div class="pdf-thumbnail" style="background-image: url('http://localhost/school/img/home-9/favicon.webp');">
                                <button class="pdf-button" onclick="window.open('http://localhost/school/img/home-9/water-report.pdf', '_blank')">See PDF</button>
                                <p class="sub-text">PDF</p>
                            </div>
                            <p class="text-center">Water Report</p>
                        </div>
                        <div class="col-md-4 pdf-container">
                            <div class="pdf-thumbnail" style="background-image: url('http://localhost/school/img/home-9/favicon.webp');">
                                <button class="pdf-button" onclick="window.open('http://localhost/school/img/home-9/fire-school.pdf', '_blank')">See PDF</button>
                                <p class="sub-text">PDF</p>
                            </div>
                            <p class="text-center">Fire School</p>
                        </div>
                        <div class="col-md-4 pdf-container">
                            <div class="pdf-thumbnail" style="background-image: url('http://localhost/school/img/home-9/favicon.webp');">
                                <button class="pdf-button" onclick="window.open('http://localhost/school/img/home-9/Nova-school.pdf', '_blank')">See PDF</button>
                                <p class="sub-text">PDF</p>
                            </div>
                            <p class="text-center">Nova School</p>
                        </div>
                    </div>
                    <div class="row y-gap-50 justify-between">
                        <div class="col-md-4 pdf-container">
                            <div class="pdf-thumbnail" style="background-image: url('http://localhost/school/img/home-9/favicon.webp');">
                                <button class="pdf-button" onclick="window.open('http://localhost/school/img/home-9/school-stability.pdf', '_blank')">See PDF</button>
                                <p class="sub-text">PDF</p>
                            </div>
                            <p class="text-center">School Stability</p>
                        </div>
                        <div class="col-md-4 pdf-container">
                            <div class="pdf-thumbnail" style="background-image: url('http://localhost/school/img/home-9/favicon.webp');">
                                <button class="pdf-button" onclick="window.open('http://localhost/school/img/home-9/Trust-deed.pdf', '_blank')">See PDF</button>
                                <p class="sub-text">PDF</p>
                            </div>
                            <p class="text-center">Trust Deed</p>
                        </div>
                        <div class="col-md-4 pdf-container">
                            <div class="pdf-thumbnail" style="background-image: url('http://localhost/school/img/home-9/facilities-calendar.webp');">
                                <button class="pdf-button" onclick="window.open('http://localhost/school/img/home-9/facilities-calendar.webp', '_blank')">See PDF</button>
                                <p class="sub-text">Calendar</p>
                            </div>
                            <p class="text-center">Calendar</p>
                        </div>
                    </div>
                    <div class="row y-gap-50 justify-between">
                        <div class="col-md-4 pdf-container">
                            <div class="pdf-thumbnail" style="background-image: url('http://localhost/school/img/home-9/fee-structure.jpeg');">
                                <button class="pdf-button" onclick="window.open('http://localhost/school/img/home-9/fee-structure.jpeg', '_blank')">See PDF</button>
                                <p class="sub-text">Fee Structure</p>
                            </div>
                            <p class="text-center">Fee Structure</p>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("footer.php") ?>

        </div>
    </main>

    <!-- JavaScript -->
    <script src="js/leaflet.js"></script>
    <script src="js/vendors.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>

</body>

</html>