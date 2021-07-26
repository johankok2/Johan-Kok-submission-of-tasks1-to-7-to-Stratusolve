<?php
// include function file
include_once("Class-function.php");
//Object
$updatedata=new Person();
if(isset($_POST['update']))
{
// Get the userid
$userid=intval($_GET['id']);
// Posted Values
$fname=$_POST['name'];
$lname=$_POST['surname'];
$email=$_POST['emailaddress'];
$birthdate=$_POST['dateofbirth'];
$aging=$_POST['age'];
//Function Calling
$sql=$updatedata->update($fname, $lname, $email, $birthdate, $aging, $userid);
// Mesage after updation
echo "<script>alert('Record updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CURD Operation using  PHP OOP with CLASSES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>  
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>UPDATE RECORD IN DATABASE</h3>
<hr />
</div>
</div>
<?php
// Get the userid
$userid=intval($_GET['id']);  
$onerecord=new Person();
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql)) 
{
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>First Name :</b>
<input type="text" name="name" value="<?php echo htmlentities($row['Name']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Last Name :</b>
<input type="text" name="surname" value="<?php echo htmlentities($row['Surname']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email Address :</b>
<input type="email" name="emailaddress" value="<?php echo htmlentities($row['EmailAddress']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Birth Date :</b>
<input type="text" name="dateofbirth" value="<?php echo htmlentities($row['DateOfBirth']);?>" class="form-control" required> 
</div>
</div>
<div class="row">
<div class="col-md-2"><b>Age :</b>
<input type="text" name="age" value="<?php echo htmlentities($row['Age']);?>"class="form-control" required> 
</div> 
</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<div class="col-md-3"> <input type="submit" name="update" value="Update" type="button" class="btn btn-primary"></button> 
</div>
</div>
</form>
</div>
</div>
</body>
</html>