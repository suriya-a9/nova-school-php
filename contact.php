<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<script src="https://www.google.com/recaptcha/api.js"></script>

<body class="preloader-visible" data-barba="wrapper">

  <style>
		#g-recaptcha-response {
      display: block !important;
      position: absolute;
      margin: -78px 0 0 0 !important;
      width: 302px !important;
      height: 76px !important;
      z-index: -999999;
      opacity: 0;
    }
	</style>

  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>

  <main class="main-content">

    <?php include("header.php") ?>

    <div class="content-wrapper js-content-wrapper pt-50">
      <section class="pt-80 pb-80 md:pt-60 md:pb-60 bg-purple-6 mt-80" style="background-image: url('img/home_new/Home_Banner_BG.jpg');">
        <div class="container">
          <div class="row y-gap-20 justify-between items-center">
            <div class="col-xl-6 col-lg-6">
              <h2 class="text-30 lh-15 text-white">Start your Right Education Here! <img src="img/home_new/open-book.png" class="ml-5" alt="image" draggable="false" /></h2>
              <p class="text-white mt-10">Education Breeds Confidence. Confidence Breeds Hope. Hope Breeds Peace.</p>
            </div>
            <div class="col-auto">
              <a href="#contact-section" class="button -md -white text-dark-1">Contact Us <i class="icon-arrow-top-right text-13 ml-10"></i></a>
            </div>
          </div>
        </div>
      </section>

      <section class="layout-pt-md layout-pb-lg pt-40 pb-30" id="contact-section">
        <div data-anim-wrap class="container">
          <div class="row y-gap-50 justify-between">
          <div class="col-lg-7">
              <h3 class="text-24 fw-500">Send a Message.</h3>
              <p class="mt-10">Enter your details are helpful to contact you. So, Kindly enter valid details.</p>
              <form class="contact-form row y-gap-30 pt-40 lg:pt-40" method="post" autocomplete="off" action="enquirymail.php" name="contact_enquiry_form" id="contact_enquiry_form" oncopy="return false;" ondrag="return false;" onpaste="return false;" oncut="return false;" oncontextmenu="return false">
                <!-- Robot Verfication -->
                <input name="robot" type="hidden" id="robot">

                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Your Name <span title="This field is required">*</span></label>
                  <input type="text" name="name" id="name" class="form-control mb-0" placeholder="Eg : Alex David" maxlength="60" minlength="3" aria-required="true" onkeydown="return /[a-z]/i.test(event.key)" onpaste="return false;" ondrop="return false;" required>
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Contact Mobile No <span title="This field is required">*</span></label>
                  <input type="text" name="phone" id="phone" class="form-control mb-0" placeholder="Eg : +91 8220458333" maxlength="15" minlength="10" aria-required="true"  onkeypress="return onlyNumberKey(event)" onpaste="return false;" ondrop="return false;" required>
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address <span title="This field is required">*</span></label>
                  <input type="email" name="email" id="email" class="form-control mb-0" placeholder="Eg : enquiries@email.com" maxlength="100" minlength="5" aria-required="true" onpaste="return false;" ondrop="return false;" required>
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Enquiry Course Name</label>
                  <input type="text" name="course" id="course" class="form-control mb-0" placeholder="Eg : B.Ed / D.Ted, Public School" maxlength="200" minlength="3" aria-required="true" onkeydown="return /[a-z]/i.test(event.key)" onpaste="return false;" ondrop="return false;" required>
                </div>
                <div class="col-md-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Message</label>
                  <textarea name="message" id="message" class="form-control mb-0" placeholder="Describe your Queries" rows="2" maxlength="600" minlength="5" aria-required="true" onpaste="return false;" ondrop="return false;"></textarea>
                </div>
                <div class="col-md-12">
                  <div class="form-group" id="contact-captcha-mob">
										<div class="g-recaptcha" data-sitekey="6LccwnMlAAAAANAll1J6Swpv5rn_MYb8EWZGoDp4" required="true"></div>
									</div>
                </div>
                <div class="col-md-12">
                  <button type="submit" name="submit" id="submit" class="button -md -orange-1 text-white">
                    Send Message <i class="icon-arrow-top-right text-13 ml-10"></i>
                  </button>
                </div>
                <div class="col-md-12">
                  <div id="error_message"></div>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <h3 class="text-24 fw-500">Keep In Touch With Us.</h3>
              <p class="mt-10">If you have a Queries? Feel Free to Contact Us</p>
              <div class="y-gap-30 pt-60 lg:pt-40">
                <div class="d-flex items-center">
                  <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                    <a href="https://goo.gl/maps/h1CupStcRHTjE8bU8" target="_blank"><img src="img/contact-1/1.svg" draggable="false" alt="icon"></a>
                  </div>
                  <div class="ml-20"><a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3913.9772626821427!2d76.925143!3d11.189318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85912a63ae62d%3A0xfec050e9d5c4b12a!2sNova%20Institutions!5e0!3m2!1sen!2sus!4v1677672707725!5m2!1sen!2sus">Selvapuram, Jothipuram Post, Coimbatore, Tamilnadu, India-641047</a></div>
                </div>
                <div class="d-flex items-center">
                  <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                    <a href="tel:+919360005013"><img src="img/contact-1/2.svg" draggable="false" alt="icon"></a>
                  </div>
                  <div class="ml-20">
                    <p>For Admissions :</p>
                    <a href="tel:+91 93600 05013">+91 93600 05013</a>
                  </div>
                </div>
                <div class="d-flex items-center">
                  <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                    <a href="tel:+919360005013"><img src="img/contact-1/2.svg" draggable="false" alt="icon"></a>
                  </div>
                  <div class="ml-20">
                    <p>Office Telephone :</p>
                    <a href="tel:04222231091">0422-2231091</a> / <a href="tel:04224378975">0422-4378975</a>
                  </div>
                </div>
                <div class="d-flex items-center">
                  <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                    <a href="tel:+919600251164"><img src="img/contact-1/2.svg" draggable="false" alt="icon"></a>
                  </div>
                  <div class="ml-20">
                    <p>For Complaints :</p>
                    <a href="tel:+919600251164">+91 96002 51164</a> / <a href="tel:+916381413033">+91 63814 13033</a>
                  </div>
                </div>
                <div class="d-flex items-center">
                  <div class="d-flex justify-center items-center size-60 rounded-full bg-light-7">
                    <a href="mailto:cbenova@gmail.com"><img src="img/contact-1/3.svg" draggable="false" alt="icon"></a>
                  </div>
                  <div class="ml-20">
                    <p>For Mail Enquiry :</p>
                    <a href="mailto:cbenova@gmail.com">cbenova@gmail.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="layout-pt-md layout-pb-lg pt-0" id="contact-section">
        <div data-anim-wrap class="container">
          <div class="row y-gap-50 justify-between">
            <div class="col-lg-12 col-xl-12 col-md-12 rounded-8 border-8">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3913.9772626821427!2d76.925143!3d11.189318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85912a63ae62d%3A0xfec050e9d5c4b12a!2sNova%20Institutions!5e0!3m2!1sen!2sus!4v1677672707725!5m2!1sen!2sus" class="contat_map rounded-8 border-8" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
  <script src="js/jquery.validate.min.js"></script>

  <!-- Contact Form Validation -->
  <script>
    $(function() {
      $("form[name='contact_enquiry_form']").validate({
        rules: {
          name: "required",
          email: "required",
          phone: "required",
          course: "required",
          name: {
            minlength: 3,
            required: true
          },
          email: {
            required: true,
            email: true,
            minlength: 6,
          },
          phone: {
            required: true,
            minlength: 10,
            maxlength: 15,
            number: true
          },
          course: {
            required: true,
            minlength: 3,
            maxlength: 200,
          },
          message: {
            maxlength: 600,
          }
        },

        messages: {
          name: "Please provide a valid name.",
          course: "Please provide a course name.",
          email: {
            required: "Please enter your email.",
            minlength: "Please enter a valid email."
          },
          phone: {
            required: "Please provide a mobile number.",
            minlength: "Contact number must be min 10 numbers.",
            maxlength: "Contact number must not be more than 15 numbers."
          },
          message: {
            maxlength: "Please enter your message below 600 characters"
          }
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
  </script>

  <!-- Copy / Paste Validation -->
  <script type="text/javascript">
    function disableValidation(element) {
      $(element).on("cut copy",function(e) {
        return true;
      });
      $(element).bind("contextmenu", function(e) {
        return true;
      });
    }
  </script>

  <script>
    function onlyNumberKey(evt) {
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
      return true;
    }
  </script>

  <script>
		var $recaptcha = document.querySelector('#g-recaptcha-response');
		if ($recaptcha) {
			$recaptcha.setAttribute("required", "required");
		}
  </script>

</body>

</html>