<?php
// include database connection file
require_once'dbconnection.php';
/* Add a for loop that creates 10 new People in the database */
$name = ['Johan', 'Barbara', 'Charlie', 'Lojanka', 'Kalizma', 'Gerrie', 'Jaco', 'Lynn', 'Johannes', 'Petrus'];
$surname = ['Kok', 'Castelyn', 'Malan', 'de Wet', 'de Kock', 'Olivier','van Wettens', 'de Villiers', 'Griesel', 'Fourie'];
$emailaddress = ['jkokpretoria@gmail.com', 'bcastelyn@swift.com', 'cmalan@gov.za', 'ldew@gmail.com', 'kdek@yahoo.com', 'go@goldnet.com', 
'wettens@anglo.co.za', 'cornerstone@info.net', 'stratusolve@znet.com', 'pf@momentum.com'];
$dateofbirth = ['1955-02-17', '1962-01-15', '1987-10-11', '1984-07-25', '1993-01-17', '1990-10-23', '1980-01-07', '1950-12-13', '1975-05-30', '1968-09-30'];
$age = ['66', '59', '34', '37', '28', '31', '41', '71', '46', '53'];
for ($id = 1; $id <= 10; $id++) {
    //echo '<br>';
    $person_name = array_rand($name);
    $person_surname = array_rand($surname);
    $person_emailaddress = array_rand($emailaddress);
    $person_dateofbirth = array_rand($dateofbirth);
    $person_age = array_rand($age);         
    $query = "INSERT INTO person (name, surname, emailaddress, dateofbirth, age) VALUES ('$name[$person_name]', '$surname[$person_surname]', 
    '$emailaddress[$person_emailaddress]', '$dateofbirth[$person_dateofbirth]' , '$age[$person_age]')";
    $con->query($query);
    }
echo "<script>alert('Ten (10) new records inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
/* close connection */
$con->close();
?>
