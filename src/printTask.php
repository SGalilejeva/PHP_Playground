<?php
require_once '../src/db.php';

$stmt = $conn->prepare("SELECT * FROM tasks");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$allRows = $stmt->fetchAll();

$columnsPrinted = false;
foreach ($allRows as $row) {
    if (!$columnsPrinted) {
        foreach ($row as $key => $value) {
            echo "<span class='column-name'> $key </span>";
        }
        $columnsPrinted = true;
    }
    echo "<div>";
    // echo "<span>Task: " . $row["task"] . "</span>";
    // echo "<span>Location: " . $row["location"] . "</span>";
    foreach ($row as $key => $value) {
        echo "<span class='value-cell'>$value </span>";
    }
    echo "<hr>";
    echo "</div>";
}