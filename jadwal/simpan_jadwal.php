<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hari = $_POST['hari'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $mata_pelajaran = $_POST['mata_pelajaran'];

    $sql = "INSERT INTO jadwal (hari, jam_mulai, jam_selesai, mata_pelajaran) VALUES ('$hari', '$jam_mulai', '$jam_selesai', '$mata_pelajaran')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<script src="jquery.js"></script>
