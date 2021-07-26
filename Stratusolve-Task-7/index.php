<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insert Update Delete in PHP On Same Page by Using jQuery</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-2">
<div class="row">
<center><div class="col-12 "> <h1 class="text-white bg-info">Foundation Task 7 : CRUD in PHP using JQUERY</h1> </div> </center>
<div class="col-md-12mt-1 mb-1"><button type="button" id="addNewUser" class="btn btn-success">Add a new Person</button></div>
<div class="col-md-12">
<table class="table">
<thead>
<tr>
<th scope="col">User_id</th> 
<th scope="col">Name</th>
<th scope="col">Surname</th>
<th scope="col">Birth Date</th>
<th scope="col">Email Address</th>
<th scope="col">Age</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
include 'dbconnection.php';
$query="select * from person limit 150"; // check dit uit
$result=mysqli_query($dbCon,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>
<tr>
<th scope="row"><?php echo $array[0];?></th>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td><?php echo $array[4];?></td>
<td><?php echo $array[5];?></td>
<td> 
<a href="javascript:void(0)" class="btn btn-warning edit" data-id="<?php echo $array[0];?>">Edit</a>
<a href="javascript:void(0)" class="btn btn-danger delete" data-id="<?php echo $array[0];?>">Delete</a>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No data currently in database.</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
</table>
</div>
</div>        
</div>
<!-- boostrap model -->
<div class="modal fade" id="user-model" aria-hidden="true"> 
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="userModel"></h4>
</div>
<div class="modal-body"> 
<form action="javascript:void(0)" id="userInserUpdateForm" name="userInserUpdateForm" class="form-horizontal" method="POST">
<input type="hidden" name="id" id="id">
<div class="form-group">
<label for="name" class="col-sm-4 control-label"><b>First Name:</b></label> 
<div class="col-sm-12">
<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
</div>
</div> 
<div class="form-group">
<label for="name" class="col-sm-2 control-label"><b>Surname:</b></label> 
<div class="col-sm-12">
<input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Surname" value="" maxlength="50" required="">
</div>
</div> 
<div class="form-group">
<label for="name" class="col-sm-4 control-label"><b>Birth Date:</b></label> 
<div class="col-sm-12">
<input type="date" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="Enter Birthdate" value="" maxlength="50" required="">
</div>
</div> 
<div class="form-group">
<label class="col-sm-4 control-label"><b>Email Address:</b></label>
<div class="col-sm-12">
<input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="Enter Email Address" value="" required="">
<small id="emailHelp" class="form-text text-muted">POPI Act = We'll never share your email-address with anyone else.</small> 
</div>
</div>
<div class="form-group">
<label for="name" class="col-sm-2 control-label"><b>Age:</b></label>
<div class="col-sm-12">
<input type="int" class="form-control" id="age" name="age" placeholder="1 to 100"> 
</div>
</div>
<div class="col-sm-offset-2 col-sm-10"> 
<button type="submit" class="btn btn-primary" id="btn-save" value="addNewUser">Save changes
</button>
</div>
</form> 
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
<!-- end bootstrap model -->
<script type="text/javascript">
$(document).ready(function($){
$('#addNewUser').click(function () {
$('#userInserUpdateForm').trigger("reset");
$('#userModel').html("Add New User");
$('#user-model').modal('show');
});
$('body').on('click', '.edit', function () {
var id = $(this).data('id');
// ajax
$.ajax({
type:"POST",
url: "edit.php",
data: { id: id },
dataType: 'json',
success: function(res){
$('#userModel').html("Edit User");
$('#user-model').modal('show');
$('#id').val(res.id);
$('#name').val(res.name);
$('#surname').val(res.surname);
$('#dateofbirth').val(res.dateofbirth);
$('#emailaddress').val(res.emailaddress);
$('#age').val(res.age);
}
});
});
$('body').on('click', '.delete', function () {
if (confirm("Delete Record?") == true) {
var id = $(this).data('id');
// ajax
$.ajax({
type:"POST",
url: "delete.php",
data: { id: id },
dataType: 'json',
success: function(res){
$('#name').html(res.name);
$('#surname').html(res.surname);
$('#dateofbirth').html(res.dateofbirth);
$('#emailaddress').html(res.emailaddress);
$('#age').html(res.age);
window.location.reload();
}
});
}
});
$('#userInserUpdateForm').submit(function() {
// ajax
$.ajax({
type:"POST",
url: "insert-update.php",
data: $(this).serialize(), // get all form field value in 
dataType: 'json',
success: function(res){
window.location.reload();
}
});
});
});
</script>
</body>
</html>