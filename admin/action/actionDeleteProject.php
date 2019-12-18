<?php
 include '../../model_base.php';
 
 if($_POST){
    $response = array();
    $uniquename = $_POST['uniquename'];
    if($uniquename !=''){
        $arraycolumn = array(array("colm" => "uniquename", "condtn" => "=", "val" => $uniquename, "optr" => ""));
        Model_Base::delete_rows("projects", $arraycolumn);
        $arraycolumn = array(array("colm" => "uniquename", "condtn" => "=", "val" => $uniquename, "optr" => ""));
        Model_Base::delete_rows("project_document", $arraycolumn);
        $response["status"] = "success";
        $response["msg"] = "Deleted successfully";
    }else{
        $response["status"] = "error";
        $response["msg"] = "Invalid data";
    }
    
    echo json_encode($response);
    exit();
     
 }

?>

