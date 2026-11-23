<?php
include("db.php");

if(isset($_POST['cancel']))
{
    $reservation_id = $_POST['reservation_id'];

    // Get train number
    $get_train = "SELECT train_no FROM reservations
                  WHERE reservation_id = '$reservation_id'";

    $result = mysqli_query($conn, $get_train);

    $row = mysqli_fetch_assoc($result);

    $train_no = $row['train_no'];

    // Delete reservation
    $delete_query = "DELETE FROM reservations
                     WHERE reservation_id = '$reservation_id'";

    mysqli_query($conn, $delete_query);

    // Increase available seats
    $update_seats = "UPDATE trains
                     SET available_seats = available_seats + 1
                     WHERE train_no = '$train_no'";

    mysqli_query($conn, $update_seats);

    echo "<h2>Ticket Cancelled Successfully</h2>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cancel Ticket</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Cancel Ticket</h1>

<form method="POST">

    <input type="number"
           name="reservation_id"
           placeholder="Enter Reservation ID"
           required>

    <br><br>

    <button type="submit" name="cancel">
        Cancel Ticket
    </button>

</form>

</body>
</html>