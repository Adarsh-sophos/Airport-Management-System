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
    
    
    
    if($radio_1=="Add")
    {
        //$status=$status_text." ".$status_time;
        $sql = "Insert into flight(scheduled, airline, flight_number, status, terminal, flight_details) values (\"$schedule_time\",\"$airline\",\"$flight_number\",\"$status\",$terminal,\"$details\")";
        //print($sql);
        $result=mysqli_query($conn,$sql);

        $sql2="Insert into departures(flight_number,departing_to,departure_date) values (\"$flight_number\",\"$departing_to\",\"$schedule_date\")";
        $result2=mysqli_query($conn,$sql2);
         if(!mysqli_query($conn,$sql2) or !mysqli_query($conn,$sql))
        {
            $_SESSION["addition"]=0;
        }
        $_SEESION["change"]=0;
        header('Location:admin_departures.php');  
    }
    
    else if($radio_1=="Remove")
    {
        $sql="Delete from departures where flight_number=\"$flight_number\"";
        $sql2="Delete from flight where flight_number=\"$flight_number\"";
        
        $result=mysqli_query($conn,$sql);
        $result2=mysqli_query($conn,$sql2);
        
         if(!mysqli_query($conn,$sql2) or !mysqli_query($conn,$sql))
        {
            $_SESSION["removal"]=0;
        }
        $_SESSION["change"]=1;
        
        header('Location:admin_departures.php');  
    }
    
    else if($radio_1=="Change")
    {
        $sql="Update departures set flight_number=\"$flight_number\"";
        $sql2="Update flight set flight_number=\"$flight_number\"";
        
        if($airline!="")
            $sql2=$sql2.",airline=\"$airline\"";
        if($details!="")
            $sql2=$sql2.",flight_details=\"$details\"";
        if($schedule_time!="")
            $sql2=$sql2.",scheduled=\"$schedule_time\"";
        if($schedule_date!="")
            $sql=$sql.",departure_date=\"$schedule_date\"";
        
        if($status!="")
            $sql2=$sql2.",status=\"$status\"";
        
        if($departing_to!="")
            $sql=$sql.",departing_to=\"$arriving_from\"";
        if($terminal!="")
            $sql2=$sql2.",terminal=\"$terminal\"";
        
        $sql=$sql." where flight_number=\"$flight_number\"";
        $sql2=$sql2." where flight_number=\"$flight_number\"";
        $result=mysqli_query($conn,$sql);
        $result2=mysqli_query($conn,$sql2);
         if(!mysqli_query($conn,$sql2) or !mysqli_query($conn,$sql))
        {
            $_SESSION["updation"]=0;
        }
        $_SESSION["change"]=2;
        header('Location:admin_departures.php');  
    }
    print($sql);
    print("<br>");
    print($sql2);
?>
