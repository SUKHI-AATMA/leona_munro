<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
var form = {"grant_type": "password","client_id": "3MVG98SW_UPr.JFgvijqjJ9UZkGpiQuqI1ld20w4dv9VubsLYm49YxjJvvFuPQWmkuhQU8xmW8NsZBxZ5IfrN","client_secret": "0799B6754E87D5CCFD5C3B22EB13B3D6047EB299B8FA3F726CB9EC19AAB29526","username": "sagacito@sagacito.in","password": "HTMediaSaga@2020"}, t;
// form.append("grant_type", "password");
// form.append("client_id", "3MVG98SW_UPr.JFgvijqjJ9UZkGpiQuqI1ld20w4dv9VubsLYm49YxjJvvFuPQWmkuhQU8xmW8NsZBxZ5IfrN");
// form.append("client_secret", "0799B6754E87D5CCFD5C3B22EB13B3D6047EB299B8FA3F726CB9EC19AAB29526");
// form.append("username", "sagacito@sagacito.in");
// form.append("password", "HTMediaSaga@2020");
console.log(form);
var settings = {
    "url": "https://htmedia.my.salesforce.com/services/oauth2/token",
    "method": "POST",
    // "timeout": 0,
    "headers": {
      "Access-Control-Allow-Origin": "*",
    },
    "processData": false,
    "mimeType": "multipart/form-data",
    "contentType": false,
    "data": form
};
formData = { 
  "Company": "Saga", 
  "firstname": "Sagar", 
  "lastname": "Saga202", 
  "Website": "http://www.google.com", 
  "MobilePhone": 7867656567, 
  "Phone": "01167678989", 
  "Email": "xyz@gmail.in"
}
var leadSettings = {
    "url": "https://htmedia.my.salesforce.com/services/data/v43.0/sobjects/Lead",
    "method": "POST",
    // "timeout": 0,
    "headers": {
        "Content-Type": "application/json",
        "Authorization": t,
        // "Cookie": "BrowserId=owFKHMZ3EeqcEQ3sMe83Dg"
    },
    "data": JSON.stringify(formData),
};

$.ajax(settings).done(function(response) {
    // console.log(response);
    // response = {"access_token":"00D37000000PvYs!AQkAQGPIWwTeHdN0JhN9B1ZrM3OpczHBHs2AoB1I1FShQQCMz0jOZl1hQViuLHrTF85EChHfEkvcpfhPAjPpfhLief1KjcYv","instance_url":"https://htmedia.my.salesforce.com","id":"https://login.salesforce.com/id/00D37000000PvYsEAK/0051S000005wmCCQAY","token_type":"Bearer","issued_at":"1595421961906","signature":"HA0U80yQ1ETXwKsFIZ9WUTpKHIeOyEFideZOAsmgO4U="}
    t = 'Bearer ' + response.access_token;
    $.ajax(settings).done(function(response) {
        console.log(response);
    });
});

</script>