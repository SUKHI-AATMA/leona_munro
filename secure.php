<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "Leonamunro"
&& $pass == "belvedere")
{
        include("secure.html");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="secure.php">
            User <input type="text" name="user"></input><br/>
            Pass <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
    <?}
}
?>