//Praktikum 4//
<?php

class Katak
{
    protected $umur, $nama;
    public function __construct($umur, $nama)
    {
        $this->umur = $umur;
        $this->nama = $nama;
    }

    public function CaraBergerak(){
        return 'Melompat';
    }
    
    public function getNama(){
        return $this->nama;
    }

    public function getUmur(){
        return $this->umur;
    }
}

class Kecebong extends Katak
{
    private $panjangEkor;

    public function __construct($umur, $nama, $ekor)
    {
        $this->panjangEkor = $ekor;
        parent::__construct($umur, $nama);
    }

    public function CaraBergerak(){
        return 'Berenang';
    }

    public function getPanjangEkor(){
        return $this->panjangEkor;
    }
}

$katak = new Katak(5, 'Froggy');
$kecebong = new Kecebong(5, 'Junior Froggy', 10);

?>