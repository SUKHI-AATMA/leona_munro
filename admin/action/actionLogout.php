<?php
session_start();
if(session_destroy())
{
    echo "successfully logout";
   header("Location: /admin");
}

?>