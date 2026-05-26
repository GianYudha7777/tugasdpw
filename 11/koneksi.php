<?php
// Variabel koneksi sesuai database tugasdpw di phpMyAdmin kamu
$host  = "localhost";
$user  = "root";
$paswd = "";
$name  = "tugasdpw"; // Menggunakan nama DB dari screenshot kamu

// Proses pembuatan koneksi prosedural
$link = mysqli_connect($host, $user, $paswd, $name);

// Periksa koneksi, jika gagal tampilkan error
if (!$link) {
    die ("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}
?>