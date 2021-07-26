<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Foundation-Task-1: Sum of elements in an array</title>
</head>
<body>
<?php
// Logic behind PHP program : Sum of 5 element array is =
// (a+b+c+d+e) + (b+c+d+e) + (c+d+e) + (d+e) + (e) which is
// the same as 1a + 2b + 3c + 4d + 5e leading to the answer
// by adding 1*$A[0] + 2*$A[1] + .... + n*$A[n-1] where n is
// the length of the array $A.

// Recursive function for summing elements in array with
// repeatedly removal of first element until array = ()
function addAll($A,$n) {
    $sum = 0; // Initialize sum 
    $k = 1; // Initialize variable k
    // Iterate through all (variable k) * (elements)
    // and add them to sum
    for ($i = 0; $i < $n; $i++) 
        $sum += (($k++) * $A[$i]);
    return $sum;
}
// Driver Code
$A =array(1,1,1,1,1); // Given array
$n = sizeof($A);
// Function call
echo "Sum of given array is :"," ", addAll($A,$n);
?>
</body>
</html>