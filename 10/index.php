<?php

require_once ('kelas/Manusia.php');

// Objek 1: Andi Pratama
$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(25); // Menambahkan umur untuk Andi


// Objek 2: Budi Santoso
$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(30); 

// Objek 3: Identitas Anda (Sesuaikan dengan nama Anda sendiri)
$saya = new Manusia();
$saya->setNama("Gian Yudha Pratama" . "<br>"); // <--- Ganti dengan nama kamu
$saya->setUmur(19);       // <--- Ganti dengan umur kamu

// --- MENAMPILKAN DATA ---

// 1. Tampilkan nama Andi (dari template bawaan)
echo "Nama Andi: " . $andi->getNama() . "<br>";
echo "Umur Andi: " . $andi->getUmur() . " tahun<br>";
echo "Nik Andi: " . $andi->getNIK() . "<br> <br>";

// 2. Tampilkan nama lengkap $budi
echo "Nama Budi: " . $budi->getNama() . "<br>";
echo "Umur Budi: " . $budi->getUmur() . " tahun<br>";
echo "Nik Budi: " . $budi->getNIK() . "<br> <br>";

// 3. Tampilkan identitas Anda sendiri dan Umur (Getter & Setter)
echo "Identitas Saya: " . $saya->getNama() . " Umur: " . $saya->getUmur() . " tahun ";
echo "<br>";

// 4. Tampilkan NIK
echo "NIK: " . $saya->getNIK();
echo "<br>";


/*
======================================================================
KESIMPULAN UJICOBA
======================================================================
1. Konsep Dasar OOP: Praktikum ini berhasil mengimplementasikan 
   pembuatan Class, Object, Property, serta Method (Getter & Setter) 
   dalam PHP.
   
2. Encapsulation & Visibility Modifier:
   - Variabel yang dilindungi dengan 'protected' atau 'private' tidak 
     bisa diakses langsung dari luar kelas (misal: $budi->name akan error). 
     Oleh karena itu, diperlukan method 'public' seperti setNama() 
     dan getNama() untuk memanipulasinya secara aman.
   - Fungsi getNIK() pada awalnya bermodifier 'private', sehingga jika 
     dipanggil di file index.php akan menghasilkan Fatal Error. 
     Agar dapat ditampilkan di index.php, modifier-nya harus diubah 
     menjadi 'public'.
     
3. Reusability: Dengan membuat satu cetakan (Class Manusia), kita bisa 
   membuat banyak objek berbeda ($andi, $budi, $saya) yang memiliki 
   struktur properti yang sama namun dengan nilai data yang berbeda-beda.
======================================================================
*/