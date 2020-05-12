<?php
    // ini_set( 'display_errors', 1 );
    // error_reporting( E_ALL );
    // $name =  $_POST['name'];
    // $email =  $_POST['email'];
    // $message =  $_POST['message'];
    // $to = "sawant1810@gmail.com,leona.munro@raywhite.com";
    // $subject ="New inquiry from:" . $name;
    // $message = "Name:" . $name ."\r\n\r\nEmail:" .$email."\r\n\r\nMessage:" .$message;
    // $headers = "Name:" . $name ."\r\n\r\nEmail:" .$email."\r\n\r\nMessage:" .$message;
    // mail($to,$subject,$message, $headers);
    // echo "The email message was sent. ";
?>
<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "sawant1810@gmail.com";
    $subject = "New inquiry from: " . $_POST['name'];
    $message = "Name: " . $_POST['name'] ."\r\n\r\nEmail: " .$_POST['email']."\r\n\r\nMessage: " .$_POST['message'];
    $headers = "From: " . $from;
    mail($to,$subject,$message, $headers);
    // echo $html;
?>
<html lang="en"><head><meta charset="utf-8"><?php include "include_social.php"; ?><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" /><link rel="stylesheet" href="css/style.css?v=1.0"></head><body><section class="thankyou"><div class="container"><h2>Thank you</h2><p>We will call you shortly.</p></div></section><script>setTimeout(function(){window.location.href = document.referrer;},2000)</script></body></html>
