
<?php

require_once '../public/config.php';
require_once '../templates/head.php';
require_once '../src/login.php';
require_once '../src/printTask.php';
require_once '../src/addTask.php';
require_once '../public/deleteTask.php';

// try {
//     $conn = new PDO("mysql:host=$SERVER;dbname=$DB", USER, PW);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully <br>";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
// // prepared a statement and executed it 
//     $stmt = $conn->prepare("SELECT * FROM tasks");
//     $stmt->execute();

//     // set the resulting array to associative
//     $isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
// var_dump($isFetchModeSet);
// // we store results in memory 
// $allRows = $stmt->fetchAll();
// // foreach ($allRows as $key => $value) {
// //     echo "<hr>";
// //     echo "KEY: ";
// //     var_dump($key);
// //     echo "<br>";
// //     var_dump($value); 
// // }


// // $columnsPrinted = false;
// // foreach ($allRows as $row) {
// //     if (!$columnsPrinted) {
// //         foreach ($row as $key => $value) {
// //             echo "KEY: $key <br>";
// //         }
// //         $columnsPrinted = true; 
// //     }
    
// //     echo "<div>";
// //     echo "<span> Task: " . $row["task"] . "</span>";
// //     echo "<span>Location: " . $row["location"] . "</span>";
// //     echo "<hr>";
// //     echo "</div>";

// // }

require_once '../templates/foot.php';
