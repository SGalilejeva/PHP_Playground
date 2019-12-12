<?php
session_start();
require_once '../src/db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
echo "We got a POST request!<br>";
foreach ($_POST as $key => $value) {
    echo "We received $key being $value <br>";
}

var_dump($_POST);

    $task = $_POST['task'];
    $location = $_POST['location']; 
    $user_id = $_SESSION['id'];

$stmt = $conn->prepare("INSERT INTO tasks (task, location, user_id) 
VALUES (:task, :location, :user_id)");
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':user_id', $user_id);
    
    $stmt->execute();

    header('Location: /');
    
} 
// else {
//     echo "That was not a Post, most likely GET";
// }

