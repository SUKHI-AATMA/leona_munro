<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
//send email
    mail("Leonam@metrorealty.co.nz", "Enquiry from " .$name, "You have recieved a new enquiry from: \r\n Name: " .$name ."\r\nEmail ID: " .$email ."\r\nMessage: " .$message);
    // mail("Leonam@metrorealty.co.nz", "Enquiry from " .$name, "You have recieved a new enquiry from: \r\n Name: " .$name ."\r\nEmail ID: " .$email ."\r\nMessage: " .$message);
}
?>