<?php
// Database configuration
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "jaguar_bus_coaches";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $destination = htmlspecialchars($_POST['destination']);
    $departure_time = $_POST['departure_time'];

    // Validate inputs
    if (empty($name) || empty($phone) || empty($destination) || empty($departure_time)) {
        die("All fields are required!");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO bookings (passenger_name, phone_number, destination, departure_time) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $destination, $departure_time);

    // Execute query
    if ($stmt->execute()) {
        // Redirect to success page
        header("Location: booking_success.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
