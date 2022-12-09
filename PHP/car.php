<?php
require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "<br/> Datos de Car";
        echo "<br/> Licencia: ". $this->license ;
        echo "<br/> Driver: " . $this->driver->name;
        echo "<br/> Passenger: ". $this->passenger->name;
    }

    public function printDataUberVan(){
        echo "<br/>";
        echo "<br/> UberVan";
        echo "<br/> License:" .$this->license;
        echo "<br/> Brand: " .$this->brand;
        echo "<br/> Model: ".$this->model;
        echo "<br/> Driver: ". $this->driver->name;
    }

    public function printDataUberX(){
        echo "<br/>";
        echo "<br/> UberX";
        echo "<br/> License:" .$this->license;
        echo "<br/> Brand: " .$this->brand;
        echo "<br/> Model: ".$this->model;
        echo "<br/> Driver: ". $this->driver->name;
    }


}
?>