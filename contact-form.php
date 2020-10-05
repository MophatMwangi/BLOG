<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

require_once = "PHPMAILER/PHPMailer.php";
require_once = "PHPMAILER/SMTP.php";
require_once = "PHPMAILER/Exception.php";

//SMTP Setting
$mail->isSMTP();
$mail->Host="smtp.gmail.com"
$mail->SMTPAuth=true;
$mail->Username="morphynjuh@gmail.com'"
$mail->password="";
$mail->Port = 465;//587
$mail->SMTPSecure="ssl";

//email Setting
$mail->isHTML(true)
$mail->setForm($email,$name)
$mail->addAddress("mophat.mwangi@strathmore.edu");
$mail->Subject = $email_subject;
$mail->Body = $email_body;

$email_from = 'morphynjuh@gmail.com';

$email_subject = 'New Form Submittion';

$email_body = "User Name:$name.\n"."User Email:$visitor_email.\n"."Uaer Message:$message .\n";

$to = "mophat.mwangi@strathmore.edu";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
if($mail->send())
{
  $response = "Email is sent";
}else{
    $response = "Email is sent";
    exit(json_encode(array("response"=>$response)));
}
}
 ?>
