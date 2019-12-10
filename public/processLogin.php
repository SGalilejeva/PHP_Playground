<?php
require_once "../src/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // prepare and bind
    $stmt = $conn->prepare("SELECT hash FROM users 
    WHERE (username = :username)");
    $stmt->bindParam(':username', $username);

    $stmt->execute();

}
// Check DButils php for the code
