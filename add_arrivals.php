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
    
    if($flight_number == "")
    {
        $_SESSION['error_message'] = "Primary key Flight Number is misssing.";
        header('Location:message.php');
    }
    
    else if($radio_1=="Add")
    {
        $status=$status_text." ".$status_time;
        $sql = "Insert into flight (scheduled, airline, flight_number, status, terminal, flight_details) values (\"$schedule_time\",\"$airline\",\"$flight_number\",\"$status\",$terminal,\"$details\")";
        //print($sql);
        
        $result=mysqli_query($conn,$sql);
        
        $sql2="Insert into arrivals(flight_number,arriving_from,arrival_date) values (\"$flight_number\",\"$arriving_from\",\"$schedule_date\")";
        $result2=mysqli_query($conn,$sql2);
        if(!mysqli_query($conn,$sql2) or !mysqli_query($conn,$sql))
        {
            $_SESSION["addition"]=0;
        }
        
       
        $_SESSION["change"]=0;
        header('Location:admin_arrivals.php');  
    }
    
    else if($radio_1=="Remove")
    {
        $sql="Delete from arrivals where flight_number=\"$flight_number\"";
        $sql2="Delete from flight where flight_number=\"$flight_number\"";
        $result=mysqli_query($conn,$sql);
        $result2=mysqli_query($conn,$sql2);
        if(!mysqli_query($conn,$sql2) or !mysqli_query($conn,$sql))
        {
            $_SESSION["removal"]=0;
        }
        $_SESSION["change"]=1;
        
        header('Location:admin_arrivals.php');  
    }
    
    else if($radio_1=="Change")
    {
        $sql="Update arrivals set flight_number=\"$flight_number\"";
        $sql2="Update flight set flight_number=\"$flight_number\"";
        
        if($airline!="")
            $sql2=$sql2.",airline=\"$airline\"";
        if($details!="")
            $sql2=$sql2.",flight_details=\"$details\"";
        if($schedule_time!="")
            $sql2=$sql2.",scheduled=\"$schedule_time\"";
        if($schedule_date!="")
            $sql=$sql.",arrival_date=\"$schedule_date\"";
        
        
        if($status_time!="" and $status_text!="")
        {
            $status=$status_text." ".$status_time;
            $sql2=$sql2.",status=\"$status\"";
        }
        else if($status_time!="")
            $sql2=$sql2.",status=\"$status_time\"";
        else if($status_text!="")
            $sql2=$sql2.",status=\"$status_text\"";
        
        if($arriving_from!="")
            $sql=$sql.",arriving_from=\"$arriving_from\"";
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
        
        header('Location:admin_arrivals.php');  
    }
    
    
?>
