<?php
include 'sitename.php';

include '../../model_base.php';

if($_POST){
    $count = $_POST['count'];
    $countPlus = $_POST['count']+1;
    $sortby = $_POST['sortby'];
    $reponse = array();
    if($count > 0){
        
        if($sortby == "date"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY id DESC  LIMIT $count , 9");
            $dataMore = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY id DESC  LIMIT $countPlus , 9");
        }elseif($sortby == "areaLow"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY ABS(area) ASC  LIMIT $count , 9");
            $dataMore = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY ABS(area) ASC  LIMIT $countPlus , 9");
        }elseif($sortby == "areaHigh"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY ABS(area) DESC  LIMIT $count , 9");
            $dataMore = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY ABS(area) DESC  LIMIT $countPlus , 9");
        }elseif($sortby == "bedLow"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY beds ASC  LIMIT $count , 9");
            $dataMore = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY beds ASC  LIMIT $countPlus , 9");
        }elseif($sortby == "bedHigh"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY beds DESC  LIMIT $count , 9");
            $dataMore = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY beds DESC  LIMIT $countPlus , 9");
        }else{
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY featured DESC  LIMIT $count , 9");
            $dataMore = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY featured DESC  LIMIT $countPlus , 9");
        }
        
        $str= '';
        $reponse['data'] = $data;
        $reponse['count'] = $count;
        if(!empty($data)){
            foreach ($data as $key => $value) {
                $str.= '<div class="box">
                            <a href="details/'.$value->uniquename.'">
                                <div class="img">
                                    <img src="'.site_name.'upload/profileImage/'.$value->project_img.'" alt="'.$value->project_name.'">
                                </div>
                                <div class="cont">
                                    <div class="stName">'.$value->project_name.'</div>
                                    <div class="amenities">
                                        <span class="bed">'.$value->beds.'</span>
                                        <span class="toilet">'.$value->toilet.'</span>
                                        <span class="area">'.$value->area.' m2</span>
                                    </div>
                                </div>
                            </a>
                        </div>';
            }

            if(count($dataMore) > 8){
                $reponse['loadMore'] = 'success';
            } else {
                $reponse['loadMore'] = 'failed';
            }
            $reponse['status'] = 'success';
            $reponse['msg'] = $str;
        }else{
            $reponse['status'] = 'error';
            $reponse['msg'] = $str;
        }
    }else{
        $reponse['status'] = 'error';
        $reponse['msg'] = 'NO more datatoload';
    }
    
    echo json_encode($reponse);
    exit();
}
?>

