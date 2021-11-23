<?php

error_reporting(0);

abstract class Vehicle{
    private function load(){

    }
    private function maxLoad(){

    }

    protected function Vehicle($max_load){

    }

    public function getLoad(){
        return $this->load;
    }

    public function getMaxLoad(){
        return $this->maxLoad;
    }

    public function addBox($weight) {
        if ($this->load >= $this->maxLoad) {
            echo "$this->name menambah muatan sebesar $weight <br>";
            echo 'Muatan telah penuh tidak bisa menambah lagi';
        }else {
            $this->load += $weight;
            echo "$this->name menambah muatan sebesar $weight";
        }
    }

    
    //abstract public function calcFuelNeeds();

    public function calcFuelEfficiency() {
        $range = 5000;
        return $range;
    }

    public function calcTripDistance() {
        return 500;
    }
    }


    class Truck extends Vehicle {
        public function __construct($maxLoad, $name)
        {
            $this->maxLoad = $maxLoad;
            $this->name = $name;
        }
        
        public function calcFuelNeeds()
        {
            $fuel = $this->calcFuelEfficiency();
            $trip = $this->calcTripDistance();
            
            return ceil($fuel /= $trip);
        }
    }
    
    class RiverBarge2 extends Vehicle {
        public function __construct($maxLoad, $name)
        {
            $this->maxLoad = $maxLoad;
            $this->name = $name;
        }
    
        public function calcFuelNeeds()
        {
            $fuel = $this->calcFuelEfficiency();
            $trip = $this->calcTripDistance();
    
            return ceil($fuel /= $trip);
        }
    }
    $truck = new Truck(100, 'Truk');
    $riverBarge = new RiverBarge2(150, 'Perahu');

    echo "Praktikum 6"."<br>";
    echo "Soal no. 1"."<br>"."<br>";

    echo "Muatan Maksimal : ". $truck->getMaxLoad() . ' kg'. "<br>";
    echo $truck->addBox(30) . ' kg' . "<br>"; 
    echo $truck->addBox(10) . ' kg'.  "<br>"; 
    echo $truck->addBox(60) . ' kg'.  "<br>" . "<br>"; 

    echo "Muatan Maksimal : ". $riverBarge->getMaxLoad() . ' kg'. "<br>";
    echo $riverBarge->addBox(25) . ' kg' . "<br>"; 
    echo $riverBarge->addBox(11) . ' kg'.  "<br>"; 
    echo $riverBarge->addBox(70) . ' kg'.  "<br>";