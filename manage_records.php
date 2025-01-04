<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "FormDataDB";

$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function findRecord($conn, $email) {
    $sql = "SELECT * FROM submissions WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Full Name: " . $row["full_name"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "No records found.";
    }
}

function updateRecord($conn, $email, $newPhone) {
    $sql = "UPDATE submissions SET phone = '$newPhone' WHERE email = '$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

function deleteRecord($conn, $email) {
    $sql = "DELETE FROM submissions WHERE email = '$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

/*
if ($_GET['action'] === "find") {
    findRecord($conn, $_GET['email']);
} elseif ($_GET['action'] === "update") {
    updateRecord($conn, $_GET['email'], $_GET['new_phone']);
} elseif ($_GET['action'] === "delete") {
    deleteRecord($conn, $_GET['email']);
}
*/
$conn->close();
?>
