<?php
require_once '../src/db.php';

if (!isset($_SESSION['username'])) {
    echo "Please Login to see your tasks";
    return;
} 
// else {
//     echo "Hello there " . $_SESSION['username'] . "!<br>";
// }

$stmt = $conn->prepare("SELECT * FROM tasks 
WHERE (user_id = :user_id)");
$stmt->bindParam(':user_id', $_SESSION['id']);
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
    echo "<form action='updateTask.php' method='post'>";
    echo "<div class='update-tasks'>";

    // echo "<span>Task: " . $row["task"] . "</span>";
    // echo "<span>Location: " . $row["location"] . "</span>";
    foreach ($row as $key => $value) {
        switch ($key) {
            case 'task':
            case 'location':
             echo "<input class='input-value-cell value-$key' name='$key' value='$value'></input>";
             break;
        default:
                echo "<span class='value-cell'>$value </span>";
                break;
    }
}
    echo "<button name='update' value='" . $row['id'] . "'>Update</button>";
    echo "</div>";
    echo "</form>";

    echo "<form = action'deleteTask.php' method='post'>";
    echo "<button name='delete' value='" . $row['id'] . "'>Delete</button>";
    echo "</form>";
    echo "<hr>";
    echo "</div>";
}