<?php

class akunBank
{
    // Deklarasi Variabel/Properti
    protected $accountNumber;
    protected $jmlUang;
    protected $nama; // Menambahkan variabel $nama

    // Konstruktor bawaan dari petunjuk gambar
    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    // --- GETTER & SETTER UNTUK VARIABEL $nama ---
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    // --- FUNGSI-FUNGSI MANAJEMEN UANG ---

    // 1. Menambahkan jumlah uang yang ada (Menabung)
    public function tambahUang($nominal)
    {
        $this->jmlUang += $nominal;
        echo "Berhasil menabung: Rp " . number_format($nominal, 0, ',', '.') . "<br>";
    }

    // 2. Mengurangi jumlah uang yang ada (Menarik Uang)
    public function kurangiUang($nominal)
    {
        if ($nominal <= $this->jmlUang) {
            $this->jmlUang -= $nominal;
            echo "Berhasil menarik uang: Rp " . number_format($nominal, 0, ',', '.') . "<br>";
        } else {
            echo "Gagal menarik uang! Saldo tidak mencukupi.<br>";
        }
    }

    // 3. Menampilkan jumlah uang yang ada (Cek Saldo)
    public function tampilkanJumlahUang()
    {
        return $this->jmlUang;
    }

    // 4. Menghitung pajak dengan rumus: jumlah uang * 11%
    public function hitungPajak()
    {
        $pajak = $this->jmlUang * 0.11;
        return $pajak;
    }

    // Fungsi pembantu untuk menampilkan nomor akun
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
}