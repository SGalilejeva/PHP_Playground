<?php
require_once '../src/db.php';

$stmt = $conn->prepare("SELECT * FROM tracks");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$allRows = $stmt->fetchAll();

$columnsPrinted = false;
foreach ($allRows as $row) {
    if (!$columnsPrinted) {
        foreach ($row as $key => $value) {
            echo "KEY: $key <br>";
        }
        $columnsPrinted = true;
    }
    echo "<div>";
    echo "<span>Title: " . $row["title"] . "</span>";
    echo "</div>";
}