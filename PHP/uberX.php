<?php
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license,$driver);
        $this->brand = $brand;
        $this->model = $model;
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