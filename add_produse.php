<?php
include('dbconnect.php');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nume = $_POST['nume'];
$descriere = $_POST['descriere'];

$sql = "INSERT INTO produse (nume, descriere)
VALUES ('$nume', '$descriere')";

if ($conn->query($sql) === TRUE) {
  header('location:produse.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
