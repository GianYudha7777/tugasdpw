<?php

// Pastikan pemanggilan path file menggunakan huruf besar/kecil yang pas
require_once ('kelas/Koneksi_db.php');

$db = new Koneksi_db();

echo "<h3>--- Pengujian Koneksi Database ---</h3>";

if ($db->connect()) {
    echo "<b style='color: green;'>Sukses! Aplikasi OOP PHP Anda berhasil terhubung ke phpMyAdmin Fedora.</b>";
} else {
    echo "<b style='color: red;'>Gagal Terhubung ke Database!</b><br><br>";
    echo "<b>Pesan Error dari Sistem:</b> <pre>";
    print_r($db->getError());
    echo "</pre>";
    echo "<br><i>Tips: Pastikan service MySQL/MariaDB Anda sudah start dan database bernama 'database' sudah dibuat di phpMyAdmin.</i>";
}