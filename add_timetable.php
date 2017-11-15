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
        $status=$status_text." ".$status_time;
        $sql = "Insert into timetable (location, airline, flight_number, date, time, flight_type,to_from) values (\"$location\",\"$airline\",\"$flight_number\",\"$date\",\"$time\",\"$flight_type\",\"$to_from\")";
        //print($sql);
        $result=mysqli_query($conn,$sql);
        if(!mysqli_query($conn,$sql))
        {
                    $_SESSION["addition"]=0;
        }
        
        $_SEESION["change"]=0;
        header('Location:admin_timetable.php');  
    }
    
    else if($radio_1=="Remove")
    {
        $sql="Delete from timetable where flight_number=\"$flight_number\"";
        $result=mysqli_query($conn,$sql);
        if(!mysqli_query($conn,$sql))
            {
                $_SESSION["removal"]=0;
            }
        
        header('Location:admin_timetable.php');  
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
        if(!mysqli_query($conn,$sql))
            {
                $_SESSION["updation"]=0;
            }
        $_SESSION["change"]=2;
        header('Location:admin_timetable.php');  
    }
    
    print($sql);
    print("<br>");
    print($sql2);
?>
