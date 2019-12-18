<?php
include '../model_base.php';

//$project_name = 'Project name bandra north';
//$uniquename = 'project-name-bandra-north';
//$description = '<p>description description description description description description description </p><p>description description description description description description description </p><p>description description description description description description description </p><p>description description description description description description description </p>';
//$project_img ='http://jhdental.nz/Leona/admin/upload/joshua-ness-109299-unsplash.jpg';
//$project_img_small ='1530189115resized_1jpeg';
//$beds = rand(1, 4);
//$toilet =rand(1, 2);
//$area =rand(200, 400);
//$parking =rand(1, 4);
//$seating =rand(1, 4);
//$featured =rand(1, 0);
//$images ='http://jhdental.nz/Leona/admin/upload/brina-blum-612628-unsplash.jpg,http://jhdental.nz/Leona/admin/upload/michael-d-beckwith-613082-unsplash.jpg,http://jhdental.nz/Leona/admin/upload/orlova-maria-379689-unsplash.jpg,http://jhdental.nz/Leona/admin/upload/joshua-ness-109299-unsplash.jpg';
//$small_images ='1530188653resized_0jpeg,1530188659resized_1jpeg,1530188659resized_2jpeg,1530188836resized_0jpeg';
//$document ='';
//
//for($i=0; $i<100; $i++){
//    $columnvalue = array(
//        'project_name'=>$project_name.'_'.$i,
//        'uniquename'=>$uniquename.'-'.$i,
//        'description'=>$description,
//        'project_img'=>$project_img,
//        'project_img_small'=>$project_img_small,
//        'beds'=>rand(1, 4),
//        'toilet'=>rand(1, 2),
//        'area'=>rand(200, 400),
//        'parking'=>rand(1, 4),
//        'seating'=>rand(1, 4),
//        'featured'=>rand(1, 0),
//        'images'=>$images,
//        'small_images'=>$small_images,
//        'document'=>$document,
//        'status'=>1,
//    );
//    Model_Base::insert_row('projects', $columnvalue);

for($i=0; $i<100; $i++){
    $columnvalue = array(
        'uniquename'=>'123-streetname-street-suburb-'.$i,
        'link'=>'http://jhdental.nz/Leona/admin/documents/pdf-sample (1).pdf',
        'docName'=>'House PDF '.$i,
        'description'=>'Donec facilisis tortor ut lorem ipsum dolor sit amet...',
    );

    Model_Base::insert_row('project_document', $columnvalue);
}

?>

