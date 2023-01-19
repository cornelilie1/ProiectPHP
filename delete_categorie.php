<?php
include('dbconnect.php');

$id = $_POST['id'];

$sql = "DELETE FROM categorii WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    header('location:categorii.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
