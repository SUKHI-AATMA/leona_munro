<?php
$protocol = ($_SERVER['HTTP_HOST'] !== 'localhost') ? "http://" : "http://";
//$protocol = ($_SERVER['HTTP_HOST'] !== 'localhost') ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'].'/';

define('site_name', $protocol.$domainName."admin/");
// define("site_name", $urlpath);
?>
