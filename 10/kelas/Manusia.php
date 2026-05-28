<?php

class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "253307055";
    protected $umur; // Menambahkan variabel umur

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    // Mengubah dari private ke public agar bisa diakses di index.php
    public function getNIK()
    {
        return "[" . $this->nik . "]";
    }

    // Menambahkan fungsi setter untuk umur
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Menambahkan fungsi getter untuk umur
    public function getUmur()
    {
        return $this->umur;
    }
}