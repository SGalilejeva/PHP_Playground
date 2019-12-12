<?php

require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$task_id = $_POST['update'];
$task = $_POST['task'];
$location = $_POST['location'];



$stmt = $conn->prepare("UPDATE `tasks` 
SET `task` = (:task),
     `location` = (:location)
WHERE `tasks`.`id` = (:taskid)");
    $stmt->bindParam(':taskid', $task_id);
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':location', $location);
    $stmt->execute();

    header('Location: /');
    
} else {
    echo "That was not a POST, most likely GET";
}