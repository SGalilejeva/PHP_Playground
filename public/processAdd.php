<?php

require_once '../src/db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
echo "We got a POST request!<br>";
foreach ($_POST as $key => $value) {
    echo "We received name $key with value $value <br>";
}
if (isset($_POST['myname'])) {
    echo "Why hello there " . $_POST['myname'] . "! <hr>";
    $_SESSION['myname'] = $_POST['myname'];
}
var_dump($_POST);

    $title = $_POST['task'];
    $artist = $_POST['location']; 
    $user_id = (int)0;

$stmt = $conn->prepare("INSERT INTO todo (task, location, user_id) 
VALUES (:task, :location, :user_id)");
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':user_id', $user_id);
    
    $stmt->execute();

    header('Location: /');
    
} else {
    echo "That was not a Post, most liekly GET";
}

