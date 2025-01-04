<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "FormDataDB";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$termsAccepted = isset($_POST['terms']) ? 1 : 0;

// Name + surname
$fullName = $name . " " . $surname;

$sql = "INSERT INTO submissions (full_name, email, phone, age, terms_accepted) 
        VALUES ('$fullName', '$email', '$phone', $age, $termsAccepted)";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully!";
} else {
    echo "Error inserting record: " . $conn->error;
}

$conn->close();
?>
