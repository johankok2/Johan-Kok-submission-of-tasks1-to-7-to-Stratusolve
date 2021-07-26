<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'stratusolvetask6');
class Person // Create a class in php script called "Person" 
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
//Data Insertion Function [1 = createPerson] 
	public function insert($fname, $lname, $email, $birthdate, $aging)
	{
	$ret=mysqli_query($this->dbh,"insert into person(Name,Surname,EmailAddress,DateOfBirth,Age) values('$fname','$lname','$email','$birthdate','$aging')");
	return $ret;
	}
//Data read Function [5 = loadAllPeople]
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from person");
	return $result;
	}
//Data one record read Function (Edit) [2 = loadPerson]
public function fetchonerecord($userid)
	{
	$oneresult=mysqli_query($this->dbh,"select * from person where id=$userid");
	return $oneresult;
	}
//Data updation Function [3 = savePerson]
public function update($fname,$lname,$email,$birthdate,$aging,$userid)
	{
	$updaterecord=mysqli_query($this->dbh,"update person set Name='$fname',Surname='$lname',EmailAddress='$email',DateOfBirth='$birthdate',Age='$aging' where id='$userid' ");
	return $updaterecord;
	}
//Data Deletion Function for one person [4 = deletePerson]
public function delete($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from person where id=$rid");
	return $deleterecord;
	}
//All Data Deletion Function [6 = deleteAllPeople] 
public function remove ()
	{
	$deleterecord=mysqli_query($this->dbh,"truncate table person");
	return $deleterecord;
	}
}
?>