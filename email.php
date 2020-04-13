<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $message =  $_POST['message'];
    $to = "sawant1810@gmail.com";
    $subject ="New inquiry from:" . $name;
    $message = "Name:" . $name ."\r\n\r\nEmail:" .$email."\r\n\r\nMessage:" .$message;
    $headers = "Name:" . $name ."\r\n\r\nEmail:" .$email."\r\n\r\nMessage:" .$message;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent. ";
?>