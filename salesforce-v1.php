<?php 
    // Client Secret Tokens
     $grant_type = "password";
     $client_id = "3MVG98SW_UPr.JFgvijqjJ9UZkGpiQuqI1ld20w4dv9VubsLYm49YxjJvvFuPQWmkuhQU8xmW8NsZBxZ5IfrN";
     $client_secret = "0799B6754E87D5CCFD5C3B22EB13B3D6047EB299B8FA3F726CB9EC19AAB29526";
     $username = "sagacito@sagacito.in";
     $password = "HTMediaSaga@2020";

    // User Data from form
     $Company = $_POST['Company'];
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $Website = $_POST['Website'];
     $MobilePhone = $_POST['MobilePhone'];
     $Phone = $_POST['Phone'];
     $Email = $_POST['Email'];


     define('grant_type', $grant_type);
     define('client_id', $client_id);
     define('client_secret', $client_secret);
     define('username', $username);
     define('password', $password);
     

     define('Company', $Company);
     define('firstname', $firstname);
     define('lastname', $lastname);
     define('Website', $Website);
     define('MobilePhone', $MobilePhone);
     define('Phone', $Phone);
     define('Email', $Email);
?>
<!doctype html>
<html lang="en">
   <head>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script>
         var tJson = {
             "grant_type"    : "<?php echo grant_type ; ?>",
             "client_id"     : "<?php echo client_id ; ?>",
             "client_secret" : "<?php echo client_secret ; ?>",
             "username"      : "<?php echo username ; ?>",
             "password"      : "<?php echo password ; ?>",
         },
        formData = { 
             "Company": "<?php echo Company ; ?>",
             "firstname": "<?php echo firstname ; ?>",
             "lastname": "<?php echo lastname ; ?>",
             "Website": "<?php echo Website ; ?>",
             "MobilePhone": "<?php echo MobilePhone ; ?>",
             "Phone": "<?php echo Phone ; ?>",
             "Email": "<?php echo Email ; ?>",
         }, t, settings = {
            "url": "http://htmedia.my.salesforce.com/services/oauth2/token",
            "method": "POST",
            "headers": {
                "Access-Control-Allow-Origin": "http://mytechway.000webhostapp.com/",
                "Content-Type": "application/json",
            },
            "crossorigin": "anonymous",
            "data": tJson
         }, leadSettings = {
             "url": "http://htmedia.my.salesforce.com/services/data/v43.0/sobjects/Lead",
             "method": "POST",
             "headers": {
                "Access-Control-Allow-Origin": "http://mytechway.000webhostapp.com/",
                 "Content-Type": "application/json",
                 "Authorization": t,
             },
            "crossorigin": "anonymous",
             "data": JSON.stringify(formData),
         };
         
         $.ajax(settings).done(function(response) {
             t = 'Bearer 00D37000000PvYs!AQkAQGPIWwTeHdN0JhN9B1ZrM3OpczHBHs2AoB1I1FShQQCMz0jOZl1hQViuLHrTF85EChHfEkvcpfhPAjPpfhLief1KjcYv';
             $.ajax(leadSettings).done(function(response) {
                 console.log(response);
             });
         });
      </script>
   </head>
   <body></body>
</html>

