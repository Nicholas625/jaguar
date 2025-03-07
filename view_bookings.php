<?php
include('book_ticket.php'); // Reuse connection

$result = $conn->query("SELECT * FROM bookings ORDER BY departure_time DESC");

echo "<h2>Current Bookings</h2>";
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Destination</th>
<th>Departure Time</th>
<th>Booking Date</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['passenger_name'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['destination'] . "</td>";
    echo "<td>" . $row['departure_time'] . "</td>";
    echo "<td>" . $row['booking_date'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$conn->close();
?>
