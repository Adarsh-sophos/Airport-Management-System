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
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
$sql = "Insert into employee (SSN,FNAME,LNAME,ADDRESS,PHONE,AGE,SALARY,SEX,JOBTYPE,SHIFT) values ($ssn,\"$fname\",\"$lname\",$pnumber,$age,$salary,\"$radio_2\",\"$job_type\",\"$shift\")";
//print($sql);
$result=mysqli_query($conn,$sql);


$_SEESION["change"]=0;
header('Location: https://ide50-sakshamagarwal51d3.cs50.io/admin_employee.php');  
}
else if($radio_1=="Remove")
{
    $sql="Delete from employee where SSN=$ssn";
    $result=mysqli_query($conn,$sql);
    if($result==FALSE)
    {
        $_SESSION["removal"]=0;
    }
    $_SESSION["change"]=1;
    
    header('Location: https://ide50-sakshamagarwal51d3.cs50.io/admin_employee.php');  
}
else if($radio_1=="Change")
{
    $sql2="Update employee set SSN=$ssn";
    if($fname!="")
    $sql2=$sql2.",FNAME=\"$fname\"";
    if($lname!="")
    $sql2=$sql2.",LNAME=\"$lname\"";
    if($address!="")
    $sql2=$sql2.",ADDRESS=\"$address\"";
    if($pnumber!="")
    $sql2=$sql2.",PHONE=$pnumber";
    if($age!="")
    $sql2=$sql2.",AGE=$age";
    if($salary!="")
    $sql2=$sql2.",SALARY=$salary";
    if($radio_2!="")
    $sql2=$sql2.",SEX=\"$radio_2\"";
    if($jobtype!="")
    $sql2=$sql2.",JOBTYPE=\"$jobtype\"";
    if($shift!="")
    $sql2=$sql2.",SHIFT=\"$shift\"";
    
    $sql2=$sql2." where ssn=$ssn";
    $result=mysqli_query($conn,$sql);
    if($result==FALSE)
    {
        $_SESSION["updation"]=0;
    }
    $_SESSION["change"]=2;
    header('Location:https://ide50-sakshamagarwal51d3.cs50.io/admin_employee.php');  
}
print($sql);
print("<br>");
print($sql2);*/
?>
