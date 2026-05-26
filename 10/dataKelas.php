<?php

// Menghubungkan ke file Mahasiswa.php di dalam folder kelas
require_once ('kelas/Mahasiswa.php');

// Membuat objek mahasiswa baru dengan nama Anda
$mhs1 = new mahasiswa("Nama Anda"); // <--- Ganti dengan nama lengkap kamu
$mhs1->setNIM("NIM Anda");         // <--- Ganti dengan NIM asli kamu
$mhs1->setKelas("Kelas Anda");     // <--- Ganti dengan kelas kamu (misal: TI-2A)
$mhs1->setJurusan("Teknik Informatika"); // Tambahan untuk mengisi properti jurusan

// --- MENAMPILKAN DATA ---
echo "<h3>--- Data Mahasiswa (Inheritance) ---</h3>";

// getNama() berasal dari kelas Manusia (pewarisan), sedangkan getNIM() dan getKelas() dari kelas Mahasiswa
echo "Nama    : " . $mhs1->getNama() . "<br>";
echo "NIM     : " . $mhs1->getNIM() . "<br>";
echo "Kelas   : " . $mhs1->getKelas() . "<br>";
echo "Jurusan : " . $mhs1->getJurusan() . "<br>";