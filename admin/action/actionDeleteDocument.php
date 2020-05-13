<?php
 include '../../model_base.php';
 
 if($_POST){
    $response = array();
    $uniquename = $_POST['uniquename'];
    $uniqueid = $_POST['uniqueid'];
    if($uniquename !=''){
        $arraycolumn = array(array("colm" => "id", "condtn" => "=", "val" => $uniqueid, "optr" => ""));
        Model_Base::delete_rows("project_document", $arraycolumn);
        $response["status"] = "success";
        $response["msg"] = "Document deleted successfully";
    }else{
        $response["status"] = "error";
        $response["msg"] = "Invalid data";
    }
    
    echo json_encode($response);
    exit();
     
 }

?>

