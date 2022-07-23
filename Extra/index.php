<?php

require __DIR__ . "/car/car.php";

$car1 = new Specifics('merchedes', 'class A', 'ciao', 120000, '116CV', 2021, 2004);

var_dump($car1);

echo $car1->getPrice();
echo $car1->setPrice(12000);

?>