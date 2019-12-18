<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $propertyId = $_POST['propertyIdval'];

//send email
    mail("Leonam@metrorealty.co.nz", "PDF downloaded " .$name, "Name: " .$name ."\r\nEmail ID: " .$email ."\r\Property: " .$propertyId);
    // mail("Leonam@metrorealty.co.nz", "Enquiry from " .$name, "You have recieved a new enquiry from: \r\n Name: " .$name ."\r\nEmail ID: " .$email ."\r\nMessage: " .$message);
}
?>