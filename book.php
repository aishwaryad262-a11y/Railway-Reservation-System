<?php
include("db.php");

if(isset($_POST['submit']))
{
    $passenger_id = $_POST['passenger_id'];
    $passenger_name = $_POST['passenger_name'];
    $train_no = $_POST['train_no'];
    $journey_date = $_POST['journey_date'];
    $coach_type = $_POST['coach_type'];
    $seat_no = $_POST['seat_no'];

    $sql = "INSERT INTO reservations
    (passenger_id, passenger_name, train_no, journey_date, coach_type, seat_no, booking_status)

    VALUES
    ('$passenger_id', '$passenger_name', '$train_no', '$journey_date', '$coach_type', '$seat_no', 'Booked')";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
alert('Ticket Booked Successfully');
window.location='payment.php';
</script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Ticket</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Book Ticket</h1>

<form method="POST">

    <input type="number" name="passenger_id" placeholder="Passenger ID" required>
    <br><br>

    <input type="text" name="passenger_name" placeholder="Passenger Name" required>
    <br><br>

    <input type="number" name="train_no" placeholder="Train Number" required>
    <br><br>

    <input type="date" name="journey_date" min="<?php echo date('Y-m-d'); ?>" required>
    <br><br>

    <input type="text" name="coach_type" placeholder="Coach Type" required>
    <br><br>

    <input type="number" name="seat_no" placeholder="Seat Number" min="1" step="1" required>
    <br><br>

    <input type="submit" name="submit" value="Book Ticket">

</form>

</div>
<script>
document.querySelector('input[name="seat_no"]').addEventListener('input', function () {
    this.value = this.value.replace(/[^0-9]/g, '');
});
</script>
</body>
</html>