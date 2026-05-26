<?php

class buah2
{
    public $nama;
    public $warna;
    public $bobot;

    // Diubah menjadi public agar bisa diakses di luar class
    public function set_name($n)
    {
        $this->nama = $n;
    }

    // Diubah dari protected menjadi public
    public function set_color($n)
    {
        $this->warna = $n;
    }

    // Diubah dari private menjadi public
    public function set_weight($n)
    {
        $this->bobot = $n;
    }
}

$mango = new buah2();
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');

// Menampilkan output ke browser
echo "<h3>--- Data Buah 2 ---</h3>";
echo "Nama Buah: " . $mango->nama . "<br>";
echo "Warna Buah: " . $mango->warna . "<br>";
echo "Bobot Buah: " . $mango->bobot . " gram<br>";