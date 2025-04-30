<?php
$host     = "localhost";      // default di XAMPP
$user     = "root";           // default user MySQL di XAMPP
$password = "";               // default password MySQL XAMPP kosong
$database = "db_sekolah";     // nama database yang sudah dibuat

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil"; // aktifkan jika mau cek koneksi
?>