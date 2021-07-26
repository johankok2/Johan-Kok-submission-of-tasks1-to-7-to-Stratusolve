<!DOCTYPE html>
<html lang="en">
<html>
	<head>
      <meta charset="utf-8">
	  <title>Fibonacci series with Javascript post of user input that goes to PHP script</title>
    </head>
<body>
<center>
    <form autocomplete="off">
    <form method="post" enctype="multipart/form-data" target="_blank">
    <table>
    <td>Enter numeric number between 2 and 30</td>
    <td><input type="number" name="name" placeholder="Input" min="2" max="30"/></td>         
    <td><input type="submit" value="Print Fibonacci Series" onclick="myFunction()"> 
    </table>  
    </form>
<?php
$name = 0;
extract($_REQUEST);
$num = 0; 
$n1 = 0;
echo "<h2>Fibonacci series for first $name numbers are: </h2>";
$n2 = 1; 
echo "\n";  
echo $n1.' '.$n2.' '; 
while ($num < $name-2 ) {  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1; 
 }
?>
<script>
   function myFunction() {
   var name = document.getElementById().value; 
   $.ajax({
            type : "POST", 
            url  : "Foundation-Task-5.php",  
            data : { name : name },     
    }
});
</script>
</center>
</body>
</html>