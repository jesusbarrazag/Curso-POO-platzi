<?php
require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "<br/> Datos de Car";
        echo "<br/> Licencia: ". $this->license ;
        echo "<br/> Driver: " . $this->driver->name;
    }
}
?>