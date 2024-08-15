<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
$sungokong = new Ape("kera sakti");
$kodok = new Frog("buduk");



echo "name: " . $sheep->name . "<br>";
echo "legs: " . $sheep->legs . "<br>";
echo "cold blooded: " . $sheep->cold_blooded . "<br><br>";

echo "name: " . $kodok->name . "<br>";
echo "legs: " . $kodok->legs . "<br>";
echo "cold blooded: " . $kodok->cold_blooded . "<br>";
echo "jump: " . $kodok->jump() . "<br><br>";

echo "name: " . $sungokong->name . "<br>";
echo "legs: " . $sungokong->legs . "<br>";
echo "cold blooded: " . $sungokong->cold_blooded . "<br>";
echo "yell: " . $sungokong->yell() . "<br>";


?>
