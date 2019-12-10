
<?php

require_once '../public/config.php';

require_once '../src/login.php';


require_once '../src/addSongs.php';

try {
    $conn = new PDO("mysql:host=$SERVER;dbname=$DB", USER, PW);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
// prepared a statement and executed it 
    $stmt = $conn->prepare("SELECT * FROM tasks");
    $stmt->execute();

    // set the resulting array to associative
    $isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
var_dump($isFetchModeSet);
foreach ($stmt->fetchAll() as $key => $value) {
    echo "<hr>";
    echo "KEY: ";
    var_dump($key);
    echo "<br>";
    var_dump($value); 
}



