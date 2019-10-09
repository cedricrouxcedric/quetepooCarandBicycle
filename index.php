<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle('red');
$rolls = new Car(black,4,fuel);
var_dump($bike);
$bike->setColor(blue) ;
$bike->setCurrentSpeed(0);
var_dump($bike); // then, another dump.
$bike->dump();
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle(blue);
$rockrider->setColor(yellow);

// Instanciation d'un nouvel objet $tornado(de la classe Bicycle)
$tornado = new Bicycle(green);
$tornado->setColor(black);
$tornado->setCurrentSpeed(150);
$bike->dump();
var_dump($rolls);
echo $rolls->forward();
echo $rolls->getCurrentSpeed();

echo $rolls->getColor();
echo $rolls->getEnergy();
echo $rolls->getEnergyLevel();
echo $rolls->getNbSeats();
echo $rolls->setNbWheels(9);
echo $rolls->getNbWheels();
echo $rolls->start();
echo $tornado->brake();
echo $rolls->brake();