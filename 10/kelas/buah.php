<?php

class buah
{
    public $nama;
    protected $warna;
    private $berat;

    // Setter untuk properti protected $warna
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Getter untuk properti protected $warna
    public function getWarna()
    {
        return $this->warna;
    }

    // Setter untuk properti private $berat
    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    // Getter untuk properti private $berat
    public function getBerat()
    {
        return $this->berat;
    }
}

// Penggunaan objek yang benar
$mango = new buah();
$mango->nama = 'Mango';          // Bisa diakses langsung karena berstatus public

$mango->setWarna('Yellow');      // Harus menggunakan setter karena berstatus protected
$mango->setBerat('300');         // Harus menggunakan setter karena berstatus private

// Menampilkan output ke browser
echo "<h3>--- Data Buah ---</h3>";
echo "Nama Buah: " . $mango->nama . "<br>";
echo "Warna Buah: " . $mango->getWarna() . "<br>";
echo "Berat Buah: " . $mango->getBerat() . " gram<br>";