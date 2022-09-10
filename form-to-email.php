<?php  
if( isset($_POST['submit']) ) {
//getting user data
$name = $_POST['name'];
$fromEmail = $_POST['email'];
 
//Recipient email, Replace with your email Address
$mailTo = 'hmawebdesign@hotmail.com';
 
//email subject
$subject = $_POST['subject'];
 
//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> '.$name .'</p>
<p> <b>Email: </b> '.$fromEmail .'</p>';
 
//header for sender info
$headers = "From: " .$Name . "<". $fromEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
//PHP mailer function
 $result = mail($mailTo, $subject, $htmlContent, $headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>