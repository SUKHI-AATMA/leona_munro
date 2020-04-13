<?php

if($_POST){

    $name = $_POST['name'];

    $email = $_POST['email'];

    $message = $_POST['message'];

//send email

    mail("sawant1810@gmail.com", "Enquiry from " .$name,"You have recieved a new enquiry from: \r\nName: ".$name ."\r\nEmail ID: ". $email."\r\nMessage: ". $message."\r\n
    );

}

?>

