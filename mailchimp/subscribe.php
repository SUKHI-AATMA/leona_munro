<?php
	function rudr_mailchimp_subscriber_status( $email, $status, $list_id, $api_key, $merge_fields = array('FNAME' => '','LNAME' => '') ){
		$data = array(
			'apikey'        => $api_key,
    		'email_address' => $email,
    		'name' 			=> 'Misha 123',
			'status'        => $status,
			'merge_fields'  => $merge_fields
		);
		$mch_api = curl_init(); // initialize cURL connection
	 
		curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])). '&source=website form');
		curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$api_key )));
		curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
		curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
		curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT'); // method PUT
		curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
		curl_setopt($mch_api, CURLOPT_POST, true);
		curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json
	 
		$result = curl_exec($mch_api);
		echo $result;
	}

if($_POST){
	$api_key = '6e1242332d8d8ff355c0bcd7fc3a000d-us15';
	$list_id = '44fd01fc04';
	// $email = $_POST['email'];
	$email = 'misha1aaa2234665@rudrastyh.com';
	$status = 'subscribed'; 
	$merge_fields = array('FNAME' => 'Rajesh','LNAME' => 'Sawant');
	rudr_mailchimp_subscriber_status($email, $status, $list_id, $api_key, $merge_fields );	
}


// https://us15.api.mailchimp.com/3.0/lists/eaca71c5ef/members/johndoe@rudrastyh.com?u:something&p:Y6e1242332d8d8ff355c0bcd7fc3a000d-us15
		
// $data = [
//     'email'     => 'johndoe@example.com',
//     'status'    => 'subscribed',
//     'firstname' => 'john',
//     'lastname'  => 'doe'
// ];

// syncMailchimp($data);

// function syncMailchimp($data) {
//     $apiKey = 'Y6e1242332d8d8ff355c0bcd7fc3a000d-us15';
//     $listId = 'eaca71c5ef';

//     $memberId = md5(strtolower($data['email']));
//     $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
//     $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

//     $json = json_encode([
//         'email_address' => $data['email'],
//         'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
//         'merge_fields'  => [
//             'FNAME'     => $data['firstname'],
//             'LNAME'     => $data['lastname']
//         ]
//     ]);

//     $ch = curl_init($url);

//     curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

//     $result = curl_exec($ch);
//     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//     curl_close($ch);

//     return $httpCode;
// }


// $apikey = 'Y6e1242332d8d8ff355c0bcd7fc3a000d-us15';
// $auth = base64_encode( 'user:'.$apikey );

// $data = array(
//     'apikey'        => $apikey,
//     'email_address' => $email,
//     'status'        => 'subscribed',
//     'merge_fields'  => array(
//         'FNAME' => $name
//     )
// );
// $json_data = json_encode($data);

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://us15.api.mailchimp.com/3.0/lists/eaca71c5ef/members/');
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
//                                             'Authorization: Basic '.$auth));
// curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_TIMEOUT, 10);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);                                                                                                                  

// $result = curl_exec($ch);

// var_dump($result);
// die('Mailchimp executed');
?>