UAS PEMROGRAMAN WEB
Nama	: Ni Luh Novi sugiantari
Nim	: 2201010322
Kelas	: F
Prodi	: TI KAB

link akses: http://localhost/jadwal/

Baik disini saya membuaat aplikasi berbasis web dari "Jadwal Mata Pelajaran", yang dimana ini adalah revisian projek uas yang dibuat sederhana.
Nama database : penjdawalan
Table : jadwal
CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

setelah itu saya akan menjelaskan aplikasi website ini
1. koneksi.php digunakan untuk menghubungkan suatu database ke file php

2. index.php digunakan untuk menampilkan jadwal mata pelajaran yang telah tersimpan dalam database. Pada halaman ini, biasanya terdapat tabel yang menampilkan informasi jadwal seperti ID, hari, jam mulai, jam selesai, dan mata pelajaran. Selain  juga tombol edit dan hapus jadwal untuk memungkinkan pengguna mengedit atau menghapus data

3.simpan_jadwal.php digunakan untuk menyimpan jadwal mata pelajaran

4.edit_jadwal.php digunakan untuk mengedit jadwal mata pelajaran apabila ada kekeliruan

5. hapus_jadwal.php digunakan untuk menghapus data jadwal mata pelajaran apabila tidak dibutuhkan

6. style.css digunakan untuk mengubah tampilan agar lebih menarik

7. jquery.js digunakan mengoptimalkan pengembangan web dengan menyederhanakan penulisan kode JavaScript dan memanfaatkan fitur-fitur yang telah disediakan oleh jQuery.

sekian yang dapat saya jelaskan apabila ada kesalahan mohon dimaafkan, terima kasih Pak 
