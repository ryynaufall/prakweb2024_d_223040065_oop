<?php 

class Mobil {
    public $nama;
    public $merk;
    public $warna;
    public $kecepatanMaksimal;
    public $jumlahPenumpang;

    public function tambahKecepatan() {
        return "Kecepatan Bertambah";
    }
}

class MobilSport extends Mobil {
    public $turbo = false;

    public function jalankanTurbo() {
        $this->turbo = true;
        return "Turbo dijalankan";
    }
}

$mobil1 = new MobilSport();
echo $mobil1->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();