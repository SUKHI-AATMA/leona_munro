<?php
 include '../../model_base.php';
 
 if($_POST){
    $response = array();
    
    //print_r($_POST);exit();
    
    $projectname = $_POST['projectname'];
    $doc = $_POST['doc'];
    $txt = $_POST['txt'];
    $descp = $_POST['descp'];
    $count = $_POST['count'];
    
    if($count > 0){
        $arraycolumn = array(array("colm" => "uniquename", "condtn" => "=", "val" => $projectname, "optr" => ""));
        Model_Base::delete_rows("project_document", $arraycolumn);
    }
    
    for($i=0; $i<$count; $i++){
        if($txt[$i] !='' && $txt[$i] !='' && $txt[$i] !=''){
            $columnvalue = array(
                "uniquename"=>$projectname,
                "link"=>$doc[$i],
                "docName"=>$txt[$i],
                "description"=>$descp[$i]
            );
            Model_Base::insert_row("project_document", $columnvalue);
        }
    }
    
    $response["msg"] = "Document uploaded successfully";
    echo json_encode($response);
    exit();
     
 }

?>

