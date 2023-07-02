<?php
require_once 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM jadwal WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
