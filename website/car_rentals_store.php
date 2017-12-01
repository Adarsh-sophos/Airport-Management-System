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
//print_r($_SESSION);
$pickup_time=$pickup_time_hour.":".$pickup_time_minute.":00";
$return_time=$return_time_hour.":".$return_time_minute.":00";
$sql = "Insert into rentals (service_id,name, email, contact, license_number, pickup_date, pickup_time, return_date, return_time,amount,car_name,car_number) values (3,\"$name\",\"$email\",$contact,\"$license\",\"$pickup_date\",\"$pickup_time\",\"$return_date\",\"$return_time\",$rent,\"$car\",\"$car_number\")";
//print($sql);
if(!mysqli_query($conn,$sql))
echo("Error description: " . mysqli_error($conn));

header('Location: car_rentals.php');  

?>
