<?php

include '../../model_base.php';

$data = Model_Base::query("Select project_name, uniquename from projects");

foreach ($data as $key => $value) {
    $columnvalue = array(
        "uniquename" => $value->uniquename,  
        "link" => "http://Leonamunro.co.nz/Leona/admin/documents/pdf-sample (1).pdf",  
        "docName" => $value->project_name.' doc',  
        "description" => "Description for pdf",  
    );
    Model_Base::insert_row("project_document", $columnvalue);
}






?>