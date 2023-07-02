<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $mata_pelajaran = $_POST['mata_pelajaran'];

    $sql = "UPDATE jadwal SET hari='$hari', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai', mata_pelajaran='$mata_pelajaran' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM jadwal WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Edit Jadwal</h1>
        <form action="edit_jadwal.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="hari">Hari:</label>
            <input type="text" name="hari" value="<?php echo $row['hari']; ?>" required>

            <label for="jam_mulai">Jam Mulai:</label>
            <input type="text" name="jam_mulai" value="<?php echo $row['jam_mulai']; ?>" required>

            <label for="jam_selesai">Jam Selesai:</label>
            <input type="text" name="jam_selesai" value="<?php echo $row['jam_selesai']; ?>" required>

            <label for="mata_pelajaran">Mata Pelajaran:</label>
            <input type="text" name="mata_pelajaran" value="<?php echo $row['mata_pelajaran']; ?>" required>

            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>
</body>
</html>
