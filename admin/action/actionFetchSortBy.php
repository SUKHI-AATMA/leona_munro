<?php
include 'sitename.php';
include '../../model_base.php';

// if($_POST){
    // $sortby = $_POST['sortby'];
    // $response = [$_GET['be'], $_GET['ba'], $_GET['li'], $_GET['ga']];
    // $query = "SELECT * FROM projects where ";
    $query = "SELECT * FROM `projects` WHERE ";
    
    $be = (int)$_GET['be'];
    $ba = (int)$_GET['ba'];
    $li = (int)$_GET['li'];
    $ga = (int)$_GET['ga'];
    $na = $_GET['na'];
    if($be != 0)
    {
        $query .= "beds = " .$be ." and ";
    }
    if($ba != 0)
    {
        $query .= "toilet = " .$ba ." and ";
    }
    if($li != 0)
    {
        $query .= "seating = " .$li ." and ";
    }
    if($ga != 0)
    {
        $query .= "parking = " .$ga ." and ";
    }
    if($na != '' && $na != 0)
    {
        $query .= "project_name = '" .$na ."' and ";
    }
    $query .= "sold = 0";
    $substring = ' and ';
    // $str = "this string is a test string";
    if (substr($query,-strlen($substring))===$substring) $query = substr($query, 0, strlen($query)-strlen($substring));
    $data = Model_Base::query($query);
    // $response = $data; 
    
    
    // echo json_encode($query);
    echo json_encode($data);
    exit();
// }
?>

<!-- SELECT * FROM `projects` WHERE project_name = '' -->

