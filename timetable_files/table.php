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
$sql="SELECT * from time_table where airline is not null";

$inter=["Abu Dhabi","Amritsar","Bangkok","Singapore"];
$domest=["Bhopal","Kolkata","Mumbai","Pune"];
extract($_SESSION);
if($Flight_Type=="International")
$sql=$sql." and flight_type=\"International\"";
else
$sql=$sql." and flight_type=\"Domestic\"";
if($To_or_From=="Arrival")
$sql=$sql." and to_from=\"Arrival\"";
else
$sql=$sql." and to_from=\"Departure\"";
if($Flight_Type=="International")
{
    if(isset($loc_inter) and $loc_inter!="")
    $sql=$sql." and location=\"".$inter[(int)$loc_inter-1]."\"";
}
else
{
    if(isset($loc_domest) and $loc_domest!="")
    $sql=$sql." and location=\"".$domest[(int)$loc_domest-1]."\"";
}
//print($sql);


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
        print($row[1]);
        print("</td>");
        print("<td>");
        print($row[2]);
        print("</td>");
        print("<td>");
        print($row[4]);
        print("</td>");
        print("<td>");
        print($row[3]);
        print("</td>");
        print("<td>");
        print($row[5]);
        print("</td>");
        print("<td>");
        print("<pre>      ".(string)$row[6]."</pre>");
        print("</td>");
        print("</tr>");
        $i+=1;
    }
    
}

?>
