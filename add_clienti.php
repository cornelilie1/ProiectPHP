<?php
include('dbconnect.php');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];

$sql = "INSERT INTO clienti ( email, last_name, first_name)
VALUES ('$email', '$last_name', '$first_name')";

if ($conn->query($sql) === TRUE) {
  header('location:clienti.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
