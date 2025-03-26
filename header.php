<?php

/**
 * PHP
 *
 * An open source application development framework for PHP 8.0 or newer
 * 
 * @package         PHP
 * @author          The Banyan Infotech @ Venkat G
 * @copyright       Copyright (c) 2022 - 2023, The Banyan Infotech
 * @link            https://epictech.in/venkat/Nova_Education_New/
 * @since           Version 1.0
 * @Project Name    Nova Education
 * @Last Modified   04/03/2023
 *
 **/
?>

<header data-anim="fade" data-add-bg="bg-white" class="header -type-5 js-header">
  <div class="d-flex items-center bg-purple-6 py-10">
    <div class="container max-w-90">
      <div class="row y-gap-5 justify-between items-center">
        <div class="col-auto">
          <div class="d-flex x-gap-40 y-gap-10 items-center">
            <div class="d-flex items-center text-white md:d-none">
              <div class="icon-message mr-10"></div>
              <div class="text-12 lh-1 letter-space-1"><a href="tel:04222231091">0422-2231091</a> / <a href="tel:04224378975">0422-4378975</a></div>
            </div>
            <div class="d-flex items-center text-white">
              <div class="icon-email mr-10"></div>
              <div class="text-12 lh-1 letter-space-1"><a href="mailto:cbenova@gmail.com">cbenova@gmail.com</a></div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="d-flex x-gap-30 y-gap-10">
            <div>
              <div class="d-flex x-gap-20 items-center text-white">
                <a href="javascript:void(0);" title="Facebook"><i class="icon-facebook text-14"></i></a>
                <a href="javascript:void(0);" title="Twitter"><i class="icon-twitter text-14"></i></a>
                <a href="javascript:void(0);" title="Instagram"><i class="icon-instagram text-14"></i></a>
                <a href="javascript:void(0);" title="LinkedIn"><i class="icon-linkedin text-14"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="header__container py-0">
    <div class="row justify-between items-center">
      <div class="col-auto">
        <div class="header-left d-flex items-center">
          <div class="header__logo pr-30 xl:pr-20 md:pr-0">
            <a data-barba href="index.php">
              <img src="img/home_new/Nova_Logo_New.png" draggable="false" class="img-full mobile_response_logo" alt="logo">
            </a>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <div class="header-menu js-mobile-menu-toggle ">
          <div class="header-menu__content">
            <div class="mobile-bg js-mobile-bg"></div>
            <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
              <a href="index.php" class="text-dark-1">Nova Education</a>
            </div>
            <div class="menu js-navList">
              <ul class="menu__nav text-dark-1 -is-active">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="about.php">About Us</a>
                </li>
                <li class="menu-item-has-children">
                  <a data-barba="" onclick="redirect_url()">Institutions <i class="icon-chevron-right text-13 ml-10"></i></a>
                  <ul class="subnav">
                    <li class="menu__backButton js-nav-list-back">
                      <a href="javascript:void(0);"><i class="icon-chevron-left text-13 mr-10"></i> Courses</a>
                    </li>
                    <li class="nav-bar-child-li-menu"><a href="course_details.php" class="nav-bar-child-li">Nova College of Education <i class="icon-arrow-top-right text-10 ml-10"></i></a></li>
                    <li class="nav-bar-child-li-menu"><a href="teacher_training.php" class="nav-bar-child-li">Nova Teacher Tranning Institution <i class="icon-arrow-top-right text-10 ml-10"></i></a></li>
                    <li class="nav-bar-child-li-menu"><a href="course_details.php" class="nav-bar-child-li">Nova Public School of Education <i class="icon-arrow-top-right text-10 ml-10"></i></a></li>
                    <li class="nav-bar-child-li-menu"><a href="course_details.php" class="nav-bar-child-li">Nova Flinto Play School <i class="icon-arrow-top-right text-10 ml-10"></i></a></li>
                    <li class="nav-bar-child-li-menu"><a href="admission.php" class="nav-bar-child-li">School Admission <i class="icon-arrow-top-right text-10 ml-10"></i></a></li>
                  </ul>
                </li>
                <li>
                  <a href="join.php">Join With Us</a>
                </li>
                <li>
                  <a href="careers.php">Careers</a>
                </li>
                <li>
                  <a href="gallery.php">Gallery</a>
                </li>
              </ul>
            </div>
            <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
              <div class="mobile-footer__number">
                <div class="text-17 fw-500 text-dark-1">Call us</div>
                <div class="text-17 fw-500 text-purple-1"><a href="tel:+919360005013">+91 93600 05013</a></div>
              </div>
              <div class="lh-2 mt-10">
                <div>Selvapuram, Jothipuram Post, Coimbatore-641047</div>
                <div>
                  <a href="mailto:cbenova@gmail.com">cbenova@gmail.com</a>
                </div>
              </div>
              <div class="mobile-socials mt-10">
                <a href="javascript:void(0);" class="d-flex items-center justify-center rounded-full size-40">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="javascript:void(0);" class="d-flex items-center justify-center rounded-full size-40">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="javascript:void(0);" class="d-flex items-center justify-center rounded-full size-40">
                  <i class="fa fa-instagram"></i>
                </a>
                <a href="javascript:void(0);" class="d-flex items-center justify-center rounded-full size-40">
                  <i class="fa fa-linkedin"></i>
                </a>
                <a href="javascript:void(0);" class="d-flex items-center justify-center rounded-full size-40">
                  <i class="fa fa-youtube"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
            <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
              <div class="icon-close text-dark-1 text-16"></div>
            </div>
          </div>
          <div class="header-menu-bg"></div>
        </div>
      </div>

      <div class="col-auto">
        <div class="header-right d-flex items-center">
          <div class="header-right__icons text-white d-flex items-center">
            <div class="d-none xl:d-block pl-30 sm:pl-15">
              <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                <i class="text-11 icon icon-mobile-menu"></i>
              </button>
            </div>
          </div>
          <div class="header-right__buttons d-flex items-center lg:d-none">
            <a href="contact.php" class="button -sm -purple-3 h-50 text-dark-1">Contact Us <i class="icon-arrow-top-right text-12 ml-10"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<script src="js/mobile_detect.min.js"></script>
<script type="text/javascript">
  document.getElementById("navigation");

  function redirect_url() {
    if (navigator.userAgent.match(/Android/i) ||
      navigator.userAgent.match(/webOS/i) ||
      navigator.userAgent.match(/iPhone/i) ||
      navigator.userAgent.match(/iPad/i) ||
      navigator.userAgent.match(/iPod/i) ||
      navigator.userAgent.match(/BlackBerry/i) ||
      navigator.userAgent.match(/Windows Phone/i)) {
      return false;
    } else {
      window.location.href = "courses.php";
    }
  }
</script>