<?php

class Koneksi_db
{
    // Konfigurasi database phpMyAdmin
    private $db_host = "localhost";
    private $db_user = "root";       // Default user di phpMyAdmin Fedora biasanya root
    private $db_pass = "12345";           // Default password biasanya kosong
    private $db_name = "database";   // Pastikan kamu sudah membuat database bernama "database" di phpMyAdmin

    private $con = false;
    private $hasil = array();

    public function connect()
    {
        if (!$this->con) {
            // Membuka koneksi dan langsung disimpan ke properti $this->con
            $this->con = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass);
            
            if ($this->con) {
                // Mengatur charset koneksi
                @mysqli_set_charset($this->con, 'utf8');
                
                // Memilih database yang akan digunakan
                $seldb = @mysqli_select_db($this->con, $this->db_name);
                
                if ($seldb) {
                    return true;
                } else {
                    // Jika database tidak ditemukan, masukkan error ke array hasil
                    array_push($this->hasil, mysqli_error($this->con));
                    return false;
                }
            } else {
                // Jika gagal konek ke server database, masukkan error ke array hasil
                // Menggunakan mysqli_connect_error() karena objek $this->con gagal dibuat
                array_push($this->hasil, mysqli_connect_error());
                return false;
            }
        } else {
            return true;
        }
    }

    // Fungsi untuk mengambil laporan error
    public function getError()
    {
        return $this->hasil;
    }
}