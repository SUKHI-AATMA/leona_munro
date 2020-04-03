<?php
include 'sitename.php';
include '../../model_base.php';

if($_POST){
    $sortby = $_POST['sortby'];
    $reponse = array();
    if($sortby != ""){
        if($sortby == "date"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY  id DESC  limit 9");
        }elseif($sortby == "areaLow"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY  ABS(area) ASC  limit 9");
        }elseif($sortby == "areaHigh"){

            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY  ABS(area) DESC  limit 9");
$reponse['sortby'] = "areaHigh";
        }elseif($sortby == "bedLow"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY  beds ASC  limit 9");
        }elseif($sortby == "bedHigh"){
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY  beds DESC  limit 9");
        }else{
            $data = Model_Base::query("SELECT * FROM projects where status = 1 and sold = 0 ORDER BY  id DESC  limit 9");
        }
        $reponse['properties'] = $data;
        $str= '';
        if(!empty($data)){
            foreach ($data as $key => $value) {
                $str.= '<div class="box">
                            <a href="details.php?name='.$value->uniquename.'">
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
            if(count($data) == 9){
                $str .= '<div class="loadMore" id="btnLoadMore">LOAD MORE</div>';
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

