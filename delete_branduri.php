<?php
include('dbconnect.php');

$id = $_POST['id'];

$sql = "DELETE FROM branduri WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    header('location:branduri.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
