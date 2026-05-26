<?php

// Menggunakan path yang benar menuju Manusia.php karena berada di folder yang sama
require_once "Manusia.php";

class mahasiswa extends Manusia
{
    // Deklarasi Variabel sesuai petunjuk gambar
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        // Memanfaatkan fungsi setNama() yang diwarisi dari kelas Manusia
        $this->setNama($nama);
    }

    // --- GETTER & SETTER VARIABEL NIM ---
    public function setNIM($NIM)
    {
        $this->NIM = $NIM;
    }

    public function getNIM()
    {
        return $this->NIM;
    }

    // --- GETTER & SETTER VARIABEL JURUSAN ---
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    // --- GETTER & SETTER VARIABEL KELAS ---
    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function getKelas()
    {
        return $this->kelas;
    }
}