<?php
$dbCon = mysqli_connect("localhost", "root", "", "stratusolvetask7");
if(!$dbCon){
     die('Could not connect to MySql Server:' .mysql_error());
}
?>