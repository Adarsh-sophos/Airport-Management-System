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
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $sql = "Insert into restaurants (service_id,rest_number,category,image,details,location,restaurant_name) values (2,$r_num,$category,\"$target_file\",\"$details\",\"$location\",\"$name\")";
        //print($sql);
        $result=mysqli_query($conn,$sql);
        if(!mysqli_query($conn,$sql))
                {
                    $_SESSION["addition"]=0;
                }
        
        $_SEESION["change"]=0;
        header('Location:admin_restaurants.php');  
    }
    
    else if($radio_1=="Remove")
    {
        $sql="Delete from restaurants where rest_number=$r_num";
        $result=mysqli_query($conn,$sql);
        if(!mysqli_query($conn,$sql))
            {
                $_SESSION["removal"]=0;
            }
        $_SESSION["change"]=1;
        
        header('Location:admin_restaurants.php');  
    }
    
    else if($radio_1=="Change")
    {
        $sql2="Update shops set shop_number=$shop_number";
        if($name!="")
        $sql2=$sql2.",restaurant_name=\"$name\"";
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
        
        $sql2=$sql2." where rest_number=$r_num";
        $result=mysqli_query($conn,$sql);
        if(!mysqli_query($conn,$sql))
            {
                $_SESSION["updation"]=0;
            }
        $_SESSION["change"]=2;
        header('Location:admin_restaurants.php');  
    }

?>
