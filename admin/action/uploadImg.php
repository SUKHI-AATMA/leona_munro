<?php
include 'sitename.php';
include 'crop.php';
$target_dir = "../upload/profileImage/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$msg = "";
$response = array();

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $response["status"] = "success";
    $msg = basename($_FILES["image"]["name"]);
    $response["msg"] = $msg;
    echo json_encode($response);
    exit();
} else {
     echo $_FILES["image"]['error'];
    $response["status"] = "error";
    $msg = "Sorry, there was an error uploading your file.";
    $response["msg"] = $msg;
    echo json_encode($response);
    exit();
}


?>
