<?php
require_once "../public/config.php";
try {
    $conn = new PDO("mysql:host=$SERVER;dbname=$DB", USER, PW);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    die("No Database");
    } 


