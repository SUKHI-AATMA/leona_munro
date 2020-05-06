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
                

                //move_uploaded_file($_FILES["files"]["tmp_name"][$i], '../upload/additionalImages/'.$_FILES["files"]["name"][$i]);
                
                $info = getimagesize($_FILES["files"]["tmp_name"][$i]);

                if ($info['mime'] == 'image/jpeg') 
                $image = imagecreatefromjpeg($_FILES["files"]["tmp_name"][$i]);

                elseif ($info['mime'] == 'image/gif') 
                $image = imagecreatefromgif($_FILES["files"]["tmp_name"][$i]);

                elseif ($info['mime'] == 'image/png') 
                $image = imagecreatefrompng($_FILES["files"]["tmp_name"][$i]);

                $img = imagejpeg($image, '../upload/additionalImages/'.$_FILES["files"]["name"][$i], 75);

                $str .= "<div>
                <img src='".site_name."upload/additionalImages/".$_FILES["files"]["name"][$i]."'
                data-resize='".$_FILES["files"]["name"][$i]."' width='50' height='50' class='locationImgView'/><a href='#' class='removeImg' data-imgname='<?php echo $i; ?>'><span class='icon-trash-empty'></span> </a></div>";

            }
        }
    } 
    echo $str;
    exit();
}

?>
