<?php
session_start();

include 'db.php';

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="admin123")
    {
        $_SESSION['admin']="yes";

        header("Location:add_train.php");
    }
    else
    {
        echo "<script>alert('Invalid Admin Login')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>

    body{
        font-family: Arial, sans-serif;

        background-image: url('train.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        margin:0;
    }

    .container{
        background: rgba(0,0,0,0.6);
        padding:40px;
        border-radius:15px;
        text-align:center;
        width:400px;
    }

    h1{
        color:white;
        margin-bottom:30px;
    }

    input{
        width:80%;
        padding:12px;
        margin:10px;
        border:none;
        border-radius:8px;
        font-size:16px;
    }

    input[type="submit"]{
        background:#39d5e7;
        color:white;
        cursor:pointer;
        font-weight:bold;
    }

    input[type="submit"]:hover{
        background:#1ba6b5;
    }

    </style>

</head>

<body>

<div class="container">

<h1>Admin Login</h1>

<form method="POST">

<input type="text"
name="username"
placeholder="Enter Admin Username"
required>

<br>

<input type="password"
name="password"
placeholder="Enter Admin Password"
required>

<br>

<input type="submit"
name="login"
value="Admin Login">

</form>

</div>

</body>
</html>