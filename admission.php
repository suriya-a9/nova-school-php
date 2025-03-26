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
                            <h2 class="text-30 lh-15 text-white">Admission Form</h2>
                            <p class="text-white mt-10">Please fill out the form below to apply for admission.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="layout-pt-md layout-pb-lg pt-40 pb-30">
                <div data-anim-wrap class="container">
                    <div class="row y-gap-50 justify-between">
                        <div class="col-lg-12">
                            <form class="admission-form row y-gap-30 pt-40 lg:pt-40" method="post" autocomplete="off" action="submit_admission.php" name="admission_form" id="admission_form">
                                <!-- Robot Verification -->
                                <input name="robot" type="hidden" id="robot">
                                <h4>A: GENERAL INFORMATION</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>NAME OF THE SCHOOL</td>
                                            <td><input type="text" name="school_name" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>AFFILIATION NO.(IF APPLICABLE)</td>
                                            <td><input type="text" name="affiliation_no" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SCHOOL CODE (IF APPLICABLE)</td>
                                            <td><input type="text" name="school_code" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>COMPLETE ADDRESS WITH PIN CODE</td>
                                            <td><textarea name="address" class="form-control" required></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>PRINCIPAL NAME</td>
                                            <td><input type="text" name="principal_name" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>PRINCIPAL QUALIFICATION</td>
                                            <td><input type="text" name="principal_qualification" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SCHOOL EMAIL ID</td>
                                            <td><input type="text" name="school_email" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>CONTACT DETAILS (LANDLINE/MOBILE)</td>
                                            <td><input type="text" name="contact_details" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4>B: DOCUMENTS AND INFORMATION</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>DOCUMENTS/INFORMATION</th>
                                            <th>LINKS OF UPLOADED DOCUMENTS ON YOUR SCHOOL'S WEBSITE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY</td>
                                            <td><input type="text" name="copy_of_affiliation" placeholder="eg. www.schoolwebsite.com/affiliationLetter" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE</td>
                                            <td><input type="text" name="copy_of_societies" placeholder="eg. www.schoolwebsite.com/TrustCertificate" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT</td>
                                            <td><input type="text" name="copy_of_objection" placeholder="eg. www.schoolwebsite.com/NOC" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT'S RENEWAL IF APPLICABLE</td>
                                            <td><input type="text" name="copy_of_recognition" placeholder="eg. www.schoolwebsite.com/RecognitionCertificate" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE</td>
                                            <td><input type="text" name="copy_of_valid_building" placeholder="eg. www.schoolwebsite.com/BuildingCertificate" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>COPY OF VALID FIRE SAFETY ISSUED BY THE COMPANY AUTHORITY</td>
                                            <td><input type="text" name="copy_of_valid_fire_safety" placeholder="eg. www.schoolwebsite.com/FireCertificate" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>COPY OF THE SELF CERTIFICATION SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION</td>
                                            <td><input type="text" name="copy_of_self_certification" placeholder="eg. www.schoolwebsite.com/DEOCertificate" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES</td>
                                            <td><input type="text" name="copy_of_valid_water" placeholder="eg. www.schoolwebsite.com/WaterHealthCertificate" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="note">
                                    <h5>note:</h5>
                                    <p>THE SCHOOLS NEEDS TO UPLOAD THE SELF ATTESTED COPIES OF ABOVE LISTED DOCUMENTS BY CHAIRMAN/MANAGER/SECRETARY AND PRINCIPAL. IN CASE, IT IS NOTICED AT LATER STAGE THAT UPLOADED DOCUMENTS ARE NOT GENUINE THEN SCHOOL SHALL BE LIABLE FOR ACTION AS PER NORMS.</p>
                                </div>
                                <h4>C: RESULT AND ACADEMICS</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>DOCUMENTS/INFORMATION</th>
                                            <th>LINKS OF UPLOADED DOCUMENTS ON YOUR SCHOOL'S WEBSITE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>FEE STRUCTURE OF THE SCHOOL</td>
                                            <td><input type="text" name="fee_structure" placeholder="eg. www.schoolwebsite.com/FeeStructure" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ANNUAL ACADEMIC CALENDAR</td>
                                            <td><input type="text" name="annual_academic" placeholder="eg. www.schoolwebsite.com/AcadmicCalendar" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                            <td><input type="text" name="school_management" placeholder="eg. www.schoolwebsite.com/List_of_SMC" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                                            <td><input type="text" name="pta" placeholder="eg. www.schoolwebsite.com/Link_of_PTA" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABILITY</td>
                                            <td><input type="text" name="three_year_result" placeholder="eg. www.schoolwebsite.com//Link_of_ThreeYearResult" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>D: STAFF (TEACHING)</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PRINICPAL</td>
                                            <td><input type="text" name="principal" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TOTAL NO. OF TEACHERS</td>
                                            <td><input type="text" name="no_of_teachers" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>PGT</td>
                                            <td><input type="text" name="pgt" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TGT</td>
                                            <td><input type="text" name="tgt" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>PRT</td>
                                            <td><input type="text" name="prt" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TEACHERS SECTION RATIO</td>
                                            <td><input type="text" name="teacher_section_ratio" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>DETAILS OF SPECIAL EDUCATOR</td>
                                            <td><input type="text" name="special_educator" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                                            <td><input type="text" name="wellness_teacher" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>RESULT CLASS: X</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>YEAR</th>
                                            <th>NO. OF REGISTERED STUDENTS</th>
                                            <th>NO. OF STUDENTS PASSED</th>
                                            <th>PASS PERCENTAGE</th>
                                            <th>REMARKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="x_year" class="form-control" required></td>
                                            <td><input type="text" name="x_registered_students" class="form-control" required></td>
                                            <td><input type="text" name="x_students_passed" class="form-control" required></td>
                                            <td><input type="text" name="x_pass_percentage" placeholder="eg. 78.56" class="form-control" required></td>
                                            <td><textarea name="x_remarks" class="form-control" required></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>RESULT CLASS: XII</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>YEAR</th>
                                            <th>NO. OF REGISTERED STUDENTS</th>
                                            <th>NO. OF STUDENTS PASSED</th>
                                            <th>PASS PERCENTAGE</th>
                                            <th>REMARKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="xii_year" class="form-control" required></td>
                                            <td><input type="text" name="xii_registered_students" class="form-control" required></td>
                                            <td><input type="text" name="xii_students_passed" class="form-control" required></td>
                                            <td><input type="text" name="xii_pass_percentage" placeholder="eg. 78.56" class="form-control" required></td>
                                            <td><textarea name="xii_remarks" class="form-control" required></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>RESULT CLASS: XII</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>YEAR</th>
                                            <th>NO. OF REGISTERED STUDENTS</th>
                                            <th>NO. OF STUDENTS PASSED</th>
                                            <th>PASS PERCENTAGE</th>
                                            <th>REMARKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="xii_year" class="form-control" required></td>
                                            <td><input type="text" name="xii_registered_students" class="form-control" required></td>
                                            <td><input type="text" name="xii_students_passed" class="form-control" required></td>
                                            <td><input type="text" name="xii_pass_percentage" placeholder="eg. 78.56" class="form-control" required></td>
                                            <td><textarea name="xii_remarks" class="form-control" required></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>E: SCHOOL INFRASTRUCTURE</h4>
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)</td>
                                            <td><input type="text" name="campus_area" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)</td>
                                            <td><input type="text" name="no_of_class" class="form-control" required><input type="text" name="class_size" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR)</td>
                                            <td><input type="text" name="no_of_laboratories" class="form-control" required><input type="text" name="laboratories_size" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>INTERNET FACILITY</td>
                                            <td>
                                                <input type="radio" name="internet_facility" value="Yes" required> Yes
                                                <input type="radio" name="internet_facility" value="No" required> No
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>NO. OF GIRLS TOILETS</td>
                                            <td><input type="text" name="girls_toilet" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>NO. OF BOYS TOILETS</td>
                                            <td><input type="text" name="boys_toilet" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                                            <td><input type="text" name="youtube_video" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Upload Teacher's List (Download Sample Format)</td>
                                            <td><input type="file" name="file" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-12">
                                    <div class="form-group" id="contact-captcha-mob">
                                        <div class="g-recaptcha" data-sitekey="6LccwnMlAAAAANAll1J6Swpv5rn_MYb8EWZGoDp4" required="true"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" id="submit" class="button -md -orange-1 text-white">
                                        Submit <i class="icon-arrow-top-right text-13 ml-10"></i>
                                    </button>
                                </div>
                                <div class="col-md-12">
                                    <div id="error_message"></div>
                                </div>
                            </form>
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

    <!-- Form Validation -->
    <script>
        $(function() {
            $("form[name='admission_form']").validate({
                rules: {
                    school_name: {
                        required: true,
                        minlength: 3
                    },
                    address: {
                        required: true
                    },
                    principal_name: {
                        required: true
                    },
                    principal_qualification: {
                        required: true
                    },
                    school_email: {
                        required: true
                    },
                    contact_details: {
                        required: true
                    },
                    copy_of_affiliation: {
                        required: true
                    },
                    copy_of_societies: {
                        required: true
                    },
                    copy_of_objection: {
                        required: true
                    },
                    copy_of_recognition: {
                        required: true
                    },
                    copy_of_valid_building: {
                        required: true
                    },
                    copy_of_valid_fire_safety: {
                        required: true
                    },
                    copy_of_self_certification: {
                        required: true
                    },
                    copy_of_valid_water: {
                        required: true
                    },
                    fee_structure: {
                        required: true
                    },
                    annual_academic: {
                        required: true
                    },
                    school_management: {
                        required: true
                    },
                    pta: {
                        required: true
                    },
                    three_year_result: {
                        required: true
                    },
                    principal: {
                        required: true
                    },
                    no_of_teachers: {
                        required: true
                    },
                    pgt: {
                        required: true
                    },
                    tgt: {
                        required: true
                    },
                    prt: {
                        required: true
                    },
                    teacher_section_ratio: {
                        required: true
                    },
                    special_educator: {
                        required: true
                    },
                    wellness_teacher: {
                        required: true
                    },
                    x_year: {
                        required: true
                    },
                    x_registered_students: {
                        required: true
                    },
                    x_students_passed: {
                        required: true
                    },
                    x_pass_percentage: {
                        required: true
                    },
                    x_remarks: {
                        required: true
                    },
                    xii_year: {
                        required: true
                    },
                    xii_registered_students: {
                        required: true
                    },
                    xii_students_passed: {
                        required: true
                    },
                    xii_pass_percentage: {
                        required: true
                    },
                    xii_remarks: {
                        required: true
                    },
                    campus_area: {
                        required: true
                    },
                    no_of_class: {
                        required: true
                    },
                    class_size: {
                        required: true
                    },
                    no_of_laboratories: {
                        required: true
                    },
                    laboratories_size: {
                        required: true
                    },
                    internet_facility: {
                        required: true
                    },
                    girls_toilet: {
                        required: true
                    },
                    boys_toilet: {
                        required: true
                    },
                    youtube_video: {
                        required: true
                    },
                    file: {
                        required: true
                    }
                },
                messages: {
                    school_name: "Please provide the name of the school.",
                    address: "Please provide the complete address.",
                    principal_name: "Please provide the principal's name.",
                    principal_qualification: "Please provide the principal's qualification.",
                    school_email: "Please provide the school email ID.",
                    contact_details: "Please provide the contact details.",
                    copy_of_affiliation: "Please provide the link to the affiliation letter.",
                    copy_of_societies: "Please provide the link to the societies/trust/company registration certificate.",
                    copy_of_objection: "Please provide the link to the NOC.",
                    copy_of_recognition: "Please provide the link to the recognition certificate.",
                    copy_of_valid_building: "Please provide the link to the building safety certificate.",
                    copy_of_valid_fire_safety: "Please provide the link to the fire safety certificate.",
                    copy_of_self_certification: "Please provide the link to the self-certification.",
                    copy_of_valid_water: "Please provide the link to the water, health, and sanitation certificates.",
                    fee_structure: "Please provide the link to the fee structure.",
                    annual_academic: "Please provide the link to the annual academic calendar.",
                    school_management: "Please provide the link to the list of school management committee.",
                    pta: "Please provide the link to the list of PTA members.",
                    three_year_result: "Please provide the link to the last three-year result.",
                    principal: "Please provide the principal's name.",
                    no_of_teachers: "Please provide the total number of teachers.",
                    pgt: "Please provide the number of PGT teachers.",
                    tgt: "Please provide the number of TGT teachers.",
                    prt: "Please provide the number of PRT teachers.",
                    teacher_section_ratio: "Please provide the teacher section ratio.",
                    special_educator: "Please provide the details of the special educator.",
                    wellness_teacher: "Please provide the details of the counsellor and wellness teacher.",
                    x_year: "Please provide the year for class X result.",
                    x_registered_students: "Please provide the number of registered students for class X.",
                    x_students_passed: "Please provide the number of students passed for class X.",
                    x_pass_percentage: "Please provide the pass percentage for class X.",
                    x_remarks: "Please provide the remarks for class X.",
                    xii_year: "Please provide the year for class XII result.",
                    xii_registered_students: "Please provide the number of registered students for class XII.",
                    xii_students_passed: "Please provide the number of students passed for class XII.",
                    xii_pass_percentage: "Please provide the pass percentage for class XII.",
                    xii_remarks: "Please provide the remarks for class XII.",
                    campus_area: "Please provide the total campus area of the school.",
                    no_of_class: "Please provide the number of class rooms.",
                    class_size: "Please provide the size of the class rooms.",
                    no_of_laboratories: "Please provide the number of laboratories.",
                    laboratories_size: "Please provide the size of the laboratories.",
                    internet_facility: "Please select if the school has internet facility.",
                    girls_toilet: "Please provide the number of girls toilets.",
                    boys_toilet: "Please provide the number of boys toilets.",
                    youtube_video: "Please provide the link to the YouTube video of the school inspection.",
                    file: "Please upload the teacher's list."
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
            $(element).on("cut copy", function(e) {
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