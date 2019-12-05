<?php
require_once ('Houses.php');

$myhouse = new House("green", 10000, 50000);
$friendsHouse = new House("red", 20000, 60000);

echo "My house is $myhouse->color <br>";
echo "My friendsHouse cost $friendsHouse->price <br>";

$myhouse->printHello();
$myhouse->printPrice();

$friendsHouse->getTopPrice();
$friendsHouse->strongText("hmmmmmmmmmm");

