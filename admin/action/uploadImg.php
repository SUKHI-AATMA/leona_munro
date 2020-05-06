<?php
include 'sitename.php';
include 'crop.php';
$target_dir = "../upload/profileImage/";
$target_file = "../upload/profileImage/" . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$msg = "";
$response = array();

$info = getimagesize($_FILES["image"]["tmp_name"]);

if ($info['mime'] == 'image/jpeg') 
$image = imagecreatefromjpeg($_FILES["image"]["tmp_name"]);

elseif ($info['mime'] == 'image/gif') 
$image = imagecreatefromgif($_FILES["image"]["tmp_name"]);

elseif ($info['mime'] == 'image/png') 
$image = imagecreatefrompng($_FILES["image"]["tmp_name"]);

$img = imagejpeg($image, $target_file, 75);

if ($img) {
    $response["status"] = "success";
    $msg = basename($_FILES["image"]["name"]);
    $response["msg"] = $msg;
    // $response["comp"] = compressImage($_FILES["image"]["tmp_name"], $target_file , 75);
    // $response["target_file"] = $target_file;
    echo json_encode($response);
    exit();
} else {
     // echo $_FILES["image"]['error'];
    $response["status"] = "error";
    $msg = "Sorry, there was an error uploading your file.";
    $response["msg"] = $msg;
    // $response["comp"] = compressImage($_FILES["image"]["tmp_name"], $target_file , 75);
    // $response["target_file"] = $target_file;
    // echo json_encode($response);
    echo $compressedImage;
    exit();
}

?>
