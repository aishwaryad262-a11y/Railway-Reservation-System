<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Railway Reservation System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Railway Reservation System</h1>

        <div class="buttons">

            <a href="trains.php">
                <button>View trains</button>
            </a>

            <a href="book.php">
                <button>Book Ticket</button>
            </a>

            <a href="status.php">
                <button>Check Status</button>
            </a>

            <a href="cancel.php">
                <button>Cancel Ticket</button>
            </a>

        </div>

    </div>

</body>
</html>