<?php 
require_once'Class-function.php';
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "stratusolvetask6";
// Check connection to database
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $deletedata=new Person();
 $sql=$deletedata->remove( );    
 echo "<script>alert('All records deleted successfully');</script>";
 echo "<script>window.location.href='index.php'</script>";
 ?>
