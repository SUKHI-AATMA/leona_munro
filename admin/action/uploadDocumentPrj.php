<?php

//print_r($_FILES);exit();

$target_dir = "../documents/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$response =array();

$msg="";

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));





// Allow certain file formats

if($imageFileType != "application/pdf" && $imageFileType != "application/doc" && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "application/msword" && $imageFileType != "text/pdf"  && $imageFileType != "application/vnd.openxmlformats-officedocument.wordprocessingml.document"   && $imageFileType != "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {

    $msg= "Sorry, only files are allowed.";

    $uploadOk = 0;

}



// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

    $reponse["status"] ="error";

    $reponse["msg"] =$msg;

    echo json_encode($reponse);

    exit();

} else {
    chmod($target_dir, 0755); 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $msg= basename( $_FILES["fileToUpload"]["name"]);

        $reponse["status"] ="success";

        $reponse["msg"] =$msg;

        echo json_encode($reponse);

        exit();

    } else {

        $msg= "Sorry, there was an error uploading your file.";

        $reponse["status"] ="error";

        $reponse["msg"] =$msg;

        echo json_encode($reponse);

        exit();

    }

}





?>
