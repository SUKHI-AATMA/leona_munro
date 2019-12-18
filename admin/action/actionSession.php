<?php
 include '../../model_base.php';
 
 if($_POST){
    $response = array();
    
    //print_r($_POST);exit();
    
    $sessionFromtime = $_POST['sessionFromtime'];
    $sessionTotime = $_POST['sessionTotime'];
    $sessionDate = $_POST['sessionDate'];
    $docId = $_POST['docId'];
    $count = $_POST['count'];
    
    for($i=0; $i<$count; $i++){
        if($sessionDate[$i] !='' && $sessionDate[$i] !='' && $sessionDate[$i] !=''){
            $columnvalue = array(
                "sessionFromtime"=>$sessionFromtime[$i],
                "sessionDate"=>$sessionDate[$i],
                "sessionTotime"=>$sessionTotime[$i]
            );
            if($docId[$i] == 0){
                Model_Base::insert_row("sessiondates", $columnvalue);
            }else{
                $arraycolumn = array(array("colm" => "id", "condtn" => "=", "val" => $docId[$i], "optr" => ""));
                Model_Base::update_rows("sessiondates", $columnvalue, $arraycolumn);
            }
        }
    }
    
    $response["msg"] = "Added successfully";
    echo json_encode($response);
    exit();
     
 }

?>

