<!DOCTYPE html>
<html>
<head>

<title>Railway Reservation System</title>

<link rel="stylesheet" href="style.css">

<style>

body{
    font-family: Arial, sans-serif;

    background-image:url('train.webp');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;

    height:100vh;
    margin:0;
}

.container{
    background:rgba(0,0,0,0.5);

    padding:50px;

    border-radius:20px;

    text-align:center;

    width:600px;
}

h1{
    color:white;

    font-size:50px;

    margin-bottom:40px;
}

button{
    width:260px;

    padding:15px;

    font-size:20px;

    background:#39d5e7;

    color:white;

    border:none;

    border-radius:10px;

    cursor:pointer;
}

button:hover{
    background:#1ba6b5;
}

</style>

</head>

<body>

<div class="container">

<h1>Railway Reservation System</h1>

<a href="login.php">
<button>User login</button>
</a>

<br><br>

<a href="register.php">
<button>New User Register</button>
</a>

<br><br>

<a href="admin_login.php">
<button>Admin Login</button>
</a>

</div>

</body>
</html>