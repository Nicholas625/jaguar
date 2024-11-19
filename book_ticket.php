<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $departure_time = $_POST['departure_time'];

    // Basic validation
    if (empty($name) || empty($phone) || empty($destination) || empty($departure_time)) {
        echo "All fields are required!";
    } else {
        // Here you can connect to a database to store the information
        // For simplicity, let's just display the booking details
        echo "<h2>Booking Confirmed</h2>";
        echo "<p>Thank you, $name, for booking your ticket!</p>";
        echo "<p>Destination: $destination</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Departure Time: $departure_time</p>";

        // Optionally, you can redirect to another success page
        // header('Location: booking_success.php'); // Uncomment to redirect
    }
} else {
    echo "Invalid request!";
}
?>
