<?php

// Rizka Nurul Septiana Hakim
// 20051397025 - MI2020A

// use Airplane as GlobalAirplane;

interface Flyer {
    public function takeoff();
    public function land();
    public function fly();
}

interface Sailer {
    public function dock();
    public function cruise();
}

abstract class Vahicle{

}

class Airplane extends Vahicle{
    public function takeoff(){
        return "Pesawat akan lepas landas dalam 10 menit lagi";
    }
    public function land(){
        return "Terjadi kerusakan, Pesawat akan mendarat secepatnya";
    }
    public function fly(){
        return "Terjad Perubahan jam penerbangan bagi maskapai Garuda Indonesia";
    }
}

class RiverBarge extends Vahicle implements Sailer{
    public function dock(){
        return "Kapal  Barang akan tiba di dermaga Timur";
    }
    public function cruise(){
        return "Kapal Barang akan melewati sungai Kapuas";
    }
}

class SeaPlane extends Airplane implements Sailer{
    public function dock(){
        return "Sea plane emas akan tiba di dermaga terdekat";
    }
    public function cruise(){
        return "Sea plane emas akan menuju pulau Kapuk";
    }
}

class Helicopter extends Airplane{

}

$airplane = new Airplane;
$riverbarge = new RiverBarge;
$seaplane = new SeaPlane;


echo "Praktikum 6"."<br>";
echo "Soal no. 4"."<br>"."<br>";

echo "Class Airplane"."<br>";
echo $airplane->takeoff() . "<br>";
echo $airplane->land()."<br>";
echo $airplane->fly()."<br>"."<br>";
echo "Class RiverBarge"."<br>";
echo $riverbarge->dock()."<br>";
echo $riverbarge->cruise()."<br>"."<br>";
echo "Class SeaPlane"."<br>";
echo $seaplane->dock()."<br>";
echo $seaplane->cruise()."<br>"."<br>";
