<?php
// include function file
require_once"Class-function.php";
//Single Row Deletion
if(isset($_GET['del']))
    {
// Getting deletion row id
$rid=$_GET['del'];
$deletedata=new Person();
$sql=$deletedata->delete($rid);
if($sql)
{
// Message for successfull deletion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CRUD Operations using PHP OOP with CLASSES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
   <style type="text/css">
   
    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>   
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12"> 
<center><div class="col-12 "> <h1 class="text-white bg-info">Foundation Task 6 : CRUD in PHP using CLASSES</h1> </div> </center>
<center>
<a href="insert.php"><button class="btn btn-primary"> Insert new record</button></a>
<a href="truncate.php"><button class="btn btn-danger"> Delete all records</button></a>  
<a href="sub-task-1.php"><button class="btn btn-success"> Insert 10 new records</button></a> 
<a href="sub-task-2.php"><button class="btn btn-warning"> Print first 10 records in database to the screen</button></a> 
</center>
<div class="table-responsive">                
<table id="mytable" class="table table-bordred table-striped">
<thead>
<hr color=blue size=15 width='100%'>
<th>#</th> 
<th>First Name</th>
<th>Last Name</th>
<th>Email Address</th>
<th>Birth Date</th>
<th>Age</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody> 
 <?php
  $fetchdata=new Person();
  $sql=$fetchdata->fetchdata();
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row['Name']);?></td>
    <td><?php echo htmlentities($row['Surname']);?></td>
    <td><?php echo htmlentities($row['EmailAddress']);?></td>
    <td><?php echo htmlentities($row['DateOfBirth']);?></td>
    <td><?php echo htmlentities($row['Age']);?></td>
    <td><a href="update.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="index.php?del=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete ?');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
<?php
// for serial number increment
$cnt++;
} 
?>
</tbody> 
</table>
</div>
</div>
</div>
</div>
</body>
</html>