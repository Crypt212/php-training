<?php
// Database configuration
require_once 'db_connect.php';
require_once 'query.php';


// Sample data generators
function randomName() {
    $names = ['Ahmed', 'Mohammed', 'Khalid', 'Amr', 'Hatim'];
    return $names[array_rand($names)] . ' ' . $names[array_rand($names)];
}

function randomAge() {
    return random_int(7, 40);
}

// Insert 50 random records
for ($i = 0; $i < 50; $i++) {
    $name = randomName();
    $age = randomAge();

    query("INSERT INTO users (username, age) VALUES ('$name', $age)", $conn);
    echo "Inserted record: $name, $age<br>";
}

echo "Successfully inserted 50 random records.\n";
