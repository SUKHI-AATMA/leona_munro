<?php 
$filename;
if($_POST['pname'] == 'doc')
{$filename = '../documents/'.$_POST['fname'];}
else if($_POST['pname'] == 'imgProfile')
{$filename = '../upload/profileImage/'.$_POST['fname'];}
else if($_POST['pname'] == 'bigimage')
{$filename = '../upload/additionalImages/'.$_POST['fname'];}
else if($_POST['pname'] == 'smallimage')
{$filename = '../upload/resizedAdditionalImages/'.$_POST['fname'];}

 
if(is_readable($filename)){
 echo true;
} else {
 echo false;
}