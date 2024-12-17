<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vladkebab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    $sql = "INSERT INTO bookings (name, email, phone, date, time, guests) 
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests')";

    if ($conn->query($sql) === TRUE) {
        echo "Rezervare adăugată cu succes!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
