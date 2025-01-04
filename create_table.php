<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "FormDataDB";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS submissions (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15),
    age INT,
    terms_accepted BOOLEAN NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();