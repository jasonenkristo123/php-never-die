<?php

echo "php is the king <br>";
echo "woii";

echo "<h1>Halo</h1>";

$name = "Toj";
echo $name;

echo "Hai $name";

$nama1 = "Prabowo";
$nama2 = "Subianto";
echo "<br>";
echo $nama1 . $nama2;

define("PI", 3.14);
echo PI;

var_dump($nama1);
echo var_dump($nama2);
echo gettype($nama1);

$elek = [
    "name" => "brody",
    "age" => "30"
];

echo $elek['name'];

$a = 10;
$b = 20;

echo $a + $b;

$text = "ABCD";

echo strlen($text);
echo strtoupper($text);
echo strtolower($text);

// pengganti switch adalah match
$status = "paid";

$message = match ($status) {
    "paid" => "Terima kasih",
    "pending" => "Menunggu",
    "cancelled" => "Dibatalkan",
    default => "Status tidak dikenali",
};

echo $message;

// $students = [
//     "Ciy",
//     "Coy",
//     "Coz"
// ];

// foreach ($students as $murid) {
//     echo $murid . "<br>";
// }

$students = [
    [
        "name" => "Jason",
        "score" => 90
    ],
    [
        "name" => "Budi",
        "score" => 75
    ],
    [
        "name" => "Andi",
        "score" => 60
    ]
];

foreach ($students as $student) {
    if ($student["score"] >= 70) {
        echo $student["name"] . " lulus<br>";
    } else {
        echo $student["name"] . " tidak lulus<br>";
    }
}

function add(int $a, int $b): int {
    return $a + $b;
}

function substract(?int $b, ?int $c): ?int {
    return $b - $c;
}

function greet($guest = "Hudi") {
    echo "Hello $guest";
}

greet();

add(10, 20);
echo (add(10, 20));
echo (substract(10, 20));


// oop
//

class User {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new User("John", 30);
$user->name = "Toji";
$user->age = 10;


class Greeter {
    public function greet($message) {
        echo $message;
    }
}

$greeter = new Greeter();
$greeter->greet("haloo");

class Math {
    public static function add(int $a, int $b) {
        return $a + $b;
    }
}

echo Math::add(19, 20); // static pakai ::

class Message {
    public static function getMessage(string $status): string {
        return $status;
    }
}

echo Message::getMessage("woi");
