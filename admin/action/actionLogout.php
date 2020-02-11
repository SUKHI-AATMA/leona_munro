<?php 
session_start();
include 'sitename.php';
session_destroy();
header("Location:".site_name);
?>