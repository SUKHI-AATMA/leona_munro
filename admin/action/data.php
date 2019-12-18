<?php

include '../../model_base.php';
include 'crop.php';

$project_name = array('Bandra North', 'Udyog Bhavan', 'Bay view', 'Grand private');
$uniquename = array('bandra-north', 'udyog-bhavan', 'bay-view', 'grand-private');
$description = '<p>description description description description description description description </p><p>description description description description description description description </p><p>description description description description description description description </p><p>description description description description description description description </p>';

for($i=0; $i<100; $i++){
    $imgname = rand(1, 7);
    $project_img ='http://localhost/Leona-munro/admin/build/'.$imgname.'.jpg';
    $pro = $imgname.'.jpeg';
    $images ='http://localhost/Leona-munro/admin/build/1.jpg,http://localhost/Leona-munro/admin/build/2.jpg,http://localhost/Leona-munro/admin/build/3.jpg,http://localhost/Leona-munro/admin/build/4.jpg';
    $small_images = '1531300275resized_1.jpeg,1531300263resized_1.jpeg,1531300283resized_1.jpeg,1531300290resized_1.jpeg';
    $document ='';
    $k = array_rand($project_name);
    $columnvalue = array(
        'project_name'=>$project_name[$k].'_'.$i,
        'uniquename'=>$uniquename[$k].'-'.$i,
        'description'=>$description,
        'project_img'=>$project_img,
        'project_img_small'=>$pro,
        'beds'=>rand(1, 4),
        'toilet'=>rand(1, 2),
        'area'=>rand(200, 400),
        'parking'=>rand(1, 4),
        'seating'=>rand(1, 4),
        'featured'=>rand(1, 0),
        'images'=>$images,
        'small_images'=>$small_images,
        'document'=>$document,
        'status'=>1,
    );
    
    echo "<pre>";
    print_r($columnvalue);
    Model_Base::insert_row('projects', $columnvalue);
}


?>

