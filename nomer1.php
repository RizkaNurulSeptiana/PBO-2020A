//Praktikum 4//
<?php

class Orang
{
    protected $nama, $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

}

class Dosen extends Orang
{
    private $nip;

    public function __construct($nama, $umur, $nip)
    {
        $this->nip = $nip;
        parent::__construct($nama, $umur);
    }

    public function info(){
        return $this->nama . ' berumur '. $this->umur. ' dengan nip : '. $this->nip;
    }
}

$dosen1 = new Dosen('Rizka', 45, 45678);
$dosen2 = new Dosen('Nurul', 35, 45792);
$dosen3 = new Dosen('Septiana', 30, 45876);

echo "nama : " . $dosen1->info();
echo "<br>";
echo "nama : " . $dosen2->info();
echo "<br>";
echo "nama : " . $dosen3->info();

?>
