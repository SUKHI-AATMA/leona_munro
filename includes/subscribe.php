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
	$list_id = 'd4508c13d2';//'44fd01fc04';
	$email = $_POST['subscribeEmail'];
	$status = 'subscribed'; 
	$merge_fields = array('FNAME' => $_POST['subscribeFirstName'],'LNAME' => $_POST['subscribeLastName']);


	// $email = 'johndoe@rudrastyh.com';
	// $status = 'subscribed'; // "subscribed" or "unsubscribed" or "cleaned" or "pending"
	// $merge_fields = array('FNAME' => 'Misha123','LNAME' => 'Rudrastyh');
 


	rudr_mailchimp_subscriber_status($email, $status, $list_id, $api_key, $merge_fields );	
}
?>