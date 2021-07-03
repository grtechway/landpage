<?php
session_start();

$name = $_POST["name"];
$email  =$_POST["email"];
$phone  =$_POST["phone"];
$companyname  =$_POST["companyname"];
$subject  =$_POST["subject"];
$message  ="Hi Team,"."\r\n"."We got new message. Please find below details."."\r\n\r\n"."Name : "."$name"."\r\n"."Email : "."$email"."\r\n"."Phone : "."$phone"."\r\n"."Company Name : "."$companyname"."\r\n"."Message : ".$_POST["message"];


ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "giribala24@gmail.com";
    $to = "giribala24@gmail.com";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
        $_SESSION['message'] = "Your message was sent successfully. <br/>We are happy to assist you. Thank you!";
		header("Location:landpage.php");
        exit();
    } else {
    	$_SESSION['message'] = "We are facing some issue. Please try again after some time";
		header("Location:landpage.php");
    }
?>