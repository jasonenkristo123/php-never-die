<?php

require "../config/database.php";

$query = "SELECT * FROM students";

$stmt = $pdo->query($query);

$students = $stmt->fetchAll();

    echo "<pre>";

print_r($students);

for ($i = 0; $i < count($students); $i++) {
    echo $students[$i]["name"] . "<br>";
}
