<!DOCTYPE html>
<html>
<head>
    <title>Penjadwalan Mata Pelajaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menangani klik tombol Hapus
            $('.delete-btn').click(function(e) {
                e.preventDefault();
                var url = $(this).attr('href');

                // Konfirmasi penghapusan
                if (confirm("Apakah Anda yakin ingin menghapus jadwal ini?")) {
                    // Kirim permintaan AJAX ke script hapus_jadwal.php
                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(response) {
                            // Refresh halaman setelah penghapusan
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Penjadwalan Mata Pelajaran</h1>
        <form action="simpan_jadwal.php" method="post">
            <label for="hari">Hari:</label>
            <input type="text" name="hari" required>

            <label for="jam_mulai">Jam Mulai:</label>
            <input type="text" name="jam_mulai" required>

            <label for="jam_selesai">Jam Selesai:</label>
            <input type="text" name="jam_selesai" required>

            <label for="mata_pelajaran">Mata Pelajaran:</label>
            <input type="text" name="mata_pelajaran" required>

            <input type="submit" value="Simpan">
        </form>

        <h2>Jadwal Mata Pelajaran:</h2>
        <?php
        require_once 'koneksi.php';

        $sql = "SELECT * FROM jadwal";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<table>';
            echo '<tr><th>ID</th><th>Hari</th><th>Jam Mulai</th><th>Jam Selesai</th><th>Mata Pelajaran</th><th>Aksi</th></tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['hari'] . '</td>';
                echo '<td>' . $row['jam_mulai'] . '</td>';
                echo '<td>' . $row['jam_selesai'] . '</td>';
                echo '<td>' . $row['mata_pelajaran'] . '</td>';
                echo '<td>';
                echo '<a href="edit_jadwal.php?id=' . $row['id'] . '" class="edit-btn">Edit</a>';
                echo '<a href="hapus_jadwal.php?id=' . $row['id'] . '" class="delete-btn">Hapus</a>';
                echo '</td>';
                echo '</tr>';
                
            }

            echo '</table>';
        } else {
            echo 'Belum ada jadwal.';
        }

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
