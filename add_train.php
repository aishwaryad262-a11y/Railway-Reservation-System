<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location:admin_login.php");
}

include 'db.php';

if(isset($_POST['add']))
{
    $train_no = $_POST['train_no'];
    $train_name = $_POST['train_name'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $seats = $_POST['seats'];
    $fare = $_POST['fare'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];

    $sql = "INSERT INTO trains
    (train_no, train_name, source_station, destination_station, available_seats, fare, departure_time, arrival_time)

    VALUES
    ('$train_no','$train_name','$source','$destination','$seats','$fare','$departure_time','$arrival_time')";

    mysqli_query($conn,$sql);

    echo "<script>alert('Train Added Successfully')</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Train</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Add Train</h1>

<form method="POST">

<input type="number" name="train_no" placeholder="Train Number" required>
<br><br>

<input type="text" name="train_name" placeholder="Train Name" required>
<br><br>

<input type="text" name="source" placeholder="Source" required>
<br><br>

<input type="text" name="destination" placeholder="Destination" required>
<br><br>

<input type="number" name="seats" placeholder="Available Seats" required>
<br><br>

<input type="number" name="fare" placeholder="Fare" required>
<br><br>

<input type="time" name="departure_time" required>
<br><br>

<input type="time" name="arrival_time" required>
<br><br>

<input type="submit" name="add" value="Add Train">

</form>

</div>

</body>
</html>