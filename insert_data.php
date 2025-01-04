<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "FormDataDB";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? $_POST['name'] : null;
$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$age = isset($_POST['age']) ? intval($_POST['age']) : null;
$termsAccepted = isset($_POST['terms']) ? 1 : 0;

if (!$name || !$surname || !$email || !$phone || !$age) {
    die("Error: All fields are required!");
}

$fullName = $name . " " . $surname; // name + surname

$sql = "INSERT INTO submissions (full_name, email, phone, age, terms_accepted) 
        VALUES ('$fullName', '$email', '$phone', $age, $termsAccepted)";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully!";
} else {
    echo "Error inserting record: " . $conn->error;
}

$conn->close();
?>
