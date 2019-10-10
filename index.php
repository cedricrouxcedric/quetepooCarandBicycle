<?php
require_once 'Bicycle.php';
require_once 'Car.php';
$tornado = new Bicycle('yellow');
$bike = new Bicycle('red');
$rockrider = new Bicycle('pink');
$car = new Car('balck',5, 'gpl');
$ferrari = new Car ('Navy',7, 'diesel');
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo'<br><br><br><br><br><br><br><br>';
echo $ferrari->start() .'<br>';
echo $ferrari->forward();
echo '<br> Vitesse de la voiture : ' . $ferrari->getCurrentSpeed() . ' km/h' . '<br>';
echo $ferrari->brake();
echo var_dump ($ferrari);