<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['submit'])) {

        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

            // Google secret API
            $secretAPIkey = '6Lc7XCgdAAAAAH9l3EH4bgbOw8G9KJnnsjJ1PTzi';

            // reCAPTCHA response verification
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretAPIkey . '&response=' . $_POST['g-recaptcha-response']);

            // Decode JSON data
            $response = json_decode($verifyResponse);
            if ($response->success) {

                $school_name = $_POST["school_name"];
                $affiliation_no = $_POST["affiliation_no"];
                $school_code = $_POST["school_code"];
                $address = $_POST["address"];
                $principal_name = $_POST["principal_name"];
                $principal_qualification = $_POST["principal_qualification"];
                $school_email = $_POST["school_email"];
                $contact_details = $_POST["contact_details"];
                $copy_of_affiliation = $_POST["copy_of_affiliation"];
                $copy_of_societies = $_POST["copy_of_societies"];
                $copy_of_objection = $_POST["copy_of_objection"];
                $copy_of_recognition = $_POST["copy_of_recognition"];
                $copy_of_valid_building = $_POST["copy_of_valid_building"];
                $copy_of_valid_fire_safety = $_POST["copy_of_valid_fire_safety"];
                $copy_of_self_certification = $_POST["copy_of_self_certification"];
                $copy_of_valid_water = $_POST["copy_of_valid_water"];
                $fee_structure = $_POST["fee_structure"];
                $annual_academic = $_POST["annual_academic"];
                $school_management = $_POST["school_management"];
                $pta = $_POST["pta"];
                $three_year_result = $_POST["three_year_result"];
                $principal = $_POST["principal"];
                $no_of_teachers = $_POST["no_of_teachers"];
                $pgt = $_POST["pgt"];
                $tgt = $_POST["tgt"];
                $prt = $_POST["prt"];
                $teacher_section_ratio = $_POST["teacher_section_ratio"];
                $special_educator = $_POST["special_educator"];
                $wellness_teacher = $_POST["wellness_teacher"];
                $x_year = $_POST["x_year"];
                $x_registered_students = $_POST["x_registered_students"];
                $x_students_passed = $_POST["x_students_passed"];
                $x_pass_percentage = $_POST["x_pass_percentage"];
                $x_remarks = $_POST["x_remarks"];
                $xii_year = $_POST["xii_year"];
                $xii_registered_students = $_POST["xii_registered_students"];
                $xii_students_passed = $_POST["xii_students_passed"];
                $xii_pass_percentage = $_POST["xii_pass_percentage"];
                $xii_remarks = $_POST["xii_remarks"];
                $campus_area = $_POST["campus_area"];
                $no_of_class = $_POST["no_of_class"];
                $class_size = $_POST["class_size"];
                $no_of_laboratories = $_POST["no_of_laboratories"];
                $laboratories_size = $_POST["laboratories_size"];
                $internet_facility = $_POST["internet_facility"];
                $girls_toilet = $_POST["girls_toilet"];
                $boys_toilet = $_POST["boys_toilet"];
                $youtube_video = $_POST["youtube_video"];
                $file = $_FILES["file"]["name"];

                $honeypot = (!empty($_POST['robot'])) ? $_POST['robot'] : 0;

                if ($honeypot) {
                    echo "<script type='text/javascript'>alert('Something Went Wrong..!')</script>";
                    echo "<script type='text/javascript'>window.location.href = 'admission.php';</script>";
                } else {
                    include_once 'phpmailer/PHPMailerAutoload.php';
                    $mail  = new PHPMailer();

                    $body = "<div style='border: 1px solid #093; width:590px;'>
                    <table width='591' border='0'>
                        <tr bgcolor='#ffffff'>
                            <td height='37' colspan='3' style='text-align: center;'><img src='https://epictech.in/venkat/Nova_Education_New/img/home_new/Nova_Logo_New.png' style='text-align:center;  width: 50%; height: auto;' /></td>
                        </tr>
                        <tr>
                            <td bgcolor='#015a84' align='center' colspan='3' style='font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#ffffff'>You have new admission details and the details are as follows</td>
                        </tr>
                        <tr>
                            <td>Name of the School</td>
                            <td>:</td>
                            <td>" . $school_name . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Affiliation No.</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $affiliation_no . "</td>
                        </tr>
                        <tr>
                            <td>School Code</td>
                            <td>:</td>
                            <td>" . $school_code . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Complete Address</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $address . "</td>
                        </tr>
                        <tr>
                            <td>Principal Name</td>
                            <td>:</td>
                            <td>" . $principal_name . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Principal Qualification</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $principal_qualification . "</td>
                        </tr>
                        <tr>
                            <td>School Email ID</td>
                            <td>:</td>
                            <td>" . $school_email . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Contact Details</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $contact_details . "</td>
                        </tr>
                        <tr>
                            <td>Copy of Affiliation</td>
                            <td>:</td>
                            <td>" . $copy_of_affiliation . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Copy of Societies</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $copy_of_societies . "</td>
                        </tr>
                        <tr>
                            <td>Copy of Objection</td>
                            <td>:</td>
                            <td>" . $copy_of_objection . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Copy of Recognition</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $copy_of_recognition . "</td>
                        </tr>
                        <tr>
                            <td>Copy of Valid Building</td>
                            <td>:</td>
                            <td>" . $copy_of_valid_building . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Copy of Valid Fire Safety</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $copy_of_valid_fire_safety . "</td>
                        </tr>
                        <tr>
                            <td>Copy of Self Certification</td>
                            <td>:</td>
                            <td>" . $copy_of_self_certification . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Copy of Valid Water</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $copy_of_valid_water . "</td>
                        </tr>
                        <tr>
                            <td>Fee Structure</td>
                            <td>:</td>
                            <td>" . $fee_structure . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Annual Academic Calendar</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $annual_academic . "</td>
                        </tr>
                        <tr>
                            <td>List of School Management Committee</td>
                            <td>:</td>
                            <td>" . $school_management . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>List of PTA Members</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $pta . "</td>
                        </tr>
                        <tr>
                            <td>Last Three-Year Result</td>
                            <td>:</td>
                            <td>" . $three_year_result . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Principal</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $principal . "</td>
                        </tr>
                        <tr>
                            <td>Total No. of Teachers</td>
                            <td>:</td>
                            <td>" . $no_of_teachers . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>PGT</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $pgt . "</td>
                        </tr>
                        <tr>
                            <td>TGT</td>
                            <td>:</td>
                            <td>" . $tgt . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>PRT</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $prt . "</td>
                        </tr>
                        <tr>
                            <td>Teacher Section Ratio</td>
                            <td>:</td>
                            <td>" . $teacher_section_ratio . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Special Educator</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $special_educator . "</td>
                        </tr>
                        <tr>
                            <td>Wellness Teacher</td>
                            <td>:</td>
                            <td>" . $wellness_teacher . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Class X Year</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $x_year . "</td>
                        </tr>
                        <tr>
                            <td>Class X Registered Students</td>
                            <td>:</td>
                            <td>" . $x_registered_students . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Class X Students Passed</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $x_students_passed . "</td>
                        </tr>
                        <tr>
                            <td>Class X Pass Percentage</td>
                            <td>:</td>
                            <td>" . $x_pass_percentage . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Class X Remarks</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $x_remarks . "</td>
                        </tr>
                        <tr>
                            <td>Class XII Year</td>
                            <td>:</td>
                            <td>" . $xii_year . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Class XII Registered Students</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $xii_registered_students . "</td>
                        </tr>
                        <tr>
                            <td>Class XII Students Passed</td>
                            <td>:</td>
                            <td>" . $xii_students_passed . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Class XII Pass Percentage</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $xii_pass_percentage . "</td>
                        </tr>
                        <tr>
                            <td>Class XII Remarks</td>
                            <td>:</td>
                            <td>" . $xii_remarks . "</td>
                        </tr>
                        <tr>
                            <td>Campus Area</td>
                            <td>:</td>
                            <td>" . $campus_area . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Number of Class Rooms</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $no_of_class . "</td>
                        </tr>
                        <tr>
                            <td>Class Room Size</td>
                            <td>:</td>
                            <td>" . $class_size . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Number of Laboratories</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $no_of_laboratories . "</td>
                        </tr>
                        <tr>
                            <td>Laboratories Size</td>
                            <td>:</td>
                            <td>" . $laboratories_size . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Internet Facility</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $internet_facility . "</td>
                        </tr>
                        <tr>
                            <td>Number of Girls Toilets</td>
                            <td>:</td>
                            <td>" . $girls_toilet . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Number of Boys Toilets</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $boys_toilet . "</td>
                        </tr>
                        <tr>
                            <td>Link to YouTube Video</td>
                            <td>:</td>
                            <td>" . $youtube_video . "</td>
                        </tr>
                        <tr>
                            <td bgcolor='#F3F3F3' width='65'>Teacher's List</td>
                            <td bgcolor='#F3F3F3' width='6'>:</td>
                            <td bgcolor='#F3F3F3' width='280'>" . $file . "</td>
                        </tr>
                    </table>
                    </div>";

                    $mail->IsSMTP();
                    $mail->Host       = "ssl://smtp.googlemail.com";
                    $mail->SMTPDebug  = 0;
                    $mail->SMTPAuth   = true;
                    $mail->Port       = 465;
                    $mail->Username   = "smtp@banyaninfotech.com";
                    $mail->Password   = "hscdpcslvsiufamg";
                    $mail->SetFrom("uriyaprakash@gmail.com", "Nova Education Website Admission");
                    $mail->AddReplyTo("uriyaprakash@gmail.com", "Nova Education Website Admission");
                    $mail->Subject = "Nova Education Website Admission Form Submission";
                    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                    $mail->MsgHTML($body);
                    $mail->AddAddress("uriyaprakash@gmail.com", "Nova Education Website Admission");
                    $mail->addBcc("uriyaprakash@gmail.com", "Nova Education Website Admission");

                    if (!$mail->Send()) {
                        echo "<script type='text/javascript'>alert('Message Not sent')</script>";
                        echo "<script type='text/javascript'> window.location.href = 'admission.php';</script>";
                    } else {
                        echo "<script type='text/javascript'>alert('Your Message Sent Successfully')</script>";
                        echo "<script type='text/javascript'> window.location.href = 'admission.php';</script>";
                    }
                }
            } else {
                echo "<script type='text/javascript'>alert('Please Check your Captcha & Try Again..!')</script>";
                echo "<script type='text/javascript'> window.location.href = 'admission.php';</script>";
            }
        }
    } else {
        echo "<script type='text/javascript'>alert('There was a problem with your submission, Please try again.')</script>";
        echo "<script type='text/javascript'> window.location.href = 'admission.php';</script>";
    }
}
