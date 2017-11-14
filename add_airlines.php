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
print_r($_POST);
/*
if($radio_1=="Add")
{
$status=$status_text." ".$status_time;
$sql = "Insert into airline (airline_id,airline_name,3_digit_code) values (\"$airline_id\",\"$airline_name\",\"$code\")";
//print($sql);
$result=mysqli_query($conn,$sql);


$_SEESION["change"]=0;
header('Location: https://ide50-sakshamagarwal51d3.cs50.io/admin_airlines.php');  
}
else if($radio_1=="Remove")
{
    $sql="Delete from timetable where flight_number=\"$flight_number\"";
    $result=mysqli_query($conn,$sql);
    if($result==FALSE)
    {
        $_SESSION["removal"]=0;
    }
    $_SESSION["change"]=1;
    
    header('Location: https://ide50-sakshamagarwal51d3.cs50.io/admin_airlines.php');  
}
else if($radio_1=="Change")
{
    $sql2="Update timetable set flight_number=\"$flight_number\"";
    if($airline!="")
    $sql2=$sql2.",airline=\"$airline\"";
    if($time!="")
    $sql2=$sql2.",time=\"$time\"";
    if($date!="")
    $sql2=$sql2.",date=\"$date\"";
    
     if($location!="")
    $sql2=$sql2.",status=\"$location\"";
    
    
    if($flight_type!="")
    $sql2=$sql2.",flight_type=\"$flight_type\"";
    if($to_from!="")
    $sql2=$sql2.",to_from=\"$to_from\"";
    
    $sql2=$sql2." where flight_number=\"$flight_number\"";
    $result=mysqli_query($conn,$sql);
    if($result==FALSE)
    {
        $_SESSION["updation"]=0;
    }
    $_SESSION["change"]=2;
    header('Location:https://ide50-sakshamagarwal51d3.cs50.io/admin_airlines.php');  
}*/
print($sql);
print("<br>");
print($sql2);
?>
