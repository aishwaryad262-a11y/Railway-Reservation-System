<?php
include 'db.php';

$result = mysqli_query($conn,
"SELECT * FROM train_schedule");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Train Schedule</title>

    <style>

    body{
        font-family: Arial, sans-serif;

        background-image:url('train.webp');
        background-size:cover;
        background-position:center;

        display:flex;
        justify-content:center;
        align-items:center;

        height:100vh;
        margin:0;
    }

    .container{
        background:rgba(0,0,0,0.5);
        padding:40px;
        border-radius:15px;
        text-align:center;
    }

    h1{
        color:white;
    }

    table{
        background:white;
        border-collapse:collapse;
    }

    th{
        background:#39d5e7;
        color:white;
        padding:12px;
    }

    td{
        padding:12px;
    }

    </style>

</head>

<body>

<div class="container">

<h1>Train Schedule</h1>

<table border="1">

<tr>
<th>Train No</th>
<th>Departure Time</th>
<th>Arrival Time</th>
<th>Platform No</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['train_no']; ?></td>

<td><?php echo $row['departure_time']; ?></td>

<td><?php echo $row['arrival_time']; ?></td>

<td><?php echo $row['platform_no']; ?></td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>