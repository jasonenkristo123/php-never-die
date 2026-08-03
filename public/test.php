<?php

require "../config/database.php";

$query = "SELECT * FROM students";

$stmt = $pdo->query($query);

$students = $stmt->fetchAll();

    echo "<pre>";

print_r($students);

print_r($pdo);
