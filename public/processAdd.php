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

    $title = $_POST['title'];
    $artist = $_POST['artist']; //FIXME when no artist exists
    $length = $_POST['length'];
    $user_id = 1;

$stmt = $conn->prepare("INSERT INTO tracks (title, artist, length, user_id) 
VALUES (:title, :artist, :length, :user_id)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':artist', $artist);
    $stmt->bindParam(':length', $length);
    $stmt->bindParam(':user_id', $user_id);
    
    $stmt->execute();

    header('Location: /');
    
} else {
    echo "That was not a Post, most liekly GET";
}

