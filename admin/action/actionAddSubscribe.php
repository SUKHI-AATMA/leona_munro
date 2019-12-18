<?php
 include '../../model_base.php';
 
 if($_POST){
    $response = array();
    $subscribeEmail = $_POST['subscribeEmail'];
    if($subscribeEmail != ""){
        if (!filter_var($subscribeEmail, FILTER_VALIDATE_EMAIL)) {
            $response["status"] = "error";
            $response["msg"] = "Invalid email id";
        }else{
            $columnvalue = array(
                "email"=>$subscribeEmail
            );
            Model_Base::insert_row("subscribes", $columnvalue);
            $response["status"] = "success";
            $response["msg"] = "Thank You For Subscribing!!";
        }
    }else{
        $response["status"] = "error";
        $response["msg"] = "Invalid email id";
    }
    echo json_encode($response);
    exit();
 }

?>

