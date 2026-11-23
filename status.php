<?php
include("db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Booked Tickets</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Booked Tickets</h1>

<table border="1" align="center" cellpadding="10">

<tr>
    <th>Reservation ID</th>
    <th>Passenger ID</th>
    <th>Passenger name</th>
    <th>Train Number</th>
    <th>Journey Date</th>
    <th>Coach Type</th>
    <th>Booking Status</th>
</tr>

<?php

$sql = "SELECT * FROM reservations";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['reservation_id']; ?></td>
    <td><?php echo $row['passenger_id']; ?></td>
    <td><?php echo $row['passenger_name']; ?></td>
    <td><?php echo $row['train_no']; ?></td>
    <td><?php echo $row['journey_date']; ?></td>
    <td><?php echo $row['coach_type']; ?></td>
    <td><?php echo $row['booking_status']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>