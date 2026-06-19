<?php

session_start();

include 'db/connection.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user 
            WHERE email='$email' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['user'] = $email;

        header("Location: dashboard.php");

    } else {

        echo "Invalid Email or Password";

    }
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<style>

body{
    font-family: Arial;
    background:#f2f2f2;
    text-align:center;
    margin-top:100px;
}

form{
    background:white;
    padding:30px;
    width:300px;
    margin:auto;
    border-radius:10px;
}

input{
    padding:10px;
    margin:10px;
    width:90%;
}

button{
    padding:10px 20px;
    background:#2563eb;
    color:white;
    border:none;
    cursor:pointer;
}

</style>

</head>

<body>

<form method="POST">

<h2>User Login</h2>

<input type="email" name="email" placeholder="Enter Email" required>
<br>

<input type="password" name="password" placeholder="Enter Password" required>
<br>

<button name="login">Login</button>

</form>

</body>
</html>