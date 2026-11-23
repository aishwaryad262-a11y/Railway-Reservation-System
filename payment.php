<!DOCTYPE html>
<html>
<head>
    <title>Payment Gateway</title>

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
        background:rgba(0,0,0,0.6);
        padding:40px;
        border-radius:15px;
        text-align:center;
        width:400px;
    }

    h1{
        color:white;
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

    </style>

</head>

<body>

<div class="container">

<h1>Payment Gateway</h1>

<form action="success.php" method="POST">

<input type="text"
placeholder="Card Holder Name"
required>

<br>

<input type="number"
 name="card_number" 
placeholder="Card Number" 
min="1000000000000000" 
max="9999999999999999" required>

<br>

<input type="number" 
name="cvv" placeholder="CVV"
min="100" max="999" required>

<br>

<input type="month" 
name="expiry_date" min="<?php 
echo date('Y-m'); ?>" required>

<br>

<input type="submit"
value="Pay Now">

</form>

</div>
<script>

document.querySelector('input[name="card_number"]').addEventListener('input', function () {
    this.value = this.value.replace(/[^0-9]/g, '');
});

document.querySelector('input[name="cvv"]').addEventListener('input', function () {
    this.value = this.value.replace(/[^0-9]/g, '');
});

</script>
</body>
</html>