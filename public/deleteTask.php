<?php

require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// echo "We got a POST request!<br>";
// foreach ($_POST as $key => $value) {
//     echo "We received $key being $value <br>";
// }

// var_dump($_POST);

$task_id = $_POST['delete'];


$stmt = $conn->prepare("DELETE FROM 'tasks' WHERE 'tasks' , 'id' = (:taskid)");
    $stmt->bindParam(':taskid', $task_id);
    
    $stmt->execute();

    header('Location: /');
    
} else {
    echo "That was not a POST, most likely GET";
}

