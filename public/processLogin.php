<?php
session_start();
require_once "../src/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // prepare and bind
    $stmt = $conn->prepare("SELECT hash, id FROM users 
    WHERE (username = :username)");
    $stmt->bindParam(':username', $username);

    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $allRows = $stmt->fetchAll();
    // var_dump($allRows);
    // print_r(count($allRows));
    if (count($allRows) > 0) {
        $hash = $allRows[0]['hash'];

        // print_r($hash);

        if (password_verify($password, $hash)) {
            echo "<br>Login Worked!";
            $_SESSION['username'] =  $username;
            $_SESSION['id'] = (int) $allRows[0]['id'];
        
        } else {
            echo "<br>Login Failed";
        }
    } else {
        echo "No such user!";
    }
header('Location: /');

}

