<?php
 include '../../model_base.php';
 
 if($_POST){
    $response = array();    
    $project_name = $_POST['project_name'];
    $description = $_POST['description'];
    $project_beds = $_POST['project_beds'];
    $project_toilet = $_POST['project_toilet'];
    $profileImgView = $_POST['profileImgView'];
    $profileImgSmall = $_POST['profileImgSmall'];
    $project_area = $_POST['project_area'];
    $project_carpet_area = $_POST['project_carpet_area'];
    $project_parking = $_POST['project_parking'];
    $project_living = $_POST['project_living'];
    $status = 1;
    $draft = $_POST['draft'];
    if($draft) {
       $status = 0; 
    }
    $featured = $_POST['featured'];
    $check_sold = $_POST['check_sold'];
    $project_map = $_POST['project_map'];
    $arr = (!empty($_POST['arr']))?implode(",",$_POST['arr']):"";
    $resize_arr = (!empty($_POST['resize_arr']))?implode(",",$_POST['resize_arr']):"";
    $interest = $_POST['interest'];

       
    if($project_name !=''){
        $data = Model_Base::query("Select id from projects where project_name = '{$project_name}'");
        if(empty($data)){
            $string = str_replace(" ", "-", $project_name);
            $string = preg_replace("/[^A-Za-z0-9\-]/", "", $string);
            $uniquename = strtolower(preg_replace("/-+/", "-", $string));

            $columnvalue = array(
                "project_name"=>$project_name,
                "uniquename"=>$uniquename,
                "project_img"=>$profileImgView,
                "project_img_small"=>$profileImgSmall,
                "description"=>$description,
                "beds"=>$project_beds,
                "toilet"=>$project_toilet,
                "area"=>$project_area,
                "carpet_area"=>$project_carpet_area,
                "parking"=>$project_parking,
                "seating"=>$project_living,
                "featured"=>$featured,
                "project_map"=>$project_map,
                "sold"=>$check_sold,
                "draft"=>$draft,
                "images"=>$arr,
                "status"=>(int)$status,
                "small_images"=>$resize_arr,
                "interest" => $interest
            );
            $resultValue = Model_Base::insert_row("projects", $columnvalue);
            if($resultValue) {
             $response["status"] = "success";
             $response["link"] = $uniquename;
             $response["msg"] = "Project created successfully";
            } else {
             $response["status"] = "failed";
             $response["link"] = $uniquename;
             $response["msg"] = $resultValue;
            }
            
            
        }else{
            $response["status"] = "error";
            $response["msg"] = "Project name already exists";
        }
    }else{
        $response["status"] = "error";
        $response["msg"] = "Invalid data";
    }
    
    echo json_encode($response);
    exit();
     
 }

?>

