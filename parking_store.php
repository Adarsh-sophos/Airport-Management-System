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
$entry_time=$entry_hour.":".$entry_minute.":00";
$exit_time=$exit_hour.":".$exit_minute.":00";
$sql = "Insert into parking (service_id,name, email, contact, car_number, entry_date, entry_time, exit_date, exit_time,amount) values (4,\"$name\",\"$email\",$mobile,$car,\"$entry_date\",\"$entry_time\",\"$exit_date\",\"$exit_time\",$amount)";
print($sql);
$result=mysqli_query($conn,$sql);

header('Location: parking.php');  

?>
