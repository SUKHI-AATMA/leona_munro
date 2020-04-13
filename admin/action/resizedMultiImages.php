<?php

include 'sitename.php';

include 'crop.php';



if (isset($_FILES['files']) && !empty($_FILES['files'])) {

    $no_files = count($_FILES["files"]['name']);

    

    $str ="";

    for ($i = 0; $i < $no_files; $i++) {

        $imageFileType = strtolower(pathinfo($_FILES["files"]['name'][$i],PATHINFO_EXTENSION));

        if ($_FILES["files"]["error"][$i] > 0) {

        } else {

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

                

            }else{

                $check = getimagesize($_FILES["files"]["tmp_name"][$i]);

                move_uploaded_file($_FILES["files"]["tmp_name"][$i], '../upload/resizedAdditionalImages/'.$_FILES["files"]["name"][$i]);
                
                
                // echo $_FILES["files"][$i];
                // resize_crop_image($max_width, $max_height, $source_file, $quality = 100)

                // resize_crop_image ($src);

                $str .= "<div class='col-sm-2'><img src='".site_name."upload/resizedAdditionalImages/".$_FILES["files"]["name"][$i]."' data-resize='".$_FILES["files"]["name"][$i]."' width='50' height='50' class='resizedImgView'/><a href='#' class='removeImg' data-imgname='<?php echo $i; ?>'><span class='far fa-trash-alt'></span> </a></div>";   

            }

        }

    }

    echo $str;

    exit();

    

}



?>

