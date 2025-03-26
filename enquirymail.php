<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST['submit'])) {
    
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    
        // Google secret API
        $secretAPIkey = '6Lc7XCgdAAAAAH9l3EH4bgbOw8G9KJnnsjJ1PTzi';
    
        // reCAPTCHA response verification
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);
    
        // Decode JSON data
        $response = json_decode($verifyResponse);
        if($response->success){
    
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $course = $_POST["course"];
        $message = $_POST["message"];

        $honeypot = (!empty($_POST['robot'])) ? $_POST['robot'] :0;

    if($honeypot) {
		echo "<script type='text/javascript'>alert('Something Went Wrong..!')</script>";
    	echo "<script type='text/javascript'>window.location.href = '<?php echo base_url(); ?>contact.php';</script>";
	}
	else {
	include_once 'phpmailer/PHPMailerAutoload.php';
	$mail  = new PHPMailer();

	$body="<div style='border: 1px solid #093; width:590px;'>
    <table width='591' border='0'>
        <tr bgcolor='#ffffff'>
            <td height='37' colspan='3' style='text-align: center;'><img src='https://epictech.in/venkat/Nova_Education_New/img/home_new/Nova_Logo_New.png' style='text-align:center;  width: 50%; height: auto;' /></td>
        </tr>
        <tr>
            <td bgcolor='#015a84' align='center' colspan='3' style='font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#ffffff'>You have new messages and the details are as follows</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td>".$name."</td>
        </tr>
        <tr>
            <td bgcolor='#F3F3F3' width='65'>Contact number</td>
            <td bgcolor='#F3F3F3' width='6'>:</td>
            <td bgcolor='#F3F3F3' width='280'>".$phone."</td>
        </tr>
        <tr>
            <td>E-mail Address</td>
            <td>:</td>
            <td>".$email."</td>
        </tr>
        <tr>
            <td bgcolor='#F3F3F3' width='65'>Type of Course Wanted</td>
            <td bgcolor='#F3F3F3' width='6'>:</td>
            <td bgcolor='#F3F3F3' width='280'>".$course."</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>:</td>
            <td>".$message."</td>
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
$mail->SetFrom("venkat@banyaninfotech.com", "Nova Education Website Enquiry");
$mail->AddReplyTo("venkat@banyaninfotech.com", "Nova Education Website Enquiry");
$mail->Subject = "Nova Education Website Contact Form Enquiry";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$mail->AddAddress("venkat@banyaninfotech.com","Nova Education Website Enquiry");
$mail->addBcc("venkat@banyaninfotech.com","Nova Education Website Enquiry");

if(!$mail->Send()){
    echo "<script type='text/javascript'>alert('Message Not send')</script>";
    echo "<script type='text/javascript'> window.location.href = 'contact.php';</script>";
}
else{
    echo "<script type='text/javascript'>alert('Your Message Send Successfully')</script>";
    echo "<script type='text/javascript'> window.location.href = 'contact.php';</script>";
}
}
}
}
else{
    echo "<script type='text/javascript'>alert('Please Check your Captcha & Try Again..!')</script>";
    echo "<script type='text/javascript'> window.location.href = 'contact.php';</script>";
}
}
}
else{
    echo "<script type='text/javascript'>alert('There was a problem with your submission, Please try again.')</script>";
    echo "<script type='text/javascript'> window.location.href = 'contact.php';</script>";
}
?>