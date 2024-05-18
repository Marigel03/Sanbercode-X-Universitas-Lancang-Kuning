<?php
// index.php
require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name .  "<br>"; // "shaun"
echo "Legs : ". $sheep->legs .  "<br>"; // 4
echo "cold blooded : ". $sheep->cold_blooded .  "<br><br>"; // "no"

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>"; // "buduk"
echo "Legs : " . $kodok->legs .  "<br>"; // 4
echo "cold blooded : ". $sheep->cold_blooded .  "<br>"; // "no"
$kodok->jump() . "<br><br>"; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name .  "<br>"; // "kera sakti"
echo "Legs : " . $sungokong->legs .  "<br>"; // 2
echo "cold blooded : ". $sheep->cold_blooded .  "<br>"; // "no"
$sungokong->yell(); // "Auooo"


?>
