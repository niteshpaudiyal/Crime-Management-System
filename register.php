<?php

include 'db/connection.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(name,email,password,role)
            VALUES('$name','$email','$password','user')";

    mysqli_query($conn,$sql);

    echo "Registered Successfully";
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Register</title>

<style>

body{
    background:#0f172a;
    color:white;
    font-family:Arial;
    text-align:center;
    margin-top:100px;
}

input{
    width:300px;
    padding:10px;
    margin:10px;
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

<h1>User Registration</h1>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required>
<br>

<input type="email" name="email" placeholder="Enter Email" required>
<br>

<input type="password" name="password" placeholder="Enter Password" required>
<br>

<button name="register">Register</button>

</form>

</body>

</html>