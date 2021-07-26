<!DOCTYPE html>
<html lang="en">
<body>
<center>
<?php
// include database connection file
require_once'dbconnection.php';
//Add a log when script starts 
$time_start = microtime(true);
echo "<br>";
echo "<h1>People from database Stratusolvetask6</h1>"; 
//Select Query
$sql = "SELECT * FROM person";
//Execute the SQL query
$records = mysqli_query($con,$sql);
echo "<table border=2 cellpadding=2 cellspacing=2 >
    <tr>
        <th> id </th>
        <th> Name </th>
        <th> Surname </th>
        <th> EmailAddress </th>
        <th> DateOfBirth </th>
        <th> Age </th>
    </tr>"; 
        for ($id= 1; $id<=10; $id++) { 
            $row = mysqli_fetch_array($records);
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Surname'] . "</td>";
            echo "<td>" . $row['EmailAddress'] . "</td>";
            echo "<td>" . $row['DateOfBirth'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "</tr>";
        }
            echo "</table>";
            mysqli_close($con);
   // Add a log when script ends //
   $time_end = microtime(true);
   $totaltime = $time_end - $time_start;
   echo "<br>";
   echo "Above information loaded from database was created in ".$totaltime." seconds."; 
 ?>
</center>
</body>
</html>
