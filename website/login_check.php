<?php
session_start();
//print_r($_POST);
$username=["adarsh","mohit","saksham"];
$passwords=["adarsh","mohit","saksham"];
extract($_POST);
$b=0;
$i=0;
for($i=0;$i<3;$i++)
{
    if($name==$username[$i] and $password==$passwords[$i])
    {
        $b=1;
        break;
    }
}
if($b==1)
{
    $_SESSION["id"]=1;
    header('Location:admin_home.php');
}
else if($b==0)
{
    $_SESSION["error"]=1;
    header('Location:admin_login.php');
}

?>
