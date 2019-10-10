<?php
require_once 'Bicycle.php';
require_once 'Car.php';
$tornado = new Bicycle('yellow');
$bike = new Bicycle('red');
$rockrider = new Bicycle('pink');
$car = new Car('black',5, 'gpl');
$tuchemobile = new Car ('Navy',7, 'diesel');
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo'<br><br><br><br><br><br><br><br>';
echo $tuchemobile->start() .'<br>';
echo $tuchemobile->forward();
echo '<br> Vitesse de la voiture : ' . $tuchemobile->getCurrentSpeed() . ' km/h' . '<br>';
echo $tuchemobile->brake();
echo var_dump ($tuchemobile);