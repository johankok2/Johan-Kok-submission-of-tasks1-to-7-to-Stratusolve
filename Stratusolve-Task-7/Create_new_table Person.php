<?php
   $servername = "localhost";
   $username = "root"; 
   $password = "";
   $database = "stratusolvetask7";
     // Create connection
  $conn = new mysqli($servername, $username, $password, $database);  	
  // Check connection  	
  if ($conn->connect_error) {      
    die("Failed to connect to database: " . $conn->connect_error);
  }
  // sql to create table  
  $sql = "CREATE TABLE person (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(40) NOT NULL,
    surname VARCHAR(40) NOT NULL,
    dateofbirth date NOT NULL,
    emailaddress VARCHAR(60) NOT NULL,
    age int(3) NOT NULL)";  
    if ($conn->query($sql) === TRUE) {    
    echo "Table with name person created successfully.";
  } else { 
    echo "Failed to create table: " . $conn->error;
  }
  $conn->close(); 
   ?>