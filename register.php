<?php
include "db.php";

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,password)
            VALUES('$username','$password')";

    if(mysqli_query($conn,$sql))
    {
    echo "<script>
    alert('Registration Successful');
    window.location='login.php';
    </script>";
    }
    else
    {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>User Registration</h1>

<form method="POST">

<input type="text" name="username" placeholder="Enter Username" required>
<br><br>

<input type="password" name="password" placeholder="Enter Password" required>
<br><br>

<input type="submit" name="register" value="Register">

</form>

</div>

</body>
</html>