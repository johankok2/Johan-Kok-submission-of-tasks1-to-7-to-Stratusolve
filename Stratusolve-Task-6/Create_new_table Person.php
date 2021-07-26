<?php
   $servername = "localhost";
   $username = "root"; 
   $password = "";
   $database = "stratusolvetask6";
   
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);  	
  // Check connection  	
  if ($conn->connect_error) {      
    die("Failed to connect to database: " . $conn->connect_error);
  }
  // sql to create table with name person 
  $sql = "CREATE TABLE person (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Name VARCHAR(40) NOT NULL,
    Surname VARCHAR(40) NOT NULL,
    DateOfBirth date NOT NULL,
    EmailAddress VARCHAR(60) NOT NULL,
    Age int(3) NOT NULL)";  
     
  if ($conn->query($sql) === TRUE) {    
    echo "Table with name person created successfully.";
  } else { 
    echo "Failed to create table: " . $conn->error;
  }
  $conn->close(); 
  
 ?>