<!-- Nama   : Rizka Nurul Septiana Hakim -->
<!-- NIM    : 20051397025 -->
<!-- Kelas  : 2020A D4 Manajemen Informatika -->
<!-- Tugas Praktikum 3 Mata Kuliah PBO -->

<?php
//Tabungan
class Tabungan{
    protected $saldo;
}

//Pengambilan Saldo
class PengambilanUang extends Tabungan{
    private $proteksi;

    public function _construct($saldo)
    {
        $this->saldo = $saldo;
        $this->proteksi = 1000;
    }

    public function getSaldo(){
        return 'Uang yang ditabung : ' . $this->saldo . '<br> Uang yang diproteksi : ' . $this->proteksi;
    }

    public function ambilUang($jumlah){
        if ($jumlah === 4500) {
            return 'Uang yang akan diambil : '. $jumlah . ' false <br> Saldo sekarang : '. $this->saldo;
        }
        else {
            return 'Uang yang akan diambil : '. $jumlah . ' true <br> Saldo sekarang : ' .$this->saldo = $jumlah;
        }
    }
}

// Run Program 
$tabungan = new PengambilanUang(5000);
echo $tabungan->getSaldo();
echo '<br> -------------------------------- <br>';
echo $tabungan->ambilUang(4500);
echo '<br> -------------------------------- <br>';
echo $tabungan->ambilUang(2500);

?>