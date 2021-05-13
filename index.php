<?php 
use Parno\loket;
require __DIR__ . "/vendor/autoload.php";
$c = new loket\pricitac;
$c -> setx(9);
$c -> sety(9);
var_dump($c -> nasobeni());