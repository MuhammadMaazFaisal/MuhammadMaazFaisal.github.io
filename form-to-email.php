<?php  
if( isset($_POST['submit']) ) {
//getting user data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

//Send mail using gmail

    $mail->IsHTML(true);
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "m.maazfaisal0301@gmail.com"; // GMAIL username
    $mail->Password = "mqhdlqfzluyyfvth"; // GMAIL password

//Typical mail data
$mail->AddAddress('m.maazfaisal0301@gmail.com');
$mail->Subject = 'IMPORTANT'. ' '.$subject;
$mail->Body = 'Hi Maaz,<br>'.'You have recieved an response on your portfolio website from <br>.'.'<b>Name: </b>'.$name.'<br><b>Email: </b>'.$email."\n".'<br><b>Message: </b>'.$message;

try{
    $mail->Send();
    echo '<script>alert("The message was sent Successfully")</script>';
} catch(Exception $e){
    //Something went bad
    echo '<script>alert("The message was not delivered Successfuly, Please try again later.")</script>';
}
header( "refresh:0;url=index.php" );
}
?>
