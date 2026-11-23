<?php
include("db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Trains</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Available Trains</h1>

<table border="1" align="center" cellpadding="10">

<tr>
    <th>Train No</th>
    <th>Train Name</th>
    <th>Source</th>
    <th>Destination</th>
    <th>Available Seats</th>
    <th>Fare</th>
    <th>Departure</th>
    <th>Arrival</th>
</tr>

<?php

$sql = "SELECT * FROM trains";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['train_no']; ?></td>
    <td><?php echo $row['train_name']; ?></td>
    <td><?php echo $row['source_station']; ?></td>
    <td><?php echo $row['destination_station']; ?></td>
    <td><?php echo $row['available_seats']; ?></td>
    <td><?php echo $row['fare']; ?></td>
    <td><?php echo $row['departure_time']; ?></td>
    <td><?php echo $row['arrival_time']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>