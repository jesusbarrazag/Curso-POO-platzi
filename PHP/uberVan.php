<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;
    public $brand;
    public $model;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial, $brand, $model){
        parent::__construct($license,$driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
        $this->brand = $brand;
        $this->model = $model;
    }

        public function setPassenger($passenger) {
        
        if ($passenger == 6) {
            $this->passenger = $passenger;
        }
        else {
            echo "<br/>";
            echo "<br/> Necesitas asignar 6 pasajeros";
        }
    
    }
}
?>