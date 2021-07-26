<?php
if(count($_POST)>0)
{    
include 'dbconnection.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$dateofbirth = $_POST['dateofbirth'];
$emailaddress = $_POST['emailaddress'];
$age = $_POST['age'];
if(empty($_POST['id'])){
$query = "INSERT INTO  person (name, surname, dateofbirth, emailaddress,age)
VALUES ('$name','$surname','$dateofbirth', '$emailaddress', '$age')";
}else{
$query = "UPDATE person set id='" . $_POST['id'] . "',
  name='" . $_POST['name'] . "',
  surname='" . $_POST['surname'] . "',
  dateofbirth='" . $_POST['dateofbirth'] . "',
  emailaddress='" . $_POST['emailaddress'] . "',
  age='" . $_POST['age'] . "'  WHERE id='" . $_POST['id'] . "'"; 
}
$res = mysqli_query($dbCon, $query);
if($res) {
echo json_encode($res);
} else {
echo "Error: " . $sql . "" . mysqli_error($dbCon);
}
}
?>