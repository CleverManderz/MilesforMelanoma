<?php
// header will run the entire email script then redirect after
header("Location: http://www.racingtogive.com/milesformelanoma/thankyou-mrf.php");

// call this email class
require "./scripts/phpmailer/class.phpmailer.php";
// create a new object for email
$mail = new PHPMailer;
// define mail server connection variables
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = "audiencegeneration.com";               // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "mailadmin";                        // SMTP username
$mail->Password = "AG2014";                           // SMTP password


$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$race=$_POST["race"];
$agreement=$_POST["agreement"];
$pdf=$_POST["pdf"];


$con=mysql_connect("localhost","keddleman","Keith2010");
mysql_select_db("MRF");
// Check connection
mysql_query("INSERT INTO `IMWC` (`First Name`, `Last Name`, `Address`, `City`, `State`, `Zip`, `Email`, `Phone`, `Race`, `Email Agreement`, `Email PDF`) VALUES ('".$first_name."', '".$last_name."', '".$address."', '".$city."', '".$state."', '".$zip."', '".$email."', '".$phone."', '".$race."', '".$agreement."', '".$pdf."')");

if(isset($_POST['pdf']) &&
$_POST['pdf'] == 'yes')
{
// CONFIRMATION EMAIL TO REGISTRANT
// define headers for the email
$mail->From = "no-reply@teammilesformelanoma.com";							// FROM
$mail->FromName = "Melanoma Research Foundation Triathlon Team";								// FROM NAME
$mail->addAddress($email);							// TO
$mail->WordWrap = 50;                                						// Set word wrap to 50 characters
$mail->addAttachment("./images/mrf-ironman.pdf", "IronmanRaceCalendar.pdf");		// Add attachments
$mail->isHTML(true);                                 						// Set email body format to HTML
$mail->Subject = "Ironman Race Calendar";									// SUBJECT
$mail->Body    = "
<html>
<head></head>
<body>
<table border='0' cellspacing='0' cellpadding='0' align='center' width='500'><font face='arial' size='2'>
<tr><td></td><td align='center'><div style='font-size:18px; margin-top:30px;'><b>Hello, ".$first_name."&nbsp;".$last_name."</b></div><br></td><td></td></tr>
<tr><td></td><td align='center'><div style='font-size:16px;'>Thank you for your interest in joining and racing for the Melanoma Research Foundation Triathlon Team. Attached is our team race calendar.</div><br><br></td><td></td></tr>
<tr><td></td><td align='center'><img src='http://www.racingtogive.com/milesformelanoma/images/logo1.png' /></td><td></td></tr>
</font></table>
</body>
</html>
";

}

// required by class for debug purposes, do not remove
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

mysql_close($con);
?>
