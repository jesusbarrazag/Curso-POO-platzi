<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("user.php");
require_once("account.php");


$car = new Car("GQT311", new Account("Gonzalo Rivera", "3242354", "gonzalo@gmail.com", "635443"));
$car->printDataCar();

$uberX = new UberX("CVB123", new Account("Andres Herrera ", "AND456", "AndresH23@hotmail.com", "563433"), "Chevrolet", "Spark");
$uberX->printDataUberX();

$user = new User("Andrea Fernandez", "13467435","Andrea.hz23@gmail.com", "3556");
$user->printDataUser();
?>