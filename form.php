<?php
$servername = "localhost";
$username = "userx";
$password = "010235";
$dbname = "form";

$fname=$_POST['fname'];
$dob=$_POST['dob'];
$position=$_POST['position'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


/* echo "<pre>";
var_dump($conn);
echo "</pre>"; */

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO `person` (name,dob,position)
VALUES ('$fname', '$dob', '$position');";

/* echo "<pre>";
var_dump($sql);
echo "</pre>"; */


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>