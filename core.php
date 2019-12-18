<?php

session_start();
$protocol = ($_SERVER['HTTP_HOST'] !== 'localhost') ? "https://" : "http://";
//$protocol = ($_SERVER['HTTP_HOST'] !== 'localhost') ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'].'/';

define('http_Site', $protocol.$domainName);
define('version', (mt_rand() / (mt_getrandmax() + 1)));
//  (mt_rand() / (mt_getrandmax() + 1))
?>

<script>
    var urlpath = "<?php echo http_Site; ?>";
    var version = "<?php echo version; ?>";
</script>