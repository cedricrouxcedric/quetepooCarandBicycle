<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$truck = new Truck('red' , 3,'electric',50);

var_dump($truck);
$truck->setLoad(30);
var_dump($truck);
$truck->addLoad(25);
var_dump($truck);


$truck->isload();
