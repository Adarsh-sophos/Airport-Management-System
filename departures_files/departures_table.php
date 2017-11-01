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
$sql="SELECT * from departures";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  $i=0;
  while ($row=mysqli_fetch_row($result))
    {
       if($i%2==0)
        print("<tr class=\"footableEven\">");
        else
        print("<tr class=\"footableOdd\">");
        print("<td>");
        print($row[2]);
        print("</td>");
        print("<td>");
        print($row[1]);
        print("</td>");
        print("<td>");
        print($row[3]);
        print("</td>");
        print("<td>");
        print($row[0]);
        print("</td>");
        print("<td>");
        print($row[4]);
        print("</td>");
        print("<td>");
        print("<pre>      ".(string)$row[5]."</pre>");
        print("</td>");
        print("<td><a href=\"");
        print($row[6]);
        print("\">View Details</a></td>");
        print("</tr>");
        $i++;
    }
}

?>
