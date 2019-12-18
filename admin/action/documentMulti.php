<?php
include 'sitename.php';

if (isset($_FILES['files']) && !empty($_FILES['files'])) {
    $no_files = count($_FILES["files"]['name']);
    $str ="";
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["files"]["error"][$i] > 0) {
        } else {
            move_uploaded_file($_FILES["files"]["tmp_name"][$i], '../upload/' . $_FILES["files"]["name"][$i]);
            $str .= "<img src='".site_name."upload/".$_FILES["files"]["name"][$i]."' width='50' height='50' class='documentView'/>";
        }
    }
    echo $str;
    exit();
    
}

?>
