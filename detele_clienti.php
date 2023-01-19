<?php
include('dbconnect.php');

$id = $_POST['id'];

$sql = "DELETE FROM clienti WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    header('location:clienti.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>