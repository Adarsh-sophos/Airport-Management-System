<?php
session_start();
//username and passwords for connecting to database
$username="sakshamagarwal51";
$password="3vXt73bGW7mEcGnI";
$db="DBMS";
#opening connection
$conn = mysqli_connect("localhost", $username, $password, $db);
//if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

extract($_POST);
extract($_SESSION);
//print_r($_POST);

if($radio_1=="Add")
{
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
$sql = "Insert into shops (shop_number,category,image,details,location,shop_name) values ($shop_number,$category,\"$target_file\",\"$details\",\"$location\",\"$shop_name\")";
print($sql);
$result=mysqli_query($conn,$sql);


$_SEESION["change"]=0;
header('Location: https://ide50-sakshamagarwal51d3.cs50.io/admin_shops.php');  
}
else if($radio_1=="Remove")
{
    $sql="Delete from shops where shop_number=$shop_number";
    $result=mysqli_query($conn,$sql);
    if($result==FALSE)
    {
        $_SESSION["removal"]=0;
    }
    $_SESSION["change"]=1;
    
    header('Location: https://ide50-sakshamagarwal51d3.cs50.io/admin_shops.php');  
}
else if($radio_1=="Change")
{
    $sql2="Update shops set shop_number=$shop_number";
    if($shop_name!="")
    $sql2=$sql2.",shop_name=\"$shop_name\"";
    if($location!="")
    $sql2=$sql2.",location=\"$location\"";
    if($category!="")
    $sql2=$sql2.",category=$category";
    if($details!="")
    $sql2=$sql2.",details=\"$details\"";
    if($image!="")
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $sql2=$sql2.",image=\"$target_file\"";
    }
    
    $sql2=$sql2." where shop_number=$shop_number";
    $result=mysqli_query($conn,$sql);
    if($result==FALSE)
    {
        $_SESSION["updation"]=0;
    }
    $_SESSION["change"]=2;
    header('Location:https://ide50-sakshamagarwal51d3.cs50.io/admin_shops.php');  
}

?>
