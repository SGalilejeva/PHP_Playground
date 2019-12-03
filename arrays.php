<?php
echo "Testing Arrays";
$cars = ['Volvo', 'Audi', 'Porsche'];
var_dump($cars);

$supermarkets = [
    "highend" => "Stockmann",
    "midmarket" => ['Rimi', 'Maxima'],
    "lowend" => "Lidl",
];
var_dump($supermarkets);

echo "<hr>";
array_push($cars, 'BMW', 'VW');
var_dump($cars);
echo "<hr>";
echo $cars[2];
foreach ($cars as $car) {
    echo "This is my auto:" . $car . "<br>";
}
echo "<ul>";
foreach ($cars as $car) {
    echo "<li>This is my auto:" . $car . "</li>";
}
echo "</ul>";
echo "<ol>";
for ($i = 1; $i < sizeof($cars); $i++) {
    echo "<li>Car Number $i is $cars[$i]</li>";
}
echo "</ol>";
