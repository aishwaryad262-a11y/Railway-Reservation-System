<?php
session_start();
include "db.php";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
    $_SESSION['user'] = $username;

    echo "<script>
    alert('Login Successful');
    window.location='home.php';
    </script>";
    }

    else
    {
        echo "<script>alert('Invalid Username or Password');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>User login</h1>

<form method="POST">

<input type="text" name="username" placeholder="Enter Username" required>
<br><br>

<input type="password" name="password" placeholder="Enter Password" required>
<br><br>

<input type="submit" name="login" value="Login">

</form>

</div>

</body>
</html>