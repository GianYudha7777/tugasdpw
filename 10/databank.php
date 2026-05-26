<?php

require_once ('kelas/akunBank.php');

// Membuat Objek ke-1 (Memperbaiki nama variabel & melengkapi berdasarkan fungsi)
$data1 = new akunBank("001", 10000);
$data1->setNama("Andi Pratama");

// Membuat Objek ke-2 (Mengubah $data1 menjadi $data2 agar tidak menimpa objek pertama)
$data2 = new akunBank("002", 50000); 
$data2->setNama("Budi Santoso");


// ==========================================
// SIMULASI TRANSAKSI AKUN 1 ($data1)
// ==========================================
echo "<h3>--- Informasi Akun 1 ---</h3>";
echo "No. Rekening: " . $data1->getAccountNumber() . "<br>";
echo "Pemilik Akun: " . $data1->getNama() . "<br>";
echo "Saldo Awal: Rp " . number_format($data1->tampilkanJumlahUang(), 0, ',', '.') . "<br><br>";

// Melakukan aksi tabung dan tarik
$data1->tambahUang(15000); // Andi menabung 15.000
$data1->kurangiUang(5000);  // Andi menarik 5.000

echo "<br>Saldo Akhir: Rp " . number_format($data1->tampilkanJumlahUang(), 0, ',', '.') . "<br>";
echo "Beban Pajak (11%): Rp " . number_format($data1->hitungPajak(), 0, ',', '.') . "<br>";

echo "<hr>";

// ==========================================
// SIMULASI TRANSAKSI AKUN 2 ($data2)
// ==========================================
echo "<h3>--- Informasi Akun 2 ---</h3>";
echo "No. Rekening: " . $data2->getAccountNumber() . "<br>";
echo "Pemilik Akun: " . $data2->getNama() . "<br>";
echo "Saldo Awal: Rp " . number_format($data2->tampilkanJumlahUang(), 0, ',', '.') . "<br><br>";

// Melakukan aksi tabung dan tarik
$data2->tambahUang(100000);  // Budi menabung 100.000
$data2->kurangiUang(20000);  // Budi menarik 20.000

echo "<br>Saldo Akhir: Rp " . number_format($data2->tampilkanJumlahUang(), 0, ',', '.') . "<br>";
echo "Beban Pajak (11%): Rp " . number_format($data2->hitungPajak(), 0, ',', '.') . "<br>";