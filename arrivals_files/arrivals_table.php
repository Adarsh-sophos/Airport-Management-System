<?php

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
$sql="SELECT * from arrivals inner join flight on flight.flight_number=arrivals.flight_number where airline is not null";

$places=["Barcelona","Goa","New Delhi","Dubai"];
$terminals=[1,2,3,4,5];
extract($_SESSION);
$flight=trim($flight);
if($flight!="" and preg_match("/.*\d.*/",$flight))
$sql=$sql." and flight.flight_number=\"".$flight."\"";
else if($flight!="")
$sql=$sql." and airline=\"".$flight."\"";
if(isset($From) and $From!="")
$sql=$sql." and arriving_from=\"".$places[(int)$From-1]."\"";
if(isset($Terminal) and $Terminal!="")
$sql=$sql." and terminal=".$terminals[(int)$Terminal-1];
if(isset($date) and $date!="")
$sql=$sql." and arrival_date=\"".$date."\"";

if ($result=mysqli_query($conn,$sql))
  {
    if(mysqli_num_rows($result)==0)
    {
      print("<th><h1>No Results Found</h1></th>");
    }
  // Fetch one and one row
  $i=0;
  while ($row=mysqli_fetch_row($result))
    {   
        if($i%2==0)
        print("<tr class=\"footableEven\">");
        else
        print("<tr class=\"footableOdd\">");
        print("<td>");
       
        print($row[0]);
        print("</td>");
        print("<td>");
        print($row[4]);
        print("</td>");
        print("<td>");
        print($row[1]);
        print("</td>");
        print("<td>");
        print($row[2]);
        print("</td>");
        print("<td>");
        print($row[3]);
        print("</td>");
        print("<td>");
        print($row[6]);
        print("</td>");
        print("<td>");
        print((string)$row[7]);
        print("</td>");
        print("<td><a href=\"");
        print($row[8]);
        print("\">View Details</a></td>");
        print("</tr>");
        $i+=1;
    }
    
}

?>
