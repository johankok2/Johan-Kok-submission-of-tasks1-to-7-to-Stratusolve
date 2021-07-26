<?php
include 'dbconnection.php';
$id = $_POST['id'];
$query = "DELETE FROM person WHERE id='" . $id . "'";
$res = mysqli_query($dbCon, $query);
if($res) {
echo json_encode($res);
} else {
echo "Error: " . $sql . "" . mysqli_error($dbCon);
}
?>