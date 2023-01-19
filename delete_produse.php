<?php
include('dbconnect.php');

$id = $_POST['id'];

$sql = "DELETE FROM produse WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    header('location:produse.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
