<?php
// include database connection file
require_once'Class-function.php';
// Object creation
$insertdata=new Person();
if(isset($_POST['insert']))
{
// Posted Values
$fname=$_POST['name'];
$lname=$_POST['surname'];
$email=$_POST['emailaddress'];
$birthdate=$_POST['dateofbirth']; 
$aging=$_POST['age'];
//Function Calling
$sql=$insertdata->insert($fname,$lname,$email,$birthdate,$aging);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CRUD Operation using  PHP OOP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>INSERT NEW RECORD INTO DATABASE</h3>
<hr />
</div>
</div>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>First Name :</b>
<input type="text" name="name" class="form-control" required>
</div>
<div class="col-md-4"><b>Last Name :</b>
<input type="text" name="surname" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email Address :</b>
<input type="email" name="emailaddress" class="form-control" required>
<small id="emailHelp" class="form-text text-muted">POPI Act = We'll never share your email address with anyone else.</small>
</div>
<div class="col-md-4"><b>Birth Date :</b>
<input type="date" name="dateofbirth" class="form-control" required>
</div>
</div>  
<div class="row">
<div class="col-md-2"><b>Age :</b>
<td><input type="number" name="age" placeholder="1 to 100" min="1" max="100"/></td>  
</div>
</div>  
<div class="row" style="margin-top:1%"> </div> 
<div class="col-md-3"> <input type="Submit" name="insert" type="button" class="btn btn-primary"></button> 
</div>    
</form>           
</div>
</div>
</body>
</html>