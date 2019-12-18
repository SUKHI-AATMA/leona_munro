<?php

if($_POST){

    $name = $_POST['name'];

    $email = $_POST['email'];

    $mobile = $_POST['mobile'];

    $propertyIdval = $_POST['propertyIdval'];



//send email

    mail("Leonam@metrorealty.co.nz", "Enquiry from " .$name, "You have recieved a new enquiry from: \r\n Name: " .$name ."\r\nContact No: " .$mobile ."\r\nEmail ID: " .$email ."\r\nMessage: " .$message);

    // mail("Leonam@metrorealty.co.nz", "Enquiry from " .$name, "You have recieved a new enquiry from: \r\n Name: " .$name ."\r\nEmail ID: " .$email ."\r\Phone Number: " .$mobile ."\r\Property id: " .$propertyIdval);

}

?>