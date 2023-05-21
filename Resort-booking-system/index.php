<?php
//including the database connection file
$databaseHost = 'localhost';
 $databaseName = 'bluehorizon';
 $databaseUsername = 'root';
 $databasePassword = '';
 $mysqli = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
//fetching data in descending order (lastest entry first)
$sql = "SELECT * FROM register ORDER BY id DESC";
$final = $mysqli->query($sql);
/*if ($final == true){
    echo "Success";
}
else{
    echo "Failure";
}*/

?>
<html>
<head>
 <title>Homepage</title>
</head>
<body>
  
 <h2 align="center">Customer Details</h2>
 <hr />
<a href="index.html#book">Add New Data</a><br/><br/>
 <table width='100%' border=2>
 <tr bgcolor='#CCCCCC'>
 <td>First_Name.</td>
<td>Last_Name</td>
<td>Email</td>
<td>DOB</td>
<td>Location</td>
<td>Id</td>
<td>Check in</td>
<td>Check out</td>

 </tr>
<?php
 while($res = mysqli_fetch_array($final)) {
 echo "<tr>";
 echo "<td>".$res['fname']."</td>";
 echo "<td>".$res['lname']."</td>";
 echo "<td>".$res['mail']."</td>";
 echo "<td>".$res['dob']."</td>";
 echo "<td>".$res['loc']."</td>";
 echo "<td>".$res['id']."</td>";
 echo "<td>".$res['checkin']."</td>";
 echo "<td>".$res['checkout']."</td>";
//echo "<td><a href='edit.php?empid=$res[empid]'>Edit</a>";
// echo " | <a href='delete.php?empid=$res[empid]'>Delete</a></td>";
 echo "</tr>";
 }
 ?>
</table>
</body>
</html>